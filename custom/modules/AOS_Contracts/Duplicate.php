<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 26/07/17
 * Time: 09:49
 */

class duplicate {



    function activities($bean, $event, $arguments){
        //we need to fetch all the relating history+activities.
        if(isset($bean->opportunity_id) && !empty($bean->opportunity_id)) {
            $rel = "documents";
            $opportunityBean = BeanFactory::getBean("Opportunities", $bean->opportunity_id);
            $opportunityBean->load_relationship($rel);
            $related = $opportunityBean->{$rel}->getBeans();
            foreach ($related as $relatedBean) {
                $toBeRelated = BeanFactory::getBean("Documents");
                foreach ($toBeRelated->field_defs as $field => $defs) {
                    if ($field != "id" && !empty($relatedBean->{$field})) {
                        $toBeRelated->{$field} = $relatedBean->{$field};
                    }
                }

                $id = create_guid();

                //get revisions.
                $relatedBean->load_relationship("revisions");
                $revisions = $relatedBean->revisions->getBeans();
                foreach($revisions as $revision){
                    $documentRevision = BeanFactory::getBean("DocumentRevisions");
                    foreach ($documentRevision->field_defs as $field => $defs) {
                        if ($field != "id" && !empty($revision->{$field})) {
                            $documentRevision->{$field} = $revision->{$field};
                        }

                        if($field == "id" && $toBeRelated->document_revision_id == $revision->{$field}){
                            $revisionId = $revision->{$field};
                        }

                    }
                    $documentRevision->document_id = $id;
                    $documentRevision->save();
                }

                $toBeRelated->id = $id;
                $toBeRelated->new_with_id = true;
                $toBeRelated->document_revision_id = $revisionId;
                $toBeRelated->aos_contracts_documents_1aos_contracts_ida = $bean->id;
                $toBeRelated->save();
            }
        }
    }
}