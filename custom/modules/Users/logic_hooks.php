<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_login'] = Array(); 
$hook_array['after_login'][] = Array(1, 'SugarFeed old feed entry remover', 'modules/SugarFeed/SugarFeedFlush.php','SugarFeedFlush', 'flushStaleEntries'); 
$hook_array['after_login'][] = Array(1, 'SuiteFeed old feed entry remover', 'modules/SuiteFeed/SuiteFeedFlush.php','SuiteFeedFlush', 'flushStaleEntries'); 
$hook_array['after_login'][] = Array(4, 'login tracker', 'custom/modules/Users/UsersLogicHookImplementation.php','UsersLogicHookImplementation', 'afterLogin'); 
$hook_array['before_logout'] = Array(); 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(3, 'role management', 'custom/modules/Users/UsersLogicHookImplementation.php','UsersLogicHookImplementation', 'afterSave'); 



?>