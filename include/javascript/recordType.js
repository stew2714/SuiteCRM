// Shorthand for $( document ).ready()
// $(function() {

function assignFields(recordtypeform)
{
  $("#" + recordtypeform + " input, #" + recordtypeform + " select").blur(function () {
    fetchLayout(recordtypeform)
  });
}


  function fetchLayout(recordtypeform){


    console.log("test");
    $.ajax({
      dataType: "json",
      url: "index.php?entryPoint=testLayout",
      data: {
        post_data: $('#' + recordtypeform ).serialize(),
        this_view: recordtypeform
      },
    })
      .success(function( data ) {
        console.log( "Data Saved: " + data );
        if(data['found'] == true){
          console.log("change view found change" + data['div']);
          $("#" + data['div'] ).html( data['layout'] )
        }
      });

  }

// });