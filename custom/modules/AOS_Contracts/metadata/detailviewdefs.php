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
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
            'customCode' => '{if $SALES_TEAM === true}<input type="button" class="button" id="sendToLegal" value="Send to Legal Queue">{/if}',
          ),
          7 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="acceptRequestLegal" value="Accept Request">{/if}',
          ),
          8 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="returnToRequester" value="Return to Requester">{/if}',
          ),
          9 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="redlineReview" value="M*Modal Redline Review">{/if}',
          ),
          10 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="informCommOps" value="Send for Signatures">{/if}',
          ),
          11 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="submitToCommOps" value="Submit to Comm Ops">{/if}',
          ),
          12 => 
          array (
            'customCode' => '{if $LEGAL_TEAM === true}<input type="button" class="button" id="acceptRequestLegal" value="Accept Request">{/if}',
          ),
        ),
        'footerTpl' => 'custom/modules/AOS_Contracts/tpls/modal.tpl',
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
      'useTabs' => true,
      'syncDetailEditViews' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
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
          0 => 'name',
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'total_contract_value',
            'label' => 'LBL_TOTAL_CONTRACT_VALUE',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'label' => 'LBL_START_DATE',
          ),
          1 => 
          array (
            'name' => 'contract_account',
            'label' => 'LBL_CONTRACT_ACCOUNT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'end_date',
            'label' => 'LBL_END_DATE',
          ),
          1 => 
          array (
            'name' => 'contact',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'renewal_reminder_date',
            'label' => 'LBL_RENEWAL_REMINDER_DATE',
          ),
          1 => 
          array (
            'name' => 'opportunity',
            'label' => 'LBL_OPPORTUNITY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'customer_signed_date',
            'label' => 'LBL_CUSTOMER_SIGNED_DATE',
          ),
          1 => 
          array (
            'name' => 'contract_type',
            'studio' => 'visible',
            'label' => 'LBL_CONTRACT_TYPE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'company_signed_date',
            'label' => 'LBL_COMPANY_SIGNED_DATE',
          ),
        ),
        7 => 
        array (
          0 => 'description',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
      ),
    ),
  ),
);
?>
