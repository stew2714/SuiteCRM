<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 26/06/18
 * Time: 14:20
 */


$dictionary['Note']['fields']['meeting_link_c']['name']='meeting_link_c';
$dictionary['Note']['fields']['meeting_link_c']['len']='36';
$dictionary['Note']['fields']['meeting_link_c']['type']='id';

$dictionary['Note']['fields']['meeting_link_name_c'] =
                array(
                    'name' => 'meeting_link_name_c',
                    'rname' => 'name',
                    'id_name' => 'meeting_link_c',
                    'vname' => 'LBL_MEETING_LINK_NAME',
                    'join_name' => 'meetings',
                    'type' => 'relate',
                    'link' => 'meetings',
                    'table' => 'meetings',
                    'isnull' => 'true',
                    'module' => 'Meetings',
                    'dbType' => 'varchar',
                    'len' => '255',
                    'source' => 'non-db',
                    'unified_search' => true,
                );