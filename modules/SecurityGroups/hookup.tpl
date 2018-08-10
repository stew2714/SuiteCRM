
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
	<td>
		<input title="{$APP.LBL_DONE_BUTTON_LABEL}"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  {$APP.LBL_DONE_BUTTON_LABEL}  " />
	</td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
		<td  scope="row" width="200">{$MOD.LBL_HOOKUP_SELECT}: </td>
		<td>
			{html_options name='nonss_modules' id='nonss_modules' options=$nonss_modules}
		</td>
		<td width="70%">
			<div id="loading" style="display: none; text-align: center;">
				{sugar_image name="loading"}
				<br/>{$APP.LBL_PROCESSING_REQUEST}
			</div>
			<div id="completed" style="display: none; text-align: center;">
				{$APP.LBL_REQUEST_PROCESSED}
				<br/><br/>
				Please run a <a href="index.php?module=Administration&action=repair">Quick Repair & Rebuild</a> to finishing hooking up the module to Security Groups.
			</div>
			<div id="failure" style="display: none; text-align: center;">
				{$APP.LBL_AJAX_FAILURE}
				<div id="failure_message"></span>
				<br/><br/>
				Please run a <a href="index.php?module=Administration&action=repair">Quick Repair & Rebuild</a> to finishing hooking up the module to Security Groups.
			</div>
		</td>
	</tr>

</table>

<div style="padding-top: 2px;">
<input title="{$APP.LBL_DONE_BUTTON_LABEL}"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  {$APP.LBL_DONE_BUTTON_LABEL}  " />
</div>

<script type="text/javascript">
{* for ssl support set the base *}
{literal}
	YUI({base: 'include/javascript/yui3/build/'}).use('node', function (Y) {
		Y.one("#nonss_modules").on('change', function (e) {
		    var val = e.currentTarget.get('value');
		    Y.one("#loading").hide();
		    Y.one("#completed").hide();
		    Y.one("#failure").hide();
			if(val != '') {
				if(confirm('{/literal}{$MOD.LBL_HOOKUP_CONFIRM_PART1}{literal}'+val+'{/literal}{$MOD.LBL_HOOKUP_CONFIRM_PART2}{literal}')) {
					Y.one("#loading").show();

					Y.one("#nonss_modules").hide();

					var qs = 'index.php?module=SecurityGroups&action=HookupProcess&to_pdf=1&relate='+val;
					YAHOO.util.Connect.asyncRequest('GET', qs,{success: hookupSuccess, failure: hookupFailure}, null);
				} else {
					Y.one('#nonss_modules > option[value=""]').set('selected', 'selected');
				}
			}
		});

		function hookupSuccess(data)
		{

			Y.one("#nonss_modules").show();
			Y.one("#loading").hide();
			Y.one("#completed").show();
			var index = Y.one("#nonss_modules").get('selectedIndex');
			Y.one("#nonss_modules").get("options").item(index).remove();

		}

		function hookupFailure(o)
		{

			Y.one("#nonss_modules").show();
			Y.one("#loading").hide();
			Y.one("#failure").show();
			if (o.responseText != "")  {
				var statusString = "";
				var data = YAHOO.lang.JSON.parse(o.responseText);
				Y.one("#failure_message").setContent(data.message);
			}

		}
	});

</script>
{/literal}