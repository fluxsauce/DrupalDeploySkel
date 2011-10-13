<?php

/**
 * @file
 * Default content for Example
 */

if (!function_exists('node_object_prepare')) {
  include_once(drupal_get_path('module', 'node') . '/node.pages.inc');
}

// Home
$node = new stdClass();
$node->type = 'page';
node_object_prepare($node);
$node->title = 'EXAMPLE TITLE';
$node->body = '<p>Praesent auctor luctus tortor, at iaculis dolor lobortis ac. Nam ac metus in nibh condimentum scelerisque. Aliquam posuere enim vel ligula fringilla nec convallis risus posuere. Nulla erat sapien, auctor in consequat sed, blandit ac urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ac est quam, ut rutrum sem. Nulla sed mollis ipsum. Maecenas viverra semper metus, in semper mauris semper a. Morbi commodo, turpis at porta semper, massa neque lacinia lacus, id feugiat erat justo sit amet diam. Aliquam dignissim sagittis tristique. Suspendisse potenti. Donec fermentum mollis dapibus. Maecenas tortor sapien, bibendum ut pharetra at, tincidunt nec est. Aliquam cursus ultrices erat, ut egestas magna vehicula nec. Suspendisse sed sapien turpis, eu varius odio.</p><p>Donec a elit sit amet dui condimentum vestibulum ut quis quam. Aenean metus felis, consectetur nec mattis id, feugiat nec quam. Nam et elit eu leo bibendum feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque lacus mauris, bibendum sit amet iaculis a, blandit sit amet mauris. Nulla hendrerit ante ut purus congue ut mollis lorem malesuada. Vivamus mollis vestibulum elit sit amet iaculis. Morbi gravida cursus pulvinar. Etiam at adipiscing velit. Curabitur ac tellus vel augue imperdiet mattis id et nulla. Donec in fringilla tortor. Phasellus varius mattis nibh lobortis eleifend. Nullam urna ante, pellentesque quis semper sit amet, bibendum ac dui. In ut tempus mi. Cras vitae eros at nibh elementum adipiscing. In hac habitasse platea dictumst.</p><p>Integer vitae magna dolor. Donec bibendum bibendum tortor ac blandit. Proin vitae risus diam. In vitae est leo. Pellentesque quis libero massa, eu gravida ligula. Nullam ante dolor, interdum sit amet placerat quis, commodo sit amet nibh. Suspendisse placerat odio vel elit faucibus condimentum. Donec cursus nibh lobortis nisl tristique at convallis ante molestie. Integer non mollis nunc. Etiam mattis mi quis sem porttitor congue. Nulla facilisi. Quisque orci urna, condimentum at interdum eget, pharetra aliquet massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean lacinia ante sit amet tellus cursus ac aliquam lacus facilisis.</p><p>Donec nec risus augue, nec porttitor sem. Sed nibh tellus, tincidunt vel tristique at, pretium sit amet quam. Curabitur sed rhoncus libero. Integer quis nunc lacus, at blandit tortor. Phasellus elit eros, bibendum nec hendrerit nec, rhoncus a velit. Aliquam erat volutpat. Cras posuere neque quis elit tristique consequat. Maecenas posuere auctor sapien, et consequat dui feugiat vitae. Morbi vulputate, libero eu dapibus porttitor, arcu augue euismod diam, sit amet ullamcorper turpis neque a elit. Vivamus vehicula ultrices malesuada. Etiam lacinia commodo arcu non iaculis.</p><p>Mauris tincidunt sollicitudin sem. Vestibulum eros sapien, semper pretium fermentum nec, tempor sit amet felis. Donec facilisis gravida neque, at convallis nunc faucibus in. Quisque lorem massa, pharetra varius accumsan eget, varius quis eros. Fusce condimentum adipiscing ante, quis auctor leo pellentesque ac. Ut aliquet sapien a eros ornare consequat. Proin condimentum, felis non convallis porta, ligula odio mattis sem, eu ullamcorper augue diam at tellus. Nullam in auctor felis.</p>';
$node->teaser = node_teaser($node->body);
$node->uid = 1;
$node->format = 2; // Full HTML
$node->path = 'home';
$node->pathauto_perform_alias = FALSE;
node_save($node);

// Home - menu
$item = array(
  'link_path' => 'node/' . $node->nid,
  'link_title' => 'Home',
  'description' => 'Home',
  'menu_name' => 'primary-links',
  'weight' => -50,
);
menu_link_save($item);

// About
$node = new stdClass();
$node->type = 'page';
node_object_prepare($node);
$node->title = 'About';
$node->body = '<p>Aliquam et orci gravida sem ullamcorper luctus non in dui. Pellentesque felis lectus, consectetur vel tempus id, egestas nec magna. Sed et felis ac ipsum volutpat congue. Ut faucibus accumsan congue. Sed pharetra, ipsum ac cursus elementum, orci quam volutpat velit, nec placerat arcu purus non urna. Nunc pharetra, lacus nec rutrum imperdiet, risus eros dapibus massa, sit amet molestie nisl tortor vel metus. Vivamus vitae convallis elit. Mauris malesuada molestie enim, a adipiscing erat consectetur ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent pretium volutpat lorem ut vulputate. Suspendisse et mi nulla. Nulla facilisi.</p><p>Suspendisse id libero a sem ultrices pellentesque at quis orci. Nam interdum viverra ultrices. Aliquam commodo lorem nec massa sodales convallis. Cras tincidunt ullamcorper magna sed lobortis. Pellentesque pretium scelerisque neque quis tempor. Mauris at augue sit amet ligula vulputate viverra non nec lectus. Vestibulum dignissim est at turpis sollicitudin vehicula eu sed dui. Mauris porttitor mi ac tellus tincidunt elementum. Integer at viverra felis. Cras egestas ultrices pharetra. Nunc dignissim eros eget mi pharetra dictum. Vestibulum vitae fermentum nunc. Mauris ornare tincidunt lacinia. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec neque risus, condimentum eleifend pharetra eu, lobortis sit amet urna. Vivamus pulvinar libero eu neque adipiscing malesuada sit amet placerat odio.</p><p>Aliquam ultrices, nunc sit amet ullamcorper hendrerit, metus elit placerat est, at mollis dolor lectus vitae tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In facilisis consectetur sagittis. Quisque malesuada, magna porta adipiscing consectetur, magna felis sollicitudin libero, ut sagittis lacus turpis sed risus. Nunc tristique, nibh a facilisis vehicula, neque lorem aliquam tellus, et malesuada est erat accumsan massa. Sed vitae turpis massa. Quisque dapibus tempor tellus, ut molestie dolor gravida placerat. Vivamus luctus metus et orci sollicitudin nec porttitor turpis dapibus. Ut id diam neque, at feugiat magna. Maecenas egestas felis sed risus tempus non vulputate enim faucibus. Praesent viverra ornare commodo. Nam ut lorem ac urna molestie iaculis vitae et est. Sed quis nunc eu ligula condimentum volutpat. In arcu neque, pellentesque rhoncus egestas et, tincidunt vel enim. Aenean eget libero ante. Donec volutpat elementum massa, auctor dignissim sapien rutrum et.</p><p>Nam sapien magna, facilisis non consequat non, dignissim ac arcu. Donec tristique ultricies tortor ac molestie. Nulla non odio eu nunc euismod faucibus. Nunc eleifend scelerisque magna ut eleifend. Nullam in neque ante. Phasellus id mollis dolor. Maecenas luctus tortor a odio commodo vulputate. Curabitur lorem mauris, bibendum ac dignissim id, consequat consequat diam. Quisque eu lectus ligula, a placerat est. Nunc facilisis, magna id egestas facilisis, diam urna dapibus est, nec mollis neque dolor id ipsum. Integer id dui sem.</p><p>Suspendisse nisl lectus, sodales vel dictum at, congue sed tellus. Phasellus quam tortor, pellentesque et fringilla id, lobortis id turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In hac habitasse platea dictumst. Maecenas enim mi, cursus a mattis a, vulputate ut sapien. Sed lacus justo, consequat eu malesuada id, imperdiet et est. Maecenas pretium egestas felis eget consequat. Cras consectetur iaculis justo et fringilla. Quisque id molestie massa. Nam arcu dui, interdum ut ullamcorper quis, fermentum vitae urna. Etiam et metus sit amet orci iaculis placerat. Vestibulum et lorem mi, eu scelerisque nibh. Nam augue risus, bibendum non gravida a, accumsan in enim. Quisque eget euismod augue. Ut eget velit ut risus ultrices laoreet.</p>';
$node->teaser = node_teaser($node->body);
$node->uid = 1;
$node->format = 2; // Full HTML
$node->path = 'about';
$node->pathauto_perform_alias = FALSE;
node_save($node);

// About - menu
$item = array(
  'link_path' => 'node/' . $node->nid,
  'link_title' => 'About',
  'description' => 'About',
  'menu_name' => 'primary-links',
);
$about_mlid = menu_link_save($item);