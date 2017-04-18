<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

require_once('include/Dashlets/DashletGeneric.php');
require_once('include/externalAPI/ExternalAPIFactory.php');
require_once('custom/include/ListView/ListViewData.php');

class SuiteFeedDashlet extends DashletGeneric
{
    var $displayRows = 15;

    var $categories;

    var $userfeed_created;

    var $selectedCategories = array();

    function __construct($id, $def = null)
    {
        global $app_list_strings;
        $dashletData = array();
        require_once('modules/SuiteFeed/metadata/dashletviewdefs.php');
        parent::__construct($id, $def);
        $this->myItemsOnly = false;
        $this->isConfigurable = true;
        $this->hasScript = true;
        $pattern = array();
        $pattern[] = "/-/";
        $pattern[] = "/[0-9]/";
        $replacements = array();
        $replacements[] = '';
        $replacements[] = '';
        $this->idjs = preg_replace($pattern, $replacements, $this->id);
        // Add in some default categories.
        $this->categories['ALL'] = translate('LBL_ALL', 'SuiteFeed');
        // Need to get the rest of the active SuiteFeed modules
        $module_list = SuiteFeed::getActiveFeedModules();

        // Translate the category names
        if (!is_array($module_list)) {
            $module_list = array();
        }
        foreach ($module_list as $module) {
            if ($module == 'UserFeed') {
                // Fake module, need to translate specially
                $this->categories[$module] = translate('LBL_USER_FEED', 'SuiteFeed');
            } else {
                $this->categories[$module] = $app_list_strings['moduleList'][$module];
            }
        }

        // Need to add the external api's here
        $this->externalAPIList = ExternalAPIFactory::getModuleDropDown('SuiteFeed', true);
        if (!is_array($this->externalAPIList)) {
            $this->externalAPIList = array();
        }
        foreach ($this->externalAPIList as $apiObj => $apiName) {
            $this->categories[$apiObj] = $apiName;
        }

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'SuiteFeed');
        }
        if (!empty($def['rows'])) {
            $this->displayRows = $def['rows'];
        }
        if (!empty($def['categories'])) {
            $this->selectedCategories = $def['categories'];
        }
        if (!empty($def['userfeed_created'])) {
            $this->userfeed_created = $def['userfeed_created'];
        }
        $this->searchFields = $dashletData['SuiteFeedDashlet']['searchFields'];
        $this->columns = $dashletData['SuiteFeedDashlet']['columns'];

        $catCount = count($this->categories);
        ACLController::filterModuleList($this->categories, false);
        if (count($this->categories) < $catCount) {
            if (!empty($this->selectedCategories)) {
                ACLController::filterModuleList($this->selectedCategories, true);
            } else {
                $this->selectedCategories = array_keys($this->categories);
                unset($this->selectedCategories[0]);
            }
        }
        $this->seedBean = new SuiteFeed();

        //override the custom list view to remove the display lines from the SuiteFeed

        $this->lvs->lvd = new CustomListViewData();
    }

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8,
     *     please update your code, use __construct instead
     */
    function SuiteFeedDashlet($id, $def = null)
    {
        $deprecatedMessage =
            'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
        if (isset($GLOBALS['log'])) {
            $GLOBALS['log']->deprecated($deprecatedMessage);
        } else {
            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
        }
        self::__construct($id, $def);
    }

    function process($lvsParams = array())
    {
        global $current_user;

        $currentSearchFields = array();
        $configureView = true; // configure view or regular view
        $query = false;
        $whereArray = array();
        $lvsParams['massupdate'] = false;

        // apply filters
        if (isset($this->filters) || $this->myItemsOnly) {
            $whereArray = $this->buildWhere();
        }

        $this->lvs->export = false;
        $this->lvs->multiSelect = false;
        $this->lvs->quickViewLinks = false;
        // columns
        foreach ($this->columns as $name => $val) {
            if (!empty($val['default']) && $val['default']) {
                $displayColumns[strtoupper($name)] = $val;
                $displayColumns[strtoupper($name)]['label'] = trim($displayColumns[strtoupper($name)]['label'], ':');
            }
        }

        $this->lvs->displayColumns = $displayColumns;

        $this->lvs->lvd->setVariableName($this->seedBean->object_name, array());

        $lvsParams['overrideOrder'] = true;
        $lvsParams['orderBy'] = 'date_entered';
        $lvsParams['sortOrder'] = 'DESC';
        $lvsParams['custom_from'] = '';

        // Get the real module list
        if (empty($this->selectedCategories)) {
            $mod_list = $this->categories;
        } else {
            $mod_list =
                array_flip(
                    $this->selectedCategories
                );//27949, here the key of $this->selectedCategories is not module name, the value is module name, so array_flip it.
        }

        $external_modules = array();
        $admin_modules = array();
        $owner_modules = array();
        $regular_modules = array();
        foreach ($mod_list as $module => $ignore) {
            // Handle the UserFeed differently
            if ($module == 'UserFeed') {
                $regular_modules[] = 'UserFeed';
                continue;
            }
            if ($module == 'Facebook') {
                $regular_modules[] = "Facebook";
                continue;
            }
            if ($module == 'Twitter') {
                $regular_modules[] = 'Twitter';
                continue;
            }

            if (in_array($module, $this->externalAPIList)) {
                $external_modules[] = $module;
            }
            if (ACLAction::getUserAccessLevel($current_user->id, $module, 'view') <= ACL_ALLOW_NONE) {
                // Not enough access to view any records, don't add it to any lists
                continue;
            }
            if (ACLAction::getUserAccessLevel($current_user->id, $module, 'view') == ACL_ALLOW_OWNER) {
                $owner_modules[] = $module;
            } else {
                $regular_modules[] = $module;
            }
        }
        //add custom modules here that will appear.

        if (!empty($this->displayTpl)) {
            //MFH BUG #14296
            $where = '';
            if (!empty($whereArray)) {
                $where = '(' . implode(') AND (', $whereArray) . ')';

            }

            $additional_where = '';

            $module_limiter = " suitefeed.related_module in ('" . implode("','", $regular_modules) . "')";

            if (is_admin($GLOBALS['current_user'])) {
                $all_modules = array_merge($regular_modules, $owner_modules, $admin_modules);
                $module_limiter = " suitefeed.related_module in ('" . implode("','", $all_modules) . "')";
            } else {
                if (count($owner_modules) > 0) {
                    $module_limiter =
                        " ((suitefeed.related_module IN ('" . implode("','", $regular_modules) . "') " . ") ";
                    if (count($owner_modules) > 0) {
                        $module_limiter .= "OR (suitefeed.related_module IN('" . implode(
                                "','",
                                $owner_modules
                            ) . "') AND suitefeed.assigned_user_id = '" . $current_user->id . "' " . ") ";
                    }
                    $module_limiter .= ")";
                }
            }
            if (!empty($where)) {
                $where .= ' AND ';
            }

            $where .= $module_limiter;

            $this->lvs->setup(
                $this->seedBean,
                $this->displayTpl,
                $where,
                $lvsParams,
                0,
                $this->displayRows,
                array(
                    'name',
                    'description',
                    'date_entered',
                    'created_by',
                    /* BEGIN - SECURITY GROUPS */
                    //related_module now included but keep this here just in case
                    'related_module',
                    'related_id',
                    'public',
                    /* END - SECURITY GROUPS */

                    'link_url',
                    'link_type'
                )
            );

            foreach ($this->lvs->data['data'] as $row => $data) {

                $this->lvs->data['data'][$row]['NAME'] = str_replace(
                    "{this.CREATED_BY}",
                    get_assigned_user_name($this->lvs->data['data'][$row]['CREATED_BY']),
                    $data['NAME']
                );

                //Translate the SuiteFeeds labels if necessary.
                preg_match('/\{([^\^ }]+)\.([^\}]+)\}/', $this->lvs->data['data'][$row]['NAME'], $modStringMatches);
                if (count($modStringMatches) == 3 &&
                    $modStringMatches[1] == 'SuiteFeed' &&
                    !empty($data['RELATED_MODULE'])
                ) {
                    $modKey = $modStringMatches[2];
                    $modString = translate($modKey, $modStringMatches[1]);
                    if (strpos(
                            $modString,
                            '{0}'
                        ) === false ||
                        !isset($GLOBALS['app_list_strings']['moduleListSingular'][$data['RELATED_MODULE']])
                    ) {
                        continue;
                    }

                    $modStringSingular = $GLOBALS['app_list_strings']['moduleListSingular'][$data['RELATED_MODULE']];
                    $modString = string_format($modString, array($modStringSingular));
                    $this->lvs->data['data'][$row]['NAME'] = preg_replace(
                        '/' . $modStringMatches[0] . '/',
                        strtolower($modString),
                        $this->lvs->data['data'][$row]['NAME']
                    );
                }
                //if social then unless the user is the assigned user it wont show. IJD1986
                if (($data['RELATED_MODULE'] == "facebook" || $data['RELATED_MODULE'] == "twitter") &&
                    $data['ASSIGNED_USER_ID'] != $current_user->id
                ) {
                    unset($this->lvs->data['data'][$row]);
                }
            }

            // assign a baseURL w/ the action set as DisplayDashlet
            foreach ($this->lvs->data['pageData']['urls'] as $type => $url) {
                // awu Replacing action=DisplayDashlet with action=DynamicAction&DynamicAction=DisplayDashlet
                $this->lvs->data['pageData']['urls'][$type] =
                    $url . '&action=DynamicAction&DynamicAction=displayDashlet';
                if ($type != 'orderBy') {
                    $this->lvs->data['pageData']['urls'][$type] =
                        $url . '&action=DynamicAction&DynamicAction=displayDashlet&sugar_body_only=1&id=' . $this->id;
                }
            }

            $this->lvs->ss->assign('dashletId', $this->id);

        }

        $td = $GLOBALS['timedate'];
        $needResort = false;
        $resortQueue = array();
        $feedErrors = array();

        $fetchRecordCount = $this->displayRows + $this->lvs->data['pageData']['offsets']['current'];

        foreach ($external_modules as $apiName) {
            $api = ExternalAPIFactory::loadAPI($apiName);
            if ($api !== false) {
                // FIXME: Actually calculate the oldest sugar feed we can see, once we get an API that supports this sort of filter.
                $reply = $api->getLatestUpdates(0, $fetchRecordCount);
                if ($reply['success'] && count($reply['messages']) > 0) {
                    array_splice($resortQueue, count($resortQueue), 0, $reply['messages']);
                } else {
                    if (!$reply['success']) {
                        $feedErrors[] = $reply['errorMessage'];
                    }
                }
            }
        }

        if (count($feedErrors) > 0) {
            $this->lvs->ss->assign('feedErrors', $feedErrors);
        }

        // If we need to resort, get to work!
        foreach ($this->lvs->data['data'] as $normalMessage) {
            list($user_date, $user_time) = explode(' ', $normalMessage['DATE_ENTERED']);
            list($db_date, $db_time) = $td->to_db_date_time($user_date, $user_time);

            $unix_timestamp = strtotime($db_date . ' ' . $db_time);

            $normalMessage['sort_key'] = $unix_timestamp;
            $normalMessage['NAME'] = '</b>' . $normalMessage['NAME'];

            $resortQueue[] = $normalMessage;
        }

        usort($resortQueue, create_function('$a,$b', 'return $a["sort_key"]<$b["sort_key"];'));

        // Trim it down to the necessary number of records
        $numRecords = count($resortQueue);
        $numRecords = $numRecords - $this->lvs->data['pageData']['offsets']['current'];
        $numRecords = min($this->displayRows, $numRecords);

        $this->lvs->data['data'] = $resortQueue;
    }

    function deleteUserFeed()
    {
        if (!empty($_REQUEST['record'])) {
            $feed = new SuiteFeed();
            $feed->retrieve($_REQUEST['record']);
            if (is_admin($GLOBALS['current_user']) || $feed->created_by == $GLOBALS['current_user']->id) {
                $feed->mark_deleted($_REQUEST['record']);

            }
        }
    }

    function pushUserFeed()
    {
        if (!empty($_REQUEST['text']) || (!empty($_REQUEST['link_url']) && !empty($_REQUEST['link_type']))) {
            $text = htmlspecialchars($_REQUEST['text']);
            //allow for bold and italic user tags
            if($_REQUEST['public'] == "true"){
                $_REQUEST['public'] = 1;
            }else{
                $_REQUEST['public'] = 0;
            }
            $text = preg_replace('/&amp;lt;(\/*[bi])&amp;gt;/i', '<$1>', $text);
            SuiteFeed::pushFeed(
                $text,
                'UserFeed',
                $GLOBALS['current_user']->id,
                $GLOBALS['current_user']->id,
                $_REQUEST['link_type'],
                $_REQUEST['link_url'],
                $_REQUEST['secGroup'],
                $_REQUEST['public']
            );
        }

    }

    function userLikeFeed()
    {
        if (!empty($_REQUEST['record'])) {
            $feed = new SuiteFeed();
            $feed->retrieve($_REQUEST['record']);
            $feed->load_relationship("suitefeed_users");
            $feed->suitefeed_users->add( $GLOBALS['current_user']->id );
        }
    }
    function userEditFeedSave(){
        if (!empty($_REQUEST['record'])) {
            $feed = new SuiteFeed();
            $feed->retrieve($_REQUEST['record']);
            $feed->name = $_REQUEST['data'];
            $feed->save();
        }
    }
    function userUnlikeFeed()
    {
        if (!empty($_REQUEST['record'])) {
            $feed = new SuiteFeed();
            $feed->retrieve($_REQUEST['record']);
            if($feed->load_relationship("suitefeed_users")){
                $feed->suitefeed_users->delete( $_REQUEST['record'],$GLOBALS['current_user']->id );
            }
        }
    }

    function pushUserFeedReply()
    {
        if (!empty($_REQUEST['text']) && !empty($_REQUEST['parentFeed'])) {
            $text = htmlspecialchars($_REQUEST['text']);
            //allow for bold and italic user tags
            $text = preg_replace('/&amp;lt;(\/*[bi])&amp;gt;/i', '<$1>', $text);
            SuiteFeed::pushFeed(
                $text,
                'SuiteFeed',
                $_REQUEST['parentFeed'],
                $GLOBALS['current_user']->id,
                '',
                ''
            );
        }

    }

    function displayOptions()
    {
        global $app_strings;
        global $app_list_strings;
        $ss = new Sugar_Smarty();
        $ss->assign('titleLBL', translate('LBL_TITLE', 'SuiteFeed'));
        $ss->assign('categoriesLBL', translate('LBL_CATEGORIES', 'SuiteFeed'));
        $ss->assign('autenticationPendingLBL', translate('LBL_AUTHENTICATION_PENDING', 'SuiteFeed'));
        $ss->assign('rowsLBL', translate('LBL_ROWS', 'SuiteFeed'));
        $ss->assign('saveLBL', $app_strings['LBL_SAVE_BUTTON_LABEL']);
        $ss->assign('clearLBL', $app_strings['LBL_CLEAR_BUTTON_LABEL']);
        $ss->assign('title', $this->title);
        $ss->assign('categories', $this->categories);
        if (empty($this->selectedCategories)) {
            $this->selectedCategories['ALL'] = 'ALL';
        }
        $ss->assign('selectedCategories', $this->selectedCategories);
        $ss->assign('rows', $this->displayRows);
        $externalApis = array();
        foreach ($this->externalAPIList as $apiObj => $apiName) {
            //only show external APis that the user has not created
            if (!EAPM::getLoginInfo($apiName)) {
                $externalApis[] = $apiObj;
            }
        }
        $ss->assign('externalApiList', JSON::encode($externalApis));
        $ss->assign('authenticateLBL', translate('LBL_AUTHENTICATE', 'SuiteFeed'));
        $ss->assign('id', $this->id);
        if ($this->isAutoRefreshable()) {
            $ss->assign('isRefreshable', true);
            $ss->assign('autoRefresh', $GLOBALS['app_strings']['LBL_DASHLET_CONFIGURE_AUTOREFRESH']);
            $ss->assign('autoRefreshOptions', $this->getAutoRefreshOptions());
            $ss->assign('autoRefreshSelect', $this->autoRefresh);
        }

        return $ss->fetch(get_custom_file_if_exists('modules/SuiteFeed/Dashlets/SuiteFeedDashlet/Options.tpl'));
    }

    /**
     * creats the values
     * @return
     *
     * @param $req Object
     */
    function saveOptions($req)
    {
        global $sugar_config, $timedate, $current_user, $theme;
        $options = array();
        $options['title'] = $req['title'];
        $rows = intval($_REQUEST['rows']);
        if ($rows <= 0) {
            $rows = 15;
        }
        if ($rows > 100) {
            $rows = 100;
        }
        if (isset($req['autoRefresh'])) {
            $options['autoRefresh'] = $req['autoRefresh'];
        }
        $options['rows'] = $rows;
        $options['categories'] = $req['categories'];
        foreach ($options['categories'] as $cat) {
            if ($cat == 'ALL') {
                unset($options['categories']);
            }
        }

        return $options;
    }

    function sugarFeedDisplayScript()
    {
        // Forces the quicksearch to reload anytime the dashlet gets refreshed
        return '<script type="text/javascript">
enableQS(false);
</script>';
    }

    /**
     *
     * @return javascript including QuickSearch for SuiteFeeds
     */
    function displayScript()
    {
        require_once('include/QuickSearchDefaults.php');
        $ss = new Sugar_Smarty();
        $ss->assign('saving', translate('LBL_SAVING', 'SuiteFeed'));
        $ss->assign('saved', translate('LBL_SAVED', 'SuiteFeed'));
        $ss->assign('id', $this->id);
        $ss->assign('idjs', $this->idjs);

        $str = $ss->fetch('modules/SuiteFeed/Dashlets/SuiteFeedDashlet/SuiteFeedScript.tpl');

        return $str; // return parent::display for title and such
    }

    /**
     *
     * @return the fully rendered dashlet
     */
    function display()
    {

        $listview = parent::display();
        $GLOBALS['current_suitefeed'] = $this;
        $listview = preg_replace_callback(
            '/\{([^\^ }]+)\.([^\}]+)\}/',
            create_function(
                '$matches',
                'if($matches[1] == "this"){$var = $matches[2]; return $GLOBALS[\'current_suitefeed\']->$var;}else{return translate($matches[2], $matches[1]);}'
            ),
            $listview
        );

        //grab each token and store the module for later processing
        preg_match_all('/\[(\w+)\:/', $listview, $alt_modules);

        //now process each token to create the proper url and image tags in feed, leaving a string for the alt to be replaced in next step
        $listview = preg_replace(
            '/\[(\w+)\:([\w\-\d]*)\:([^\]]*)\]/',
            '<a href="index.php?module=$1&action=DetailView&record=$2"><img src="themes/default/images/$1.gif" border=0 REPLACE_ALT>$3</a>',
            $listview
        ); /*SKIP_IMAGE_TAG*/

        //process each module for the singular version so we can populate the alt tag on the image
        $altStrings = array();
        foreach ($alt_modules[1] as $alt) {
            //create the alt string and replace the alt token
            $altString = 'alt="' . translate(
                    'LBL_VIEW',
                    'SuiteFeed'
                ) . ' ' . $GLOBALS['app_list_strings']['moduleListSingular'][$alt] . '"';
            $listview = preg_replace('/REPLACE_ALT/', $altString, $listview, 1);
        }

        return $listview . '</div></div>';
    }

    /**
     *
     * @return the title and the user post form
     *
     * @param $text Object
     */
    function getHeader($text = '')
    {
        return parent::getHeader($text) .
               $this->getPostForm() .
               $this->getDisabledWarning() .
               $this->sugarFeedDisplayScript() .
               '<div class="sugarFeedDashlet"><div id="contentScroller' .
               $this->idjs .
               '">';
    }

    /**
     *
     * @return a warning message if the sugar feed system is not enabled currently
     */
    function getDisabledWarning()
    {
        /* Check to see if the sugar feed system is enabled */
        if (!$this->shouldDisplay()) {
            // The Sugar Feeds are disabled, populate the warning message
            return translate('LBL_DASHLET_DISABLED', 'SuiteFeed');
        } else {
            return '';
        }
    }

    /**
     *
     * @return the form for users posting custom messages to the feed stream
     */
    function getPostForm()
    {
        global $current_user;

        if ((!empty($this->selectedCategories) && !in_array('UserFeed', $this->selectedCategories))) {
            // The user feed system isn't enabled, don't let them post notes
            return '';
        }
        $user_name = ucfirst($GLOBALS['current_user']->user_name);
        $moreimg = SugarThemeRegistry::current()->getImage(
            'advanced_search',
            'onclick="toggleDisplay(\'more_' .
            $this->id .
            '\'); toggleDisplay(\'more_img_' .
            $this->id .
            '\'); toggleDisplay(\'less_img_' .
            $this->id .
            '\');"',
            null,
            null,
            '.gif',
            translate('LBL_SHOW_MORE_OPTIONS', 'SuiteFeed')
        );
        $lessimg = SugarThemeRegistry::current()->getImage(
            'basic_search',
            'onclick="toggleDisplay(\'more_' .
            $this->id .
            '\'); toggleDisplay(\'more_img_' .
            $this->id .
            '\'); toggleDisplay(\'less_img_' .
            $this->id .
            '\');"',
            null,
            null,
            '.gif',
            translate('LBL_HIDE_OPTIONS', 'SuiteFeed')
        );
        $ss = new Sugar_Smarty();
        $ss->assign('LBL_TO', translate('LBL_TO', 'SuiteFeed'));
        $ss->assign('LBL_POST', translate('LBL_POST', 'SuiteFeed'));
        $ss->assign('LBL_SELECT', translate('LBL_SELECT', 'SuiteFeed'));
        $ss->assign('LBL_IS', translate('LBL_IS', 'SuiteFeed'));
        $ss->assign('id', $this->id);
        $ss->assign('more_img', $moreimg);
        $ss->assign('less_img', $lessimg);
        $secGroups = BeanFactory::getBean("SecurityGroups");
        $groups[] = translate('LBL_ALL_USERS', 'SuiteFeed');

        $userGroups = SecurityGroup::getUserSecurityGroups($current_user->id);
        foreach($secGroups->get_full_list() as $record){
            if(is_admin($current_user) || array_key_exists($record->id, $userGroups)){
                $groups[ $record->id ] = $record->name;
            }
        }
        $ss->assign('groups', get_select_options_with_id($groups));

        if ($current_user->getPreference('use_real_names') == 'on') {
            $ss->assign('user_name', $current_user->full_name);
        } else {
            $ss->assign('user_name', $user_name);
        }
        $linkTypesIn = SuiteFeed::getLinkTypes();
        $linkTypes = array();
        foreach ($linkTypesIn as $key => $value) {
            $linkTypes[$key] = translate('LBL_LINK_TYPE_' . $value, 'SuiteFeed');
        }
        $ss->assign('link_types', $linkTypes);

        $userPostFormTplFile = 'modules/SuiteFeed/Dashlets/SuiteFeedDashlet/UserPostForm.tpl';
        $fetch = $ss->fetch(get_custom_file_if_exists($userPostFormTplFile));

        return $fetch;
    }

    //determines if we should display the SuiteFeed dashlet as an option or not
    static function shouldDisplay()
    {

        $admin = new Administration();
        $admin->retrieveSettings();

        if (!isset($admin->settings['suitefeed_enabled']) || $admin->settings['suitefeed_enabled'] != '1') {
            return false;
        } else {
            return true;
        }
    }
}
