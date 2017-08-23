// Shorthand for $( document ).ready()
$(function() {
  console.log( "ready!" );
  //$("#EditView_tabs").html("t")


  $( "#recordtypeid_c" ).click(function() {

    $.ajax({
      dataType: "json",
      url: "index.php?entryPoint=testLayout",
      data: {
        post_data: $('#EditView').serialize()
      },
    })
      .success(function( data ) {
        console.log( "Data Saved: " + data );
        $("#pagecontent").html( "test" + data['0'] )
      });


  });



});