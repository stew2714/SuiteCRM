<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class AOS_ContractsViewEdit extends ViewEdit {
    function __construct(){
        parent::__construct();
    }

    function display(){
        echo '<link rel="stylesheet" href="custom/modules/AOS_Contracts/css/modal.css">';
        echo '<script src="custom/modules/AOS_Contracts/js/EditView.js" />';

        global $current_user, $sugar_config;

        $lockScript = '<script type="text/javascript" src="custom/modules/AOS_Contracts/js/Validation.js"></script>';
        //define so nothing breaks

        //we get the security groups so we can get all groups the current user is linked to.
        $secGroups = BeanFactory::getBean("SecurityGroups");
        $groups = $secGroups->getUserSecurityGroups($current_user->id);

        $this->ss->assign('LOCK_FILES', $lockScript);
        $tmpArray = $this->beanToArray();
        $this->ss->assign('BEAN_DATA', "<script>var beanData = JSON.parse('" . json_encode($tmpArray) . "'); </script>");

        parent::display();
    }

    function beanToArray(){
        global $timedate, $current_user;
        $tmpArray = $this->bean->toArray();
        $tmpArray['today_month'] = date('m');
        if($this->bean->previous_close_date_c != ""){
            $tmpDate = $timedate->fromString($this->bean->previous_close_date_c);
            $month = $tmpDate->format("m");
            $tmpArray['previous_date_month'] = $month;
        }
        $user = $current_user->toArray();
        $tmpArray['current_user'] = $user;
        $secGroups = new SecurityGroup();
        $groups = $secGroups->getUserSecurityGroups($current_user->id);
        $i = 0;
        foreach($groups as $key => $group){
            $groups[$i] = $group['name'];
            unset($groups[$key]);
            $i++;
        }
        $tmpArray['current_user']['roles'] = $groups;
        return $tmpArray;
    }
}
?>
