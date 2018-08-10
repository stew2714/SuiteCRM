<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/** 
 * Push the MessageDashlet to all users who do NOT have it installed on their dashboard
 */

global $current_user, $sugar_config, $current_language;
if (!is_admin($current_user)) {
    sugar_die("Unauthorized access to administration.");
}

$admin_mod_strings = return_module_language($current_language, 'Administration');   

echo getClassicModuleTitle(
        "Administration",
        array(
            "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
           $admin_mod_strings['LBL_SECURITYGROUPS_DASHLETPUSH_TITLE'],
           ),
        false
        );
        
require_once('include/utils.php');
//get all users
$users = get_user_array(false, "Active");

foreach($users as $user_id => $user_name) {

    $user = new User();
    $user->retrieve($user_id);
    
    //for testing only
    /**
    if($user_id != '1') {
        $user->resetPreferences();
        $user->savePreferencesToDB();   
        //continue;
    }
    */

    $dashlets = $user->getPreference('dashlets', 'Home');

    $has_dashlet = false;

    if(isset($dashlets)) {
        foreach($dashlets as $dashlet_id => $dashlet) {
            if(!empty($dashlet['className']) && $dashlet['className'] == 'MessageDashlet') {
                $has_dashlet = true;
                break; //skip this user
            }
        }
    }
    if($has_dashlet == true) {
        $GLOBALS['log']->debug("Existing MessageDashlet for user ".$user_id);        
        continue;
    }
    $GLOBALS['log']->debug("Adding MessageDashlet to user ".$user_id);

    $pages = $user->getPreference('pages', 'Home');
    
    //if no pages...new user...then setup first
    if(empty($pages)) {
        $GLOBALS['log']->debug("User $user_id has not yet logged in...They will get the MessageDashlet added via custom/modules/Home/dashlets.php");
        continue;
    }

    $dashlet_id = create_guid();
    $dashlets[$dashlet_id] = array ('className' => 'MessageDashlet',
                                      'module' => 'Home',
                                      'forceColumn' => 1,
                                      'fileLocation' => 'modules/SecurityGroups/Dashlets/MessageDashlet/MessageDashlet.php',
                                      );
    array_unshift($pages[0]['columns'][1]['dashlets'], $dashlet_id);
    
    $user->setPreference('dashlets', $dashlets, 0, 'Home');
    $user->setPreference('pages', $pages, 0, 'Home');
    $user->savePreferencesToDB();   

} //end for each user                

echo "Done";

