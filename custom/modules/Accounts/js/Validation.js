/**
 * Created by ian on 04/07/17.
 */

$( document ).ready(function() {
  /******* get the first version of the field ************/
  var assigned_to = $("#assigned_user_id").val();

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
    //Item 3
    if (assigned_to != $("#assigned_user_id").val() && assigned_to != "" ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_PLEASE_CONTACT'));
      return false //must be outside of validate array.
    }
    //item 4
    if (
      $("#top_10_prospecting_c").length &&
      $("#top_10_prospecting_c").val() != ""
    ) {
      addToValidate('EditView',"top_10_prospecting_reason_c",'datetime',true,SUGAR.language.get('Accounts', 'LBL_ENTRY_REQUIRED_IN_CHANGES'));
    }else{
      if( checkValidate("EditView", "top_10_prospecting_reason_c")){
        removeFromValidate("EditView","top_10_prospecting_reason_c" );
      }
    }

    return true;
  }

});
