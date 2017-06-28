/**
 * Created by ian on 07/06/17, SLocks certain files, re-enabled if sales stage is changed.
 */


$( document ).ready(function() {

  toggleFields();
  $("#sales_stage").change( toggleFields );
});

function toggleFields() {
  if ($("#sales_stage").val() == "Closed Won") {
    $("#amount").prop('disabled', true);
  } else {
    $("#amount").prop('disabled', false);
  }
}