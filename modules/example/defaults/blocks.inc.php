<?php

/**
 * @file
 * Default block configuration
 */

// Disable "Powered by Drupal"
$sql_query  = 'UPDATE {blocks} ';
$sql_query .= 'SET status = 0 ';
$sql_query .= 'WHERE module = "system" ';
$sql_query .= 'AND region = "footer" ';
$sql_query .= 'AND theme = "THEME" ';
$sql_query .= 'AND status = 1 ';
$result = db_query($sql_query);
// Disable "User login"
$sql_query  = 'UPDATE {blocks} ';
$sql_query .= 'SET status = 0 ';
$sql_query .= 'WHERE module = "user" ';
$sql_query .= 'AND region = "left" ';
$sql_query .= 'AND status = 1 ';
$sql_query .= 'AND delta = 0 ';
$sql_query .= 'AND theme = "THEME" ';
$result = db_query($sql_query);