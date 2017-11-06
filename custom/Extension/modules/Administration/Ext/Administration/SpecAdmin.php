<?php
$admin_option_defs = array();

$admin_option_defs['Administration']['the_name'] = array('NewLink', 'Track User Login', 'Track Users Login Record', './index.php?module=spec_logtrack&action=ListView');

$admin_group_header[] = array('Log Track', '', false, $admin_option_defs, 'Track Users Login Record');


