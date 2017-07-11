<?php

if(!class_exists('SecuritySuiteOutfittersLicense')) 
{
    class SecuritySuiteOutfittersLicense
    {
        /**
         * For validation via server-side. Whomever calls this should handle what to do in case of a failure.
         *
         * Check return for "!== true" as the error will be returned in the case that it didn't validate.
         *
         * returns true or else the error string
         */
        public static function isValid($thisModule=null)
        {
            if(empty($thisModule)) {
                global $currentModule;
                $thisModule = $currentModule;
            
                //if still empty...then get out of here...in an odd spot in SugarCRM
                if(empty($thisModule)) {
                    return true;
                }
            }

            //load license validation config
            require('modules/'.$thisModule.'/license/config.php');
        
            //check last validation
            require_once('modules/Administration/Administration.php');
            $administration = new Administration();
            $administration->retrieveSettings();
            $last_validation = $administration->settings['SugarOutfitters_'.$outfitters_config['shortname']];
            $trimmed_last = trim($last_validation); //to be safe...
            
            //make sure serialized string is not empty
            if (!empty($trimmed_last))
            {
                $last_validation = base64_decode($last_validation);
                $last_validation = unserialize($last_validation);
            
                //if enough time hasn't passed then just return the last result
                //even if the last result failed
                $frequency = $outfitters_config['validation_frequency'];
                $elapsed = (7 * 24 * 60 * 60); //default to weekly
                if($frequency == 'hourly') {
                    $elapsed = (60 * 60);
                } else if($frequency == 'daily') {
                    $elapsed = (24 * 60 * 60);
                }
            
                if(($last_validation['last_ran'] + $elapsed) >= time()) {
                    if($last_validation['last_result']['success'] === false) {
                        return $last_validation['last_result']['result'];
                    } else {
                        return true; 
                    }
                }
            }
            
            //otherwise continue with validation
            $validated = SecuritySuiteOutfittersLicense::doValidate($thisModule);
        
            $store = array(
                'last_ran' => time(),
                'last_result' => $validated,
            );
 
            $serialized = base64_encode(serialize($store));
            $administration->saveSetting('SugarOutfitters', $outfitters_config['shortname'], $serialized);
    
            if($validated['success'] === false) {
                return $validated['result'];
            } else {
                return true; 
            }
        }
        public static function getKey($thisModule=null)
        {
            if(empty($thisModule)) {
                global $currentModule;
                $thisModule = $currentModule;
            
                //if still empty...then get out of here...in an odd spot in SugarCRM
                if(empty($thisModule)) {
                    return null;
                }
            }
            require('modules/'.$thisModule.'/license/config.php');

            global $sugar_config;
            $key = empty($sugar_config['outfitters_licenses'][$outfitters_config['shortname']]) ? false : $sugar_config['outfitters_licenses'][$outfitters_config['shortname']];

            return $key;
        }
        /**
         * For validation via client-side (used by License Configuration form)
         *
         * Does NOT obey the validation_frequency setting. Validates every time.
         * This function is meant to be used only on the License Configuration screen for a specific add-on
         */
        public static function validate()
        {
            $json = getJSONobj();
            if(empty($_REQUEST['key'])) {
                header('HTTP/1.1 400 Bad Request');
                $response = "Key is required.";
                echo $json->encode($response);
                exit;
            }
        
            global $sugar_config, $currentModule;

            //load license validation config
            require('modules/'.$currentModule.'/license/config.php');

            $validated = SecuritySuiteOutfittersLicense::doValidate($currentModule,$_REQUEST['key']);

            $store = array(
                'last_ran' => time(),
                'last_result' => $validated,
            );

            require_once('modules/Administration/Administration.php');
            $administration = new Administration();
            $serialized = base64_encode(serialize($store));
            $administration->saveSetting('SugarOutfitters', $outfitters_config['shortname'], $serialized);
        
            if($validated['success'] === false) {
                header('HTTP/1.1 400 Bad Request');
            } else {
                //use config_override.php...config.php has a higher chance of having rights restricted on servers
                global $currentModule;

                //load license validation config
                require('modules/'.$currentModule.'/license/config.php');
            
                require_once('modules/Configurator/Configurator.php');
                $cfg = new Configurator();
                $cfg->config['outfitters_licenses'][$outfitters_config['shortname']] = $_REQUEST['key'];
                $cfg->handleOverride();     
            }

            echo $json->encode($validated['result']);
        }
    
        /**
         * Internal method that makes the actual API request
         *
         * returns array(
         *      success => true/false
         *      result    => result set returned by the server
         */
        public static function doValidate($thisModule,$key=null)
        {
            global $sugar_config;

            //load license validation config
            require('modules/'.$thisModule.'/license/config.php');
        
            //if no key is provided then look for an existing key
            $data = array();
            if(!empty($key)) 
            {
                $data['key'] = $key;
            }

            $response = SugarOutfitters_API::call($thisModule,'key/validate',$data,'get');

            if(empty($response['success']) || $response['success']!==true) 
            {
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::doValidate() failed: '.print_r($response,true));
            }

            return $response;
        }
    
        /**
         * Only meant to be ran from the scope of the main module. Uses $currentModule.
         */
        public static function change()
        {
            if(empty($_REQUEST['key'])) {
                header('HTTP/1.1 400 Bad Request');
                $response = "Key is required.";
                $json = getJSONobj();
                echo $json->encode($response);
                exit;
            }
            if(empty($_REQUEST['user_count'])) {
                header('HTTP/1.1 400 Bad Request');
                $response = "User count is required.";
                $json = getJSONobj();
                echo $json->encode($response);
                exit;
            }

            global $currentModule;

            //load license validation config
            require('modules/'.$currentModule.'/license/config.php');

            $data = array(
                'key' => $key,
                'user_count' => $_REQUEST['user_count'],
            );

            $response = SugarOutfitters_API::call($currentModule,'key/change',$data);

            //if it is not a 200 response assume a 400. Good enough for this purpose.
            if(empty($response['success']) || $response['success']!==true) 
            {
                header('HTTP/1.1 400 Bad Request');
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::change() failed: '.print_r($response,true));
            } 
            else 
            {
                require_once('modules/Administration/Administration.php');
                global $sugar_config, $sugar_version;
                $sugar_config['outfitters_licenses'][$outfitters_config['shortname']] = $_REQUEST['key'];
                rebuildConfigFile($sugar_config, $sugar_version);
            }

            $json = getJSONobj();
            echo $json->encode($response['result']);
            exit;
        }

        public static function get_current_plan($this_module)
        {
            if (empty($this_module))
            {
                // need the module name to get the proper config
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_current_plan: need the module name to get the proper config');
                return false;
            }

            // get the config data so we can lookup the plans they have setup
            require('modules/'.$this_module.'/license/config.php');

            if (empty($outfitters_config['plans']) || !is_array($outfitters_config['plans']))
            {
                // there is not a plans array
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_current_plan: there is not a plans array');
                return false;
            }

            $plans = $outfitters_config['plans'];

            // now go get the data we have from SO to see what plan is licensed
            $last_response = SecuritySuiteOutfittersLicense::get_last_response($this_module);

            if (empty($last_response['last_result']) or !is_array($last_response['last_result']))
            {
                // bad data in last response
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_current_plan: bad data in last response');
                return false;
            }

            $data = $last_response['last_result'];

            if (empty($data['result']['public_key']))
            {
                // no public key was provided in the last response
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_current_plan: no public key was provided in the last response. trying to validate manually...');

                $data = SecuritySuiteOutfittersLicense::doValidate('SecurityGroups');
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_current_plan: manual validation response: '.print_r($data,true));
                    
                $store = array(
                    'last_ran' => time(),
                    'last_result' => $data,
                );
                
                $serialized = base64_encode(serialize($store));
                
                require_once('modules/Administration/Administration.php');
                $administration = new Administration();
                $administration->saveSetting('SugarOutfitters', $outfitters_config['shortname'], $serialized);
        
                // now go get the data we have from SO to see what plan is licensed
                $last_response = SecuritySuiteOutfittersLicense::get_last_response($this_module);
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_current_plan: last response: '.print_r($last_response,true));
                
                if (empty($last_response['last_result']) or !is_array($last_response['last_result']))
                {
                    // bad data in last response
                    $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_current_plan: bad data in last response');
                    return false;
                }

                $data = $last_response['last_result'];
                
                if (empty($data['result']['public_key']))
                {
                    $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_current_plan: no public key was provided in the last response. we still have invalid public key.');
                    return false;
                }

                // we retrieved a valid public key, carry on
            }

            $public_key = $data['result']['public_key'];

            if (!array_key_exists($public_key, $plans))
            {
                // a plan could not be found for this public key
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_current_plan: a plan could not be found for this public key');
                return false;
            }

            return $plans[$public_key];
        }

        // need current private key 
        public static function cancel_upgrade($this_module)
        {
            if (empty($this_module))
            {
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::switch_plan: need the module name to get the proper config');
                return false;
            }
            
            $key = SecuritySuiteOutfittersLicense::getKey($this_module);

            if (empty($key))
            {
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::switch_plan: Valid license key required for switching.');
                return false;
            }

            $data = array(
                'key'=> $key,
            );

            $response = SugarOutfitters_API::call($this_module,'key/upgrade_trial_cancel',$data,'post');
            
            $json = getJSONobj();
            
            echo $json->encode($response['result']);
            exit;
        }
        // need current private key, public key
        // need switch_to public key
        // POST /api/v2/key/upgrade_trial_switch
        public static function switch_plan($this_module,$plan_id)
        {
            if (empty($this_module))
            {
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::switch_plan: need the module name to get the proper config');
                return false;
            }
            if (empty($plan_id))
            {
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::switch_plan: no plan_id found for switch.');
                return false;
            }

            $key = SecuritySuiteOutfittersLicense::getKey($this_module);

            if (empty($key))
            {
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::switch_plan: Valid license key required for switching.');
                return false;
            }

            $data = array(
                'plan_id'=> $plan_id,
                'key'=> $key,
            );
            $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::switch_plan: data: ' . print_r($data,true));
            
            $response = SugarOutfitters_API::call($this_module,'key/upgrade_trial_switch',$data,'post',false);
            
            $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::switch_plan: response: ' . print_r($response,true));
            
            $json = getJSONobj();
            
            echo $json->encode($response['result']);
            exit;
        }

        public static function get_switchable_plans($this_module)
        {
            //get current public key
            $last_response = SecuritySuiteOutfittersLicense::get_last_response($this_module);
            
            if( empty($last_response['last_result']['result']['public_key']))
            {
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_switchable_plans: no public key found in last response for ' . $this_module);
                $response = array(
                    'success'=> false,
                    'message'=> 'No public key found.',
                );
                $json = getJSONobj();
                echo $json->encode($response);
                exit;
            }
            $data = array(
                'public_key'=> $last_response['last_result']['result']['public_key'],
            );

            $response = SugarOutfitters_API::call($this_module,'key/switchable_plans',$data,'GET');
            
            $json = getJSONobj();
            
            echo $json->encode($response['result']);
            exit;
        }

        public static function get_last_response($this_module)
        {
            require('modules/'.$this_module.'/license/config.php');

            if (empty($outfitters_config) or !is_array($outfitters_config))
            {
                // invalid outfitters config data
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_last_response: invalid outfitters config data');
                return false;
            }

            if (empty($outfitters_config['shortname']))
            {
                // no shortname for this addon
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_last_response: no shortname for this addon');
                return false;
            }

            //check last validation
            require_once('modules/Administration/Administration.php');
            $administration = new Administration();
            $administration->retrieveSettings();
            $last_validation = $administration->settings['SugarOutfitters_'.$outfitters_config['shortname']];
            $trimmed_last = trim($last_validation); //to be safe...
            
            //make sure serialized string is not empty
            if (empty($trimmed_last))
            {
                // there isn't a past validation
                $GLOBALS['log']->fatal('SecuritySuiteOutfittersLicense::get_last_response: there is not a past validation');
                return false;
            }

            $response = unserialize(base64_decode($last_validation));

            $GLOBALS['log']->debug('SecuritySuiteOutfittersLicense::get_last_response: last_validation: '.print_r($response,true));
            return $response;
        }
    }  
}

if (!class_exists('SugarOutfitters_API'))
{
    class SugarOutfitters_API
    {
        private function get_default_payload($module,$custom_data = array())
        {
            global $sugar_config, $sugar_flavor, $db;
            $not_set_value = 'not set';
            $data = array();

            //load license validation config
            require('modules/'.$module.'/license/config.php');

            // set the key, check custom data first in case developer wants to explicitly set a key
            if (empty($custom_data['key'])){
                $data['key'] = empty($sugar_config['outfitters_licenses'][$outfitters_config['shortname']]) ? false : $sugar_config['outfitters_licenses'][$outfitters_config['shortname']];
            }else{
                $data['key'] = $custom_data['key'];
            }
            
            // set public key, check custom data first in case developer wants to explicitly set a public key
            if (empty($custom_data['public_key'])){
                $data['public_key'] = empty($outfitters_config['public_key']) ? $not_set_value : $outfitters_config['public_key'];
            }else{
                $data['public_key'] = $custom_data['public_key'];
            }
            
            // set user counts, check custom data first in case developer wants to explicitly set a user count
            if (empty($custom_data['user_count'])){
                $active_users = get_user_array(false,'Active','',false,'',' AND portal_only=0 AND is_group=0');
                $data['user_count'] = empty($active_users) ? 0 : count($active_users);
            }else{
                $data['user_count'] = $custom_data['user_count'];
            }

            // other user count types
            $active_group_users = get_user_array(false,'Active','',false,'',' AND portal_only=0 AND is_group=1');
            $data['group_user_count'] = empty($active_group_users) ? 0 : count($active_group_users);
            $active_admin_users = get_user_array(false,'Active','',false,'',' AND portal_only=0 AND is_group=0 AND is_admin=1');
            $data['admin_user_count'] = empty($active_admin_users) ? 0 : count($active_admin_users);
            
            // get sugar edition from global far
            $data['sugar_edition'] = empty($sugar_flavor) ? $not_set_value : $sugar_flavor;
            
            // get sugar fork
            $fork = 'SugarCRM';
            $data['sugar_fork'] = isset($sugar_config['suitecrm_version']) ? 'SuiteCRM' : $fork;
            
            // get sugar_config data
            $data['db_type'] = empty($sugar_config['dbconfig']['db_type']) ? $not_set_value : $sugar_config['dbconfig']['db_type'];
            $data['developerMode'] = (!empty($sugar_config['developerMode']) && $sugar_config['developerMode']===true) ? 'true' : 'false';
            $data['host_name'] = empty($sugar_config['host_name']) ? $not_set_value : $sugar_config['host_name'];
            $data['package_scan'] = (!empty($sugar_config['moduleInstaller']['packageScan']) && $sugar_config['moduleInstaller']['packageScan']===true) ? 'true' : 'false';
            $data['sugar_version'] = empty($sugar_config['sugar_version']) ? $not_set_value : $sugar_config['sugar_version'];
            $data['site_url'] = empty($sugar_config['site_url']) ? $not_set_value : $sugar_config['site_url'];
            
            // attempt to get addon version
            $data['addon_version'] = $not_set_value;
            if (!empty($outfitters_config['name']))
            {
                $result = $db->query("select version from upgrade_history where id_name = '".$db->quote($outfitters_config['name'])."' order by date_entered DESC");
                $row = $db->fetchByAssoc($result);
                if (!empty($row))
                {
                    $data['addon_version'] = empty($row['version']) ? $not_set_value : $row['version'];
                }
                else
                {
                    $data['addon_version'] = "No Versions Found";
                }
            }
            else
            {
                $data['addon_version'] = "Error: 'name' not set in outfitters_config.";
            }
            
            // process any metadata passed in
            // must be a php array, we will json_encode it for sending
            $data['metadata'] = '';
            if (!empty($custom_data['metadata']) && is_array($custom_data['metadata']))
            {
                $data['metadata'] = json_encode($custom_data['metadata']);
            }
            
            return $data;
        }
        
        public static function tag($action,$payload)
        {
            return true;
        }
        
        public static function call($module,$path,$custom_data=array(),$method='post',$get_default_payload=true)
        {
            if (empty($module))
            {
                return array(
                    'success' => false,
                    'result' => 'Module is not defined.'
                );
            }
            
            if (empty($path))
            {
                return array(
                    'success' => false,
                    'result' => 'API Call Path is not defined.'
                );
            }
            
            if (!is_array($custom_data))
            {
                return array(
                    'success' => false,
                    'result' => 'Data for API Call must be an array.'
                );
            }
            
            //load license validation config and generate url from config
            require('modules/'.$module.'/license/config.php');
            $url = $outfitters_config['api_url'] . '/' . $path;
            
            /**
            workaround for new calls
            the default payload data does not merge in other data from custom_data
            so if your param isn't being looked up in the default payload, it won't get added to data
            */
            // get default payload data
            if ($get_default_payload === true)
            {
                $data = static::get_default_payload($module,$custom_data);
            }
            else
            {
                $data = $custom_data;
            }
            
            if(empty($data['key']))
            {
                return array(
                    'success' => false,
                    'result' => 'Key could not be found locally. Please go to the license configuration tool and enter your key.'
                );
            }
            
            $ch = curl_init();

            // setup data based on type of request
            if ($method === 'post')
            {
                curl_setopt($ch, CURLOPT_POST, 1); 
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
            }
            else
            {
                $url .= '?' . http_build_query($data);
            }
            
            curl_setopt($ch, CURLOPT_URL, $url); 
            curl_setopt($ch, CURLOPT_FAILONERROR, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
            
            $response = curl_exec($ch);
            $info = curl_getinfo($ch);
            curl_close($ch);

            $json = getJSONobj();
            $result = $json->decode($response);

            //if it is not a 200 response assume a 400. Good enough for this purpose.
            if($info['http_code'] == 0)
            {
                $GLOBALS['log']->fatal('SugarOutfitters_API::call(): Unable to validate license. Please configure the firewall to allow requests to '.$outfitters_config['api_url'].'/key/validate and make sure that SSL certs are up to date on the server.');
                return array(
                        'success' => false,
                        'result' => 'SugarOutfitters_API::call(): Unable to validate the license key. Please configure the firewall to allow requests to '.$outfitters_config['api_url'].'/key/validate and make sure that SSL certs are up to date on the server.'
                    );
            }
            else if($info['http_code'] != 200)
            {
                $GLOBALS['log']->fatal('SugarOutfitters_API::call(): HTTP Request failed: '.print_r($info,true));
                return array(
                    'success' => false,
                    'result' => $result
                );
            } 
            else 
            {
                return array(
                    'success' => true,
                    'result' => $result
                );
            }
        }
    }
}
