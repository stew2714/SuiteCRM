//V3.0
QCRM.UnifiedSearch=['Accounts','Opportunities','Meetings','Contacts'];QCRM.users_dropdown=false;
QCRM.share_search='All';
QCRM.native_cal=true;
QCRM.AOS_show_image=true;
QCRM.forceLock=true;
QCRM.AudioNotes=true;
QCRM.enableBeans(['Accounts','Contacts','A4_SITES','A4_SITE_ROLES','Calls','Meetings','Tasks','Cases','Notes','Documents','Opportunities']);
Beans['Accounts'].AdditionalFields = ['name','phone_office','website','$ADDbilling','date_entered','date_modified','himss_id_c','defintive_id_c','ucid_c','facility_type_dd_c','assigned_user_name'];
Beans['Accounts'].SearchFields = ['parent_name','himss_id_c','defintive_id_c','ucid_c','facility_type_dd_c'];
Beans['Accounts'].basic_search = ['name'];
Beans['Accounts'].CustomListFields = ['parent_name','billing_address_city','facility_type_dd_c','ucid_c','defintive_id_c','himss_id_c','billing_address_state'];
Beans['Accounts'].highlighted = ['name'];
Beans['Accounts'].CustomLinks = {'members':{title:'LBL_MEMBERS'},'accounts_a4_sites_1':{title:'A4_SITES'},'cases':{title:'Cases'},'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'}};
Beans['Accounts'].ColoredField = 'facility_type_dd_c';
Beans['Contacts'].AdditionalFields = ['title','account_name','email1','phone_work','phone_mobile','description','$ADDprimary','$ADDalt'];
Beans['Contacts'].SearchFields = ['email1'];
Beans['Contacts'].basic_search = ['name'];
Beans['Contacts'].CustomListFields = ['account_name','title'];
Beans['Contacts'].highlighted = ['name'];
Beans['Contacts'].TitleFields = ['first_name','last_name'];
Beans['Contacts'].CustomLinks = {'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'},'opportunities':{title:'Opportunities'},'notes':{title:'Notes'}};
Beans['A4_SITES'].AdditionalFields = ['name','accounts_a4_sites_1_name','parent','customer_no_c','ucid','himss_id','aplatform_c','definitive_id','cc_region_dd_c','active_date','tier_dd_c','term_date','fd_c','fvm_c','ff_c','fm_c','b2b_c','ffi_c','ffc_c','cdia_c','cdie_c','cdic_c','dwi_c'];
Beans['A4_SITES'].SearchFields = ['customer_no_c','parent','ucid','aplatform_c','tier_dd_c','cc_region_dd_c'];
Beans['A4_SITES'].basic_search = ['name'];
Beans['A4_SITES'].highlighted = ['name'];
Beans['A4_SITES'].CustomLinks = {'a4_sites_a4_site_roles_1':{title:'A4_SITE_ROLES'},'accounts_a4_sites_1':{title:'LBL_ACCOUNTS_A4_SITES_1_FROM_ACCOUNTS_TITLE'}};
Beans['A4_SITE_ROLES'].AdditionalFields = ['name','a4_sites_a4_site_roles_1_name','assigned_user_name','active_c'];
Beans['A4_SITE_ROLES'].SearchFields = ['a4_sites_a4_site_roles_1_name','assigned_user_name','active_c'];
Beans['A4_SITE_ROLES'].basic_search = ['name'];
Beans['A4_SITE_ROLES'].CustomListFields = ['a4_sites_a4_site_roles_1_name','assigned_user_name','active_c'];
Beans['A4_SITE_ROLES'].highlighted = ['name'];
Beans['A4_SITE_ROLES'].CustomLinks = {'a4_sites_a4_site_roles_1':{title:'LBL_A4_SITES_A4_SITE_ROLES_1_FROM_A4_SITES_TITLE'}};
Beans['Calls'].AdditionalFields = ['name','direction','status','date_start','duration_hours','duration_minutes','description','parent_name'];
Beans['Calls'].SearchFields = ['status','date_start'];
Beans['Calls'].basic_search = ['name'];
Beans['Calls'].CustomListFields = ['status','parent_name','date_start'];
Beans['Calls'].highlighted = ['name'];
Beans['Calls'].CustomLinks = {'users':{title:'Users'},'notes':{title:'Notes'}};
Beans['Meetings'].AdditionalFields = ['name','status','date_start','duration_hours','duration_minutes','description','parent_name'];
Beans['Meetings'].SearchFields = ['status','date_start'];
Beans['Meetings'].basic_search = ['name'];
Beans['Meetings'].CustomListFields = ['status','parent_name','date_start'];
Beans['Meetings'].highlighted = ['name'];
Beans['Meetings'].CustomLinks = {'users':{title:'Users'},'notes':{title:'Notes'}};
Beans['Tasks'].AdditionalFields = ['name','status','date_start','date_due','priority','description','contact_name','parent_name'];
Beans['Tasks'].SearchFields = ['status','date_due','priority'];
Beans['Tasks'].basic_search = ['name'];
Beans['Tasks'].CustomListFields = ['status','date_start','date_due','priority'];
Beans['Tasks'].highlighted = ['name'];
Beans['Tasks'].CustomLinks = {'notes':{title:'Notes'}};
Beans['Cases'].AdditionalFields = ['name','remedy_ticket_no_c','description','account_name','priority','status','product_c','jira_issue_id_c','assigned_user_name'];
Beans['Cases'].DetailFields = ['name','name','case_number','status','priority','description','account_name','aop_case_updates_threaded'];
Beans['Cases'].SearchFields = ['remedy_ticket_no_c','description','account_name','product_c','jira_issue_id_c','status','priority'];
Beans['Cases'].basic_search = ['name'];
Beans['Cases'].CustomListFields = ['remedy_ticket_no_c','description','account_name','priority','status','product_c','jira_issue_id_c','assigned_user_name'];
Beans['Cases'].highlighted = ['name'];
Beans['Cases'].CustomLinks = [];
Beans['Cases'].ColoredField = 'status';
Beans['Notes'].AdditionalFields = ['name','description','filename'];
Beans['Notes'].basic_search = ['name'];
Beans['Notes'].CustomListFields = ['filename'];
Beans['Notes'].highlighted = ['name'];
Beans['Notes'].CustomLinks = [];
Beans['Documents'].AdditionalFields = ['document_name','description','status_id','category_id'];
Beans['Documents'].SearchFields = ['status_id','category_id'];
Beans['Documents'].basic_search = ['document_name'];
Beans['Documents'].highlighted = ['name'];
Beans['Documents'].TitleFields = ['document_name'];
Beans['Documents'].CustomLinks = [];
Beans['Opportunities'].AdditionalFields = ['name','amount','date_closed','sales_stage','account_name','description'];
Beans['Opportunities'].SearchFields = ['date_closed','sales_stage'];
Beans['Opportunities'].basic_search = ['name'];
Beans['Opportunities'].CustomListFields = ['amount','account_name','sales_stage','date_closed'];
Beans['Opportunities'].highlighted = ['name'];
Beans['Opportunities'].CustomLinks = {'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'},'notes':{title:'Notes'}};
Beans['Opportunities'].ListTotals = [{"field":"amount","fnct":["SUM"]}];
Beans['Opportunities'].GroupTotals = 'sales_stage';
Beans['Opportunities'].ShowTotals = {"list":true,"dashlets":true,"subpanels":false};
QCRM.Profiles=[];QCRM.ProfileMode='none';
QCRM.TrackerMode='none';
RowsPerPage=20;RowsPerDashlet=5;RowsPerSubPanel=5;
SimpleBeans['Users'].query += 'AND (users.is_group=0 OR users.is_group IS NULL)';
QCRM.addressFields=['street','city','state','postalcode','country'];
QCRM.google_addressFields=['street','city','state','postalcode','country'];
