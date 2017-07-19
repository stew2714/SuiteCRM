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
  console.log(beanData);





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

  function checkRules(){
    console.log("Checking Rules");
    //Item 5 - Cannot_change_forecasting
    if (beanData.forecasting_category_c != $("#forecasting_category_c").val() && (
                            !checkArray("VP", beanData.current_user.roles) &&
                            !checkArray("SET", beanData.current_user.roles) &&
                            beanData.current_user.last_name != "Frazier" &&
                            beanData.current_user.last_name != "Barich" &&
                            beanData.current_user.last_name != "Brown" &&
                            beanData.current_user.last_name != "Van Hoeymissen") ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ONLY_RVPS'));
      return false
    }
    //Item 6 - close_date
    if (beanData.date_closed != $("#date_closed").val() && (beanData.previous_date_month < beanData.today_month) && beanData.probability == '1') {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_YOU_CANNOT_CHANGE_THE_CLOSE_DATE'));
      return false
    }
    //Item 7
    //Item 8
      //duplicate record...
    //Item 9
    //Item 10
    //Item 11
    //Item 12
    //Item 13
    //Item 14
    //Item 15 - No_change_for_closed_opps
    if ( beanData.sales_stage == $("#sales_stage").val() &&
          $("#probability").val() == "1" &&
              ( beanData.hwsw_cost_c != $("#hwsw_cost_c").val() ||
                beanData.new_am_region_c != $("#new_am_region_c").val() ||
                beanData.annual_mq_services_estimate_c != $("#annual_mq_services_estimate_c").val() ||
                beanData.other_cost_c != $("#other_cost_c").val() ||
                beanData.product_c != $("#product_c").val() ||
                beanData.assigned_user_id != $("#assigned_user_id").val() ||
                beanData.specialist_c != $("#specialist_c").val() ||
                beanData.inside_sales_ae_c != $("#inside_sales_ae_c").val() ||
                beanData.btl_c != $("#btl_c").val() ||
                beanData.co_implementation_training_pro_serv_c != $("#co_implementation_training_pro_serv_c").val() ||
                beanData.co_other_hardware_server_c != $("#co_other_hardware_server_c").val() ||
                beanData.co_speech_mics_c != $("#co_speech_mics_c").val() ||
                beanData.co_third_party_software_c != $("#co_third_party_software_c").val() ||
                beanData.co_license_cost_c != $("#co_license_cost_c").val() ||
                beanData.co_annual_prod_subscription_fee_c != $("#co_annual_prod_subscription_fee_c").val() ||
                beanData.est_platform_cost_c != $("#est_platform_cost_c").val() ||
                beanData.co_annual_tos_estimate_c != $("#co_annual_tos_estimate_c").val() ||
                beanData.eb_tos_adjustment_c != $("#eb_tos_adjustment_c").val() ||
                beanData.co_cloud_intelligence_c != $("#co_cloud_intelligence_c").val() ||
                beanData.co_hosting_c != $("#co_hosting_c").val() ||
                beanData.co_annual_gma_c != $("#co_annual_gma_c").val() ||
                beanData.date_closed != $("#date_closed").val() ) &&
                (
                  beanData.current_user.last_name != "Bradley" &&
                  beanData.current_user.last_name != "Reardon" &&
                  beanData.current_user.last_name != "Carl" &&
                  beanData.current_user.last_name != "Mason" &&
                  beanData.current_user.last_name != "Merritt" &&
                  beanData.current_user.last_name != "Grgas" &&
                  beanData.current_user.last_name != "Simmons" &&
                  beanData.current_user.last_name != "Roberts"
                )
       ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_YOU_CANNOT_USE_ENCODER'));
      return false
    }
    //Item 16 - No_encoder_description_if_not_other
    if ( $("#encoder_c").val() == "Other" &&  $("#encoder_description_c").val() == "" ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_YOU_CANNOT_USE_ENCODER'));
      return false
    }
    //Item 17
    //Item 18
    //Item 19
    //Item 20
    //Item 21
    //Item 22
    //Item 23
    //Item 24
    //Item 25 - Require_Win_Loss_Desc_When_Other
      if ( $("#primary_reason_for_winloss_c").val() == "Other" &&  $("#winloss_description_c").val() == "" ) { //@todo add record type ?
        alert(SUGAR.language.get(module_sugar_grp1, 'LBL_A_ENTRY_IS_REQUIRED_IN_THE_WIN_LOSS'));
        return false
      }
    //Item 26 - Require_winner_when_lost

    //Item 27 - Required_License_Term_Length
    if ( $("#license_type_c").val() == "term" &&  $("#license_term_length_mm_c").val() == "" ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ENTER_TERM_LENGTH_LICENSE'));
      return false
    }
    //Item 28 - Required_SW_Maintenance_Term_Length
    if ( $("#license_type_c").val() == "term" &&  $("#sw_maintenance_term_length_mm_c").val() == "" ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ENTER_TERM_LENGTH'));
      return false
    }
    return true;
  }

});

