/**
 * Created by ian on 11/04/17.
 */


function UpdatePreview(panel){
  console.log($('#EditView').serialize());
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
    $('.period-options-input').show();
    $('.period-options-input').removeAttr("disabled");
  } else {
    $('.period-options-input').hide();
    $('.period-options-input').prop('disabled', true);
    $('.period-options-input').val('');
    UpdatePreview('preview');
  }
}

function periodOptionsValue(option) {
  var currentValue = option.value;
  currentValue = currentValue.replace(/[^0-9\.]/g,'');
  $('.period-options-input').val(currentValue);
  console.log(currentValue);
  UpdatePreview('preview');
}