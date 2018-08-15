



function checkRules(){

  //30 ----
  if( $("#apttus_ff_execute_c").val() == "TRUE" || $('#apttus_ff_execute_c').prop('checked') ){
    addToValidate('CreateView',"apttus_company_signed_by_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_COMPANY_SIGNED_BY'));
  }else{
    if( checkValidate("CreateView", "apttus_company_signed_by_c")){
      removeFromValidate("CreateView","apttus_company_signed_by_c" )
    }
  }

  // //31 -------- AND(ISPICKVAL(Apttus__Status_Category__c,"In Effect"),AND(ISNULL(Apttus__Contract_End_Date__c),
  // // NOT(Apttus__Perpetual__c)),OR(ISNULL(Apttus__Term_Months__c),Apttus__Term_Months__c<=0))
  // if( ($("#apttus_status_category_c").val() == "eff" && $("#apttus_contract_end_date_c").val() == "" &&
  //     $("#apttus_perpetual_c").val() != "") && ($("#apttus_term_months_c").val() == "" || $("#apttus_term_months_c").val() <= 0 ) ){
  //   addToValidate('CreateView',"apttus_contract_end_date_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_REQUIRED_FIELD_END_DATE_PERPETUAL'));
  // }

  // //32
  // if($("#limitation_of_liability_c").is(":checked") &&
  //   $("#limited_liability_cap_c").val() == "" ){
  //   addToValidate('CreateView',"limited_liability_cap_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_PLEASE_FILL_LIMITED_LIABILITY_CAP'));
  // }else{
  //   if( checkValidate("CreateView", "limited_liability_cap_c")){
  //     removeFromValidate("CreateView","limited_liability_cap_c" )
  //   }
  // }

  //33 ----- AND(ISPICKVAL(Apttus__Status_Category__c,"In Effect"),ISNULL(Apttus__Contract_Start_Date__c))
  if($("#apttus_status_category_c").val() == "eff"  && $("#apttus_contract_start_date_c").val() == "" ){
    addToValidate('CreateView',"apttus_contract_start_date_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_REQUIRED_FIELD_DATE'));
  }else{
    if( checkValidate("CreateView", "apttus_contract_start_date_c")){
      removeFromValidate("CreateView","apttus_contract_start_date_c" )
    }
  }
  //34 -----
  if($("#strategic_deal_c").is(":checked")  && $("#strategic_deal_description_c").val() == "" ){
    addToValidate('CreateView',"strategic_deal_description_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_FILL_STRATEGIC_DESC'));
  }else{
    if( checkValidate("CreateView", "strategic_deal_description_c")){
      removeFromValidate("CreateView","strategic_deal_description_c" )
    }
  }
  // //35 -----
  // if($("#apttus_perpetual_c").is(":checked")  && $("#apttus_term_months_c").val() != ""
  // ){
  //   alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ONLY_ONE_CAN_BE_ENTERED_DATE'));
  //   return false;
  // }
  // //36 ----
  // if($("#apttus_perpetual_c").is(":checked")  && $("#apttus_contract_end_date_c_date").val() != ""
  // ){
  //   alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ONLY_ONE_CAN_BE_ENTERED'));
  //   return false;
  // }
  // //37 ----
  // if( $("#apttus_term_months_c").val() > 0 && $("#apttus_contract_end_date_c_date").val() != ""
  // ){
  //   alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ONLY_ONE_TERM_END'));
  //   return false;
  // }
  // //38 -----
  // if($("#type_of_product_services_c").val() == "Transcription Outsource Services"  &&
  //   $("#acc_tos_renewal_notification_period_dd_c").val() == "" ){
  //   addToValidate('CreateView',"acc_tos_renewal_notification_period_dd_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_VALUE_IS_REQUIRED'));
  // }else{
  //   if( checkValidate("CreateView", "acc_tos_renewal_notification_period_dd_c")){
  //     removeFromValidate("CreateView","acc_tos_renewal_notification_period_dd_c" )
  //   }
  // }
  // Activation Rule Check
  if($("#apttus_status_c").val() == "eff_act" && $("#Oneapttus_company_signed_by").val() == ""){
    addToValidate('CreateView',"Oneapttus_company_signed_by",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_REQUIRED_FIELD_SIGNED'));
  }else{
    if( checkValidate("CreateView", "Oneapttus_company_signed_by")){
      removeFromValidate("CreateView","Oneapttus_company_signed_by" )
    }
  }
  if($("#apttus_status_category_c").val() == "eff"  && $("#apttus_contract_start_date_c").val() == "" ){
    addToValidate('CreateView',"apttus_contract_start_date_c",'varchar',true,SUGAR.language.get('AOS_Contracts', 'LBL_REQUIRED_FIELD_END_DATE'));
  }else{
    if( checkValidate("CreateView", "apttus_contract_start_date_c")){
      removeFromValidate("CreateView","apttus_contract_start_date_c" )
    }
  }
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