<?php

$roles = user_roles();

$user_data = array(
  'name' => 'NEW_USER',
  'pass' => 'NEW_PASS',
  'mail' => 'EMAIL@ADDRESS.COM',
  'init' => 'EMAIL@ADDRESS.COM',
  'status' => 1,
  'roles' => array(array_search('Manager', $roles) => 1),
);
$user = user_save('', $user_data);