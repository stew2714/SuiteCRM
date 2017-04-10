{*

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
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



*}
<form name="AdminSettings" method="POST">
    <input type="hidden" name="action" value="AdminSettings">
    <input type="hidden" name="module" value="SuiteFeed">
    <input type="hidden" name="process" value="">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
        <tr>
            <td width="100%" colspan="2">
                <input type="button" id="activityStream_admin_save"
                       onclick="document.AdminSettings.process.value='true'; if(check_form('AdminSettings')) {ldelim} document.AdminSettings.submit(); {rdelim}"
                       class="button primary" title="{$app.LBL_SAVE_BUTTON_TITLE}"
                       accessKey="{$app.LBL_SAVE_BUTTON_KEY}" value="{$app.LBL_SAVE_BUTTON_LABEL}">
                <input type="button" id="activityStream_admin_cancel"
                       onclick="document.AdminSettings.process.value='false'; document.AdminSettings.submit();"
                       class="button" title="{$app.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$app.LBL_CANCEL_BUTTON_KEY}"
                       value="{$app.LBL_CANCEL_BUTTON_LABEL}">
                <input type="button" id="activityStream_admin_delete"
                       onclick="document.AdminSettings.process.value='deleteRecords'; if(confirm('{$mod.LBL_CONFIRM_DELETE_RECORDS}')) document.AdminSettings.submit();"
                       class="button" title="{$mod.LBL_FLUSH_RECORDS}" value="{$mod.LBL_FLUSH_RECORDS}">
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <td scope="row" align="right" nowrap>{$mod.LBL_ENABLE_FEED}:</td>
            <td align="left" width="25%" colspan='4'>
                <input type="hidden" id="feed_enable_hidden" name="feed_enable" value="0">
                <input type="checkbox" id="feed_enable" name="feed_enable" value="1" {$enabled_checkbox}
                       onClick="SuiteFeedDisableCheckboxes()">
            </td>
        </tr>
        <tr>
            <td scope="row" align="right" nowrap>{$mod.LBL_ENABLE_USER_FEED}:</td>
            <td align="left" width="25%">
                <input type="hidden" id="modules[module_UserFeed]" name="modules[module_UserFeed]" value="0">
                <input type="checkbox" id="modules[module_UserFeed]" name="modules[module_UserFeed]" value="1"
                       {if $user_feed_enabled==1}CHECKED{/if}>
            </td>
            <td colspan="3" width="70%">&nbsp;</td>
        </tr>
    </table>
</form>


<script type="text/javascript">
    var SuiteFeedCheckboxList = new Object();
    SuiteFeedCheckboxList['module_UserFeed'] = 'modules[module_UserFeed]';
    {foreach name=feedModuleList from=$module_list key=i item=entry}
    SuiteFeedCheckboxList['{$i}'] = 'modules[module_{$entry.module}]';
    {/foreach}
    {literal}
    addToValidate('AdminSettings', 'tracker_prune_interval', 'int', true, "{$mod.LBL_TRACKER_PRUNE_RANGE}");
    addToValidateRange('AdminSettings', 'tracker_prune_interval', 'range', true, '{$mod.LBL_TRACKER_PRUNE_RANGE}', 1, 180);
    function SuiteFeedDisableCheckboxes(is_init) {
        var setDisabled = false;

        if (document.getElementsByName('feed_enable')[1].checked == true) {
            setDisabled = false;
            if (is_init != true) {
                document.getElementsByName('modules[module_UserFeed]')[1].checked = true;
            }
        } else {
            setDisabled = true;
        }

        var currElem = null;
        for (var i in SuiteFeedCheckboxList) {
            currElem = document.getElementsByName(SuiteFeedCheckboxList[i])[1];
            if (typeof(currElem) != 'object') {
                continue;
            }
            if (currElem.type == 'checkbox') {
                currElem.disabled = setDisabled;
                currElem.readonly = setDisabled;
            }
        }
    }
    SuiteFeedDisableCheckboxes(true);
    {/literal}
</script>
