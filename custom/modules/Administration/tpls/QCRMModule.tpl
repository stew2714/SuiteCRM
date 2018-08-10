{literal}
{/literal}
<h1 id="conftitle">{$TITLE}</h1><br>
<h2 id="confwarning">{$HEADER_WARNING}</h2><br>
<input title='{$APP_STRINGS.LBL_SAVE_BUTTON_TITLE}' accessKey='M' class='button' onclick="return SaveFields(this,'{$module}','module');" type='button' name='button' value='{$APP_STRINGS.LBL_SAVE_BUTTON_TITLE}'></input>
<input title='{$APP_STRINGS.LBL_CANCEL_BUTTON_TITLE}' accessKey='X' class='button' onclick="location.href='index.php?module=Administration&action=index';" type='button' name='button' value='{$APP_STRINGS.LBL_CANCEL_BUTTON_TITLE}'></input>
	<table align="center" cellspacing="7" width="90%">
	<tr>
	<td>{$MOD.LBL_QADD_LAYOUT} ({$group_mode})</td>
	<td>
		<select id="new_profile" name="new_profile">
			{html_options options=$available_groups}
		</select>
	</td>
	<td>{$MOD.LBL_QCOPY_FROM}</td>
	<td>
		<select id="copy_from" name="copy_from">
			{html_options options=$copy_from}
		</select>
	</td>
	</tr>
	</table>
