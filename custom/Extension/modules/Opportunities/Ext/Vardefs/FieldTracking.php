<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 31/05/17
 * Time: 15:50
 */

$dictionary["Opportunity"]["fields"]["fieldtrackinghistory_opportunities"] = array (
    'name' => 'fieldtrackinghistory_opportunities',
    'type' => 'link',
    'relationship' => 'fieldtrackinghistory_opportunities',
    'source' => 'non-db',
    'module' => 'sa_Tracking_History',
    'bean_name' => 'sa_Tracking_History',
    'vname' => 'LBL_FIELD_TRACKING_HISTORY',
);

$dictionary["Opportunity"]["fields"]["probability"]['type'] = 'float';
$dictionary["Opportunity"]["fields"]["probability"]['precision'] = '2';
$dictionary["Opportunity"]["fields"]["probability"]['len'] = '50';
unset($dictionary["Opportunity"]["fields"]["probability"]['dbType']);

