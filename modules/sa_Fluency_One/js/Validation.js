/**
 * Created by ian on 04/07/17.
 */

$( document ).ready(function() {
  /******* get the first version of the field ************/

  $("[id='SAVE']").unbind("click").removeAttr("onclick").click(function(e) {
    e.preventDefault();
    if( checkRules() ) {
      var _form = document.getElementById('EditView');
      _form.action.value = 'Save';
      if (check_form('EditView')) {
        SUGAR.ajaxUI.submitForm(_form);
      }
    }
    return false;
  });

  $("[id='save_and_continue']").unbind("click").removeAttr("onclick").click(function(e) {
    e.preventDefault();
    if( checkRules( ) ) {
      SUGAR.saveAndContinue(this);
    }
  });

  function checkRules() {
    //Item 39
    if ($("#reason_for_not_a_good_fit_c").val() != "" &&
        $("#reason_customer_declined_c").val() != "" ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_CAN_NOT_HAVE_BOTH'));
      return false //must be outside of validate array.
    }


    return true;
  }

});
