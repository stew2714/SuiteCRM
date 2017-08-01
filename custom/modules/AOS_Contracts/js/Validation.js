



function checkRules(){


  //29 ---- IF( $Profile.Name != 'System Administrator' && ISPICKVAL(Apttus__Status_Category__c, "In Effect")
  //  && (NOT( Apttus__Is_System_Update__c )),true,false)
  if( ($("#apttus_status_category_c").val() == "In Effect" && $("#apttus_contract_end_date_c").val() == "" &&
      $("#apttus_perpetual_c").val() != "") && ($("#apttus_term_months_c").val() == "" || $("#apttus_term_months_c").val() <= 0 ) ){
    addToValidate('CreateView',"apttus_contract_end_date_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_REQUIRED_FIELD_END_DATE_PERPETUAL'));
  }

  //31 -------- AND(ISPICKVAL(Apttus__Status_Category__c,"In Effect"),AND(ISNULL(Apttus__Contract_End_Date__c),
  // NOT(Apttus__Perpetual__c)),OR(ISNULL(Apttus__Term_Months__c),Apttus__Term_Months__c<=0))
  // if( ($("#apttus_status_category_c").val() == "In Effect" && $("#apttus_contract_end_date_c").val() == "" &&
  //     $("#apttus_perpetual_c").val() != "") && ($("#apttus_term_months_c").val() == "" || $("#apttus_term_months_c").val() <= 0 ) ){
  //   addToValidate('CreateView',"apttus_contract_end_date_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_REQUIRED_FIELD_END_DATE_PERPETUAL'));
  // }

  //32 ?
  if($("#type_of_product_services_c").val().indexOf("Transcription Outsource Services") >= 0 && $("#acc_tos_renewal_notification_period_dd_c").val() == "" ){
    addToValidate('CreateView',"acc_tos_renewal_notification_period_dd_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_REQUIRED_FIELD_RENEWAL'));
  }

  //33 ----- AND(ISPICKVAL(Apttus__Status_Category__c,"In Effect"),ISNULL(Apttus__Contract_Start_Date__c))

  // if($("#apttus_status_category_c").val() == "In Effect"  && $("#apttus_contract_start_date_c").val() == "" ){
  //   addToValidate('CreateView',"acc_tos_renewal_notification_period_dd_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_REQUIRED_FIELD_RENEWAL'));
  // }


  return true;

}




$( document ).ready(function() {
  /******* get the first version of the field ************/
  console.log(beanData);


  $("[id='SAVE']").unbind("click").removeAttr("onclick").click(function (e) {
    e.preventDefault();
    if (checkRules()) {
      var _form = document.getElementById('CreateView');
      _form.action.value = 'Save';
      if (check_form('CreateView')) {
        SUGAR.ajaxUI.submitForm(_form);
      }
    }
    return false;
  });

  $("[id='save_and_continue']").unbind("click").removeAttr("onclick").click(function (e) {
    e.preventDefault();
    if (checkRules()) {
      SUGAR.saveAndContinue(this);
    }
  });



});