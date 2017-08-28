{literal}
<style>
	#conf_sortableD1, #conf_sortableD2 { border-color: black;border-style: solid; border-width:1px; text-align:center ;margin:10px; width: 180px;list-style-type: none; margin: 10px; padding: 0 0 2.5em; float: left; margin-right: 10px; }
	#conf_sortableD1 li, #conf_sortableD2 li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; width: 160px; text-align:left ;}
</style>
{/literal}
<h1 id="conftitle">{$TITLE}</h1><br>
<input title='{$APP_STRINGS.LBL_SAVE_BUTTON_TITLE}' accessKey='M' class='button' onclick="return SaveFields(this,'{$module}','fields');" type='button' name='button' value='{$APP_STRINGS.LBL_SAVE_BUTTON_TITLE}'></input>
<input title='{$APP_STRINGS.LBL_CANCEL_BUTTON_TITLE}' accessKey='X' class='button' onclick="location.href='index.php?module=Administration&action=index';" type='button' name='button' value='{$APP_STRINGS.LBL_CANCEL_BUTTON_TITLE}'></input>
&nbsp;&nbsp;&nbsp;<input id="syncCheckbox" name="syncCheckbox" type="checkbox" {$SYNCCHECKED}>{$SYNCTITLE}
<div id="confmodule">
	<div style="float:left;width:200px;">
		<div id="selected_div">
			<h3></h3>
			<input type="text" id="search_field_sortable1" name="search" placeholder="{$APP_STRINGS.LBL_SEARCH}" style="margin-left:10px;width:170px">
			<ul id="conf_sortableD1" class="connectedSortable">{$AVAILABLE}
{foreach name=tabAvailable from=$tabAvailable key=tabColkey item=tabAvailableData}
					<li id= '{$tabAvailableData.field}' class='ui-state-highlight'>{$tabAvailableData.label}{if $showfields}<span class="field_label" style="font-size:smaller;"><br>({$tabAvailableData.field})</span>{/if}</li>
{/foreach}
			</ul>
		</div>
	</div>
	<div style="float:left;width:200px;">
		<div id="selected_div">
			<h3></h3>
			<input type="text" id="search_field_sortable2" name="search" placeholder="{$APP_STRINGS.LBL_SEARCH}" style="margin-left:10px;width:170px">
			<ul id="conf_sortableD2" class="connectedSortable">{$HIDDEN}
{foreach name=tabCom from=$tabHidden key=tabColkey item=tabHiddenData}
					<li id= '{$tabHiddenData.field}' class='ui-state-default'>{$tabHiddenData.label}{if $showfields}<span class="field_label" style="font-size:smaller;"><br>({$tabHiddenData.field})</span>{/if}</li>
{/foreach}
			</ul>
		</div>
	</div>
</div>
{literal}
<script>
$(function() {
	$( "#conf_sortableD1, #conf_sortableD2" ).sortable({
		connectWith: ".connectedSortable"
	}).disableSelection();
    $('#search_field_sortable1').on('keyup', function(){
        var str = $(this).val();
        var tt= $('#conf_sortableD1 li');
        $(tt).each(function(indx, element){
            var start_str = $(element).text().toLowerCase();

            if(start_str.indexOf(str.toLowerCase())!==-1){
                $(element).show();
            }
            else {
                $(element).hide();
            }
        })
    });
    $('#search_field_sortable2').on('keyup', function(){
        var str = $(this).val();
        var tt= $('#conf_sortableD2 li');
        $(tt).each(function(indx, element){
            var start_str = $(element).text().toLowerCase();

            if(start_str.indexOf(str.toLowerCase())!==-1){
                $(element).show();
            }
            else {
                $(element).hide();
            }
        })
    });
});
$(document).ready(function(){
    def = $("#syncCheckbox").prop('checked');
    def2 = $("#syncCheckbox").prop('checked');
});

$( "#syncCheckbox").change(function(){
    if($("#syncCheckbox").prop('checked')=='undefined')
		def2 = false;
    else {
        def2 =$("#syncCheckbox").prop('checked')
    }
});
</script>
{/literal}
