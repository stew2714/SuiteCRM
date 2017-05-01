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

$(document).ready(function() {
  $('.period-options-input').show();
  $('.period-options-input').removeAttr("disabled");

  $( "#snapshot_date_date,#snapshot_date_hours,#snapshot_date_minutes,#snapshot_date_meridiem" ).blur(function() {
    UpdatePreview('preview');
  });
  $( "#snapshot_date_trigger" ).click(function() {
    SUGAR.util.doWhen("$('#container_snapshot_date_trigger_c').css('visibility') === 'hidden' ", function(){
      UpdatePreview('preview')
    });
  });
});

