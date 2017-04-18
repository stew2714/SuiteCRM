/**
 * Created by ian on 11/04/17.
 */


function UpdatePreview(panel){
  var url = "index.php?module=AOR_Reports&action=getPreview";
    $.ajax({
      url: url,
      data: {id:$("input[name='record']").val(), formdata: $('#EditView').serialize()},
      context: document.body
    }).done(function(data) {
      $("#" + panel).html(data);
    });
}
