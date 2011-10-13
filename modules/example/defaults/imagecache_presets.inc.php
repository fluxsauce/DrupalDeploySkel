<?php

/**
 * @file
 * Default imagecache presets
 */

$_presets = array();
$_presets['galleria_gallery'] = array (
  'presetname' => 'galleria_gallery',
  'actions' =>
  array (
    0 =>
    array (
      'weight' => '0',
      'module' => 'imagecache',
      'action' => 'imagecache_scale',
      'data' =>
      array (
        'width' => '563',
        'height' => '100%',
        'upscale' => 0,
      ),
    ),
    1 =>
    array (
      'weight' => '0',
      'module' => 'imagecache',
      'action' => 'imagecache_crop',
      'data' =>
      array (
        'width' => '100%',
        'height' => '280',
        'xoffset' => 'left',
        'yoffset' => 'top',
      ),
    ),
  ),
);
$_presets['galleria_thumbnail'] = array (
  'presetname' => 'galleria_thumbnail',
  'actions' =>
  array (
    0 =>
    array (
      'weight' => '0',
      'module' => 'imagecache',
      'action' => 'imagecache_scale',
      'data' =>
      array (
        'width' => '',
        'height' => '100',
        'upscale' => 0,
      ),
    ),
  ),
);
return $_presets;