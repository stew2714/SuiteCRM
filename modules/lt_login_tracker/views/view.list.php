<?php
require_once('include/MVC/View/views/view.list.php');

class lt_login_trackerViewList extends ViewList
{  
    function listViewProcess() {

         $this->params['orderBy']='login_date_time';
		 $this->params['sortOrder'] = 'DESC'; 
		 parent::listViewProcess();
	} 
		
	public function display()
    {
		require_once('modules/lt_login_tracker/license/OutfittersLicense.php');
		$validate_license = OutfittersLicense::isValid('lt_login_tracker');
		if($validate_license !== true) {
			if(is_admin($current_user)) {
				SugarApplication::appendErrorMessage('Login Tracker LicenseAddon is no longer active due to the following reason: '.$validate_license.' Users will have limited to no access until the issue has been addressed.');
			}
			echo 'Login Tracker License Addon is no longer active. Please renew your subscription or check your license configuration';
		}
		else{
			parent::display();
		}
	}	
}
?>