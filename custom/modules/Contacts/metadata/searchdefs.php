<?php
$searchdefs ['Contacts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'contact_type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTACT_TYPE',
        'width' => '10%',
        'name' => 'contact_type_c',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_state' => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'survey_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SURVEY',
        'width' => '10%',
        'name' => 'survey_c',
      ),
      'operational_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_OPERATIONAL',
        'width' => '10%',
        'name' => 'operational_c',
      ),
      'technical_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_TECHNICAL',
        'width' => '10%',
        'name' => 'technical_c',
      ),
      'reference_program_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_REFERENCE_PROGRAM',
        'width' => '10%',
        'name' => 'reference_program_c',
      ),
      'sales_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SALES',
        'width' => '10%',
        'name' => 'sales_c',
      ),
      'fft_admin_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_FFT_ADMIN',
        'width' => '10%',
        'name' => 'fft_admin_c',
      ),
      'contact_association_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTACT_ASSOCIATION',
        'width' => '10%',
        'name' => 'contact_association_c',
      ),
      'emr_1_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_EMR_1',
        'id' => 'M1_EMR_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'emr_1_c',
      ),
      'emr_2_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_EMR_2',
        'id' => 'M1_EMR_ID1_C',
        'link' => true,
        'width' => '10%',
        'name' => 'emr_2_c',
      ),
      'emr_other_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_EMR_OTHER',
        'width' => '10%',
        'name' => 'emr_other_c',
      ),
      'reference_type_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REFERENCE_TYPE',
        'width' => '10%',
        'name' => 'reference_type_c',
      ),
      'reference_start_date_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_REFERENCE_START_DATE',
        'width' => '10%',
        'name' => 'reference_start_date_c',
      ),
      'reference_end_date_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_REFERENCE_END_DATE',
        'width' => '10%',
        'name' => 'reference_end_date_c',
      ),
      'reference_association_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REFERENCE_ASSOCIATION',
        'width' => '10%',
        'name' => 'reference_association_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
