

<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=CreateAdmin&do=save">
    <span class='error' style="display:none;">{$error.main}
        {foreach from=$error item=errorMsg}
            {$errorMsg}
        {/foreach}
    </span>

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
        <tr>
            <td>
                {$BUTTONS}
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr><th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_CREATE_SETTINGS}</h4></th>
        </tr>

        <tr id="profile_update_email_template_row">
            <td  scope="row" width="200">{$MOD.LBL_SECURITYGROUP_LAYOUT}: </td>
            <td  >
                <select id='security_group_layout' name='security_group_layout' onblur="update_fields(this)">{$SECURITYGROUP_LAYOUT}</select><span id="create_result"></span>
            </td>
        </tr>
    </table>

    <div id="field_list">

    </div>
    <div style="padding-top: 2px;">
        {$BUTTONS}
    </div>
    {$JAVASCRIPT}
</form>