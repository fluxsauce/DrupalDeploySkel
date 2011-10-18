<?php

/**
 * @file
 * WYSIWYG Configuration - Drupal 7
 */

// CKEditor - Filtered HTML
db_merge('wysiwyg')
  ->key(array(
    'format' => 'filtered_html',
  ))
  ->fields(array(
	  'editor' => 'ckeditor',
	  'settings' => 'a:20:{s:7:"default";i:1;s:11:"user_choose";i:0;s:11:"show_toggle";i:1;s:5:"theme";s:8:"advanced";s:8:"language";s:2:"en";s:7:"buttons";a:1:{s:7:"default";a:8:{s:4:"Bold";i:1;s:6:"Italic";i:1;s:12:"BulletedList";i:1;s:12:"NumberedList";i:1;s:4:"Link";i:1;s:6:"Unlink";i:1;s:10:"Blockquote";i:1;s:6:"Source";i:1;}}s:11:"toolbar_loc";s:3:"top";s:13:"toolbar_align";s:4:"left";s:8:"path_loc";s:6:"bottom";s:8:"resizing";i:1;s:11:"verify_html";i:1;s:12:"preformatted";i:0;s:22:"convert_fonts_to_spans";i:1;s:17:"remove_linebreaks";i:1;s:23:"apply_source_formatting";i:0;s:27:"paste_auto_cleanup_on_paste";i:0;s:13:"block_formats";s:32:"p,address,pre,h2,h3,h4,h5,h6,div";s:11:"css_setting";s:5:"theme";s:8:"css_path";s:0:"";s:11:"css_classes";s:0:"";}',
	))
  ->execute();

// CKEditor - Full HTML
db_merge('wysiwyg')
  ->key(array(
    'format' => 'full_html',
  ))
  ->fields(array(
	  'editor' => 'ckeditor',
	  'settings' => 'a:20:{s:7:"default";i:1;s:11:"user_choose";i:0;s:11:"show_toggle";i:1;s:5:"theme";s:8:"advanced";s:8:"language";s:2:"en";s:7:"buttons";a:1:{s:7:"default";a:20:{s:4:"Bold";i:1;s:6:"Italic";i:1;s:9:"Underline";i:1;s:6:"Strike";i:1;s:11:"JustifyLeft";i:1;s:13:"JustifyCenter";i:1;s:12:"JustifyRight";i:1;s:12:"JustifyBlock";i:1;s:12:"BulletedList";i:1;s:12:"NumberedList";i:1;s:7:"Outdent";i:1;s:6:"Indent";i:1;s:4:"Link";i:1;s:6:"Unlink";i:1;s:5:"Image";i:1;s:10:"Blockquote";i:1;s:6:"Source";i:1;s:13:"PasteFromWord";i:1;s:12:"RemoveFormat";i:1;s:6:"Format";i:1;}}s:11:"toolbar_loc";s:3:"top";s:13:"toolbar_align";s:4:"left";s:8:"path_loc";s:6:"bottom";s:8:"resizing";i:1;s:11:"verify_html";i:1;s:12:"preformatted";i:0;s:22:"convert_fonts_to_spans";i:1;s:17:"remove_linebreaks";i:1;s:23:"apply_source_formatting";i:0;s:27:"paste_auto_cleanup_on_paste";i:0;s:13:"block_formats";s:32:"p,address,pre,h2,h3,h4,h5,h6,div";s:11:"css_setting";s:5:"theme";s:8:"css_path";s:0:"";s:11:"css_classes";s:0:"";}',
	))
  ->execute();