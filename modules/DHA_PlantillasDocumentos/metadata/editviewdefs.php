<?php

global $app_list_strings;
$count_roles = count($app_list_strings['dha_plantillasdocumentos_roles_dom']);

$module_name = 'DHA_PlantillasDocumentos';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => array (
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
      'javascript' => '<script type="text/javascript" src="include/javascript/popup_parent_helper.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
                       <script type="text/javascript" src="include/javascript/jsclass_base.js"></script>
                       <script type="text/javascript" src="include/javascript/jsclass_async.js"></script>
                       <script type="text/javascript" src="modules/Documents/documents.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'document_name',
            'displayParams' => 
            array (
              'size' => '60',
            ),
          ),
          
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'modulo',
            'studio' => 'visible',
            'label' => 'LBL_MODULO',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'idioma',
            'studio' => 'visible',
            'label' => 'LBL_IDIOMA_PLANTILLA',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'status_id',
          1 => '',
        ),
        5 => 
        array (
          0 => 'category_id',
          1 => '',
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'aclroles',
            'customLabel' => '<span>{sugar_translate label=\'LBL_ROLES_WITH_ACCESS\' module=$fields.parent_type.value}<br>(<i>{sugar_translate label=\'LBL_ROLES_WITH_ACCESS_HELP\' module=$fields.parent_type.value}</i>) </span>',
            'displayParams' => array (
              'size' => ($count_roles > 20)? 20 : ($count_roles < 5)? 5 : $count_roles,
            ),            
          ),
          1 => '',
        ),        
      ),
    ),
  ),
);
?>
