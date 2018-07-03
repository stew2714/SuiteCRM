// $( document ).ready(function() {
//YUI.Env.DOMReady
  // Handler for .ready() called.
SUGAR.util.doWhen("YUI.Env.DOMReady == true", function(){
  if($("#EditView [name='record']").length > 0 ){
    var record = $("#EditView [name='record']").val();
  }else{
    var record = $("[name='record']").val();
  }
  doCall(record);



  function doCall(record){
    $.ajax({
      dataType: "json",
      url: "index.php?module=Meetings&action=fetchData",
      data: {
        id : record,
      },
      success: callback,
    });
  };

 });

function removeAttachment(record){
  $.ajax({
    dataType: "json",
    url: "index.php?module=Meetings&action=removeAttachment",
    data: {
      id : record,
    },
    success: removeView,
  });
}

var callback = function(data){
  if(data.message == "success"){
    $( data.results ).each(function( index, value ) {
      var button = "";
      if( $("#EditView [name='record']").length > 0){
        button = "<a href='#' onclick='removeAttachment( \"" + value.id + "\" );return false' class='button'>Remove</a> - ";
      }
      $( "#file_create_file_list" ).append( "<li id='file_list_" + value.id + "'>" + button + "<a href='" + value.url + "'>" + value.name + "</a></li>" );
    });
  }
}

var removeView = function(data){
  if(data.message == "success"){
      $( '#file_list_' + data.id ).hide();
  }
}
;
