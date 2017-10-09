<?php

if(!defined('sugarEntry'))define('sugarEntry', true);


require_once('service/v4_1/SugarWebServiceImplv4_1.php');
require_once('service/v4_1/SugarWebServiceUtilv4_1.php');

class gmsync  extends SugarWebServiceImplv4_1 
{
    function gmsync_version()
    {
        return "1.9.4";
    }

    function gmsync_sudo_user($session, $user_name, $license_check=0)
    {
        require_once('soap/SoapError.php');
        $GLOBALS['log']->info('Begin: gmsync_sudo_user; user: '.$user_name.' check: '.$license_check);
        $error = new SoapError();
        global $current_user;

        /// Ensure the account has been authenticated.
        if( !(self::$helperObject->validate_authenticated($session)) )
        {
            $error->set_error('invalid_login');
            return $error->get_soap_array();
        }        
        
        require_once('modules/GMSyncAddon/license/OutfittersLicense.php'); 
        
        if($license_check)
        {
          if(!empty($session))
          {
            if(
              empty($user_name)
              ||
              $user_name==$current_user->user_name
              )
              {
                $validate_license = OutfittersLicense::isValid("GMSyncAddon",$current_user->id); 
                if($validate_license !== true) 
                {
                  $error->set_error('no_access');
                }
                return $error->get_soap_array();
              }
          }
        }

        /// Input validation
        if(empty($session) || empty($user_name))
        {
            $error->set_error('invalid_login');
            return $error->get_soap_array();
        }
        
        if(!empty($session) && ($user_name==$current_user->user_name) )
        {
            // SUDO not needed
            return $error->get_soap_array();
        }

        //$GLOBALS['log']->fatal("current_user: ".print_r($current_user, true));
        $GLOBALS['log']->fatal("current_user: $current_user->name, $current_user->is_admin");
        /// Only Admin users can use the functionality.
        /// Note: Here we could potentially add an additional ACL
        if(!is_admin($current_user))
        {
            /// oopps.... Not admin-equivalent!
            $error->set_error('no_access');
            $GLOBALS['log']->fatal("Not admin!");
        }
        else
        {
            /// Initialization
            $sudo_user = new User();
            $GLOBALS['log']->fatal("Retrieving");

            /// Get guid for $user_name
            $sudo_id = $sudo_user->retrieve_user_id($user_name);

            if(!$sudo_id)
            {
                /// $user_name does not exist.
                $error->set_error('invalid_login');
            }
            else
            {
                /// $user_name exists.
                $GLOBALS['log']->fatal("$user_name exists");

                /// Fill the $sudo_user object
                $sudo_user->retrieve($sudo_id);

                /// Do "Impersonate"
                $current_user = $sudo_user;
                $_SESSION['user_id'] = $sudo_id;
                
                if($license_check)
                {
                  $validate_license = OutfittersLicense::isValid("GMSyncAddon",$current_user->id); 
                  if($validate_license !== true) 
                  {
                    $error->set_error('no_access');
                    return $error->get_soap_array();
                  }
                }
            }
        }

        /// Return results
        return $error->get_soap_array();
    }
    
    function push_curr_user()
    {
        global $current_user;
        global $current_user_push;
        global $current_user_id_push;
        
        $current_user_push = $current_user;
        $current_user_id_push = $_SESSION['user_id'];
    }
    
    function pop_curr_user()
    {
        global $current_user;
        global $current_user_push;
        global $current_user_id_push;
        
        $current_user = $current_user_push;
        $_SESSION['user_id'] = $current_user_id_push;
    }
    
    function new_module_item($module_name)
    {
        global  $beanList, $beanFiles;

        $class_name = $beanList[$module_name];
        require_once($beanFiles[$class_name]);
        
        switch($module_name)
        {        
            case 'Leads': return new Lead();
            case 'Cases': return new aCase();
            case 'Bugs': return new Bug();
            case 'ProspectLists': return new ProspectList();
            case 'Prospects': return new Prospect();
            case 'Project': return new Project();
            case 'ProjectTask': return new ProjectTask();
            case 'Campaigns': return new Campaign();
            case 'EmailMarketing': return new EmailMarketing();
            case 'CampaignLog': return new CampaignLog();
            case 'CampaignTrackers': return new CampaignTracker();
            case 'Releases': return new Release();
            case 'Groups': return new Group();
            case 'EmailMan': return new EmailMan();
            case 'Schedulers': return new Scheduler();
            case 'SchedulersJobs': return new SchedulersJob();
            case 'Contacts': return new Contact();
            case 'Accounts': return new Account();
            case 'DynamicFields': return new DynamicField();
            case 'EditCustomFields': return new FieldsMetaData();
            case 'Opportunities': return new Opportunity();
            case 'EmailTemplates': return new EmailTemplate();
            case 'UserSignatures': return new UserSignature();
            case 'Notes': return new Note();
            case 'Calls': return new Call();
            case 'Emails': return new Email();
            case 'Meetings': return new Meeting();
            case 'Tasks': return new Task();
            case 'Users': return new User();
            case 'Currencies': return new Currency();
            case 'Trackers': return new Tracker();
            case 'Connectors': return new Connectors();
            case 'TrackerSessions': return new TrackerSession();
            case 'TrackerPerfs': return new TrackerPerf();
            case 'TrackerQueries': return new TrackerQuery();
            case 'Import_1': return new ImportMap();
            case 'Import_2': return new UsersLastImport();
            case 'Versions': return new Version();
            case 'Administration': return new Administration();
            case 'vCals': return new vCal();
            case 'CustomFields': return new CustomFields();
            case 'Documents': return new Document();
            case 'DocumentRevisions': return new DocumentRevision();
            case 'Roles': return new Role();
            case 'Audit': return new Audit();
            case 'Styleguide': return new Styleguide();
            case 'InboundEmail': return new InboundEmail();
            case 'SavedSearch': return new SavedSearch();
            case 'UserPreferences': return new UserPreference();
            case 'MergeRecords': return new MergeRecord();
            case 'EmailAddresses': return new EmailAddress();
            case 'EmailText': return new EmailText();
            case 'Relationships': return new Relationship();
            case 'Employees': return new Employee();
            case 'Reports': return new SavedReport();
            case 'Reports_1': return new SavedReport();
            case 'Teams': return new Team();
            case 'TeamMemberships': return new TeamMembership();
            case 'TeamSets': return new TeamSet();
            case 'TeamSetModules': return new TeamSetModule();
            case 'Quotes': return new Quote();
            case 'RevenueLineItems': return new RevenueLineItem();
            case 'Products': return new Product();
            case 'ProductBundles': return new ProductBundle();
            case 'ProductBundleNotes': return new ProductBundleNote();
            case 'ProductTemplates': return new ProductTemplate();
            case 'ProductTypes': return new ProductType();
            case 'ProductCategories': return new ProductCategory();
            case 'Manufacturers': return new Manufacturer();
            case 'Shippers': return new Shipper();
            case 'TaxRates': return new TaxRate();
            case 'TeamNotices': return new TeamNotice();
            case 'TimePeriods': return new TimePeriod();
            case 'AnnualTimePeriods': return new AnnualTimePeriod();
            case 'QuarterTimePeriods': return new QuarterTimePeriod();
            case 'Quarter544TimePeriods': return new Quarter544TimePeriod();
            case 'Quarter445TimePeriods': return new Quarter445TimePeriod();
            case 'Quarter454TimePeriods': return new Quarter454TimePeriod();
            case 'MonthTimePeriods': return new MonthTimePeriod();
            case 'Forecasts': return new Forecast();
            case 'ForecastWorksheets': return new ForecastWorksheet();
            case 'ForecastManagerWorksheets': return new ForecastManagerWorksheet();
            case 'ForecastSchedule': return new ForecastSchedule();
            case 'ForecastOpportunities': return new ForecastOpportunities();
            case 'ForecastDirectReports': return new ForecastDirectReports();
            case 'Quotas': return new Quota();
            case 'WorkFlow': return new WorkFlow();
            case 'WorkFlowTriggerShells': return new WorkFlowTriggerShell();
            case 'WorkFlowAlertShells': return new WorkFlowAlertShell();
            case 'WorkFlowAlerts': return new WorkFlowAlert();
            case 'WorkFlowActionShells': return new WorkFlowActionShell();
            case 'WorkFlowActions': return new WorkFlowAction();
            case 'Expressions': return new Expression();
            case 'Contracts': return new Contract();
            case 'KBDocuments': return new KBDocument();
            case 'KBDocumentRevisions': return new KBDocumentRevision();
            case 'KBTags': return new KBTag();
            case 'KBDocumentKBTags': return new KBDocumentKBTag();
            case 'KBContents': return new KBContent();
            case 'ContractTypes': return new ContractType();
            case 'Holidays': return new Holiday();
            case 'ProjectResources': return new ProjectResource();
            case 'System': return new System();
            case 'Empty': return new EmptyBean();
            case 'TeamHierarchy': return new TeamHierarchy();
            case 'UpgradeHistory': return new UpgradeHistory(); 
        }
        
        $GLOBALS['log']->fatal("Unable to create item of type: $class_nam for module: $module_name");
        return null;
    }

    function gmsync_get_all_modified_items($session, $json)
    {
        /*
{
    users: [
        {
            user:"login1", 
            modules: [
            {
              name: "Accounts",
              since: "dt_since_1",
              order_by: "",
              filter: "account_type in ('Partner') and assigned_user_id='login1_id'", // SQL filter. We still need to decide if we need v7-style filtering here. Probably SQL is simpler
              options: {select:'All'} // here come additional module-specific options to be used in query such as "sync_to_outlook", "My", "All"
            }, 
            {
              name: "Contacts",
              since: "dt_since_2",
              order_by: "",
              filter: "account_type in ('Partner') and assigned_user_id='login2_id'",
              options: {select:'All'} // here come additional module-specific options to be used in query such as "sync_to_outlook", "My", "All"
            }, 
            ...
          ],
        },
        {
            user:"login1", 
            modules: [
                {
                    name: "Accounts",
                    since: "dt_since_1"
                    filter: "",
                    options: {...}
                }, 
                {
                    name: "Contacts",
                    since: "dt_since_2"
                    filter: "",
                }, 
                ...
            ]
        },
    ...               
    ]
}

         */
        global $current_user;
        
        require_once('soap/SoapError.php');
        $GLOBALS['log']->info('Begin: gmsync_sudo_user');

        $error = new SoapError();


        /// Ensure the account has been authenticated.
        if( !(self::$helperObject->validate_authenticated($session)) )
        {
            $error->set_error('invalid_login');
            return $error->get_soap_array();
        }
        
        
        $resp = array();
        $GLOBALS['log']->info('Begin: gmsync_get_all_modified_items');
        $resp["users"] = array();
      
        foreach($json["users"] as $jsonUser)
        {
            $login = $jsonUser["user"];
            $this->push_curr_user();
            
            $GLOBALS['log']->info('Begin: user: '.$login);
            $error = new SoapError();
            
            $error = $this->gmsync_sudo_user($session, $login);
            $resuser = array(
                "user_id"=>$current_user->id,
                "user_name"=>$login,
                "error"=>$error
            );
            $resuser["modules"] = array();
            
            foreach($jsonUser["modules"] as $jsonUserModule)
            {
                
                $resmodule = array();
                $modname = $jsonUserModule["name"];
                $modsince = $jsonUserModule["since"];
                $modfilter = $jsonUserModule["filter"];
                $modorderby = $jsonUserModule["order_by"];
                $modopts = $jsonUserModule["options"];
                $deleted = 0;
                
                if( array_key_exists("deleted", $modopts) && intval($modopts["deleted"])>0 )
                {
                    $deleted = 1;
                }

                global  $beanList, $beanFiles;

                $seed = $this->new_module_item($modname);

                $modopts["Crm.User"] = $current_user->id;
                $modopts["Sugar.Table"] = $seed->table_name;
                
                // TODO: Process filter options here
                foreach($modopts as $optname=>$optval)
                {
                    $modfilter = str_replace("%$optname%", $optval, $modfilter);
                }
                        
                global $timedate;
                // Now depending on other options find appropriate selection methods
                $resmodule["query_time"] = $timedate->getNow()->asDb();
                
                $entry_list = array();
                
                if($modname=="Contacts" && $modopts["ChooseContacts"]=="SyncToOutlook")
                {
                    $tomorrow = $timedate->getNow()->get("+1 day")->asDb();
                    $entry_list = $this->get_modified_relationships(
                            "Users",//$module_name, 
                            $modname,//$related_module, 
                            $modsince,//$from_date, 
                            $tomorrow, //$to_date, 
                            $deleted,//$deleted=0, 
                            $current_user->id,//$module_user_id = '', 
                            array("id", "date_modified", "deleted", "first_name", "last_name"),//$select_fields = array(), 
                            '',//$relationship_name = '', 
                            null//$deletion_date = ''
                            );
                    
                } else  if( ($modname=="Meetings" || $modname=="Calls") && $modopts["DontUseModSyncItems"]=="n")
                {
                     global $timedate;
                    $tomorrow = $timedate->getNow()->get("+1 day")->asDb();
                    $entry_list = $this->get_modified_relationships(
                            "Users",//$module_name, 
                            $modname,//$related_module, 
                            $modsince,//$from_date, 
                            $tomorrow, //$to_date, 
                            $deleted,//$deleted=0, 
                            $current_user->id,//$module_user_id = '', 
                            array("id", "date_modified", "deleted", "name"),//$select_fields = array(), 
                            '',//$relationship_name = '', 
                            null//$deletion_date = ''
                            );                   
                } else {
                    if($modname=="Contacts" && $modopts["ChooseContacts"]=="My")
                    {
                        //" ( contacts.assigned_user_id='" + SugarWrapper.ImpersonateUserId + "' ) ";
                        $modfilter = " ( contacts.assigned_user_id='{$current_user->id}' ) ";
                    } 
                    $entry_list = $this->get_entry_list_short($modname, $modsince, $modfilter, $modorderby, $deleted );                    
                }
                $resmodule["module_name"] = $modname;
                $resmodule["updated_since_time"] = $modsince;
                if(isset($entry_list["entries"]))
                {
                    $resmodule["result_count"] = $entry_list["result_count"];
                    $resmodule["entries"] = $entry_list["entries"];
                } else {
                    $resmodule["error"] = $entry_list;                    
                }
                
                $resuser["modules"][] = $resmodule;
            }
            
            $resp["users"][] = $resuser;
                   
            $this->pop_curr_user();
        }

        /*
        $resp["users"] = array();
        $resp["users"][] = array(
            "name"=>"user1",
            "modules"=>array(
                array(
                    "name"=>"Accounts",
                    "query_time"=>"2015-05-30 10:00:00.123",
                    "entries" => array(
                        array(
                            "id"=>"id1",
                            "date_modified"=>"2015-05-01 1:00:00.123"
                        ),
                        array(
                            "id"=>"id2",
                            "date_modified"=>"2015-05-02 2:00:00.123"
                        ),
                    )
                )
            )
        );
         */

        //return json_encode($resp);
        return $resp;
    }

    function get_entry_list_short($module_name, $modified_since, $query, $order_by, $deleted ){
        global  $beanList, $beanFiles;
        $error = new SoapError();

        if(empty($beanList[$module_name])){
            $error->set_error('no_module');
            return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
        }
        global $current_user;
        if( !(self::$helperObject->check_modules_access($current_user, $module_name, 'read')) ){
                $error->set_error('no_access');
                return array('result_count'=>-1, 'entries'=>array(), 'error'=>$error->get_soap_array());
        }


        $class_name = $beanList[$module_name];
        require_once($beanFiles[$class_name]);
        //$seed = new $class_name();
        $seed = $this->new_module_item($module_name);

        require_once 'include/SugarSQLValidate.php';
        $valid = new SugarSQLValidate();
        if(!$valid->validateQueryClauses($query, $order_by)){
            $GLOBALS['log']->error("Bad query: $query $order_by");
            $error->set_error('no_access');
            return array(
                        'result_count' => -1,
                        'error' => $error->get_soap_array()
            );
        }

        $modquery = "(".$seed->table_name.".date_modified >".db_convert("'".$GLOBALS['db']->quote($modified_since)."'", 'datetime')." )";

        if($query == ''){
            $query = $modquery;
        } else {
            $query .= " AND ".$modquery;            
        }
        $offset = 0;
        $max  = 2048;
        $output_list = array();

        /* */
        do
        {
            set_time_limit(10000);

            $response = $seed->get_list($order_by, $query, $offset,$max,$max,$deleted,true);
            $list = $response['list'];

            
            foreach($list as $entry)
            {
                $item = array(
                    "id"=>$entry->id,
                    //"name"=>$entry->name,
                    "deleted"=>$entry->deleted,
                    "date_modified"=>$entry->date_modified
                );
                $output_list[] = $item;
            }
            $offset = $response['next_offset'];
            $GLOBALS['log']->info("gmsync: Items read: ".count($output_list) );
        } while( count($list)>0 );
         /* */
        /*
        //get_full_list
        $response = $seed->get_full_list($order_by, $query, true, $deleted);
        //$query = $seed->create_new_list_query($order_by, $query, $select_fields,array(), $show_deleted,'',false,null,$singleSelect);
        
        $list = $response;

        foreach($list as $entry)
        {
            $item = array(
                "id"=>$entry->id,
                "name"=>$entry->name,
                "deleted"=>$entry->deleted,
                "date_modified"=>$entry->date_modified
            );
            $output_list[] = $item;
        }
        $offset = $response['next_offset'];
         * 
         */

        return array('result_count'=>sizeof($output_list), 'entries'=>$output_list, 'error'=>$error->get_soap_array());
}

    /**
     * get_modified_relationships
     *
     * Get a list of the relationship records that have a date_modified value set within a specified date range.  This is used to
     * help facilitate sync operations.  The module_name should be "Users" and the related_module one of "Meetings", "Calls" and
     * "Contacts".
     *
     * @param xsd:string $module_name String value of the primary module to retrieve relationship against
     * @param xsd:string $related_module String value of the related module to retrieve records off of
     * @param xsd:string $from_date String value in YYYY-MM-DD HH:MM:SS format of date_start range (required)
     * @param xsd:string $to_date String value in YYYY-MM-DD HH:MM:SS format of ending date_start range (required)
     * @param xsd:int $deleted Integer value indicating deleted column value search (defaults to 0).  Set to 1 to find deleted records
     * @param xsd:string $module_user_id String value of the user id (optional, but defaults to SOAP session user id anyway)  The module_user_id value
     * here ought to be the user id of the user initiating the SOAP session
     * @param tns:select_fields $select_fields Array value of fields to select and return as name/value pairs
     * @param xsd:string $relationship_name String value of the relationship name to search on
     * @param xsd:string $deletion_date String value in YYYY-MM-DD HH:MM:SS format for filtering on deleted records whose date_modified falls within range
     * this allows deleted records to be returned as well
     *
     * @return Array records that match search criteria
     */
    function get_modified_relationships($module_name, $related_module, $from_date, $to_date, $deleted=0, $module_user_id = '', $select_fields = array(), $relationship_name = '', $deletion_date = ''){
        global  $beanList, $beanFiles;
        $error = new SoapError();
        $output_list = array();

        self::$helperObject = new SugarWebServiceUtilv4_1();

        if(empty($beanList[$module_name]) || empty($beanList[$related_module]))
        {
            $error->set_error('no_module');
            return array('result_count'=>0, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
        }

        global $current_user;

        global $sugar_config;
        $sugar_config['list_max_entries_per_page'] = '-99';

        // Cast to integer
        $deleted = (int)$deleted;
        $query = "(m1.date_modified > " . db_convert("'".$GLOBALS['db']->quote($from_date)."'", 'datetime'). " AND m1.date_modified <= ". db_convert("'".$GLOBALS['db']->quote($to_date)."'", 'datetime')." AND {0}.deleted = $deleted)";
        if(isset($deletion_date) && !empty($deletion_date)){
            $query .= " OR ({0}.date_modified > " . db_convert("'".$GLOBALS['db']->quote($deletion_date)."'", 'datetime'). " AND {0}.date_modified <= ". db_convert("'".$GLOBALS['db']->quote($to_date)."'", 'datetime')." AND {0}.deleted = 1)";
        }

        if(!empty($module_user_id))
        {
            $query .= " AND m2.id = '".$GLOBALS['db']->quote($module_user_id)."'";
        }

        //if($related_module == 'Meetings' || $related_module == 'Calls' || $related_module = 'Contacts'){
        $query = string_format($query, array('m1'));
        //}

        require_once('soap/SoapRelationshipHelper.php');
        $results = retrieve_modified_relationships($module_name, $related_module, $query, $deleted, /*$offset*/0, /*$max_results*/'-99', $select_fields, $relationship_name);

        $list = $results['result'];

        foreach($list as $entry)
        {
            if($deleted==0 && $entry->deleted==1)
            {
                continue;
            }
            $enm = "n/a";
            if(isset($entry["name"]))
            {
                $enm = $entry["name"];
            } else if(isset($entry["first_name"])&&isset($entry["last_name"])){                
                $enm = $entry["first_name"] . " " . $entry["last_name"];
            }
            $item = array(
                "id"=>$entry["id"],
                "name"=>$enm,
                "deleted"=>$entry["deleted"],
                "date_modified"=>$entry["date_modified"]
            );
            $output_list[] = $item;
        }


        return array(
            'result_count'=> count($output_list),
            'entries' => $output_list,
            'error' => $error->get_soap_array()
        );
    }

    function gmsync_create_document($session, $dstId, $documentName, $documentContentType, $documentContentB64, $documentDescription, $documentRevision)
    {
        /// Ensure the account has been authenticated.
        if( !(self::$helperObject->validate_authenticated($session)) )
        {
            $error->set_error('invalid_login');
            return $error->get_soap_array();
        }        

        
        $resp = array();
        $error = new SoapError();
        
        require_once('include/upload_file.php');
        require_once('modules/Documents/Document.php'); 
        require_once('modules/DocumentRevisions/DocumentRevision.php'); 
        
        $decodedFile = base64_decode($documentContentB64);
        $upload_file = new UploadFile('filename_file'); 
        $upload_file->set_for_soap($documentName, $decodedFile); 
        
        $focus = new Document(); 
        $focus->id = create_guid();
        $focus->new_with_id = true;
        $focus->document_name =  $documentName;
        $focus->revision = $documentRevision;
        $focus->description = $documentDescription;
        
        $focus->assigned_user_id = $current_user->id;
        
        $ext_pos = strrpos($this->upload_file->stored_file_name, ".");
        $upload_file->file_ext = substr($upload_file->stored_file_name, $ext_pos + 1);

        $revision = new DocumentRevision();
        $revision->filename = $upload_file->get_stored_file_name();
        $revision->file_mime_type = $upload_file->getMimeSoap($revision->filename);
        $revision->file_ext = $upload_file->file_ext;
        //$revision->document_name = ;
        $revision->revision = $documentRevision;
        $revision->document_id = $focus->id;
        $revision->save();

        $focus->document_revision_id = $revision->id;
        $focus->save();
        $upload_file->final_move($revision->id);

        $resp["id"] = $focus->id;
        $resp["document_revision_id"] = $revision->id;
        $resp["error"] = $error->get_soap_array();
                
        return $resp;
    }

    function get_attendee_list_with_accept_status($session, $module_name, $id){
            global  $beanList, $beanFiles;
            $error = new SoapError();
            $field_list = array();
            $output_list = array();
            global $current_user;

            if(!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '',  $error)){
                    $error->set_error('invalid_login');	
                    return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
            }
            if(empty($beanList[$module_name])){
                    $error->set_error('no_module');	
                    return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
            }

            if( !(self::$helperObject->check_modules_access($current_user, $module_name, 'read')) ){
                    $error->set_error('no_access');	
                    return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
            }


            $class_name = $beanList[$module_name];
            require_once($beanFiles[$class_name]);
            //$seed = new $class_name();
            $seed = $this->new_module_item($module_name);


            $rsjson=array();
            //rsmith
            if($module_name == 'Meetings' || $module_name == 'Calls'){
                    //if we find a meeting or call we want to send back the attendees
                    $l_module_name = strtolower($module_name);
                    $table_name = $l_module_name."_users";
                    if($module_name == 'Meetings')
                            $join_field = "meeting";
                    else
                            $join_field = "call";
                    $result = $seed->db->query("SELECT users.id, $table_name.date_modified, first_name, last_name, $table_name.accept_status, $table_name.id as rel_link_id FROM users INNER JOIN $table_name ON $table_name.user_id = users.id WHERE ".$table_name.".".$join_field."_id = '".$GLOBALS['db']->quote($id)."' AND $table_name.deleted = 0"); 
                    $user = new User();
                    while($row = $seed->db->fetchByAssoc($result))
                    {                        
                        $user->id = $row['id'];
                        $email = $user->emailAddress->getPrimaryAddress($user);
                        $accept_status = $row['accept_status'];

                        $rsitem = array();
                        $rsitem["id"] = $user->id;
                        $rsitem["module"] = "Users";
                        $rsitem["first_name"] = $row['first_name'];
                        $rsitem["first_name"] = $row['last_name'];
                        $rsitem["email1"] = $email;
                        $rsitem["accept_status"] = $accept_status;
                        $rsitem["rel_link_id"] = $row['rel_link_id'];
                        $rsjson[] = $rsitem;                            
                    }	
                    //now get contacts
                    $table_name = $l_module_name."_contacts";
                    $result = $seed->db->query("SELECT contacts.id, $table_name.date_modified, first_name, last_name, $table_name.accept_status, $table_name.id as rel_link_id FROM contacts INNER JOIN $table_name ON $table_name.contact_id = contacts.id INNER JOIN $seed->table_name ON ".$seed->table_name.".id = ".$table_name.".".$join_field."_id WHERE ".$table_name.".".$join_field."_id = '".$GLOBALS['db']->quote($id)."' AND ".$table_name.".deleted = 0 AND (contacts.id != ".$seed->table_name.".parent_id OR ".$seed->table_name.".parent_id IS NULL)"); 
                    $contact = new Contact();
                    while($row = $seed->db->fetchByAssoc($result))
                    {
                        $contact->id = $row['id'];
                        $email = $contact->emailAddress->getPrimaryAddress($contact);
                        $accept_status = $row['accept_status'];

                        $rsitem = array();
                        $rsitem["id"] = $contact->id;
                        $rsitem["module"] = "Contacts";
                        $rsitem["first_name"] = $row['first_name'];
                        $rsitem["first_name"] = $row['last_name'];
                        $rsitem["email1"] = $email;
                        $rsitem["accept_status"] = $accept_status;
                        $rsitem["rel_link_id"] = $row['rel_link_id'];
                        $rsjson[] = $rsitem;     
                        
                    }
            }
            
            return array(
                'result_count'=> count($rsjson),
                'entries' => $rsjson,
                'error' => $error->get_soap_array()
            );
    }

    function set_attendee_accept_status(
                $session, 
                /*Call, Contact*/$module_name, 
                $module_id, 
                $attendee_module_name, 
                /*User, Contact, Lead*/$attendee_id, 
                $accept_status
            ){
            global  $beanList, $beanFiles;
            $error = new SoapError();

            $class_name = $beanList[$module_name];
            require_once($beanFiles[$class_name]);
            //$seed = new $class_name();
            $seed = $this->new_module_item($module_name);
            $seed->retrieve($module_id);

            $attendee_class_name = $beanList[$attendee_module_name];
            require_once($beanFiles[$attendee_class_name]);
            //$attendee_seed = new $attendee_class_name();
            $attendee_seed = $this->new_module_item($attendee_module_name);
            $attendee_seed->retrieve($attendee_id);
            
            $seed->set_accept_status($attendee_seed, $accept_status);
            
            return array(
                'error' => $error->get_soap_array()
            );            
    }

    function normalize($s) {
        /*
        // Normalize line endings using Global
        // Convert all line-endings to UNIX format
        $s = str_replace("\r\n", "\n", $s);
        $s = str_replace("\r", "\n", $s);
         */
        return $s;
    }
    
    
    /**
     * Generate the where clause for searching imported emails.
     *
     */
    function _generateSearchImportWhereClause($seed, $email_data)
    {
        global $timedate;


        $availableSearchParam = array(
                                      'name' => array('table_name' =>'emails', 'opp' => '='),
                                      'description_html' => array('table_name' =>'emails_text', 'opp' => '=') );

        $additionalWhereClause = array();
        foreach ($availableSearchParam as $key => $properties)
        {
            if( !empty($email_data[$key]) )
            {
                $db_key =  isset($properties['db_key']) ? $properties['db_key'] : $key;
                $searchValue = $email_data[$key];
                if($key=="description_html")
                {
                    $searchValue = SugarCleaner::cleanHtml($searchValue);
                    $searchValue = $this->normalize($searchValue);
                }
                $searchValue = $seed->db->quote($searchValue);

                $opp = isset($properties['opp']) ? $properties['opp'] : 'like';
                if($opp == 'like')
                    $searchValue = "%" . $searchValue . "%";

                $additionalWhereClause[] = "{$properties['table_name']}.$db_key $opp '$searchValue' ";
            }
        }
        
        if( !empty($email_data['date_sent']) ) {
            $dbFormatDateFrom = $timedate->to_db($email_data['date_sent']);
            $dbFormatDateFrom = db_convert("'" . $dbFormatDateFrom . "'",'datetime');
            $additionalWhereClause[] = "emails.date_sent = $dbFormatDateFrom ";            
        }

        $additionalWhereClause = implode(" AND ", $additionalWhereClause);

        return $additionalWhereClause;
    }
    
    
    function gmsync_find_emails($session, $email_data)
    {
        global  $beanList, $beanFiles;
        $error = new SoapError();
        $module_name = "Emails";
        
        if(empty($beanList[$module_name])){
            $error->set_error('no_module');
            return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
        }

        global $current_user;
        if(!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '',  $error)){
                $error->set_error('invalid_login');	
                return array('field_list'=>$field_list, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
        }

        if( !(self::$helperObject->check_modules_access($current_user, $module_name, 'read')) ){
                $error->set_error('no_access');
                return array('result_count'=>-1, 'entries'=>array(), 'error'=>$error->get_soap_array());
        }
        
        require_once('modules/Emails/Email.php'); 
        $seed = new Email();

        // Nothing found
        $foundId = "";

        $query = array();
        $fullQuery = "";
        $query['select'] = "emails.id , emails.mailbox_id, emails.name, emails.date_sent, emails.status, emails.type, emails.flagged, emails.reply_to_status,
		                      emails_text.from_addr, emails_text.to_addrs  FROM emails ";

        $query['joins'] = " JOIN emails_text on emails.id = emails_text.email_id ";

        //Handle from and to addr joins
        if( !empty($email_data['from_addr']) )
        {
            $from_addr = $seed->db->quote(strtolower($email_data['from_addr']));
            $query['joins'] .= " INNER JOIN emails_email_addr_rel er_from ON er_from.email_id = emails.id AND er_from.deleted = 0 INNER JOIN email_addresses ea_from ON ea_from.id = er_from.email_address_id
                                AND er_from.address_type='from' AND emails_text.from_addr LIKE '%" . $from_addr . "%'";
        }

        if( !empty($email_data['to_addrs'])  )
        {
            $to_addrs = $seed->db->quote(strtolower($email_data['to_addrs']));
            $query['joins'] .= " INNER JOIN emails_email_addr_rel er_to ON er_to.email_id = emails.id AND er_to.deleted = 0 INNER JOIN email_addresses ea_to ON ea_to.id = er_to.email_address_id
                                    AND er_to.address_type='to' AND ea_to.email_address LIKE '%" . $to_addrs . "%'";
        }

        if( !empty($email_data['cc_addrs'])  )
        {
            $cc_addrs = $seed->db->quote(strtolower($email_data['cc_addrs']));
            $query['joins'] .= " INNER JOIN emails_email_addr_rel er_cc ON er_cc.email_id = emails.id AND er_cc.deleted = 0 INNER JOIN email_addresses ea_cc ON ea_cc.id = er_cc.email_address_id
                                    AND er_cc.address_type='cc' AND ea_cc.email_address LIKE '%" . $cc_addrs . "%'";
        }
        
        $query['where'] = " WHERE (emails.type= 'inbound' OR emails.type='archived' OR emails.type='out') AND emails.deleted = 0 ";
	
        
        $additionalWhereClause = $this->_generateSearchImportWhereClause($seed, $email_data);
        if( !empty($additionalWhereClause) )
        {
            $query['where'] .= " AND $additionalWhereClause";
        }
        
        $fullQuery = "SELECT " . $query['select'] . " " . $query['joins'] . " " . $query['where'];
        $foundDescription = "";
        
        $result = $seed->db->query($fullQuery); 
        while( $row = $seed->db->fetchByAssoc($result) )
        {                        
            $foundId = $row['id'];
            //$foundDescription = $row['description_html'];
            break;
        }
        
        return array(
            'id' => $foundId,
            //'descr' => $foundDescription,
            'error' => $error->get_soap_array()
        );
    }
    
}
?>