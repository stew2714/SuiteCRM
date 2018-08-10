<?php
$module_name = 'm1_Tech_Deployments';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'securitygroup_display',
            'comment' => 'Used for adding to the list, detail, and edit views',
            'studio' => 
            array (
              'visible' => false,
              'listview' => true,
              'searchview' => false,
              'detailview' => true,
              'editview' => true,
              'formula' => false,
              'related' => false,
              'basic_search' => false,
              'advanced_search' => false,
              'popuplist' => true,
              'popupsearch' => false,
              'dashletsearch' => false,
              'dashlet' => false,
            ),
            'label' => 'LBL_SECURITYGROUP',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'emr_fd',
            'studio' => 'visible',
            'label' => 'LBL_EMR_FD',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'curr_fd_version',
            'studio' => 'visible',
            'label' => 'LBL_CURR_FD_VERSION',
          ),
          1 => 
          array (
            'name' => 'previous_fd_version',
            'studio' => 'visible',
            'label' => 'LBL_PREVIOUS_FD_VERSION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'connector_version',
            'label' => 'LBL_CONNECTOR_VERSION',
          ),
          1 => 
          array (
            'name' => 'amcc_cloud_version',
            'label' => 'LBL_AMCC_CLOUD_VERSION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_endpoint_name',
            'label' => 'LBL_ACCOUNT_ENDPOINT_NAME',
          ),
          1 => 
          array (
            'name' => 'cds_base_endpoint',
            'label' => 'LBL_CDS_BASE_ENDPOINT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fd_author_oid',
            'label' => 'LBL_FD_AUTHOR_OID',
          ),
          1 => 
          array (
            'name' => 'auto_update',
            'label' => 'LBL_AUTO_UPDATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'flex',
            'label' => 'LBL_FLEX',
          ),
          1 => 
          array (
            'name' => 'capd',
            'label' => 'LBL_CAPD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'web_proxy',
            'label' => 'LBL_WEB_PROXY',
          ),
          1 => 
          array (
            'name' => 'if_yes_pass_through_info',
            'label' => 'LBL_IF_YES_PASS_THROUGH_INFO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'other_config_needs',
            'studio' => 'visible',
            'label' => 'LBL_OTHER_CONFIG_NEEDS',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'fd_client_primary_dd',
            'studio' => 'visible',
            'label' => 'LBL_FD_CLIENT_PRIMARY_DD',
          ),
          1 => 
          array (
            'name' => 'fd_client_primary',
            'label' => 'LBL_FD_CLIENT_PRIMARY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fd_client_secondary_dd',
            'studio' => 'visible',
            'label' => 'LBL_FD_CLIENT_SECONDARY_DD',
          ),
          1 => 
          array (
            'name' => 'fd_client_secondary',
            'label' => 'LBL_FD_CLIENT_SECONDARY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'fd_other_client_dd',
            'studio' => 'visible',
            'label' => 'LBL_FD_OTHER_CLIENT_DD',
          ),
          1 => 
          array (
            'name' => 'fd_other_deploy',
            'label' => 'LBL_FD_OTHER_DEPLOY',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'os_version',
            'studio' => 'visible',
            'label' => 'LBL_OS_VERSION',
          ),
          1 => 
          array (
            'name' => 'other_devices',
            'label' => 'LBL_OTHER_DEVICES',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'foot_pedals',
            'label' => 'LBL_FOOT_PEDALS',
          ),
          1 => 
          array (
            'name' => 'hand_controls',
            'label' => 'LBL_HAND_CONTROLS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'keyboard_mode_required',
            'label' => 'LBL_KEYBOARD_MODE_REQUIRED',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'primary_mic',
            'studio' => 'visible',
            'label' => 'LBL_PRIMARY_MIC',
          ),
          1 => 
          array (
            'name' => 'primary_mic_desc',
            'label' => 'LBL_PRIMARY_MIC_DESC',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'secondary_mic',
            'studio' => 'visible',
            'label' => 'LBL_SECONDARY_MIC',
          ),
          1 => 
          array (
            'name' => 'secondary_mic_description',
            'label' => 'LBL_SECONDARY_MIC_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'other_mic',
            'studio' => 'visible',
            'label' => 'LBL_OTHER_MIC',
          ),
          1 => 
          array (
            'name' => 'other_mic_description',
            'label' => 'LBL_OTHER_MIC_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_emr',
            'studio' => 'visible',
            'label' => 'LBL_PRIMARY_EMR',
          ),
          1 => 
          array (
            'name' => 'primary_emr_description',
            'label' => 'LBL_PRIMARY_EMR_DESCRIPTION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'secondary_emr',
            'studio' => 'visible',
            'label' => 'LBL_SECONDARY_EMR',
          ),
          1 => 
          array (
            'name' => 'secondary_emr_description',
            'label' => 'LBL_SECONDARY_EMR_DESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'other_emr',
            'studio' => 'visible',
            'label' => 'LBL_OTHER_EMR',
          ),
          1 => 
          array (
            'name' => 'other_emr_description',
            'label' => 'LBL_OTHER_EMR_DESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'emr_hosted_by',
            'studio' => 'visible',
            'label' => 'LBL_EMR_HOSTED_BY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'virtualization_tools',
            'studio' => 'visible',
            'label' => 'LBL_VIRTUALIZATION_TOOLS',
          ),
          1 => 
          array (
            'name' => 'recognition_type',
            'studio' => 'visible',
            'label' => 'LBL_RECOGNITION_TYPE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'server_names',
            'label' => 'LBL_SERVER_NAMES',
          ),
          1 => 
          array (
            'name' => 'server_ip_addresses',
            'label' => 'LBL_SERVER_IP_ADDRESSES',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'remote_conn_method',
            'label' => 'LBL_REMOTE_CONN_METHOD',
          ),
          1 => 
          array (
            'name' => 'login_information',
            'label' => 'LBL_LOGIN_INFORMATION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'sso_configuration',
            'label' => 'LBL_SSO_CONFIGURATION',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'match_emr',
            'label' => 'LBL_MATCH_EMR',
          ),
          1 => 
          array (
            'name' => 'match_windows',
            'label' => 'LBL_MATCH_WINDOWS',
          ),
        ),
      ),
    ),
  ),
);
?>
