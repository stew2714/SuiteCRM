<?php
$module_name = 'AOS_Contracts';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'footerTpl' => 'custom/modules/AOS_Contracts/tpls/modal.tpl',
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'syncDetailEditViews' => true,
      'javascript' => '{$LOCK_FILES} {$BEAN_DATA}',
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'agreement_chevron_c',
            'label' => 'LBL_AGREEMENT_CHEVRON_C',
          ),
          1 => 
          array (
            'name' => 'contract_account',
            'label' => 'LBL_CONTRACT_ACCOUNT',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'opportunity',
            'label' => 'LBL_OPPORTUNITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'apttus_ff_agreement_number_c',
            'label' => 'LBL_APTTUS_FF_AGREEMENT_NUMBER_C',
          ),
          1 => 
          array (
            'name' => 'apttus_status_category_c',
            'label' => 'LBL_APTTUS_STATUS_CATEGORY_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'type_of_product_services_c',
            'label' => 'LBL_TYPE_OF_PRODUCT_SERVICES_C',
          ),
          1 => 
          array (
            'name' => 'apttus_status_c',
            'label' => 'LBL_APTTUS_STATUS_C',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'apttus_description_c',
            'label' => 'LBL_APTTUS_DESCRIPTION_C',
          ),
          1 => 
          array (
            'name' => 'type_of_request_c',
            'label' => 'LBL_TYPE_OF_REQUEST_C',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'apttus_special_terms_c',
            'label' => 'LBL_APTTUS_SPECIAL_TERMS_C',
          ),
          1 => 
          array (
            'name' => 'region_c',
            'label' => 'LBL_REGION_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'request_date_c',
            'label' => 'LBL_REQUEST_DATE_C',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'requires_po_c',
            'label' => 'LBL_REQUIRES_PO_C',
          ),
          1 => 
          array (
            'name' => 'apttus_requestor_name_c',
            'studio' => 'visible',
            'label' => 'LBL_APTTUS_REQUESTOR_NAME_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'apttus_total_contract_value_c',
            'label' => 'LBL_APTTUS_TOTAL_CONTRACT_VALUE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_request_date_c',
            'label' => 'LBL_APTTUS_REQUEST_DATE_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'strategic_deal_c',
            'label' => 'LBL_STRATEGIC_DEAL_C',
          ),
          1 => 
          array (
            'name' => 'awaiting_information_detail_c',
            'label' => 'LBL_AWAITING_INFORMATION_DETAIL_C',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'strategic_deal_description_c',
            'label' => 'LBL_STRATEGIC_DEAL_DESCRIPTION_C',
          ),
          1 => 
          array (
            'name' => 'cancellation_reason_c',
            'label' => 'LBL_CANCELLATION_REASON_C',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'baa_effective_date_c',
            'label' => 'LBL_BAA_EFFECTIVE_DATE_C',
          ),
          1 => 
          array (
            'name' => 'apttus_termination_notice_issue_date_c',
            'label' => 'LBL_APTTUS_TERMINATION_NOTICE_ISSUE_DATE_C',
          ),
        ),
      ),
    ),
  ),
);
?>
