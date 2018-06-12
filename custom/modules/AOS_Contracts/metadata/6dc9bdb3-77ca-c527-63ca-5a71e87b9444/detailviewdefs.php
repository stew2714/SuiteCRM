<?php
$module_name = 'AOS_Contracts';
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
          0 => 
          array (
            'customCode' => '{if $ACTIVATED === false}<input title="Edit" accesskey="i" class="button primary" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'DetailView\'; _form.return_id.value=\'{$recordID}\'; _form.action.value=\'EditView\';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="Edit">{/if}',
          ),
          1 => 
          array (
            'customCode' => '<input title="Duplicate" accesskey="u" class="button" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'DetailView\'; _form.isDuplicate.value=true; _form.action.value=\'EditView\'; _form.return_id.value=\'{$recordID}\';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="Duplicate" id="duplicate_button">',
          ),
          2 => 
          array (
            'customCode' => '<input title="Delete" accesskey="d" class="button" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'ListView\'; _form.action.value=\'Delete\'; if(confirm(\'Are you sure you want to delete this record?\')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="Delete" id="delete_button">',
          ),
          3 => 
          array (
            'customCode' => '<input title="Find Duplicates" class="button" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'DetailView\'; _form.return_id.value=\'{$recordID}\'; _form.action.value=\'Step1\'; _form.module.value=\'MergeRecords\';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="Find Duplicates" id="merge_duplicate_button">',
          ),
          4 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
          5 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup(\'emailpdf\');" value="{$MOD.LBL_EMAIL_PDF}">',
          ),
          6 => 
          array (
            'customCode' => '{if $SALES_TEAM === true}<input type="button" class="button" id="submitRequest" value="{$MOD.LBL_BUTTON_SUBMIT_REQUEST}">{/if}',
          ),
          7 => 
          array (
            'customCode' => '{if $SALES_TEAM === true}<input type="button" class="button" id="cancelRequest" value="{$MOD.LBL_BUTTON_CANCEL_REQUEST}">{/if}',
          ),
          8 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="acceptRequestLegal" value="{$MOD.LBL_BUTTON_ACCEPT_REQUEST_LEGAL}">{/if}',
          ),
          9 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="returnToRequester" value="{$MOD.LBL_BUTTON_RETURN_TO_REQUESTER}">{/if}',
          ),
          10 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="redlineReview" value="{$MOD.LBL_BUTTON_MMODAL_RED_LINE_REVIEW}">{/if}',
          ),
          11 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="sendForSignatures" value="{$MOD.LBL_BUTTON_SEND_FOR_SIGNATURES}">{/if}',
          ),
          12 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="sendForReview" value="{$MOD.LBL_BUTTON_SEND_FOR_REVIEW}">{/if}',
          ),
          13 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true && $ACTIVATED === true && $bean->aclAccess("edit") && $OLD_AMENDMENT === false}<input title="{$MOD.LBL_BUTTON_AMEND}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById(\'formDetailView\'); _form.return_module.value=\'AOS_Contracts\'; _form.return_action.value=\'DetailView\'; _form.isDuplicate.value=true; _form.isAmendment.value=true; _form.action.value=\'EditView\'; _form.return_id.value=\'{$recordID}\';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Amend" value="{$MOD.LBL_BUTTON_AMEND}" id="amend_button">
                               {elseif $OLD_AMENDMENT === true}<input title="{$MOD.LBL_BUTTON_AMEND}" class="button" onclick="alert(\'{$MOD.LBL_OLD_AMENDMENT_WARNING}\')" type="button" name="Amend" value="{$MOD.LBL_BUTTON_AMEND}" id="amend_button">{/if} ',
          ),
          14 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="sendToCommOps" value="{$MOD.LBL_BUTTON_SEND_TO_COMM_OPS}">{/if}',
          ),
          15 => 
          array (
            'customCode' => '{if $COMMS_OP === true}<input type="button" class="button" id="acceptRequestCommsOps" value="{$MOD.LBL_BUTTON_ACCEPT_REQUEST_COMMS}">{/if}',
          ),
          16 => 
          array (
            'customCode' => '{if $COMMS_OP === true}<input type="button" class="button" id="sendLegal" value="{$MOD.LBL_BUTTON_SEND_TO_LEGAL_QUEUE}">{/if}',
          ),
          17 => 
          array (
            'customCode' => '{if $COMMS_OP === true}<input type="button" class="button" id="activateRequest" value="{$MOD.LBL_BUTTON_ACTIVATE_REQUEST}">{/if}',
          ),
        ),
        'footerTpl' => 'custom/modules/AOS_Contracts/tpls/modal.tpl',
        'javascript' => '{$REQUIREDFIELDS}',
      ),
      'maxColumns' => '2',
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/AOS_Contracts/js/DetailView.js',
        ),
      ),
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
      'syncDetailEditViews' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
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
          0 => '',
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
            'name' => 'agreements_number_and_amendment_c',
            'label' => 'LBL_AGREEMENTS_NUMBER_AND_AMENDMENT_C',
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
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
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
            'name' => 'apttus_requestor_name_c',
            'studio' => 'visible',
            'label' => 'LBL_APTTUS_REQUESTOR_NAME_C',
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
            'name' => 'apttus_request_date_c',
            'label' => 'LBL_APTTUS_REQUEST_DATE_C',
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
            'name' => 'apttus_special_terms_c',
            'label' => 'LBL_APTTUS_SPECIAL_TERMS_C',
          ),
          1 => 
          array (
            'name' => 'requires_po_c',
            'label' => 'LBL_REQUIRES_PO_C',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'total_contract_value',
            'label' => 'LBL_TOTAL_CONTRACT_VALUE',
          ),
          1 => 
          array (
            'name' => 'apttus_termination_notice_issue_date_c',
            'label' => 'LBL_APTTUS_TERMINATION_NOTICE_ISSUE_DATE_C',
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
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
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
          1 => 
          array (
            'name' => 'additionalusers',
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
              'dashlet' => true,
            ),
            'label' => 'LBL_ADDITIONALUSERS',
          ),
        ),
      ),
    ),
  ),
);
?>
