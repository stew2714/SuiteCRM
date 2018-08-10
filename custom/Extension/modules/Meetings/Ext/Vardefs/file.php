<?php
 //

$dictionary['Meeting']['fields']['file_create'] = array (
    'name' => 'file_create',
    'type' => 'MeetingFile',
    'source' => 'non-db',
    'vname' => 'LBL_ATTACHMENTS',
);

$dictionary["Meeting"]["fields"]["attachment_notes"] = array (
    'name' => 'attachment_notes',
    'type' => 'link',
    'relationship' => 'attachment_notes',
    'source' => 'non-db',
    'module' => 'Notes',
    'bean_name' => 'Notes',
    'vname' => 'LBL_ATTACHMENT_NOTES',
    'id_name' => 'id',
);

$dictionary["Meeting"]["relationships"]["attachment_notes"] = array(
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'meeting_link_c',
    'relationship_type' => 'one-to-many'
);