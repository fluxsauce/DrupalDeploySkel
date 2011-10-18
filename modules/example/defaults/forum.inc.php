<?php

/**
 * @file
 * Default forum configuration
 */

$all_roles = user_roles();

module_load_include('admin.inc', 'forum');
module_load_include('admin.inc', 'forum_access');
module_load_include('pathauto_taxonomy.inc', 'pathauto');

$form_state = array(
  'values' => array(
    'name' => 'Default forum',
    'parent' => array(0 => 0),
    'weight' => 0,
    'vid' => 1,
    'forum_access' => array(
      'template' => array('taxonomy' => array()),
      // Grant types
      'view' => array(
        array_search('anonymous user', $all_roles) => TRUE,
        array_search('authenticated user', $all_roles) => TRUE,
      ),
      'create' => array(
        array_search('anonymous user', $all_roles) => NULL,
        array_search('authenticated user', $all_roles) => TRUE,
      ),
      'update' => array(
        array_search('anonymous user', $all_roles) => NULL,
        array_search('authenticated user', $all_roles) => TRUE,
      ),
      'delete' => array(
        array_search('anonymous user', $all_roles) => NULL,
        array_search('authenticated user', $all_roles) => NULL,
      ),
    ),
  ),
);
$form = forum_form_forum($form_state);
_forum_access_forum_form($form, $form_state, FALSE);
forum_form_submit($form, $form_state);
_forum_access_form_submit($form, $form_state);

/**
 * Cleanup
 */
forum_pathauto_bulkupdate();
path_set_alias('forum', 'forums');