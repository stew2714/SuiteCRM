//V3.0
QCRM.UnifiedSearch=['Accounts','Contacts','Leads','Meetings','Opportunities'];QCRM.users_dropdown=false;
QCRM.share_search='All';
QCRM.native_cal=true;
QCRM.AOS_show_image=true;
QCRM.forceLock=false;
QCRM.AudioNotes=true;
QCRM.enableBeans(['Accounts','Contacts','Opportunities','Leads','Calls','Meetings','Tasks','Cases','Project','Notes','Documents','AOS_Quotes','AOS_Invoices','AOS_Products','AOS_Product_Categories']);
Beans['Accounts'].AdditionalFields = ['phone_office','website','email1','description','$ADDbilling','$ADDshipping'];
Beans['Accounts'].CustomListFields = ['billing_address_city','billing_address_state'];
Beans['Accounts'].CustomLinks = {'contacts':{title:'Contacts'},'opportunities':{title:'LBL_OPPORTUNITY'},'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'},'leads':{title:'Leads'},'notes':{title:'Notes'}};
Beans['Contacts'].AdditionalFields = ['title','account_name','email1','phone_work','phone_mobile','description','$ADDprimary','$ADDalt'];
Beans['Contacts'].SearchFields = ['email1'];
Beans['Contacts'].CustomListFields = ['account_name','title'];
Beans['Contacts'].TitleFields = ['first_name','last_name'];
Beans['Contacts'].CustomLinks = {'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'},'opportunities':{title:'Opportunities'},'notes':{title:'Notes'}};
Beans['Opportunities'].AdditionalFields = ['amount','date_closed','sales_stage','account_name','description'];
Beans['Opportunities'].SearchFields = ['date_closed','sales_stage'];
Beans['Opportunities'].CustomListFields = ['amount','account_name','sales_stage','date_closed'];
Beans['Opportunities'].CustomLinks = {'contacts':{title:'Contacts'},'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'},'leads':{title:'Leads'},'notes':{title:'Notes'}};
Beans['Leads'].AdditionalFields = ['title','account_name','status','email1','phone_work','phone_mobile','description','$ADDprimary','$ADDalt'];
Beans['Leads'].SearchFields = ['status'];
Beans['Leads'].CustomListFields = ['status','account_name','title'];
Beans['Leads'].TitleFields = ['first_name','last_name'];
Beans['Leads'].CustomLinks = {'calls':{title:'Calls'},'meetings':{title:'Meetings'},'tasks':{title:'Tasks'},'notes':{title:'Notes'}};
Beans['Calls'].AdditionalFields = ['direction','status','date_start','duration_hours','duration_minutes','description','parent_name'];
Beans['Calls'].SearchFields = ['status','date_start'];
Beans['Calls'].CustomListFields = ['status','parent_name','date_start'];
Beans['Calls'].CustomLinks = {'contacts':{title:'Contacts'},'users':{title:'Users'},'leads':{title:'Leads'},'notes':{title:'Notes'}};
Beans['Meetings'].AdditionalFields = ['status','date_start','duration_hours','duration_minutes','description','parent_name'];
Beans['Meetings'].SearchFields = ['status','date_start'];
Beans['Meetings'].CustomListFields = ['status','parent_name','date_start'];
Beans['Meetings'].CustomLinks = {'contacts':{title:'Contacts'},'users':{title:'Users'},'leads':{title:'Leads'},'notes':{title:'Notes'}};
Beans['Tasks'].AdditionalFields = ['status','date_start','date_due','priority','description','contact_name','parent_name'];
Beans['Tasks'].SearchFields = ['status','date_due','priority'];
Beans['Tasks'].CustomListFields = ['status','date_start','date_due','priority'];
Beans['Tasks'].CustomLinks = {'notes':{title:'Notes'}};
Beans['Cases'].AdditionalFields = ['case_number','status','priority','description','account_name','update_text','internal'];
Beans['Cases'].DetailFields = ['name','case_number','status','priority','description','account_name','aop_case_updates_threaded'];
Beans['Cases'].SearchFields = ['status','priority'];
Beans['Cases'].CustomListFields = ['case_number','status','priority'];
Beans['Cases'].CustomLinks = [];
Beans['Project'].AdditionalFields = ['status','priority','description'];
Beans['Project'].CustomLinks = {'notes':{title:'Notes'}};
Beans['Notes'].AdditionalFields = ['description','filename'];
Beans['Notes'].CustomListFields = ['filename'];
Beans['Notes'].CustomLinks = [];
Beans['Documents'].AdditionalFields = ['description','status_id','category_id'];
Beans['Documents'].SearchFields = ['status_id','category_id'];
Beans['Documents'].TitleFields = ['document_name'];
Beans['Documents'].CustomLinks = [];
Beans['AOS_Quotes'].AdditionalFields = ['number','billing_account','stage','expiration','total_amount','$ADDbilling','$ADDshipping'];
Beans['AOS_Quotes'].SearchFields = ['number','stage'];
Beans['AOS_Quotes'].CustomListFields = ['number','billing_account','total_amount','stage'];
Beans['AOS_Quotes'].CustomLinks = [];
Beans['AOS_Invoices'].AdditionalFields = ['number','billing_account','due_date','total_amount','$ADDbilling','$ADDshipping'];
Beans['AOS_Invoices'].SearchFields = ['number','status'];
Beans['AOS_Invoices'].CustomListFields = ['number','billing_account','total_amount'];
Beans['AOS_Invoices'].CustomLinks = [];
Beans['AOS_Products'].AdditionalFields = ['part_number','price','aos_product_category_name'];
Beans['AOS_Products'].SearchFields = ['part_number'];
Beans['AOS_Products'].CustomListFields = ['part_number','part_number','price','aos_product_category_name'];
Beans['AOS_Products'].CustomLinks = [];
Beans['AOS_Product_Categories'].CustomLinks = [];
QCRM.Profiles={};QCRM.ProfileMode='SecurityGroups';
RowsPerPage=20;RowsPerDashlet=5;RowsPerSubPanel=5;
SimpleBeans['Users'].query += 'AND (users.is_group=0 OR users.is_group IS NULL)';
QCRM.addressFields=['street','city','state','postalcode','country'];
QCRM.google_addressFields=['street','city','state','postalcode','country'];