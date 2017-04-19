<?PHP
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
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
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
class SuiteFeed extends Basic
{
    var $new_schema = true;
    var $module_dir = 'SuiteFeed';
    var $object_name = 'SuiteFeed';
    var $table_name = 'suitefeed';
    var $importable = false;

    var $id;
    var $name;
    var $date_entered;
    var $date_modified;
    var $modified_user_id;
    var $modified_by_name;
    var $created_by;
    var $created_by_name;
    var $description;
    var $deleted;
    var $created_by_link;
    var $modified_user_link;
    var $assigned_user_id;
    var $assigned_user_name;
    var $assigned_user_link;

    function __construct()
    {
        parent::__construct();
    }

    static function activateModuleFeed($module, $updateDB = true)
    {
        if ($module != 'UserFeed') {
            // UserFeed is a fake module, used for the user postings to the feed
            // Don't try to load up any classes for it
            $fileList = SuiteFeed::getModuleFeedFiles($module);

            foreach ($fileList as $fileName) {
                $feedClass = substr(basename($fileName), 0, -4);

                require_once($fileName);
                $tmpClass = new $feedClass();
                $tmpClass->installHook($fileName, $feedClass);
            }
        }
        if ($updateDB == true) {

            $admin = new Administration();
            $admin->saveSetting('suitefeed', 'module_' . $admin->db->quote($module), '1');
        }
    }

    static function disableModuleFeed($module, $updateDB = true)
    {
        if ($module != 'UserFeed') {
            // UserFeed is a fake module, used for the user postings to the feed
            // Don't try to load up any classes for it
            $fileList = SuiteFeed::getModuleFeedFiles($module);

            foreach ($fileList as $fileName) {
                $feedClass = substr(basename($fileName), 0, -4);

                require_once($fileName);
                $tmpClass = new $feedClass();
                $tmpClass->removeHook($fileName, $feedClass);
            }
        }

        if ($updateDB == true) {

            $admin = new Administration();
            $admin->saveSetting('suitefeed', 'module_' . $admin->db->quote($module), '0');
        }
    }

    static function flushBackendCache()
    {
        // This function will flush the cache files used for the module list and the link type lists
        sugar_cache_clear('SuiteFeedModules');
        if (file_exists($cachefile = sugar_cached('modules/SuiteFeed/moduleCache.php'))) {
            unlink($cachefile);
        }

        sugar_cache_clear('SuiteFeedLinkType');
        if (file_exists($cachefile = sugar_cached('modules/SuiteFeed/linkTypeCache.php'))) {
            unlink($cachefile);
        }
    }

    static function getModuleFeedFiles($module)
    {
        $baseDirList = array('modules/' . $module . '/SuiteFeeds/', 'custom/modules/' . $module . '/SuiteFeeds/');

        // We store the files in a list sorted by the filename so you can override a default feed by
        // putting your replacement feed in the custom directory with the same filename
        $fileList = array();

        foreach ($baseDirList as $baseDir) {
            if (!file_exists($baseDir)) {
                continue;
            }
            $d = dir($baseDir);
            while ($file = $d->read()) {
                if ($file{0} == '.') {
                    continue;
                }
                if (substr($file, -4) == '.php') {
                    // We found one
                    $fileList[$file] = $baseDir . $file;
                }
            }
        }

        return ($fileList);
    }

    static function getActiveFeedModules()
    {
        // Stored in a cache somewhere
        $feedModules = sugar_cache_retrieve('SuiteFeedModules');
        if ($feedModules != null) {
            return ($feedModules);
        }

        // Already stored in a file
        if (file_exists($cachefile = sugar_cached('modules/SuiteFeed/moduleCache.php'))) {
            require_once($cachefile);
            sugar_cache_put('SuiteFeedModules', $feedModules);

            return $feedModules;
        }

        // Gotta go looking for it

        $admin = new Administration();
        $admin->retrieveSettings();

        $feedModules = array();
        if (isset($admin->settings['suitefeed_enabled']) && $admin->settings['suitefeed_enabled'] == '1') {
            // Only enable modules if the feed system is enabled
            foreach ($admin->settings as $key => $value) {
                if (strncmp($key, 'suitefeed_module_', 17) === 0) {
                    // It's a module setting
                    if ($value == '1') {
                        $moduleName = substr($key, 17);
                        $feedModules[$moduleName] = $moduleName;
                    }
                }
            }
        }

        sugar_cache_put('SuiteFeedModules', $feedModules);
        if (!file_exists($cachedir = sugar_cached('modules/SuiteFeed'))) {
            mkdir_recursive($cachedir);
        }
        $fd = fopen("$cachedir/moduleCache.php", 'w');
        fwrite($fd, '<' . "?php\n\n" . '$feedModules = ' . var_export($feedModules, true) . ';');
        fclose($fd);

        return $feedModules;
    }

    static function getAllFeedModules()
    {
        // Uncached, only used from the admin panel and during installation currently
        $feedModules = array('UserFeed' => 'UserFeed');

        $baseDirList = array('modules/', 'custom/modules/');
        foreach ($baseDirList as $baseDir) {
            if (!file_exists($baseDir)) {
                continue;
            }
            $d = dir($baseDir);
            while ($module = $d->read()) {
                if (file_exists($baseDir . $module . '/SuiteFeeds/')) {
                    $dFeed = dir($baseDir . $module . '/SuiteFeeds/');
                    while ($file = $dFeed->read()) {
                        if ($file{0} == '.') {
                            continue;
                        }
                        if (substr($file, -4) == '.php') {
                            // We found one
                            $feedModules[$module] = $module;
                        }
                    }
                }
            }
        }

        return ($feedModules);
    }

    /**
     * pushFeed2
     * This method is a wrapper to pushFeed
     *
     * @param $text String value of the feed's description
     * @param $bean The SugarBean that is triggering the feed
     * @param $link_type boolean value indicating whether or not feed is a link type
     * @param $link_url String value of the URL (for link types only)
     * @param $publicPost bool value to set if the post should be public or not
     */
    static function pushFeed2($text, $bean, $link_type = false, $link_url = false, $publicPost = false)
    {
        self::pushFeed(
            $text,
            $bean->module_dir,
            $bean->id,
            $bean->assigned_user_id,
            $link_type,
            $link_url,
            $publicPost
        );
    }

    static function pushFeed(
        $text,
        $module,
        $id,
        $record_assigned_user_id = false,
        $link_type = false,
        $link_url = false,
        $sec_group_id = false,
        $publicPost = false
    ) {
        $feed = new SuiteFeed();
        if ((empty($text) && empty($link_url)) || !$feed->ACLAccess('save', true)) {
            $GLOBALS['log']->error('Unable to save SuiteFeed record (missing data or no ACL access)');

            return;
        }

        if (!empty($link_url)) {
            $linkClass = SuiteFeed::getLinkClass($link_type);
            if ($linkClass !== false) {
                $linkClass->handleInput($feed, $link_type, $link_url);
            }
        }
        $text = strip_tags(from_html($text));
        //$text = '<b>{this.CREATED_BY}</b> ' . $text;
        $feed->name = substr($text, 0, 255);
        if (strlen($text) > 255) {
            $feed->description = substr($text, 255, 510);
        }

        if ($record_assigned_user_id === false) {
            $feed->assigned_user_id = $GLOBALS['current_user']->id;
        } else {
            $feed->assigned_user_id = $record_assigned_user_id;
        }
        $feed->related_id = $id;
        $feed->related_module = $module;
        $feed->public = $publicPost;
        $feed->save();
        $rel = "suitefeed_securitygroups";
        if($feed->load_relationship($rel)){
            $groups = explode(",", $sec_group_id);
            foreach($groups as $group){
                $feed->$rel->add($group);
            }
        }
    }

    static function getLinkTypes()
    {
        static $linkTypeList = null;

        // Fastest, already stored in the static variable
        if ($linkTypeList != null) {
            return $linkTypeList;
        }

        // Second fastest, stored in a cache somewhere
        $linkTypeList = sugar_cache_retrieve('SuiteFeedLinkType');
        if ($linkTypeList != null) {
            return ($linkTypeList);
        }

        // Third fastest, already stored in a file
        if (file_exists($cachedfile = sugar_cached('modules/SuiteFeed/linkTypeCache.php'))) {
            require_once($cachedfile);
            sugar_cache_put('SuiteFeedLinkType', $linkTypeList);

            return $linkTypeList;
        }

        // Slow, have to actually collect the data
        $baseDirs = array('custom/modules/SuiteFeed/linkHandlers/', 'modules/SuiteFeed/linkHandlers');

        $linkTypeList = array();

        foreach ($baseDirs as $dirName) {
            if (!file_exists($dirName)) {
                continue;
            }
            $d = dir($dirName);
            while ($file = $d->read()) {
                if ($file{0} == '.') {
                    continue;
                }
                if (substr($file, -4) == '.php') {
                    // We found one
                    $typeName = substr($file, 0, -4);
                    $linkTypeList[$typeName] = $typeName;
                }
            }
        }

        sugar_cache_put('SuiteFeedLinkType', $linkTypeList);
        if (!file_exists($cachedir = sugar_cached('modules/SuiteFeed'))) {
            mkdir_recursive($cachedir);
        }
        $fd = fopen("$cachedir/linkTypeCache.php", 'w');
        fwrite($fd, '<' . "?php\n\n" . '$linkTypeList = ' . var_export($linkTypeList, true) . ';');
        fclose($fd);

        return $linkTypeList;
    }

    static function getLinkClass($linkName)
    {
        $linkTypeList = SuiteFeed::getLinkTypes();

        // Have to make sure the linkName is on the list, so they can't pass in linkName's like ../../config.php ... not that they could get anywhere if they did
        if (!isset($linkTypeList[$linkName])) {
            // No class by this name...
            return false;
        }

        if (file_exists('custom/modules/SuiteFeed/linkHandlers/' . $linkName . '.php')) {
            require_once('custom/modules/SuiteFeed/linkHandlers/' . $linkName . '.php');
        } else {
            require_once('modules/SuiteFeed/linkHandlers/' . $linkName . '.php');
        }

        $linkClassName = 'FeedLinkHandler' . $linkName;

        $linkClass = new $linkClassName();

        return ($linkClass);
    }

    function stripData($data){

        return $data;
    }
    function get_list_view_data()
    {
        global $current_user;
        require_once("modules/SecurityGroups/SecurityGroup.php");

        $data = parent::get_list_view_data();
        $delete = '';

        if($this->public != "1" && (isset($data['CREATED_BY']) && $data['CREATED_BY'] !=
                                                                  $GLOBALS['current_user']->id) ){
            $data = false; //'';
            return $data;
        }
        $rel = "suitefeed_securitygroups";
        if($this->load_relationship($rel) && !is_admin($current_user)){
            $secGroups = $this->$rel->getBeans();
            $usersGroups = SecurityGroup::getUserSecurityGroups($current_user->id);
            $common = array_intersect_key($usersGroups, $secGroups);
            if( (count($common) == 0 && count($secGroups) != 0)){
                $data = '';
                return $data;
            }
        }
        /* BEGIN - SECURITY GROUPS */
        /**
         * if (ACLController::moduleSupportsACL($data['RELATED_MODULE']) && !ACLController::checkAccess($data['RELATED_MODULE'], 'view', $data['CREATED_BY'] == $GLOBALS['current_user']->id) && !ACLController::checkAccess($data['RELATED_MODULE'], 'list', $data['CREATED_BY'] == $GLOBALS['current_user']->id)){
         */
        if (ACLController::moduleSupportsACL($data['RELATED_MODULE'])) {
            $in_group = 'not_set';
            $in_group = SecurityGroup::groupHasAccess($data['RELATED_MODULE'], $data['RELATED_ID'], 'list');
            if (!ACLController::checkAccess(
                    $data['RELATED_MODULE'],
                    'view',
                    $data['CREATED_BY'] == $GLOBALS['current_user']->id,
                    'module',
                    $in_group
                ) && !ACLController::checkAccess(
                    $data['RELATED_MODULE'],
                    'list',
                    $data['CREATED_BY'] == $GLOBALS['current_user']->id,
                    'module',
                    $in_group
                )

            ) {
                $data['NAME'] = '';

                return $data;
            }
        }
        if (is_admin($GLOBALS['current_user']) ||
            (isset($data['CREATED_BY']) && $data['CREATED_BY'] == $GLOBALS['current_user']->id)
        ) {
            $delete =
                ' - <a id="sugarFeedDeleteLink' .
                $data['ID'] .
                '" href="#" onclick=\'SuiteFeed.deleteFeed("' .
                $data['ID'] .
                '", "{this.id}"); return false;\'>' .
                $GLOBALS['app_strings']['LBL_DELETE_BUTTON_LABEL'] .
                '</a>';
        }
        if (is_admin($GLOBALS['current_user']) ||
            (isset($data['CREATED_BY']) && $data['CREATED_BY'] == $GLOBALS['current_user']->id)
        ) {
            $edit =
                '<a id="sugarFeedInLineLink' .
                $data['ID'] .
                '" href="#" onclick=\'SuiteFeed.editFeed("' .
                $data['ID'] .
                '" ); return false;\'>' .
                $GLOBALS['app_strings']['LBL_EDIT_BUTTON_LABEL'] .
                '</a>  - ';
        }
        $rel = "suitefeed_users";
        $this->load_relationship($rel);
        $liked = $this->$rel->getBeans();
        if ( !array_key_exists($GLOBALS['current_user']->id, $liked)
        ) {
                $like =
                    ' - <a id="sugarFeedDeleteLink' .
                    $data['ID'] .
                    '" href="#" onclick=\'SuiteFeed.userLikeFeed("' .
                    $data['ID'] .
                    '", "{this.id}"); return false;\'>' .
                    $GLOBALS['app_strings']['LBL_LIKE_BUTTON_LABEL'] .
                    '</a>';
        }else{
                $like =
                    ' - <a id="sugarFeedDeleteLink' .
                    $data['ID'] .
                    '" href="#" onclick=\'SuiteFeed.userUnlikeFeed("' .
                    $data['ID'] .
                    '", "{this.id}"); return false;\'>' .
                    $GLOBALS['app_strings']['LBL_UNLIKE_BUTTON_LABEL'] .
                    '</a>';
        }


        /* END - SECURITY GROUPS */
        $data['NAME'] .= $data['DESCRIPTION'];
        $inlineEdit = $data['NAME'];
        $inlineEdit = $this->stripData($inlineEdit);
        $data['NAME'] = '<div style="padding:3px"><b>{this.CREATED_BY}</b> <span id="inLineDetail' . $data['ID'] . '">' .
                        html_entity_decode
            ($data['NAME']) . '</span>';

        $data['NAME'] .= '<input type="text" style="display:none;width:50%;" id="inLineEdit' .
                         $data['ID'] .
                         '" value="' .
                         html_entity_decode($inlineEdit) .
                         '" />
            <input type="submit" value="Post" class="button" style="display:none;vertical-align:top" 
            id="inLineEditPost' . $data['ID'] .'"
            onclick="SuiteFeed.editFeed(\'' . $data['ID'] . '\', 
            $(\'#inLineEdit' . $data['ID'] . '\').val(), \'{this.id}\'); 
            return false;">';
        if (!empty($data['LINK_URL'])) {
            $linkClass = SuiteFeed::getLinkClass($data['LINK_TYPE']);
            if ($linkClass !== false) {
                $data['NAME'] .= $linkClass->getDisplay($data);
            }
        }
        $data['NAME'] .= '<div class="byLineBox"><span class="byLineLeft">';

        $time = $this->getTimeWithSeconds($this->id);
        $data['NAME'] .= $this->getTimeLapse($time) .
                         '&nbsp;</span><div class="byLineRight">' .
                         $edit .
                         '<a id="sugarFeedReplyLink' .
                         $data['ID'] .
                         '" href="#" onclick=\'SuiteFeed.buildReplyForm("' .
                         $data['ID'] .
                         '", "{this.id}", this); return false;\'>' .
                         $GLOBALS['app_strings']['LBL_EMAIL_REPLY'] .
                         '</a>' .
                         $like .
                         $delete .
                         '</div></div>';

        $data['NAME'] .= $this->fetchReplies($data);

        return $data;
    }

    /**
     *
     * getTimeWithSeconds - Return the date entered for the given ID, simple function to return the datetime with the
     * seconds included, something that the datetime field does not do out of the box.
     * @param $id
     * @return array
     */
    private function getTimeWithSeconds($id){
        global $db;
        return $db->getOne("SELECT date_entered FROM suitefeed WHERE id = '" . $id . "'");

    }


    function fetchReplies($data)
    {
        $seedBean = new SuiteFeed;

        $replies = $seedBean->get_list(
            'date_entered',
            "related_module = 'SuiteFeed' AND related_id = '" . $data['ID'] . "'"
        );

        if (count($replies['list']) < 1) {
            return '';
        }

        $replyHTML = '<div class="clear"></div><blockquote>';

        foreach ($replies['list'] as $reply) {
            // Setup the delete link
            $delete = '';
            $edit = '';
            if (is_admin($GLOBALS['current_user']) || $data['CREATED_BY'] == $GLOBALS['current_user']->id) {
                $delete =
                    ' - <a id="sugarFieldDeleteLink' .
                    $reply->id .
                    '" href="#" onclick=\'SuiteFeed.deleteFeed("' .
                    $reply->id .
                    '", "{this.id}"); return false;\'>' .
                    $GLOBALS['app_strings']['LBL_DELETE_BUTTON_LABEL'] .
                    '</a>';
            }


            $rel = "suitefeed_users";
            $reply->load_relationship($rel);
            $liked = $reply->$rel->getBeans();
            if ( !array_key_exists($GLOBALS['current_user']->id, $liked)
            ) {
                $like =
                    '<a id="sugarFeedDeleteLink' .
                    $reply->id .
                    '" href="#" onclick=\'SuiteFeed.userLikeFeed("' .
                    $reply->id .
                    '", "{this.id}"); return false;\'>' .
                    $GLOBALS['app_strings']['LBL_LIKE_BUTTON_LABEL'] .
                    '</a>';
            }else{
                $like =
                    ' <a id="sugarFeedDeleteLink' .
                    $reply->id .
                    '" href="#" onclick=\'SuiteFeed.userUnlikeFeed("' .
                    $reply->id .
                    '", "{this.id}"); return false;\'>' .
                    $GLOBALS['app_strings']['LBL_UNLIKE_BUTTON_LABEL'] .
                    '</a>';
            }

            if (is_admin($GLOBALS['current_user']) ||
                (isset($data['CREATED_BY']) && $data['CREATED_BY'] == $GLOBALS['current_user']->id)
            ) {
                $edit =
                    '<a id="sugarFeedInLineLink' .
                    $reply->id .
                    '" href="#" onclick=\'SuiteFeed.editFeed("' .
                    $reply->id . '"); return false;\'>' .
                    $GLOBALS['app_strings']['LBL_EDIT_BUTTON_LABEL'] .
                    '</a>  - ';
            }


            $image_url = 'include/images/default_user_feed_picture.png';
            if (isset($reply->created_by)) {
                $user = BeanFactory::getBean("Users");
                $user->retrieve($reply->created_by);
                $image_url =
                    'index.php?entryPoint=download&id=' .
                    $user->picture .
                    '&type=SugarFieldImage&isTempFile=1&isProfile=1';
            }
            $replyHTML .= '<div style="float: left; margin-right: 3px; width: 50px; height: 50px;"><!--not_in_theme!--><img src="' .
                          $image_url .
                          '" style="max-width: 50px; max-height: 50px;"></div> ';
            $text = $reply->name;
            $inLine = '<input type="text" style="display:none;width:50%;" id="inLineEdit' .
                      $reply->id .
                      '" value="' .
                      html_entity_decode($text) .
                      '" />
            <input type="submit" value="Post" class="button" style="display:none;vertical-align:top" 
            id="inLineEditPost' . $reply->id .'"
            onclick="SuiteFeed.editFeed(\'' . $reply->id . '\', 
            $(\'#inLineEdit' . $reply->id . '\').val(), \'{this.id}\'); 
            return false;">';
            $text = "<b>{this.CREATED_BY}</b> " . $text;
            $replyHTML .= str_replace(
                              "{this.CREATED_BY}",
                              get_assigned_user_name($reply->created_by),
                              html_entity_decode($text)
                          ) . $inLine . '<br>';
            $time = $this->getTimeWithSeconds($this->id);
            $replyHTML .= '<div class="byLineBox"><span class="byLineLeft">' .
                          $this->getTimeLapse($time) .
                          '&nbsp;</span><div class="byLineRight">  &nbsp;' .
                          $edit .
                          $like .
                          $delete .
                          '</div></div><div class="clear"></div>';
        }

        $replyHTML .= '</blockquote>';

        return $replyHTML;

    }

    static function getTimeLapse($startDate)
    {
        //setup timedate with correct times.
        $startDateObj = new DateTime( $startDate );
        $timeNow = new DateTime(  );
        //get difference between dates
        $interval = $startDateObj->diff($timeNow);

        //get the values into the right vars for the following conditions.
        $minutes = $interval->format('%i');
        $seconds = $interval->format('%s');
        $hours = $interval->format('%h');
        $days = $interval->format('%d');
        $weeks = floor($days / 7);

        //round
        $seconds = $seconds % 60;
        $minutes = $minutes % 60;
        $hours = $hours % 24;
        $days = $days % 7;
        $result = '';

        if ($weeks == 1) {
            $result = translate('LBL_TIME_LAST_WEEK', 'SuiteFeed') . ' ';
            return $result;
        } else {
            if ($weeks > 1) {
                $result .= $weeks . ' ' . translate('LBL_TIME_WEEKS', 'SuiteFeed') . ' ';
                if ($days > 0) {
                    $result .= $days . ' ' . translate('LBL_TIME_DAYS', 'SuiteFeed') . ' ';
                }
            } else {
                if ($days == 1) {
                    $result = translate('LBL_TIME_YESTERDAY', 'SuiteFeed') . ' ';

                    return $result;
                } else {
                    if ($days > 1) {
                        $result .= $days . ' ' . translate('LBL_TIME_DAYS', 'SuiteFeed') . ' ';
                    } else {
                        if ($hours == 1) {
                            $result .= $hours . ' ' . translate('LBL_TIME_HOUR', 'SuiteFeed') . ' ';
                        } else {
                            $result .= $hours . ' ' . translate('LBL_TIME_HOURS', 'SuiteFeed') . ' ';
                        }
                        if ($hours < 6) {
                            if ($minutes == 1) {
                                $result .= $minutes . ' ' . translate('LBL_TIME_MINUTE', 'SuiteFeed') . ' ';
                            } else {
                                $result .= $minutes . ' ' . translate('LBL_TIME_MINUTES', 'SuiteFeed') . ' ';
                            }
                        }
                        if ($hours == 0 && $minutes == 0) {
                            if ($seconds == 1) {
                                $result = $seconds . ' ' . translate('LBL_TIME_SECOND', 'SuiteFeed');
                            } else {
                                $result = $seconds . ' ' . translate('LBL_TIME_SECONDS', 'SuiteFeed');
                            }
                        }
                    }
                }
            }
        }

        return $result . ' ' . translate('LBL_TIME_AGO', 'SuiteFeed');
    }

    /**
     * Parse a piece of text and replace with proper display tags.
     * @static
     *
     * @param  $input
     *
     * @return void
     */
    public static function parseMessage($input)
    {
        $urls = getUrls($input);
        foreach ($urls as $url) {
            $output = "<a href='$url' target='_blank'>" . $url . "</a>";
            $input = str_replace($url, $output, $input);
        }

        return $input;
    }
}
