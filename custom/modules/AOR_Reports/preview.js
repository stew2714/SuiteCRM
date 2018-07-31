/**
 * Advanced OpenReports, SugarCRM Reporting.
 * @package Advanced OpenReports for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

function UpdatePreview(panel){
  var numberOfConditions = $("#aor_conditions_body tr").length;
  var url = "index.php?module=AOR_Reports&action=getPreview";
    $.ajax({
      url: url,
      method: 'POST',
      data: {id:$("input[name='record']").val(), formdata: $('#EditView').serialize()},
      context: document.body
    }).done(function(data) {
      $("#" + panel).html(data);
    });
}

function periodOptions(option) {
  var currentValue = option.value,
    nextNFields = [
      'last_n_quarters',
      'next_n_quarters',
      'last_n_years',
      'next_n_years',
    ];

  if (nextNFields.includes(currentValue)) {
    $(option).siblings('input').show();
    $(option).siblings('input').removeAttr("disabled");
  } else {
    $(option).siblings('input').hide();
    $(option).siblings('input').prop('disabled', true);
    $(option). siblings('input').val('');
    UpdatePreview('preview');
  }
}

function periodOptionsValue(option) {
  var currentValue = option.value;
  currentValue = currentValue.replace(/[^0-9\.]/g,'');
  $('.period-options-input').val(currentValue);
  UpdatePreview('preview');
}

function showHideUserGroupSelect(bool) {
  if (bool === true) {
    $('#private_to_user_or_group').removeAttr("disabled");
    $('#private_to_user_or_group').closest('.edit-view-row-item').show();
  } else {
    $('#private_to_user_or_group').prop('disabled', true);
    $('#private_to_user_or_group').val('');
    $('#private_to_user_or_group').closest('.edit-view-row-item').hide();
    $('#private_to_user_or_group').closest('.edit-view-row-item').next().hide();
    $('#private_user_list').val('');
  }
}

function showHidePrivateUsers(value) {
  if (value === 'private_user') {
    $('#private_user_list').closest('.edit-view-row-item').show();
    $('#private_user_list').prop('disabled', false);
  } else {
    $('#private_user_list').val('');
    $('#private_user_list').closest('.edit-view-row-item').hide();
    $('#private_user_list').closest('.edit-view-row-item').next().hide();
  }
}

function showHidePrivateGroups(value) {
  if (value === 'private_group') {
    $('#private_group_list').closest('.edit-view-row-item').show();
    $('#private_group_list').prop('disabled', false);
  } else {
    $('#private_group_list').closest('.edit-view-row-item').hide();
    $('#private_group_list').val('');
  }
}

function displayFieldsOnLoad(checkbox,choice,user,group) {
    showHideUserGroupSelect(checkbox);

    if ($('#private_to_user_or_group').is(':visible') === true) {
        showHidePrivateUsers(choice);
        showHidePrivateGroups(choice);
    } else {
       // Private User or Group Handlers
        $('#private_to_user_or_group').prop('disabled', true);
        $('#private_to_user_or_group').val('');
        $('#private_to_user_or_group').closest('.edit-view-row-item').hide();

        // Private Group List Handlers
        $('#private_group_list').prop('disabled', true);
        $('#private_group_list').removeAttr("selected");
        $('#private_group_list').val('');
        $('#private_group_list').closest('.edit-view-row-item').hide();

        // Private User List Handlers
        $('#private_user_list').prop('disabled', true);
        $('#private_user_list').val('');
        $('#private_user_list').closest('.edit-view-row-item').hide();
    }

}

$(document).ready(function() {
  var checked = $('#private_report_checkbox').is(':checked');
  var private_to_user_or_group = $('#private_to_user_or_group').find(':selected').val();
  var private_user_selected = $('#private_user_list').find(':selected').val();
  var private_group_selected = $('#private_user_list').find(':selected').val();

  displayFieldsOnLoad(checked,private_to_user_or_group,private_user_selected,private_group_selected);

  $('.period-options-input').show();
  $('.period-options-input').removeAttr("disabled");

  $('#private_report_checkbox').change(function() {
    checked = $('#private_report_checkbox').is(':checked');
    showHideUserGroupSelect(checked);
  });

  private_to_user_or_group = $('#private_to_user_or_group').find(':selected').val();
  showHidePrivateUsers(private_to_user_or_group);
  showHidePrivateGroups(private_to_user_or_group);


  $('#private_to_user_or_group').change(function() {
    private_to_user_or_group = $('#private_to_user_or_group').find(':selected').val();
    showHidePrivateUsers(private_to_user_or_group);
    showHidePrivateGroups(private_to_user_or_group);
  });

  $( "#snapshot_date_date,#snapshot_date_hours,#snapshot_date_minutes,#snapshot_date_meridiem" ).blur(function() {
    UpdatePreview('preview');
  });

  $( "#snapshot_date_trigger" ).click(function() {
    SUGAR.util.doWhen("$('#container_snapshot_date_trigger_c').css('visibility') === 'hidden' ", function(){
      UpdatePreview('preview')
    });
  });
});

