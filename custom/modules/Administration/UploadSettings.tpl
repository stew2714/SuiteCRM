<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=UploadSettings&do=save">

    <span class='error'>{$error.main}</span>

    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td>
                {$BUTTONS}
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr><th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_UPLOAD_SETTINGS_TITLE}</h4></th>
        <tr>
            <td scope="row" width="200">
                {$MOD.LBL_UPLOAD_SETTINGS_FILESIZE}:
            </td>
            <td>
                <input type='text' size='50' name='upload_individual_file_size' value='{$config.upload_individual_file_size}' >
                <span>{$MOD.LBL_UPLOAD_SETTINGS_IN_KB}</span>
            </td>
        </tr>
    </table>

    <div style="padding-top: 2px;">
        {$BUTTONS}
    </div>
</form>
