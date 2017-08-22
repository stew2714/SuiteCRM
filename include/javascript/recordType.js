// Shorthand for $( document ).ready()
$(function() {
 // console.log( "ready!" );
  //$("#EditView_tabs").html("t")



  $.getJSON( "index.php?entryPoint=testLayout", function( data ) {
    console.log(data);
    $("#EditView_tabs").html( data )
  });

});