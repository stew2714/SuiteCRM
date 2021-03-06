<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 26/07/17
 * Time: 09:49
 */
require_once 'include/SugarQueue/SugarJobQueue.php';

class duplicate {

    /**
     * @param $bean
     * @param $event
     * @param $arguments
     *
     * - add a scheduler job here to delay the copy of files so the user does not see the delay on the page saving.
     *
     */

    function activities($bean, $event, $arguments)
    {
        $date = new DateTime();
        $class = get_class($bean);
        $bean = new $class();

        $documents = 0;
        if($bean->load_relationship("aos_contracts_documents_1") ){
            $documents =$bean->aos_contracts_documents_1->getBeans();
        }
        if($bean->date_entered == $bean->date_modified || count($documents) < 1
        ) {
            $rel = "documents";
            $opportunityBean = BeanFactory::getBean("Opportunities", $bean->opportunity_id);
            $opportunityBean->load_relationship($rel);
            $related = $opportunityBean->{$rel}->getBeans();

            if (0 !== count($related)) {
                $job = new SchedulersJob();
                $job->name = "Scheduled Document Copy - {$bean->name} on {$date->format('c')}";
                $job->data = $bean->id;
                $job->target = "class::copyFiles";
                $job->assigned_user_id = 1;
                $jq = new SugarJobQueue();
                $jq->submitJob($job);
            }
        }
    }




}