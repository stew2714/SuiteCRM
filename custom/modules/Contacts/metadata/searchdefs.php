<?php
// created: 2020-09-03 14:48:17
$searchdefs['Contacts'] = array (
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
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'width' => '10%',
        'default' => true,
      ),
      2 => 
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
      0 => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTACT_TYPE',
        'width' => '10%',
        'name' => 'contact_type_c',
      ),
      4 => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      5 => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      6 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SURVEY',
        'width' => '10%',
        'name' => 'survey_c',
      ),
      7 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_OPERATIONAL',
        'width' => '10%',
        'name' => 'operational_c',
      ),
      8 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_TECHNICAL',
        'width' => '10%',
        'name' => 'technical_c',
      ),
      9 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_REFERENCE_PROGRAM',
        'width' => '10%',
        'name' => 'reference_program_c',
      ),
      10 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SALES',
        'width' => '10%',
        'name' => 'sales_c',
      ),
      11 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_FFT_ADMIN',
        'width' => '10%',
        'name' => 'fft_admin_c',
      ),
      12 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONTACT_ASSOCIATION',
        'width' => '10%',
        'name' => 'contact_association_c',
      ),
      13 => 
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
      14 => 
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
      15 => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_EMR_OTHER',
        'width' => '10%',
        'name' => 'emr_other_c',
      ),
      16 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REFERENCE_TYPE',
        'width' => '10%',
        'name' => 'reference_type_c',
      ),
      17 => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_REFERENCE_START_DATE',
        'width' => '10%',
        'name' => 'reference_start_date_c',
      ),
      18 => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_REFERENCE_END_DATE',
        'width' => '10%',
        'name' => 'reference_end_date_c',
      ),
      19 => 
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
);