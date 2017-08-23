// Shorthand for $( document ).ready()
$(function() {
  console.log( "ready!" );
  //$("#EditView_tabs").html("t")


  $( "#recordtypeid_c" ).click(function() {

    $.getJSON( "index.php?entryPoint=testLayout", function( data ) {
      console.log(data);
      $("#pagecontent").html( data )
    })
  });

});