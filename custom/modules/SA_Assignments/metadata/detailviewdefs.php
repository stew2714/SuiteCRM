<?php
$module_name = 'SA_Assignments';
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
          4 => array (
            'customCode' => '<input type="button" class="button" onClick="inviteParticipants();" value="{$MOD.LBL_INVITE_PARTICIPANTS}">',
          ),
        ),
        'footerTpl' => 'modules/SA_Assignments/tpls/inviteParticipants.tpl',
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
     'includes' =>
        array (
            0 =>
            array (
                'file' => 'modules/SA_Assignments/js/inviteParticipants.js',
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
            'name' => 'sa_courses_sa_assignments_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
