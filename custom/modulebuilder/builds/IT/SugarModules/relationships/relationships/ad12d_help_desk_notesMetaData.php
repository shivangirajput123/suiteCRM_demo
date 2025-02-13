<?php
// created: 2024-06-26 14:40:19
$dictionary["ad12d_help_desk_notes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ad12d_help_desk_notes' => 
    array (
      'lhs_module' => 'ad12d_Help_Desk',
      'lhs_table' => 'ad12d_help_desk',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ad12d_help_desk_notes_c',
      'join_key_lhs' => 'ad12d_help_desk_notesad12d_help_desk_ida',
      'join_key_rhs' => 'ad12d_help_desk_notesnotes_idb',
    ),
  ),
  'table' => 'ad12d_help_desk_notes_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ad12d_help_desk_notesad12d_help_desk_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ad12d_help_desk_notesnotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ad12d_help_desk_notesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ad12d_help_desk_notes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ad12d_help_desk_notesad12d_help_desk_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ad12d_help_desk_notes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ad12d_help_desk_notesnotes_idb',
      ),
    ),
  ),
);