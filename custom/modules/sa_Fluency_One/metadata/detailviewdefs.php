<?php
$module_name = 'sa_Fluency_One';
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
            'customCode' => '{if $COMMS_OP === true}<input type="button" class="button" id="accept_button" value="{$MOD.LBL_ACCEPT}">{/if}',
          ),
          5 => 
          array (
            'customCode' => '{if $COMMS_OP === true}<input type="button" class="button" id="return_to_requester" value="{$MOD.LBL_RETURN_TO_REQUESTER}">{/if}',
          ),
          6 => 
          array (
            'customCode' => '{if $SALES_TEAM === true}<input type="button" class="button" id="assign_to_comms_op" value="{$MOD.LBL_REQUEST_FLUENCYONE_PRICING}">{/if}',
          ),
        ),
        'footerTpl' => 'modules/sa_Fluency_One/tpls/modal.tpl',
      ),
      'maxColumns' => '2',
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/sa_Fluency_One/js/DetailView.js',
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
      'tabDefs' => 
      array (
        'DEFAULT' => 
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'accounts_sa_fluency_one_1_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'requested_user_id',
            'label' => 'LBL_REQUESTED_USER_ID',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'assigned_security_group_id',
            'label' => 'LBL_ASSIGNED_SECURITY_GROUP',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_requested_c',
            'label' => 'LBL_DATE_REQUESTED_C',
          ),
        ),
      ),
    ),
  ),
);
?>
