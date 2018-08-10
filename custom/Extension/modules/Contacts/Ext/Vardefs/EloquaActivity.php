<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 31/05/17
 * Time: 15:50
 */

$dictionary["Contact"]["fields"]["contacts_sa_eloqua_tracking"] = array (
    'name' => 'contacts_sa_eloqua_tracking',
    'type' => 'link',
    'relationship' => 'contacts_sa_eloqua_tracking',
    'source' => 'non-db',
    'module' => 'SA_eloqua_activity',
    'bean_name' => 'sa_eloqua_activity',
    'vname' => 'LBL_ELOQUA_ACTIVITY',
);

$dictionary['Contact']['fields']['eloqua_id_c'] = array(
    'name' => 'eloqua_id_c',
    'vname' => 'LBL_ELOQUA_ID',
    'type' => 'int',
    'len' => 5,
    'default' => 0,
    'reportable' => false,
    'source' => 'custom_fields',
);