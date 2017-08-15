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
  removeFromValidate("EditView","probability")
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

  function checkRules(){
    //Item 5 - Cannot_change_forecasting
    if (beanData.forecasting_category_c != $("#forecasting_category_c").val() && (
        !checkArray("VP", beanData.current_user.roles) &&
        !checkArray("SET", beanData.current_user.roles) &&
        beanData.current_user.last_name != "Frazier" &&
        beanData.current_user.last_name != "Barich" &&
        beanData.current_user.last_name != "Brown" &&
        beanData.current_user.last_name != "Van Hoeymissen") ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_ONLY_RVPS'));
      return false //must be outside of validate array.
    }
    //Item 6 - close_date
    if (beanData.date_closed != $("#date_closed").val() && (beanData.previous_date_month < beanData.today_month) && beanData.probability == '1') {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_YOU_CANNOT_CHANGE_THE_CLOSE_DATE'));
      return false //must be outside of validate array.
    }
    //Item 7
    var dateNow = new Date();
    dateNow.setDate(dateNow.getDate() + 365);
    var dateclosed = Date.parse( document.getElementById("date_closed").value );
    if(
      (document.getElementById("recordtypeid_c").value == "Lead" ||
        document.getElementById("recordtypeid_c").value == "CBay" ||
        document.getElementById("recordtypeid_c").value == "Partner"
      ) &&
      dateclosed < dateNow &&
      (
        $("#sales_stage").val() != "Closed Inactive" &&
        $("#sales_stage").val() != "Closed Lost"
      ) &&
      (
        $("#confidence_level_c").val() != "High" &&
        $("#confidence_level_c").val() != "Medium" &&
        $("#confidence_level_c").val() != "Low" &&
        $("#confidence_level_c").val() != "Won" &&
        $("#confidence_level_c").val() != "Lost" )
    ){
      addToValidate('EditView',"confidence_level_c",'enum',true,SUGAR.language.get('Opportunities', 'LBL_CONFIDENCE_LEVEL_MUST_BE_SELECTED'));
    }else {
      if (checkValidate("EditView", "confidence_level_c")) {
        removeFromValidate("EditView", "confidence_level_c");
      }
    }
    //item 8
    if ( $("#encoder_c").val() != "Other" &&
      $("#encoder_description_c").val() != ""
    ) {
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_YOU_CANNOT_USE_ENCODER'));
      return false //must be outside of validate array.
    }

    //Item 9 - AND( (Product__r.Name = "Fluency for Coding Capital" || Product__r.Name = "Fluency for Coding Trans" || Product__r.Name = "Coding Services"), $RecordType.Name = "Standard Opportunity", ISPICKVAL ( Encoder__c ,"") )
    if (
      (document.getElementById("product_c").value == "FFCC" ||
        document.getElementById("product_c").value == "FFCT" ||
        document.getElementById("product_c").value == "COS"
      ) &&
      document.getElementById("recordtypeid_c").value == "Standard Opportunity" &&
      document.getElementById("encoder_c").value == ""){
      addToValidate('EditView',"encoder_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_ENCODER_REQUIRED_FOR_CODING_OPPS'));
    }else{
      if( checkValidate("EditView", "encoder_c")){
        removeFromValidate("EditView","encoder_c" );
      }
    }
    //Item 10 - AND( Product__r.Name = "Coding Services",Probability > 0.5,TEXT(FTE__c) = "")
    if (document.getElementById("product_c").value == "COS" &&
      document.getElementById("probability").value > 0.5 &&
      ($("#fte_c").length && document.getElementById("fte_c").value == "")
    )
    {
      addToValidate('EditView',"fte_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_FTE_MUST_BE_FILLED_IN'));
    }else{
      if( checkValidate("EditView", "fte_c")){
        removeFromValidate("EditView","fte_c" );
      }
    }
    //Item 11
    if(
      ( $("#recordtypeid_c").length && document.getElementById("recordtypeid_c").value == "Standard" )  &&
      ($("#probability").length &&$("#probability").val() >= "0.2") &&
      ($("#probability").length &&$("#probability").val() <= "1.0") &&
      ($("#emr2_c").length && $("#emr2_c").val() == "") &&
      ($("#new_am_region_c").length &&  $("#new_am_region_c").val() ) != "Imaging"
    ){
      addToValidate('EditView',"emr2_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_PLEASE_SELECT_EHR'));
    }else{
      if( checkValidate("EditView", "emr2_c")){
        removeFromValidate("EditView","emr2_c" );
      }
    }
    //Item 12 - AND(ISNULL(Term_Length_MM__c),ISPICKVAL(CO_Status__c, "Complete"), OR(CONTAINS(Product__r.Name,"TOS"), CONTAINS(Product__r.Name,"Sub")))
    if ( ($( "#term_length_mm_c" ).length && (document.getElementById("term_length_mm_c").value == null || document.getElementById("term_length_mm_c").value == ""  ) ) &&
      ($( "#co_status_c" ).length && document.getElementById("co_status_c").value == "Complete") &&
      (
        ($( "#product_c" ).length && document.getElementById("product_c").value == "TOS") ||
        ($( "#product_c" ).length && document.getElementById("product_c").value =="Sub")
      )
    ){
      addToValidate('EditView',"term_length_mm_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_MUST_FILL_TERM_LENGTH'));
    }else{
      if( checkValidate("EditView", "term_length_mm_c")){
        removeFromValidate("EditView","term_length_mm_c" );
      }
    }
    //Item 13
    //Item 14
    if ( document.getElementById("recordtypeid_c").value != "Standard" && $("#probability").val() == "0.5"
    ){
      addToValidate('EditView',"incumbentx_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_MUST_BE_INCUMBENT'));
    }else{
      if( checkValidate("EditView", "incumbentx_c")){
        removeFromValidate("EditView","incumbentx_c" )
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
    if ( $("#encoder_c").val() == "Other" &&
      $("#encoder_description_c").val() == ""
    ) {
      addToValidate('EditView',"encoder_description_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_YOU_CANNOT_USE_ENCODER'));
    }else{
      if( checkValidate("EditView", "encoder_description_c")){
        removeFromValidate("EditView","encoder_description_c" )
      }
    }
    //Item 17 - CONTAINS( Product__r.Name,"Fluency Direct") && (Number_of_Licenses__c < 1)
    if (
      document.getElementById("product_c").value == "FD" &&
      document.getElementById("number_of_licenses_c").value < 1
    ){
      addToValidateMoreThan('EditView',"number_of_licenses_c",'int',true,SUGAR.language.get('Opportunities', 'LBL_NUMBER_OF_LICENSES_REQUIRED'), 1);
    }else{
      if( checkValidate("EditView", "number_of_licenses_c")){
        removeFromValidate("EditView","number_of_licenses_c" );
      }
    }
    //Item 18
    if (
      document.getElementById("recordtypeid_c").value != "CBay" ||
      $("sales_stage").val() == "Closed Lost" &&
      $("#changes_next_time_c").val() == ""
    ) {
      addToValidate('EditView',"changes_next_time_c",'datetime',true,SUGAR.language.get('Opportunities', 'LBL_ENTRY_REQUIRED_IN_CHANGES'));
    }else{
      if( checkValidate("EditView", "changes_next_time_c")){
        removeFromValidate("EditView","changes_next_time_c" );
      }
    }
    //Item 19 - AND( NOT( CONTAINS($RecordType.Name, "CBay") ) , ISPICKVAL( StageName, "Closed - Won"), NOT(ISPICKVAL(Global_Use_Probability_Percent__c, "0% - Global Service not presented")), NOT(ISPICKVAL(Global_Use_Probability_Percent__c, "100% - Customer will definitely use Global Services")), CONTAINS(Product__r.Name, "TOS") )
    if (
      document.getElementById("recordtypeid_c").value != "CBay" &&
      document.getElementById("sales_stage").value == "Closed Won" &&
      (
        document.getElementById("global_use_probability_percent_c").value != "0% - Global Service not presented" ||
        document.getElementById("global_use_probability_percent_c").value != "100% - Customer will definitely use Global Services"
      ) &&
      document.getElementById("product_c").value == "TOS"
    ){
      alert(SUGAR.language.get(module_sugar_grp1, 'LBL_REQUIRE_ILP_PROBABILITY_TO_BE_0_OR_100'));
      return false
    }
    //Item 20 - Probability > 0.1 && ISBLANK(TEXT(Global_Use_Probability_Percent__c)) && CONTAINS( Product__r.Name, "TOS") && NOT( OR( CONTAINS($RecordType.Name, "CBay"), CONTAINS($RecordType.Name, "Renewal")))
    if (
      $("#probability").val() >= "0.1" &&
      $("#global_use_probability_percent_c").val() == "" &&
      (
        document.getElementById("product_c").value != "TOS" &&
        (
          document.getElementById("recordtypeid_c").value == "CBay" &&
          document.getElementById("recordtypeid_c").value == "Renewal"
        )
      )
    ){
      addToValidate('EditView',"ilp_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_MUST_BE_SELECTED_WHEN_STAGE'));
    }else{
      if( checkValidate("EditView", "ilp_c")){
        removeFromValidate("EditView","ilp_c" );
      }
    }


    //Item 21
    if (
      $("recordtypeid_c").val() == "Standard Opportunity" &&
      $("#latest_update__c").val() == "" &&
      ($("#probability").val() >=  "0.5" ||
        $("#implementation_Cost_c").val() +
        $("#HWSW_Cost__c").val() +
        $("#Annual_MQ_Services_Estimate__c").val() +
        $("#Other_Cost__c").val() >= 500000 ||
        $("#date_closed").val() != beanData.date_closed )
    ) {
      addToValidate('EditView',"latest_update__c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_ENTRY_REQUIRED_IN_LATEST_UPDATE'));
    }else{
      if( checkValidate("EditView", "latest_update__c")){
        removeFromValidate("EditView","latest_update__c" );
      }
    }

    //Item 22
    if (
      document.getElementById("recordtypeid_c").value == "CBay" &&
      $("#sales_stage").val() == "Closed - Lost" &&
      $("#lessons_learned_c").val() == ""
    ) {
      addToValidate('EditView',"lessons_learned_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_ENTRY_REQUIRED_IN_LOSS_LEARNING'));
    }else{
      if( checkValidate("EditView", "lessons_learned_c")){
        removeFromValidate("EditView","lessons_learned_c" );
      }
    }
    //Item 23
    if (
      document.getElementById("recordtypeid_c").value == "Standard" &&
      $("#probability").val() >= "0.2" &&
      $("#probability").val() <= "1.0" &&
      $("#partner__c").val() == ""
    ) {
      addToValidate('EditView',"partner__c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_MUST_FILL_IN_PARTNER_FIELD'));
    }else{
      if( checkValidate("EditView", "partner__c")){
        removeFromValidate("EditView","partner__c" );
      }
    }
    //Item 24
    if (
      (document.getElementById("recordtypeid_c").value == "CBay" ||
        document.getElementById("recordtypeid_c").value == "Partner") &&
      $("#recordtypeid_c").val() != "Lead Stage Opportunity" &&
      $("#product_c").val() == ""
    ) {
      addToValidate('EditView',"product_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_ENTRY_REQUIRED_PRODUCT_SERVICES'));
    }else{
      if( checkValidate("EditView", "product_c")){
        removeFromValidate("EditView","product_c" );
      }
    }
    //Item 25 - Require_Win_Loss_Desc_When_Other
    if (
      document.getElementById("recordtypeid_c").value == ("CBay") &&
      $("#primary_reason_for_winloss_c").val() == "Other" &&
      $("#winloss_description_c").val() == ""
    ) {
      addToValidate('EditView',"winloss_description_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_A_ENTRY_IS_REQUIRED_IN_THE_WIN_LOSS'));
    }else{
      if( checkValidate("EditView", "winloss_description_c")){
        removeFromValidate("EditView","winloss_description_c" );
      }
    }
    //Item 26 - Require_winner_when_lost ----- AND( ISPICKVAL( StageName, "Closed - Lost"), Winner__r.Name ="",$RecordType.Name = "Standard Opportunity")
    if ( $("#sales_stage").val() == "Closed Lost" &&  $("#recordtypeid_c").val() == "Standard Opportunity" ) {
      accounts_opportunities_1_name
      addToValidate('EditView',"accounts_opportunities_1_name",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_WHEN_CLOSED_LOST_WINNER_REQUIRED'));
    }else{
      if( checkValidate("EditView", "accounts_opportunities_1_name")){
        removeFromValidate("EditView","accounts_opportunities_1_name" )
      }
    }
    //Item 27 - Required_License_Term_Length
    if ( $("#license_type_c").val() == "term" &&  $("#license_term_length_mm_c").val() == "" ) {
      addToValidate('EditView',"license_term_length_mm_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_ENTER_TERM_LENGTH_LICENSE'));
    }else{
      if( checkValidate("EditView", "license_term_length_mm_c")){
        removeFromValidate("EditView","license_term_length_mm_c" );
      }
    }
    //Item 28 - Required_SW_Maintenance_Term_Length
    if ( $("#license_type_c").val() == "term" &&  $("#sw_maintenance_term_length_mm_c").val() == "" ) {
      addToValidate('EditView',"sw_maintenance_term_length_mm_c",'varchar',true,SUGAR.language.get('Opportunities', 'LBL_ENTER_TERM_LENGTH'));
    }else{
      if( checkValidate("EditView", "sw_maintenance_term_length_mm_c")){
        removeFromValidate("EditView","sw_maintenance_term_length_mm_c" );
      }
    }
    return true;
  }

});
