<?php
/**
 * Created by PhpStorm.
 * User: ian
 * Date: 27/07/17
 * Time: 08:16
 */

class copyFiles implements RunnableSchedulerJob
{
    public function setJob(SchedulersJob $job)
    {
        $this->job = $job;
    }

    public function run($data)
    {
        $bean = BeanFactory::getBean("AOS_Contracts", $data);
        //we need to fetch all the relating Documents.
        $documents = $bean->load_relationship("documents")->getBeans();
        if( count($documents) < 1 ) { //if there is no documents then copy them over.
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
                    $revisionId = "";
                    $relatedId = create_guid();
                    foreach ($documentRevision->field_defs as $field => $defs) {
                        if ($field != "id" && !empty($revision->{$field})) {
                            $documentRevision->{$field} = $revision->{$field};
                        }

                        if($field == "id" && $toBeRelated->document_revision_id == $revision->{$field}){
                            $revisionId = $relatedId;
                        }

                    }
                    $documentRevision->document_id = $id;
                    $documentRevision->id = $relatedId;
                    $documentRevision->new_with_id = true;
                    $documentRevision->save();

                    //we now copy the file and give it the name of the new ID.
                    //copy("upload://" + $revision->id, "upload://" + $documentRevision->id);
                    if(file_exists("upload/" . $revision->id)){
                        copy("upload/" . $revision->id, "upload/" . $documentRevision->id);
                    }
                }

                $toBeRelated->id = $id;
                $toBeRelated->new_with_id = true;
                $toBeRelated->document_revision_id = $revisionId;
                $toBeRelated->aos_contracts_documents_1aos_contracts_ida = $bean->id;
                $toBeRelated->save();
            }
        }
        return true;
    }
}
