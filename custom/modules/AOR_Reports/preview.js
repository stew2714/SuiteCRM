/**
 * Created by ian on 11/04/17.
 */


function UpdatePreview(panel){
  var url = "index.php?module=AOR_Reports&action=getPreview";
  console.log("Starting " + panel);
  console.log($('#EditView').serialize());
    $.ajax({
      url: url,
      data: {id:$("input[name='record']").val(), formdata: $('#EditView').serialize()},
      context: document.body
    }).done(function(data) {
      console.log(data);
      $("#" + panel).html(data);
    });
}
