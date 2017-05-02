<?php


require_once('modules/AOR_Reports/views/view.edit.php');
require_once('custom/modules/AOR_Reports/AdvancedReporter.php');

class customAOR_ReportsViewEdit extends AOR_ReportsViewEdit
{
    public function __construct()
    {
        parent::__construct();
    }

    function display()
    {
        global $app_list_strings;

        // Fetch the bean to return all Users
        $user = BeanFactory::getBean("Users");
        $userList = $user->get_full_list();
        $users = array();

        // Fetch the bean to return all User Groups (Security Groups)
        $group = BeanFactory::getBean("SecurityGroups");
        $groupsList = $group->get_full_list();
        $groups = array();

        $app_list_strings['report_private_users'][''] = '';
        $app_list_strings['report_private_groups'][''] = '';

        // Filter through the returned users and sort them into a manageable array
        foreach ($userList as $user) {
            $app_list_strings['report_private_users'][$user->id] = $user->name;
        }

        // Filter through the returned groups and sort them into a manageable array
        foreach ($groupsList as $group) {
            $app_list_strings['report_private_groups'][$group->id] = $group->name;
        }

        parent::display();

        if(!empty($this->bean->id) ){
            $preview = new AdvancedReporter($this->bean);
            $reportHTML = '<div id="preview">' . $preview->buildMultiGroupReport('-2', true) . '</div>';
        }else{
            $reportHTML = '<div id="preview"></div>';
        }
        echo $reportHTML;
    }
}