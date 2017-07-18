/**
 * Created by ian on 07/06/17, SLocks certain files, re-enabled if sales stage is changed.
 */

$( document ).ready(function() {
  toggleFields();
  $("#sales_stage").change( toggleFields );
});

function toggleFields() {
  if ($("#sales_stage").val() == "Closed Won") {
    $("#hwsw_cost_c").prop('disabled', true);
    $("#implementation_cost_c").prop('disabled', true);
    $("#new_am_region_c").prop('disabled', true);
    $("#annual_mq_services_estimate_c").prop('disabled', true);
    $("#other_cost_c").prop('disabled', true);
    $("#product_c").prop('disabled', true);
    $("#specialist_c").prop('dsabled', true);
    $("#inside_sales_ae_c").prop('disabled', true);
    $("#btl_c").prop('disabled', true);
    $("#co_implementation_training_pro_serv_c").prop('disabled', true);
    $("#co_other_hardware_server_c").prop('disabled', true);
    $("#co_speech_mics_c").prop('disabled', true);
    $("#co_third_party_software_c").prop('disabled', true);
    $("#co_license_cost_c").prop('disabled', true);
    $("#co_annual_prod_subscription_fee_c").prop('disabled', true);
    $("#est_platform_cost_c").prop('disabled', true);
    $("#co_annual_tos_estimate_c").prop('disabled', true);
    $("#eb_tos_adjustment_c").prop('disabled', true);
    $("#co_cloud_intelligence_c").prop('disabled',true);
    $("#co_hosting_c").prop('disabled', true);
    $("#co_annual_gma_c").prop('disabled', true);
  }
}