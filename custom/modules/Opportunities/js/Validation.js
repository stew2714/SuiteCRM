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
    var dateNow = new Date();
    dateNow.setDate(dateNow.getDate() + 365);
    var dateclosed = Date.parse( document.getElementById("date_closed").value )
    if(
      (document.getElementById("recordtypeid").indexOf("Lead") == -1 &&
       document.getElementById("recordtypeid").indexOf("CBay") == -1 &&
       document.getElementById("recordtypeid").indexOf("Partner") == -1
      ) &&
      dateclosed < dateNow &&
      (
       $("#sales_stage").val() != "Closed - Inactive" &&
       $("#sales_stage").val() != "Closed - Lost"
      ) &&
      (
       $("#confidence_level_c").val() != "High" &&
       $("#confidence_level_c").val() != "Medium" &&
       $("#confidence_level_c").val() != "Low" &&
       $("#confidence_level_c").val() != "Won" &&
       $("#confidence_level_c").val() != "Lost" )
    ){
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_CONFIDENCE_LEVEL_MUST_BE_SELECTED'));
      return false
    }
    //Item 8
      //duplicate record...
    //Item 9

    //Item 10
    //Item 11
    if(
      document.getElementById("recordtypeid").indexOf("Standard") == -1  &&
      $("#probability").val() >= "0.2" &&
      $("#probability").val() <= "1.0" &&
      $("#emr2_c").val() == "" &&
      $("#new_am_region_c").val() != "Imaging"
    ){
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_PLEASE_SELECT_EHR'));
      return false
    }
    //Item 12
    //Item 13
    //Item 14
    if ( document.getElementById("recordtypeid").indexOf("Standard") != -1 && $("#probability").val() == "0.5"
      ){
      addToValidate('EditView',"accounts_opportunities_2_name",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_MUST_BE_INCUMBENT'));
    }else{
      if( checkValidate("EditView", "accounts_opportunities_2_name")){
        removeFromValidate("EditView","accounts_opportunities_2_name" )
      }
    }


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
    if (document.getElementById("recordtypeid").indexOf("CBay") !== -1 ||
        $("sales_stage").val() == "Closed - Lost" &&
        $("#changes_next_time_c").val() == ""
    ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ENTRY_REQUIRED_IN_CHANGES'));
      return false
    }
    //Item 19
    //Item 20 - Probability > 0.1 && ISBLANK(TEXT(Global_Use_Probability_Percent__c)) && CONTAINS( Product__r.Name, "TOS") && NOT( OR( CONTAINS($RecordType.Name, "CBay"), CONTAINS($RecordType.Name, "Renewal")))
    if ( $("#probability").val() >= "0.1" &&  $("#global_use_probability_percent_c").val() == "" &&
      ( document.getElementById("product_c").indexOf("TOS") != -1 && ( document.getElementById("recordtypeid").indexOf("CBay") == -1 && document.getElementById("recordtypeid").indexOf("Renewal") == -1 )
    ) ){
      addToValidate('EditView',"ilp_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_MUST_BE_SELECTED_WHEN_STAGE'));
    }else{
      if( checkValidate("EditView", "ilp_c")){
        removeFromValidate("EditView","ilp_c" )
      }
    }


    //Item 21
    if (
      $("recordtypeid").val() == "Standard Opportunity" &&
      $("#latest_update__c").val() == "" &&
      ($("#probability").val() >=  "0.5" ||
        $("#implementation_Cost_c").val() +
        $("#HWSW_Cost__c").val() +
        $("#Annual_MQ_Services_Estimate__c").val() +
        $("#Other_Cost__c").val() >= 500000 ||
      $("#date_closed").val() != beanData.date_closed )
    ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ENTRY_REQUIRED_IN_LATEST_UPDATE'));
      return false
    }
    //Item 22
    if (
      document.getElementById("recordtypeid").indexOf("CBay") == -1 &&
        $("#sales_stage").val() == "Closed - Lost" &&
        $("#lessons_learned_c").val() == ""
    ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ENTRY_REQUIRED_IN_LOSS_LEARNING'));
      return false
    }
    //Item 23
    if (
      document.getElementById("recordtypeid").indexOf("Standard") == -1 &&
      $("#probability").val() >= "0.2" &&
      $("#probability").val() <= "1.0" &&
      $("#partner__c").val() == ""
    ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_MUST_FILL_IN_PARTNER_FIELD'));
      return false
    }
    //Item 24
    if (
      (document.getElementById("recordtypeid").indexOf("CBay") == -1 ||
      document.getElementById("recordtypeid").indexOf("Partner") == -1 ) &&
      $("#recordtypeid").val() != "Lead Stage Opportunity" &&
      $("#product_c").val() == ""
    ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ENTRY_REQUIRED_PRODUCT_SERVICES'));
      return false
    }
    //Item 25 - Require_Win_Loss_Desc_When_Other
      if (
          document.getElementById("recordtypeid").indexOf("CBay") == -1 &&
          $("#primary_reason_for_winloss_c").val() == "Other" &&
          $("#winloss_description_c").val() == ""
        ) {
        alert(SUGAR.language.get(module_sugar_grp1, 'LBL_A_ENTRY_IS_REQUIRED_IN_THE_WIN_LOSS'));
        return false
      }
    //Item 26 - Require_winner_when_lost ----- AND( ISPICKVAL( StageName, "Closed - Lost"), Winner__r.Name ="",$RecordType.Name = "Standard Opportunity")
    if ( $("#sales_stage").val() == "Closed Lost" &&  $("#recordtypeid").val() == "Standard Opportunity" ) {
      accounts_opportunities_1_name
      addToValidate('EditView',"accounts_opportunities_1_name",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_WHEN_CLOSED_LOST_WINNER_REQUIRED'));
    }else{
        if( checkValidate("EditView", "accounts_opportunities_1_name")){
          removeFromValidate("EditView","accounts_opportunities_1_name" )
        }
    }
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
