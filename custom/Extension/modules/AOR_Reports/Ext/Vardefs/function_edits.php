<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 18/04/17
 * Time: 13:48
 */
$dictionary['AOR_Report']['fields']['field_lines']= array (
        'required' => false,
        'name' => 'field_lines',
        'vname' => 'LBL_FIELD_LINES',
        'type' => 'function',
        'source' => 'non-db',
        'massupdate' => 0,
        'importable' => 'false',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => 0,
        'audited' => false,
        'reportable' => false,
        'function' =>
            array (
                'name' => 'display_field_lines',
                'returns' => 'html',
                'include' => 'custom/modules/AOR_Fields/fieldLines.php'
            ),
    );

$dictionary['AOR_Report']['fields']['condition_lines']=
        array (
            'required' => false,
            'name' => 'condition_lines',
            'vname' => 'LBL_CONDITION_LINES',
            'type' => 'function',
            'source' => 'non-db',
            'massupdate' => 0,
            'importable' => 'false',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'reportable' => false,
            'function' =>
                array (
                    'name' => 'display_condition_lines',
                    'returns' => 'html',
                    'include' => 'custom/modules/AOR_Conditions/conditionLines.php'
                ),
        );