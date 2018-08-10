/**
 * Created by ian on 31/05/17.
 */

$( document ).ready(function() {

  $( "#report_module" ).change(function() {
    updateFields();
  });


  function updateFields(){
    $.ajax( "index.php?module=AOR_MatrixReporting&action=fielddefs&moduletype=" + $("#report_module").val() )
      .done(function( results ) {
        $('#fieldx1').find('option').remove().end().append(results);
        $('#fieldx2').find('option').remove().end().append(results);
        $('#fieldx3').find('option').remove().end().append(results);
        $('#fieldy1').find('option').remove().end().append(results);
        $('#fieldy2').find('option').remove().end().append(results);
        $('#fieldy3').find('option').remove().end().append(results);
        $('#actionfield').find('option').remove().end().append(results);
      })
      .fail(function( jqxhr, textStatus, error ) {
        console.log( "Request Failed: " + error );
      });
  }
});