<?php

// Administrative role
$result = permissions_create_role('Manager');
// Permissions
$permissions_grant = array(
  'access administration menu',
  'administer nodes',
  'create testimonial content',
  'create story content',
  'create page content',
  'delete any testimonial content',
  'delete any story content',
  'delete any page content',
  'edit any testimonial content',
  'edit any page content',
  'edit any story content',
  'access user profiles',
  'administer permissions',
  'administer users',
  'access administration pages',
  'change own username',
  'administer site-wide contact form',
  'administer menu',
  'administer meta tags',
  'edit meta tags',
  'access site reports',
  'administer site configuration',
  'administer taxonomy',
);
permissions_grant_permissions('Manager', $permissions_grant);

$permissions_grant = array(
  'access site-wide contact form',
);
permissions_grant_permissions('authenticated user', $permissions_grant);
permissions_grant_permissions('anonymous user', $permissions_grant);

$permissions_revoke = array(
  'collapse format fieldset by default',
  'collapsible format selection',
  'show format selection for blocks',
  'show format selection for comments',
  'show format selection for nodes',
  'show format tips',
  'show more format tips link',
);

permissions_revoke_permissions('authenticated user', $permissions_revoke);
permissions_revoke_permissions('anonymous user', $permissions_revoke);