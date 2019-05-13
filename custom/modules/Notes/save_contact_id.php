<?php

class save_contact_id {

    function saveContact ($bean) {
        if($bean->parent_type == "Contacts") {
            $bean->contact_id = $bean->parent_id;
        } else {
            $bean->contact_id = null;
        }
    }
}