/**
 * Created by ian on 04/07/17.
 */


function checkArray(item, array){
  $.each(array, function( index, value ) {
    if(value.includes(item) ){
      console.log( index + ": " + value );
      return true;
    }
  });
  return false;
}


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
    //Item 5 - Cannot_change_forecasting
    if (assigned_to != $("#assigned_user_id").val() && assigned_to != "" ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_PLEASE_CONTACT'));
      return false //must be outside of validate array.
    }
    return true;
  }

});
