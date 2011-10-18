<?php

/**
 * @file
 * Default contact information
 */

db_query('INSERT INTO {contact} SET category = "Contact", recipients = "EMAIL@ADDRESS.COM" ');
$contact = menu_link_load(db_result(db_query('SELECT mlid FROM {menu_links} WHERE link_path = "contact" ')));
$contact = array_merge((array) $contact, array(
  'original_item' => $contact,
  'customized' => 1,
  'weight' => 49,
  'hidden' => 0,
  'menu_name' => 'primary-links',
  'plid' => '0',
));
menu_link_save($contact);