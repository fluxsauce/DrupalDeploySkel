<?php

/**
 * @file
 * Content - Drupal 7
 */

if (!function_exists('node_object_prepare')) {
  include_once(drupal_get_path('module', 'node') . '/node.pages.inc');
}

/**
 * Parent
 */

// Parent
$title = 'Parent';
$path = 'parent';
$body_text = '<p>Parent content.</p>';
$node = new stdClass();
$node->type = 'page';
node_object_prepare($node);
$node->title = $title;
$node->language = LANGUAGE_NONE;

$node->body[$node->language][0]['value'] = $body_text;
$node->body[$node->language][0]['summary'] = text_summary($body_text);
$node->body[$node->language][0]['format'] = 'full_html';
$node->path = array('alias' => $path, 'pathauto_perform_alias' => FALSE, 'pathauto' => FALSE);
node_save($node);

// -- menu
$item = array(
  'link_path' => 'node/' . $node->nid,
  'link_title' => $title,
  'menu_name' => 'main-menu',
  'weight' => 1,
);
$parent_mlid = menu_link_save($item);

// Child
$title = 'Child';
$path = 'parent/child';
$body_text = '<p>Child content.</p>';
$node = new stdClass();
$node->type = 'page';
node_object_prepare($node);
$node->title = $title;
$node->language = LANGUAGE_NONE;

$node->body[$node->language][0]['value'] = $body_text;
$node->body[$node->language][0]['summary'] = text_summary($body_text);
$node->body[$node->language][0]['format'] = 'full_html';
$node->path = array('alias' => $path, 'pathauto_perform_alias' => FALSE, 'pathauto' => FALSE);
node_save($node);

// -- menu
$item = array(
  'link_path' => 'node/' . $node->nid,
  'link_title' => $title,
  'menu_name' => 'main-menu',
  'plid' => $parent_mlid, // Parent
);
menu_link_save($item);