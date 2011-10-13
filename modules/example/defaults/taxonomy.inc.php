<?php

module_load_include('module', 'taxonomy', 'taxonomy');
$t = get_t();

// Create the vocabulary programatically.
$vocab = array(
  'name' => 'Medium',
  'description' => $t('Storage and/or transmission tools used to store and deliver information or data.'),
  'help' => '',
  'relations' => 0,
  'hierarchy' => 0,
  'multiple' => 0,
  'required' => 1,
  'tags' => 0,
  'module' => 'taxonomy',
  'weight' => 0,
  'nodes' => array('NODE_TYPE' => 1),
);

taxonomy_save_vocabulary($vocab);

// Get the vid of the vocabulary we just created.
$vid = db_result(db_query('SELECT vid FROM {vocabulary} WHERE name = "%s"', 'Medium'));

// Create the term programatically.
$terms = array(
  'Videos' => 'Video advertising can be an effective avenue for reaching an audience. The term video advertising refers to all full-motion visual presentations of information.',
  'Web sites' => 'A website is a collection of related web pages containing images, videos or other digital assets, accessible via a network such as the Internet.',
  'Logos' => 'A logo is a graphic mark or emblem commonly used by commercial enterprises, organizations and even individuals to aid and promote instant public recognition. Logos are either purely graphic (symbols/icons) or are composed of the name of the organization (a logotype or wordmark).',
  'Advertisements' => 'Advertising is a form of communication used to persuade an audience (viewers, readers or listeners) to take some action with respect to products, ideas, or services.',
  'Brochures' => 'A brochure (also referred to as a pamphlet) is a type of leaflet, advertising an event, service, or other activity.',
  'Publications' => 'Content made available to the public, such as a report or presentation.',
);
foreach ($terms as $name => $definition) {
  $term = array(
    'name' => $name,
    'vid' => $vid,
    'description' => $t($definition),
  );
  taxonomy_save_term($term);
}