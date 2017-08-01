
{{assign var=userCounter value=0}}
{{assign var=userCount value=$additionalusers|@count }}

<script type="text/javascript" language="javascript">
var userCount = {{$userCount}};

function addAdditionalUser()
{
	userCount += 1; //todo: set to 1 by default with no users...should be 0
	var table = document.getElementById("{{$module}}additionalusers");
	var rowCount = table.rows.length;
	var newRow = table.insertRow(rowCount);
	newRow.id = "{{$module}}additionalUserRow" + userCount;

	var newCell = document.createElement('td');
	newCell.innerHTML = '<input type="hidden" name="{{$module}}additionalUser_delete_'+userCount+'" id="{{$module}}additionalUser_delete_'+userCount+'" value="0"/>';
	newCell.innerHTML = newCell.innerHTML + '<input type="hidden" name="{{$module}}additionalUser_record_'+userCount+'" id="{{$module}}additionalUser_record_'+userCount+'" value=""/>';
	newCell.innerHTML = newCell.innerHTML + '<input type="text" name="{{$module}}additionalUser_'+userCount+'" class="sqsEnabled" tabindex="0" id="{{$module}}additionalUser_'+userCount+'" size="{{$displayParams.size}}" value="" autocomplete="off">';
	newCell.innerHTML = newCell.innerHTML + '<input type="hidden" name="{{$module}}additionalUser_hidden_'+userCount+'" id="{{$module}}additionalUser_hidden_'+userCount+'" value="">';
	
	var rowButtons = '<button type="button" name="btn_{{$module}}additionalUser_'+userCount+'" id="btn_{{$module}}additionalUser_'+userCount+'" tabindex="0" title="Select User" class="button firstChild" value="Select User" onclick=\'open_popup("Users",600,400,"",true,false,{"call_back_function":"set_return","form_name":"{{$form_name}}","field_to_name_array":{"id":"{{$module}}additionalUser_hidden_'+userCount+'","user_name":"{{$module}}additionalUser_'+userCount+'"}},"single", true);\'><img src="{{sugar_getimagepath file="id-ff-select.png"}}"></button>';
	rowButtons = rowButtons + '<button type="button" name="btn_clr_additionalUser_'+userCount+'" id="btn_clr_additionalUser_'+userCount+'" tabindex="{{$tabindex}}" title="Clear User"  class="button" onclick="SUGAR.clearRelateField(this.form,\'{{$module}}additionalUser_'+userCount+'\', \'{{$module}}additionalUser_hidden_'+userCount+'\');"  value="Clear User"><img src="{{sugar_getimagepath file="id-ff-clear.png"}}"></button>';
	rowButtons = rowButtons + '<button type="button" onclick="removeAdditionalUser(\''+userCount+'\')" id="{{$module}}additionalUser_remove_'+userCount+'" class="button lastChild" name="{{$module}}additionalUser_remove_'+userCount+'" tabindex="0" title="Remove User" value="Remove User"><img src="{{sugar_getimagepath file="id-ff-remove-nobg.png"}}"></button>';
	
	newCell.innerHTML = newCell.innerHTML + '&nbsp;<span class="id-ff multiple">'+rowButtons+'</span>';
	newRow.appendChild(newCell);
}

function removeAdditionalUser(row_id)
{
	document.getElementById('{{$module}}additionalUser_delete_'+row_id).value = '1';
	document.getElementById('{{$module}}additionalUserRow'+row_id).style.display = 'none';
}
</script>

<table style="border-spacing: 0pt;">
	<tr>
		<td valign="top" nowrap="">
			<table class="emailaddresses" id="{{$module}}additionalusers">
				<tr>
					<td nowrap="" scope="row">
						<span class="id-ff multiple">
						<button value="+" onclick="javascript:addAdditionalUser()" type="button" class="button">
							{{sugar_getimage name="id-ff-add" alt="$app_strings.LBL_ID_FF_ADD" ext=".png"}}
						</button>
						</span>
					</td>
				</tr>
				{{foreach item=additionaluser from=$additionalusers}}
				<tr id="{{$module}}additionalUserRow{{$userCounter}}">
					<td nowrap="NOWRAP">
						<input type="hidden" name="{{$module}}additionalUser_delete_{{$userCounter}}" id="{{$module}}additionalUser_delete_{{$userCounter}}" value="0"/>
						<input type="hidden" name="{{$module}}additionalUser_record_{{$userCounter}}" id="{{$module}}additionalUser_record_{{$userCounter}}" value="{{if !empty($additionaluser.id)}}{{$additionaluser.id}}{{/if}}"/>
						<input type="text" name="{{$module}}additionalUser_{{$userCounter}}" class="sqsEnabled" tabindex="0" id="{{$module}}additionalUser_{{$userCounter}}" size="{{$displayParams.size}}" value="{{if !empty($additionaluser.name)}}{{$additionaluser.name}}{{/if}}"" autocomplete="off">
						<input type="hidden" name="{{$module}}additionalUser_hidden_{{$userCounter}}" 
							id="{{$module}}additionalUser_hidden_{{$userCounter}}" 
							{{if !empty($additionaluser.user_id)}}value="{{$additionaluser.user_id}}"{{/if}}>
						<span class="id-ff multiple">
						<button type="button" name="btn_{{$module}}additionalUser_{{$userCounter}}" id="btn_{{$module}}additionalUser_{{$userCounter}}" tabindex="0" title="Select User" class="button firstChild" value="Select User"
						onclick='open_popup("Users",600,400,"",true,false,{"call_back_function":"set_return","form_name":"{{$form_name}}","field_to_name_array":{"id":"{{$module}}additionalUser_hidden_{{$userCounter}}","user_name":"{{$module}}additionalUser_{{$userCounter}}"}},"single", true);'><img src="{{sugar_getimagepath file="id-ff-select.png"}}">
						</button><button type="button" name="btn_clr_additionalUser_{{$userCounter}}" id="btn_clr_additionalUser_{{$userCounter}}" tabindex="{{$tabindex}}" title="Clear User"  class="button"
						onclick="SUGAR.clearRelateField(this.form, '{{$module}}additionalUser_{{$userCounter}}', '{{$module}}additionalUser_hidden_{{$userCounter}}');"  value="Clear User"><img src="{{sugar_getimagepath file="id-ff-clear.png"}}"></button><button type="button" 
						onclick="removeAdditionalUser('{{$userCounter}}')" id="{{$module}}additionalUser_remove_{{$userCounter}}" class="button lastChild" name="{{$module}}additionalUser_remove_{{$userCounter}}" tabindex="0" title="Remove User" value="Remove User"><img src="{{sugar_getimagepath file="id-ff-remove-nobg.png"}}">
						</span>
						<script type="text/javascript">
						SUGAR.util.doWhen(
								"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{{$form_name}}_{{$module}}additionalUser_{{$userCounter}}']) != 'undefined'",
								enableQS
						);
						</script>
					</td>
				</tr>
				{{assign var=userCounter value=$userCounter+1}}
				{{/foreach}}
			</table>
		</td>
	</tr>
</table>
