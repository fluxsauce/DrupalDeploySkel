<?php

/**
 * @file
 * Block Configuration - Drupal 7
 */

// Disable "Powered by Drupal"
$fields = array(
  'status' => '0',
);
db_update('block')->fields($fields)->condition('delta', 'powered-by', '=')->execute();
// Disable "User login"
$fields = array(
  'status' => '0',
);
db_update('block')->fields($fields)->condition('delta', 'login', '=')->execute();