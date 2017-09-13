//V3.0
QCRM.UnifiedSearch=['Accounts','Contacts','Leads','Meetings','Opportunities'];QCRM.users_dropdown=false;
QCRM.share_search='All';
QCRM.native_cal=true;
QCRM.AOS_show_image=true;
QCRM.forceLock=false;
QCRM.AudioNotes=true;
QCRM.enableBeans(['Accounts','Contacts','Opportunities','AOS_Contracts','Leads','Calls','Meetings','Tasks','Documents']);
Beans['Accounts'].AdditionalFields = ['phone_office','website','email1','description','$ADDbilling','$ADDshipping'];
Beans['Accounts'].CustomListFields = ['billing_address_city','billing_address_state'];
Beans['Accounts'].CustomLinks = {'contacts':{title:'LBL_CONTACTS'},'opportunities':{title:'LBL_OPPORTUNITY'},'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'},'leads':{title:'Leads'}};
Beans['Contacts'].AdditionalFields = ['title','account_name','email1','phone_work','phone_mobile','description','$ADDprimary','$ADDalt'];
Beans['Contacts'].SearchFields = ['email1'];
Beans['Contacts'].CustomListFields = ['account_name','title'];
Beans['Contacts'].TitleFields = ['first_name','last_name'];
Beans['Contacts'].CustomLinks = {'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'},'opportunities':{title:'Opportunities'}};
Beans['Opportunities'].AdditionalFields = ['amount','date_closed','sales_stage','account_name','description'];
Beans['Opportunities'].SearchFields = ['date_closed','sales_stage'];
Beans['Opportunities'].CustomListFields = ['amount','account_name','sales_stage','date_closed'];
Beans['Opportunities'].CustomLinks = {'contacts':{title:'Contacts'},'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'},'leads':{title:'Leads'}};
Beans['AOS_Contracts'].CustomLinks = [];
Beans['Leads'].AdditionalFields = ['title','account_name','status','email1','phone_work','phone_mobile','description','$ADDprimary','$ADDalt'];
Beans['Leads'].SearchFields = ['status'];
Beans['Leads'].CustomListFields = ['status','account_name','title'];
Beans['Leads'].TitleFields = ['first_name','last_name'];
Beans['Leads'].CustomLinks = {'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'}};
Beans['Calls'].AdditionalFields = ['direction','status','date_start','duration_hours','duration_minutes','description','parent_name'];
Beans['Calls'].SearchFields = ['status','date_start'];
Beans['Calls'].CustomListFields = ['status','parent_name','date_start'];
Beans['Calls'].CustomLinks = {'contacts':{title:'Contacts'},'users':{title:'Users'},'leads':{title:'Leads'}};
Beans['Meetings'].AdditionalFields = ['status','date_start','duration_hours','duration_minutes','description','parent_name'];
Beans['Meetings'].SearchFields = ['status','date_start'];
Beans['Meetings'].CustomListFields = ['status','parent_name','date_start'];
Beans['Meetings'].CustomLinks = {'contacts':{title:'Contacts'},'users':{title:'Users'},'leads':{title:'Leads'}};
Beans['Tasks'].AdditionalFields = ['status','date_start','date_due','priority','description','contact_name','parent_name'];
Beans['Tasks'].SearchFields = ['status','date_due','priority'];
Beans['Tasks'].CustomListFields = ['status','date_start','date_due','priority'];
Beans['Tasks'].CustomLinks = [];
Beans['Documents'].AdditionalFields = ['description','status_id','category_id'];
Beans['Documents'].SearchFields = ['status_id','category_id'];
Beans['Documents'].TitleFields = ['document_name'];
Beans['Documents'].CustomLinks = [];
QCRM.Profiles={};QCRM.ProfileMode='SecurityGroups';
RowsPerPage=20;RowsPerDashlet=5;RowsPerSubPanel=5;
SimpleBeans['Users'].query += 'AND (users.is_group=0 OR users.is_group IS NULL)';
QCRM.addressFields=['street','city','state','postalcode','country'];
QCRM.google_addressFields=['street','city','state','postalcode','country'];
