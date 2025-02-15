<?php
// created: 2024-06-26 14:40:19
$dictionary["Note"]["fields"]["ad12d_help_desk_notes"] = array (
  'name' => 'ad12d_help_desk_notes',
  'type' => 'link',
  'relationship' => 'ad12d_help_desk_notes',
  'source' => 'non-db',
  'module' => 'ad12d_Help_Desk',
  'bean_name' => 'ad12d_Help_Desk',
  'vname' => 'LBL_AD12D_HELP_DESK_NOTES_FROM_AD12D_HELP_DESK_TITLE',
  'id_name' => 'ad12d_help_desk_notesad12d_help_desk_ida',
);
$dictionary["Note"]["fields"]["ad12d_help_desk_notes_name"] = array (
  'name' => 'ad12d_help_desk_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AD12D_HELP_DESK_NOTES_FROM_AD12D_HELP_DESK_TITLE',
  'save' => true,
  'id_name' => 'ad12d_help_desk_notesad12d_help_desk_ida',
  'link' => 'ad12d_help_desk_notes',
  'table' => 'ad12d_help_desk',
  'module' => 'ad12d_Help_Desk',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["ad12d_help_desk_notesad12d_help_desk_ida"] = array (
  'name' => 'ad12d_help_desk_notesad12d_help_desk_ida',
  'type' => 'link',
  'relationship' => 'ad12d_help_desk_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AD12D_HELP_DESK_NOTES_FROM_NOTES_TITLE',
);
