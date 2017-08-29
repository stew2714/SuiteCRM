<?php
$module_name = 'AOR_MatrixReporting';
$viewdefs [$module_name] =
    array (
        'EditView' =>
            array (
                'templateMeta' =>
                    array (
                        'footerTpl' => 'modules/AOR_MatrixReporting/tpls/report.tpl',
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
                                        'file' => 'modules/AOR_MatrixReporting/js/EditView.js',
                                    ),
                                array (
                                    'file' => 'custom/modules/AOR_Reports/preview.js',
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
                        'form' =>
                            array (
                                'footerTpl' => 'modules/AOR_MatrixReporting/tpls/report.tpl',
                                'buttons' =>
                                    array (
                                        0 => 'SAVE',
                                        1 => 'CANCEL',
                                        2 =>
                                            array (
                                                'customCode' => '<input type="button" class="button" onClick="var 
_form = document.getElementById(\'EditView\');_form.return_action.value=\'EditView\' 
;_form.action.value=\'Save\'; if(check_form(\'EditView\'))SUGAR.ajaxUI.submitForm(_form);return false;" value="{$MOD.LBL_UPDATE}">',
                                            ),
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
                                        0 =>
                                            array (
                                                'name' => 'report_module',
                                                'studio' => 'visible',
                                            ),
                                    ),
                                2 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'actionfield',
                                                'studio' => 'visible',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'actiontypefield',
                                                'studio' => 'visible',
                                            ),
                                    ),
                                3 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'fieldx1',
                                                'studio' => 'visible',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'fieldy1',
                                                'studio' => 'visible',
                                            ),
                                    ),
                                4 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'fieldx2',
                                                'studio' => 'visible',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'fieldy2',
                                                'studio' => 'visible',
                                            ),
                                    ),
                                5 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'fieldx3',
                                                'studio' => 'visible',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'fieldy3',
                                                'studio' => 'visible',
                                            ),
                                    ),
                                6 =>
                                    array (
                                        0 => 'description',
                                        1 => 'condition_lines',
                                    ),
                            ),
                    ),
            ),
    );
?>