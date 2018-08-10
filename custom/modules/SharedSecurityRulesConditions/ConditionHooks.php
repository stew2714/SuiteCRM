<?php
/**
 * Created by PhpStorm.
 * User: craig
 * Date: 10/05/18
 * Time: 11:16
 */


class ConditionHooks
{

    /* Function that will remove the logic operator for the first condition in a set of parenthesis */
    public function removeLogicOps($bean)
    {
        global $db;

        $index = $bean->condition_order;
        $previousIndex = $index-1;
        $id = $bean->sa_shared_sec_rules_id;

     	$query = "select parenthesis from sharedsecurityrulesconditions where sa_shared_sec_rules_id = '".$id ."' and condition_order = $previousIndex and deleted='0'";
        $result = $db->query($query, true, "Error retrieving shared security rule conditions");

        // If there's no results this is the first condition, so remove any logic operators
        if($result->num_rows == 0)
        {
            $bean->logic_op = '';
        }
        else{
            while($row = $db->fetchByAssoc($result))
            {
                if($row['parenthesis'] === 'START')
                {
                    $bean->logic_op = '';
                }

            }
        }



    }
}