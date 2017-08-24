// Shorthand for $( document ).ready()
$(function() {
  $( "#EditView input, #EditView select" ).blur(function() {
    fetchLayout()
  });


  function fetchLayout(){

    $.ajax({
      dataType: "json",
      url: "index.php?entryPoint=testLayout",
      data: {
        post_data: $('#EditView').serialize()
      },
    })
      .success(function( data ) {
        console.log( "Data Saved: " + data );
        if(data['found'] == true){
          $("#pagecontent").html( data['layout'] )
        }
      });

  }

});