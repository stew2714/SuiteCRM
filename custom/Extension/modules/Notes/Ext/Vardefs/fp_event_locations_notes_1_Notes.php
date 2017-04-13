<?php
// created: 2016-02-05 21:20:35
$dictionary["Note"]["fields"]["fp_event_locations_notes_1"] = array (
  'name' => 'fp_event_locations_notes_1',
  'type' => 'link',
  'relationship' => 'fp_event_locations_notes_1',
  'source' => 'non-db',
  'module' => 'FP_Event_Locations',
  'bean_name' => 'FP_Event_Locations',
  'vname' => 'LBL_FP_EVENT_LOCATIONS_NOTES_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'id_name' => 'fp_event_locations_notes_1fp_event_locations_ida',
);
$dictionary["Note"]["fields"]["fp_event_locations_notes_1_name"] = array (
  'name' => 'fp_event_locations_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FP_EVENT_LOCATIONS_NOTES_1_FROM_FP_EVENT_LOCATIONS_TITLE',
  'save' => true,
  'id_name' => 'fp_event_locations_notes_1fp_event_locations_ida',
  'link' => 'fp_event_locations_notes_1',
  'table' => 'fp_event_locations',
  'module' => 'FP_Event_Locations',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["fp_event_locations_notes_1fp_event_locations_ida"] = array (
  'name' => 'fp_event_locations_notes_1fp_event_locations_ida',
  'type' => 'link',
  'relationship' => 'fp_event_locations_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FP_EVENT_LOCATIONS_NOTES_1_FROM_NOTES_TITLE',
);
