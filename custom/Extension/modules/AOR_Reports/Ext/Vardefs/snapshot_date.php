#<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 28/04/17
 * Time: 13:46
 */

$dictionary['AOR_Report']['fields']['snapshot_date']=  array(
                'name' => 'snapshot_date',
                'vname' => 'LBL_SNAPSHOT_DATE',
                'type' => 'datetimecombo',
                'dbType' => 'datetime',
                'group' => 'date_due',
                'studio' => array('required' => true, 'no_duplicate' => true),
                'enable_range_search' => true,
                'options' => 'date_range_search_dom',
            );
