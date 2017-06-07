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
            'customCode' => '<input type="button" class="button" id="accept_button" value="{$MOD.LBL_ACCEPT}">',
          ),
          5 => 
          array (
            'customCode' => '<input type="button" class="button" id="return_to_requester" value="{$MOD.LBL_RETURN_TO_REQUESTER}">',
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
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'accounts_sa_fluency_one_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
