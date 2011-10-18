<?php

/**
 * @file
 * Content - Drupal 7
 */

if (!function_exists('node_object_prepare')) {
  include_once(drupal_get_path('module', 'node') . '/node.pages.inc');
}

/**
 * About Child Abuse
 */

// About Child Abuse
$title = 'About Child Abuse';
$path = 'about-child-abuse';
$body_text = '<p>The Centers for Disease Control and Prevention (CDC) defines <a href="http://www.cdc.gov/violenceprevention/childmaltreatment/definitions.html">child maltreatment</a> as any act or series of acts of commission or omission by a parent or other caregiver (e.g., clergy, coach, teacher) that results in harm, potential for harm, or threat of harm to a child.</p><p>Child abuse happens more often than you think.&nbsp; Abuse comes in many different forms such as sexual abuse, physical abuse, emotional abuse, and neglect.</p><h2>Child neglect</h2><p><strong>Child neglect</strong> is failure to provide for a child&#39;s basic needs such as food, clothing, shelter, medical care, education, or proper supervision. Some signs are:</p><ul><li>The child shows signs of malnutrition or begs, steals, or hoards food.</li><li>The child has poor hygiene: matted hair, dirty skin, or severe body odor.</li><li>The child has unattended physical or medical problems.</li><li>The child states that no one is home to provide care.</li></ul><h2>Child sexual abuse</h2><p><strong>Child sexual abuse</strong> refers to any sexual act with a child by an adult or another child of any age.&nbsp; It includes, but is not limited to, fondling or rubbing the child&rsquo;s genitals, penetration, rape, sodomy, indecent exposure, and using the child for prostitution or the production of pornographic materials.</p><p>Sexual abuse is a crime of secrecy.&nbsp; It is estimated that only 10% of child sex abuse cases are ever reported.&nbsp; 90% of the time, children are sexually abused by someone they know.</p><p>The child may experience pain or bleeding in anal or genital areas, with possible redness or swelling.&nbsp; He or she may have difficulty and/or pain when sitting or walking.&nbsp; The child may display age-inappropriate behaviors with toys, themselves, or others and possibly have inappropriate sexual knowledge.&nbsp; Other possibilities include sleep disturbances or nightmares, depression, unusual aggression, interest in or avoidance of all things of a sexual nature.&nbsp; These symptoms are not the only possible indicators of sexual abuse.&nbsp; If you feel a child has been abused, please make a report.</p><h2>Child physical abuse</h2><p><strong>Child physical abuse</strong> is intentional injury inflicted upon a child. It may include severe shaking, beating, kicking, punching, or burning that result in minor marks, bruising, bone fractures, brain trauma, or even death. The child may have broken bones or unexplained bruises, burns, or welts in various stages of healing. The child might be unable to explain an injury or explanations given by the child or caretaker are inconsistent with the injury.&nbsp; He or she may also be unusually frightened of a parent or caretaker.</p><h2>Child emotional abuse</h2><p><strong>Emotional abuse</strong> may occur when a parent fails to provide the understanding, warmth, attention, and supervision the child needs for healthy psychological growth.&nbsp; The parent or caretaker might constantly criticize, threaten, belittle, insult, or reject the child with no evidence of love, support, or guidance. The child may exhibit extremes in behavior from overly aggressive to overly passive. He or she may show signs of academic difficulty, failure to thrive, eating disorders, depression, insomnia, frequent lying, substance abuse, any age-inappropriate behavior and even suicide attempts.</p><p>Emotional Abuse is reported in 15% of cases.&nbsp; Four children in this country die every day from child abuse and neglect.</p>';
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
$about_child_abuse_mlid = menu_link_save($item);

// Prevention and education
$title = 'Prevention and education';
$path = 'about-child-abuse/prevention-education';
$body_text = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vestibulum tempus odio ac fringilla. Nunc cursus egestas tempus. Sed pretium adipiscing nisi in tincidunt. Fusce rutrum augue in sem molestie varius. In sem enim, interdum nec imperdiet at, feugiat sed neque. Donec tristique tempor erat, a ultricies nulla rutrum id. Curabitur luctus, odio at scelerisque viverra, tortor erat dapibus nulla, at egestas turpis justo eu nisl. Nulla risus metus, commodo in ullamcorper eu, egestas id diam. Donec convallis sollicitudin odio ac dignissim. Sed eleifend, ante eleifend mattis consequat, urna magna cursus nulla, a pharetra tortor dui vel metus.</p><h2>How to talk to your children about preventing abuse</h2><p>Praesent vitae orci vitae urna consequat faucibus. Duis sagittis ultrices justo tempus mollis. Nunc tempor porta ligula, a luctus eros condimentum in. Donec quis diam non lectus commodo hendrerit nec nec dui. Phasellus sed mauris eu nunc vulputate porttitor. Morbi malesuada mi risus. Duis turpis arcu, convallis vel pulvinar nec, vehicula a lorem. Suspendisse consequat, magna et porta bibendum, orci velit convallis nunc, eget luctus dui elit rutrum nisl. Proin sit amet tellus purus, eget tincidunt velit. Nunc vel lectus magna, ut elementum purus. Suspendisse nisl tellus, congue at rutrum ut, vestibulum sit amet nulla. Cras metus nisi, faucibus non aliquet et, lobortis adipiscing massa.</p><p>Educate everyone in the family about child abuse.</p><ul><li>Definitions</li><li>Signs and Symptoms</li><li>Facts and Statistics</li></ul><p>When talking to your chhildren about preventing abuse:</p><ul><li>Create a safe environment to talk openly and allow your kids to ask questions</li><li>Emphasis to your children that:<ul><li>No one has the right to touch their private parts (unless for medical reasons)</li><li>If someone touches them and they feel uncomfortable they can say &quot;No&quot; and to tell an adult they trust (i.e hug, rubbing back)</li><li>It is NEVER the child&rsquo;s fault, they did not do anything wrong</li><li>Adults and children should never ask children to keep secrets.&nbsp; If they do let them know they should tell an adult they trust and they will not get in trouble</li></ul></li><li>Make a list of trusted adults your children can tell if something does happen or if they have questions</li><li>Make a plan for emergencies<ul><li>Make a list of the only people who would pick your child up in an emergency</li><li>Create a password that your family will use if someone needs to pick up your child, if they don&rsquo;t have know the password don&rsquo;t go with them!</li></ul></li></ul><h3>High 5! program</h3><p>High Five! is a unique, five week child abuse prevention program.&nbsp; This program is specifically designed to meet the needs of children in grades K-2, and we offer it to schools in Onondaga County.&nbsp; In addition to working with the students on self-esteem and safety skills, High Five! works alongside teachers, school professionals, and parents to offer a comprehensive program and empower the community to prevent child abuse.&nbsp; If you are interested in additional information about how you or your school can participate in High Five!, please contact Kerri Raissian at <a href="mailto:kerriraissian@yahoo.com?subject=High%205!%20program">kerriraissian@yahoo.com</a>.</p><h3>Internet Safety</h3><p>Websites for keeping both you and your children safe on the Internet:</p><ul><li><a href="http://www.ncmec.org">National Center for Missing &amp; Exploited Children</a><ul><li><a href="http://www.netsmartz.org">NetSmartz Workshop</a> - an interactive, educational program of the NCMEC that provides age-appropriate resources to help teach children how to be safer on- and offline</li></ul></li><li><a href="http://www.webwisekids.org">WebWiseKids</a> - unique and effective resources to equip young people to safely use and enjoy the latest technologies</li><li>Common Sense Media - <a href="http://www.commonsense.com/commonsense.com/html/internet-safety-guide/">Keeping Your Kids Internet Safe and Smart</a></li></ul>';
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
  'plid' => $about_child_abuse_mlid, // Parent
);
menu_link_save($item);

// Facts and statistics
$title = 'Facts and statistics';
$path = 'about-child-abuse/facts-statistics';
$body_text = '<ul><li>Four children die in this country every day from child abuse and neglect</li><li>Every six minutes, in the USA, a child is sexually abused</li><li>90% of the time, a child is sexually abused by someone he or she knows, not a stranger</li><li>Nationally, child sexual abuse costs taxpayers an estimated $24.4 billion a year for health care, social services and law enforcement</li><li>McMahon/Ryan has helped over 3,000 local children-more than 400 every year</li><li>National studies show that communities without a Child Advocacy Site spend 30% more money to deliver the same services</li><li>One in five girls and one in seven boys are sexually abused before their 18th birthday</li><li>A report of child abuse is made every 10 seconds</li><li>It is estimated that 60-85% of child fatalities due to maltreatment are not recorded as such on death certificates</li></ul><p>Children are suffering from a hidden epidemic of child abuse and neglect. Over 3 million reports of child abuse are made every year in the United States; however, those reports can include multiple children.&nbsp; In 2007, approximately 5.8 million children were involved in an estimated 3.2 million child abuse reports and allegations.</p><p><a href="http://www.childhelp.org/page/-/child-deaths-per-day-line_9-30-2011.jpg">http://www.childhelp.org/page/-/child-deaths-per-day-line_9-30-2011.jpg</a></p><h2>Rainn.org</h2><ul><li>15% of all rape victims are under the age of 12<ul><li>29% are ages 12-17</li><li>44% are under age 18</li></ul></li><li>Girls age 16-19 are 4 times more likely than the general population to be victims of rape, attempted rape, or sexual assault</li><li>93% of juvenile sexual assault victims know their attacker<ul><li>34.2% of their attackers were family members</li><li>58.7% were acquaintances</li></ul></li><li>Only 7% of the perpetrators were strangers to the victim</li></ul>';
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
  'plid' => $about_child_abuse_mlid, // Parent
);
menu_link_save($item);

// Mandated reporters
$title = 'Mandated reporters';
$path = 'about-child-abuse/mandated-reporters';
$body_text = '<p>A mandated reporter is required to make an oral report to the State Central Register or to the New York State Office of Child and Family Services.</p><p>Among those who are mandated to make reports are:</p><ul><li>Medical and Hospital Personnel</li><li>School Officials</li><li>Social Service Workers</li><li>Child Care Workers</li><li>Residential Care Workers</li><li>Law Enforcement Personnel</li></ul><p>For more information, visit the <a href="http://www.nysmandatedreporter.org/">Mandated Reporter Resource Center</a>.</p><h2>Questions for mandated reporters</h2><p>Some questions you may be asked include:</p><ul><li>What is the child&rsquo;s name, home address and age?</li><li>What is the nature and extent of the child&rsquo;s injuries or the risk of harm to the child?</li><li>Have there been any prior suspicious injuries to this child or his/her siblings?</li><li>Do you have any information regarding treatment of the child or the child&rsquo;s current whereabouts?</li></ul><h2>Obligations for mandated reporters</h2><p>You will be obligated to file a written report with Child Services within 48 hours of making the oral report.&nbsp; You are entitled to a copy of the report; however any information pertaining to the identity of the source will be redacted as it might reasonably jeopardize the safety of the person.</p><p>People who are not mandated reporters will not need to follow up with a written report.&nbsp; A non-mandated reporter also has the option to file the report anonymously.</p><h2>How to become a mandated reporter</h2><p>Vestibulum vitae odio ligula, nec pretium tellus. Suspendisse potenti. Donec ut metus et quam luctus sodales. Suspendisse et est a ligula mollis rutrum eu vel massa. Sed a venenatis massa. Vestibulum sed nunc et neque accumsan vehicula. Integer sed nisi massa, sit amet dictum nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum diam eget eros rutrum tristique.</p><h2>Mandated reporter locations</h2><p>Vestibulum id ligula nulla. In cursus, enim id aliquam adipiscing, dui orci vulputate sem, vitae facilisis nulla velit sit amet velit. Maecenas consectetur, mauris non luctus sodales, turpis libero mollis tellus, vel elementum neque ante sit amet lacus. Aenean consectetur, tortor eu dignissim feugiat, lorem nulla sodales sapien, nec blandit dolor nunc nec sapien. Cras tincidunt dui non ipsum cursus id tincidunt est fringilla. Donec eget tellus in lectus eleifend elementum. Curabitur aliquet varius leo, eu cursus mauris dignissim non. Mauris gravida tortor condimentum ligula tincidunt scelerisque. Vivamus sit amet felis tortor, eget bibendum augue. Pellentesque vel nunc sed orci ullamcorper rutrum vel eu sem. In sodales erat tincidunt magna porttitor posuere. Donec quis quam sodales nulla blandit condimentum. Donec rutrum, libero et aliquam viverra, odio enim ultricies leo, et fermentum augue est a quam. Ut pellentesque, enim rutrum egestas condimentum, purus nibh mollis mi, vel tristique ipsum mi vitae purus. Donec accumsan pharetra nisi, vitae malesuada dolor convallis non.</p><h2>External resources</h2><ul><li><a href="http://www.ongov.net/Sheriff/">Onondaga County Sheriff Department</a></li><li><a href="http://www.syracusepolice.org/">Syracuse Police Department</a></li><li><a href="http://www.ongov.net/dss/index.html">Department of Social Services</a></li><li><a href="http://www.mha-oc.org/">Mental Health Association of Onondaga County</a></li><li><a href="http://www.verahouse.org/">Vera House</a></li><li><a href="http://www.ncmec.org">National Center for Missing &amp; Exploited Children</a> (NCMEC)</li><li><a href="http://rainn.org">Rape, Abuse and Incest National Network</a> (RAINN)<br />&nbsp;</li></ul>';
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
  'plid' => $about_child_abuse_mlid, // Parent
);
menu_link_save($item);

// Make a report
$title = 'Make a report';
$path = 'about-child-abuse/make-report';
$body_text = '<p>Protecting children is every adult&#39;s responsibility.</p><p>If a child is in immediate danger, <strong>CALL 911</strong>!</p><ul><li>New York State Child Abuse Hotline: 1-800-342-3720</li><li>New York State Mandated Reporter Hotline: 1-800-635-1522</li><li>Onondaga County Child Abuse Hotline: 315-422-9701</li></ul><h2>What to expect when making a report</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vestibulum tempus odio ac fringilla. Nunc cursus egestas tempus. Sed pretium adipiscing nisi in tincidunt. Fusce rutrum augue in sem molestie varius. In sem enim, interdum nec imperdiet at, feugiat sed neque. Donec tristique tempor erat, a ultricies nulla rutrum id. Curabitur luctus, odio at scelerisque viverra, tortor erat dapibus nulla, at egestas turpis justo eu nisl. Nulla risus metus, commodo in ullamcorper eu, egestas id diam. Donec convallis sollicitudin odio ac dignissim. Sed eleifend, ante eleifend mattis consequat, urna magna cursus nulla, a pharetra tortor dui vel metus.</p><p>Praesent vitae orci vitae urna consequat faucibus. Duis sagittis ultrices justo tempus mollis. Nunc tempor porta ligula, a luctus eros condimentum in. Donec quis diam non lectus commodo hendrerit nec nec dui. Phasellus sed mauris eu nunc vulputate porttitor. Morbi malesuada mi risus. Duis turpis arcu, convallis vel pulvinar nec, vehicula a lorem. Suspendisse consequat, magna et porta bibendum, orci velit convallis nunc, eget luctus dui elit rutrum nisl. Proin sit amet tellus purus, eget tincidunt velit. Nunc vel lectus magna, ut elementum purus. Suspendisse nisl tellus, congue at rutrum ut, vestibulum sit amet nulla. Cras metus nisi, faucibus non aliquet et, lobortis adipiscing massa.</p><p>Cras luctus, ligula ac auctor condimentum, nibh purus posuere arcu, at vulputate neque erat id arcu. Phasellus id mauris augue, ac semper massa. Proin id cursus enim. Duis viverra lectus et turpis interdum mollis ultrices massa vulputate. Vestibulum vulputate placerat sem, vitae tincidunt nunc laoreet ac. Nam porttitor varius mauris non ultrices. In ac risus diam. Phasellus porttitor mi at ligula sollicitudin venenatis suscipit lectus pharetra. Donec lectus risus, tincidunt sed faucibus a, tempus in libero. Cras eu aliquet erat. Mauris tellus odio, auctor non porttitor eu, faucibus a quam. Donec imperdiet vulputate bibendum. Sed nec dictum nibh. Integer eu lorem in sem viverra venenatis ut et quam. Nunc varius ornare libero quis fringilla.</p><p>Suspendisse potenti. Ut placerat volutpat augue, auctor hendrerit neque adipiscing vulputate. Etiam porta diam tellus. Morbi luctus imperdiet dignissim. Morbi odio orci, dictum suscipit aliquam sed, dictum sed felis. Aliquam porttitor tincidunt nulla. Morbi varius urna vel lorem aliquet ultrices. Donec blandit arcu quis mauris iaculis et adipiscing purus sodales.</p><p>Nullam a suscipit nunc. Proin eu dui erat. Nunc metus sapien, porttitor a luctus in, semper non erat. Vivamus quam elit, pretium quis dapibus id, feugiat eu ipsum. Pellentesque aliquet turpis non augue malesuada vestibulum. Phasellus et mauris id massa blandit adipiscing. Integer varius ipsum in tortor sollicitudin scelerisque vitae et purus. Sed non risus lacus. Donec volutpat blandit purus, ac pretium eros varius vel. Curabitur vitae quam sed dolor elementum malesuada. Suspendisse at lacus eget dui rhoncus aliquet eu vel quam. Ut volutpat pretium mattis. Fusce gravida porta risus eget rutrum. Ut hendrerit bibendum nisl eget condimentum. Nam at quam ipsum, non placerat massa.</p>';
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
  'plid' => $about_child_abuse_mlid, // Parent
);
menu_link_save($item);

/**
 * About the Center
 */

// About the Center
$title = 'About the Center';
$path = 'about-center';
$body_text = '<p>The accepted national standard for quality investigation and intervention of child sexual and physical abuse is the development and operation of a Child Advocacy Center (CAC). The CAC approach brings all essential services and supports for abused children to one safe, child-friendly location. The CAC ensures non-threatening, child-focused environment for interviews with the child victim with rapid and efficient access to a full range of services, while maximizing communication and coordination among numerous law enforcement and treatment providers.</p><p>The CAC model is also cost effective. The community pays three times as much for a child to go through the system when a CAC is not in place. According to the findings from the National Child Advocacy study, &quot;On a per case basis traditional investigations were 36 percent more expensive than CAC investigations&hellip;generating a savings of more than $1,000 per case.&quot; We are the only Child Advocacy Center in all of Onondaga County.</p><blockquote><p>Our ultimate goal since the inception of the APU was to make the victim&rsquo;s experience as painless as possible. The victim&rsquo;s interest is our first and foremost concern.</p><p>- <em>Sergeant Jack Schmidt, Onondaga County Sherriff&#39;s Abused Persons Unit:</em></p></blockquote><h2>Mission</h2><p>The McMahon/Ryan Child Advocacy Center is a 501(c)(3) non-profit organization dedicated to ending child abuse through intervention and education. The organization offers a safe, child-friendly process for abused children and their families, supported by a committed, professional team specializing in the investigation, prosecution and treatment of child abuse.</p><h2>History</h2><p>In 1998, members of the McMahon and Ryan families of Syracuse, New York, began working with members of the Child Abuse Management Team (professionals involved with child abuse efforts). A needs assessment concluded that the creation of a facility that focused on child abuse issues was a critical need in the community. The McMahon/Ryan Child Advocacy Site was incorporated in December of 1998. The initial goals were to provide:</p><ul><li>a consistent meeting place and training facility for child abuse professionals;</li><li>a child friendly location for interviews and supervised visitation for Child Protective Services;</li><li>educational resources for non-offending care takers;</li><li>educational resources for mandated reporters and other professionals;</li><li>central location for tracking of all abused children;</li><li>community awareness &amp; prevention efforts..</li></ul><h3>2002 - Site opened</h3><p>Our doors officially opened in April 2002 during National Child Abuse Awareness Month at 509 W Onondaga Street Syracuse, New York in an 1860&#39;s vintage house donated by the McMahon and Ryan family members. Since then McMahon/Ryan has not only achieved our initial goals in meeting a critical community need but has grown significantly by expanding our role to include:</p><ul><li>serving as the coordinator of the Onondaga County&#39;s multidisciplinary team (Child Abuse Response Team or CART) which works to develop procedures, protocols and programs that are centered on the needs of the abused children;</li><li>providing services to nearly 300 child victims and their families every year;</li><li>hosting the Child Abuse Response and Evaluation Clinic from Upstate Medical University on site;</li><li>hosting representatives from Onondaga County Sheriff&#39;s department and Child Protective Services on site;</li><li>providing education and outreach on child abuse prevention and awareness to school age children.</li></ul><h3>2011 - Center opened</h3><p>McMahon/Ryan Child Advocacy Center opened its new doors to a totally renovated 30,000 square foot building, the former Reid Hall (former location of Syracuse University&rsquo;s University College) at 601 East Genesee Street in June 2011. This new location provides space for all the agencies that are members of the Child Abuse Response Team to co-locate under one roof.</p>';
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
  'weight' => 2,
);
$about_the_center_mlid = menu_link_save($item);

// Families and children
$title = 'Families and children';
$path = 'about-center/families-children';
$body_text = '<h2>Child advocacy</h2><p>When you arrive for a CARE appointment, you will be greeted in a safe and child-friendly environment by a Child Advocate, who will help provide a support system for the victims of child abuse through court assistance, mental health referrals, and offer ongoing case management services.&nbsp; The Child Advocate works with non-offending family members and child victims in order to promote healing and growth.&nbsp; They facilitate and coordinate with a variety of other agencies including the Child Abuse Response Team (CART).&nbsp; The Child Advocate works with you each step of the way so that you do not have to go through this alone.</p><h3>CARE intake &amp; exam</h3><p>The caregiver will first meet with Nurse Nancy Mitchell, Social Worker Elizabeth Kinsey and the Child Advocate.&nbsp; During this interview, you will be asked about your child and what brought you to the CARE clinic.&nbsp; Medical background for your child will also be gathered.</p><p>The child will meet with Nurse Anne Galloway who will explain everything that will happen during the medical exam.&nbsp; The caregiver is allowed to be present during the exam.&nbsp; Dr. Ann Botash or Dr. Alicia Pekarsky will examine your child.&nbsp; They will check their head, arms, legs, chest and private parts.</p><p>After the exam is complete, the caregiver will sit down with the doctor and nurse to get a better understanding of the exam and the results.</p><p>During any point of the intake or exam, don&rsquo;t hesitate to bring up any questions or concerns.</p><h3>Interview process</h3><ol><li>Receive case and review.</li><li>Search Police records to determine if suspect is known.</li><li>Contact victim, and make appointment.</li><li>Contact CPS if involved.</li><li>Contact Advocate if applicable.</li><li>Interview victim, obtain facts, and then complete an affidavit (statement) from victim.&nbsp; If victim is a child less than (9) they need to be qualified; do they know right from wrong, truth vs. lie, address, telephone number, and their knowledge of body parts.</li><li>Interview parent and obtain an affidavit of their desire to prosecute.&nbsp; (If child has not received medical treatment or needs to be seen, we make those arrangements).</li><li>Interview any witnesses and obtain affidavit.</li><li>Locate and interview suspect.</li><li>Make arrest.</li><li>Obtain order of protection.</li><li>Complete a detailed report of all actions taken.</li></ol><h2>Counseling and mental health</h2><p>McMahon/Ryan Child Advocacy Center works with many mental health professionals to provide individual, family, and group counseling to those affected by child abuse.</p><h2>Referral &amp; continued care</h2><ul><li><a href="http://www.missingkids.com">National Center for Missing and Exploited Children</a></li><li><a href="http://rainn.org/">RAINN</a> - The nation&#39;s largest anti-sexual violence organization.</li><li><a href="http://www.verahouse.org/">Vera House</a> - Vera House aims to end domestic abuse and sexual violence, to empower abused women and children, and to promote equality and respect in relationships.</li><li><a href="http://www.ocfs.state.ny.us/main/">New York State Office of Children and Family Services</a></li><li><a href="http://www.nationalchildrensalliance.org/">National Children&#39;s Alliance</a></li><li><a href="http://www.tlcinst.org/PTRChelp.html">Parents Trauma Resource Center</a></li></ul>';
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
  'plid' => $about_the_center_mlid, // Parent
);
menu_link_save($item);

// Staff
$title = 'Staff';
$path = 'about-center/staff';
$body_text = '<p>(Introduction)</p><h2>Julie A. Cecile, Esq.</h2><ul><li>Executive Director</li><li><a href="mailto:jcecile@mcmahonryan.org">jcecile@mcmahonryan.org</a></li></ul><p>Julie Cecile joined McMahon/Ryan Child Advocacy Site in January 2008. She came to the Site from the Onondaga County Department of Social Services Legal Division. Julie oversees the day-to-day operations of the McMahon/Ryan Child Advocacy Site. She earned a JD from Syracuse University College of Law and a Bachelor&rsquo;s degree from Siena College in Loudonville, NY.</p><h2>Debbie Supensky</h2><ul><li>Administrative Assistant</li><li><a href="mailto:dsupen@mcmahonryan.org">dsupen@mcmahonryan.org</a></li></ul><p>Debbie Supensky joined McMahon/Ryan Child Advocacy Site in August 2002. She serves as receptionist and provides support to the professional staff and Board members. She earned an Associate&rsquo;s degree from Bryant &amp; Stratton in Syracuse, NY.</p><h2>Jennifer Majesky</h2><ul><li>Child Advocate</li><li><a href="mailto:jmajesky@mcmahonryan.org">jmajesky@mcmahonryan.org</a></li></ul><p>Jennifer Majesky joined McMahon/Ryan Child Advocacy Site in June 2009. Her duties at the McMahon/Ryan Child Advocacy Site are to provide support services for victims of child abuse, through court assistance, mental health referrals and provide on-going case management. She received her BA from Nazareth College in 2009.</p><h2>MaryBeth Thome</h2><ul><li>Child Advocate</li><li><a href="mailto:mbthome@mcmahonryan.org">mbthome@mcmahonryan.org</a></li></ul><p>MaryBeth Thome began working at McMahon-Ryan Child Advocacy Site in September 2009. Her duties at the McMahon/Ryan Child Advocacy Site are to provide support services for victims of child abuse, through court assistance, mental health referrals and provide on-going case management. MaryBeth earned her BA in Psychology, as well as her MS and CAS in School Counseling from the University at Albany.</p><h2>Valerie A. Brogan, Detective</h2><ul><li>Onondaga County Sheriff&#39;s Department</li><li><a href="mailto:valeriebrogan@ongov.net">valeriebrogan@ongov.net</a></li></ul><p>Valerie began her career in January of 1988, and was assigned to the Uniform/Patrol division. During her time on patrol, she became a Field Training Officer and an Instructor at the Police Academy. In March of 1996 Valerie left patrol, and was assigned to the Criminal Investigation Section working on a bank robbery task force with the FBI, and including agencies throughout Onondaga and Oswego counties. In October of 1996 she was assigned to the Abused Persons Unit handling domestic violence, missing persons, child abuse, and all sexual based crimes involving children and adults. Valerie joined McMahon/Ryan Child Advocacy Site in October of 2009. She continues to interview victims of sexually based crimes and follow-up those interviews by locating, interviewing, and arresting the perpetrators. Her new location enables her to share the critical information obtained during these interviews with the Child Advocates, Therapists, and the CARE Team who will be assisting the victims and their families.</p><h2>Kathryn Sowards, Ph.D., LMFT</h2><ul><li><font color="red">Position?</font></li><li><font color="red">email?</font></li></ul><p>Kathryn Sowards joined McMahon/Ryan in 2008. She works with Vera House, Inc. and the Upstate CARE team to provide mental health assessments and psychotherapy to children and families at McMahon/Ryan. Kathryn received her clinical training at Syracuse University in Marriage and Family Therapy. She has a Ph.D. in Sociology from the University of Texas at Austin and has published research on child and women&rsquo;s health. Kathryn was previously on the faculty of Washington State University and a Fellow in the Robert Wood Johnson Scholars in Health Policy Research Program at the University of Michigan.</p><h2>Kerri M. Raissian</h2><ul><li style="text-align: justify;"><font color="red">Email?</font></li><li style="text-align: justify;">Community Outreach Coordinator</li></ul><p>Kerri joined McMahon/Ryan in 2007 and has over 7 years of experience in working with child and adult survivors of violence or abuse. She coordinates the High Five! program and other community presentations. She also facilitates support groups for non-offending caregivers and children. Kerri earned her BA from Vanderbilt University in Nashville, TN, her MPA from the Maxwell School at Syracuse University, and is currently working on her Ph.D. in Public Administration at Syracuse University.</p>';
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
  'plid' => $about_the_center_mlid, // Parent
);
menu_link_save($item);

// Child Abuse Response Team (CART)
$title = 'Child Abuse Response Team (CART)';
$path = 'about-center/child-abuse-response-team';
$body_text = '<p>No one agency or professional alone can treat and prevent child abuse.</p><p>In order to promote healing and growth in victims and their families, the Child Abuse Response Team (CART) facilitates, coordinates and integrates the prevention, investigation, prosecution, and treatment services of child sexual and physical abuse cases within Onondaga County utilizing a multidisciplinary team model. CART consists of the following organizations:</p><ul><li><a href="http://www.upstate.edu/gch/services/care/">SUNY Upstate Medical Child Abuse Referral and Evaluation Program</a></li><li><a href="http://www.ongov.net/Sheriff/">Onondaga County Sheriff&#39;s Office</a></li><li><a href="http://www.verahouse.org/">Vera House</a></li><li><a href="http://www.syracusepolice.org/">Syracuse City Police Department</a></li><li><a href="http://www.elmcrest.org/programs/transitions.html">Family Transitions</a></li><li><a href="http://www.ongov.net/law/index.html">Onondaga County Attorney&#39;s Office</a></li><li><a href="http://www.ongovda.net/section/home/">Onondaga County District Attorney&#39;s Office</a></li><li><a href="http://www.ongov.net/dss/index.html">Onondaga County Department of Social Services</a></li><li><a href="http://mcmahonryan.org/">McMahon/Ryan Child Advocacy Site</a></li></ul>';
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
  'plid' => $about_the_center_mlid, // Parent
);
menu_link_save($item);

// CARE staff
$title = 'CARE staff';
$path = 'about-center/care-staff';
$body_text = '<p><font color="red">What is CARE? Needs a short introduction, probably is not up to date. Do they not have email or contact information?</font></p><h2>Ann Botash, MD</h2><p>Ann S. Botash, MD, Professor of Pediatrics at the State University of New York Upstate Medical University, is a nationally recognized expert in child sexual abuse evaluation. She directs the <a href="http://www.upstate.edu/gch/services/care/">University Hospital&rsquo;s Child Abuse Referral and Evaluation (CARE) program</a> in Syracuse, New York. She is Vice Chair for Education at the SUNY Upstate Department of Pediatrics, teaching residents and students as a faculty member at Upstate.</p><p>In order to better serve all children and adolescents in New York State, Dr. Botash created the Child Abuse Medical Provider (CHAMP) Network to educate healthcare professionals in the identification and management of child sexual abuse cases. A New York State Department of Health (NYSDOH) grant helps support CHAMP activities that include coursework and continued learning through webcasts and case reviews accessed through its website www.champprogram.com . NYSDOH also funded Dr. Botash&rsquo;s writing a primer for medical providers, Evaluating Child Sexual Abuse: Education Manual for Medical Professionals, which is the first step in the training to become a <a href="http://www.champprogram.com/become-provider.shtml">CHAMP Provider</a>. In 2005 Dr. Botash received the Ambulatory Pediatric Association&rsquo;s award for Public Policy and Advocacy.</p><h2>Anne Galloway, RN</h2><p>Anne Galloway is currently a staff nurse in the Child Abuse Referral and Evaluation (CARE) Program through Upstate Medical University, which specializes in the examination of sexually abused children. In addition, she is the coordinator for the Sexual Assault Nurse Examiner (SANE) Program in Onondaga County through Vera House, Inc.</p><p>Prior to her SANE experience, Anne was an emergency department nurse at St. Joseph&rsquo;s Hospital Health Center in Syracuse for eleven years, the last five of which she served as the Assistant Nurse Manager.</p><p>Anne is active in the New York State Chapter of the International Association of Forensic Nurses, and the Emergency Nurses Association. She also is the course director for the Adult &ndash; Adolescent Sexual Assault Nurse Examiner Course.</p><p>Anne received her RN diploma from Crouse-Irving Memorial School of Nursing in Syracuse in 1982, and her SANE training from Columbia University in January, 1998.</p><h2>Elizabeth Kinsey</h2><p><font color="red">Position, description?</font></p><h2>Nancy Mitchell RN, MS, PNP</h2><p>Nancy Mitchell is the nurse practitioner on the CARE Team. She has worked on the team for almost 20 years. She assists the physicians with the medical evaluations or performs the examinations when the physicians are not available. Nancy helps triage the phone calls and schedule patients to be seen. In addition, she also follows up laboratory or other testing that has been done on patients. Being part of the team she fills in wherever she&rsquo;s needed.</p><h2>Alicia Pekarsky, MD</h2><p>Dr. Pekarsky began working at McMahon-Ryan Child Advocacy Site when she joined the Child Abuse Referral and Evaluation (CARE) team at University Hospital in 2005. She performs comprehensive medical evaluations of children that are suspected to have been abused. Dr. Pekarsky obtained her undergraduate degree from Cornell University, then moved to Syracuse to attend Upstate Medical University where she obtained her medical degree. She did her general pediatric residency training at St. Christopher&#39;s Hospital for Children in Philadelphia, PA and her child abuse/neglect fellowship at Upstate Medical University.</p>';
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
  'plid' => $about_the_center_mlid, // Parent
);
menu_link_save($item);

// Services
$title = 'Services';
$path = 'about-center/services';
$body_text = '<p>When families arrive at McMahon/Ryan Child Advocacy Center, they are greeted by a dedicated professional team.&nbsp; This team helps the abused child and families heal by coordinating services all under one roof.&nbsp; The Center is a comfortable, private, child-friendly setting that is physically and psychologically safe for children and their non-offending caretakers.</p><h2>Medical Evaluations</h2><p>Children who have experienced abuse can receive a child-sensitive, non-invasive medical exam to collect evidence and safeguard the child&rsquo;s health.</p><h2>Child Abuse Advocacy</h2><p>Advocates provide support to abused children and their families to negotiate the systems involved with investigation, prosecution, and follow-up services.</p><h2>Investigative Interviews</h2><p>Law enforcement and Child Protective Services (CPS) have joined together to investigate cases of abuse.</p><h2>Therapy and Support Groups</h2><p>Mental health professionals are available to support the abused child and their family while they progress through the healing process.</p><h2>Community Awareness and Prevention</h2><p>The Center works to increase community awareness and understanding of child abuse as to the extent of abuse in our community and the services available to respond to and prevent abuse.</p><h2>Professional Education and Services</h2><p>The Center has a large training room with multi-media equipment for training staff, child abuse professionals and para-professionals.</p>';
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
  'plid' => $about_the_center_mlid, // Parent
);
menu_link_save($item);

// Volunteer
$title = 'Volunteer';
$path = 'about-center/volunteer';
$body_text = '<p>Make a difference in the life of a child by volunteering for the McMahon/Ryan Child Advocacy Center!&nbsp; The following flexible volunteer opportunities allow for a range of time commitment, abilities, and level of involvement.</p><h2>Newsletter Editor</h2><p>Assist in the publication of a tri-annual newsletter through writing articles and stories.&nbsp; Volunteers can also assist at our booth/display at various events.</p><h2>Event Photographer</h2><p>Assist in capturing the Center&#39;s special events.</p><h2>Child Abuse Awareness Month Support</h2><p>Assist with the coordination and administration of prevention and educational activities for the month of April.&nbsp; Assist in the organizing and publicity of events.</p><h2>Fundraising</h2><p>Assist with the coordination of special events, solicitation of local businesses for donations, preparation and organization of materials related to fundraising and/or planning.&nbsp; Actual volunteer tasks will vary according to the volunteer&rsquo;s experience, contacts, and comfort level.&nbsp; Fundraising volunteers are provided with training, support, and materials.&nbsp; There are opportunities to assist in all stages of fundraising projects including event coordination, graphic design of promotional materials, assistance with mass mailings, follow-up calls to local businesses, and meetings with local business leaders.</p><h2>Events Volunteer</h2><p>Assist in set up, take down, planning and staffing of events. The events include: Pinwheels for Prevention (in April), National Child Abuse Awareness Month (in April), 100 Holes for Kids Golf Fundraiser (in May), &quot;do 1 thing&quot; campaign (in September), and The Sounds of the Season Fundraiser (in November).</p><h2>Building and Grounds Maintenance</h2><p>Assist in general upkeep of the site.&nbsp; Possible activities include lawn care, gardening, cleaning, painting, window washing.</p><h2>Organization Historian</h2><p>Assist in maintaining a scrapbook of the organization&#39;s history and media attention.</p><h2>Volunteer Coordinator</h2><p>Recruit and inspire volunteers to work at the Site.&nbsp; Keep volunteers updated on Site happenings, and manage volunteer scheduling.</p><h2>Research Aide</h2><p>Assist in researching topics for fact sheets, workshops, and various activities.</p><h2>Technical Support</h2><p>Assist in website design and maintenance, database maintenance, and general office support.</p>';
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
  'plid' => $about_the_center_mlid, // Parent
);
menu_link_save($item);

// Board
$title = 'Board';
$path = 'about-center/board';
$body_text = '<h2>Executive Board</h2><ul><li>Kimberly Boynton, President</li><li>Chris Lord, Vice President</li><li>James Sisson, Treasurer</li><li>Christopher Schlecht, Secretary</li></ul><h2>Board Members</h2><ul><li>Eric Biegler</li><li>Dr. Ann Botash, MD</li><li>Amy Delia</li><li>Tim DeMore</li><li>Erin Duffy</li><li>Kathleen Flannery</li><li>Michael Henesey</li><li>Emily Kulkus</li><li>Bryan Lendy</li><li>Ron Lombard</li><li>Margaret McMahon Rauch</li><li>John O&rsquo;Brien</li><li>Bruce Poushter</li><li>Clare Rauch</li><li>Jim Rinella</li><li>Ann Rooney</li><li>Martha Ryan</li><li>Molly Stroman</li><li>Dave Wall</li></ul>';
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
  'plid' => $about_the_center_mlid, // Parent
);
menu_link_save($item);

// Tour
$title = 'Tour';
$path = 'about-center/tour';
$body_text = '<ul><li><font color="red">What features of the building, size, offices, etc.?</font></li><li><font color="red">All the content that&#39;s in the video, plus more.</font></li><li>http://www.youtube.com/watch?v=7pcPXRf8CJY</li><li><font color="red">&quot;We will be tweaking it in the near future with more information once the CARE Clinic is here.&quot;</font></li><li><strong><font color="red">Also, video is not hosted by account that MRC controls.</font></strong></li></ul>';
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
  'plid' => $about_the_center_mlid, // Parent
);
menu_link_save($item);

// Organizations
$title = 'Organizations';
$path = 'about-center/organizations';
$body_text = '<ul><li>Upstate Medical University Hospital&rsquo;s Child Abuse Referral and Evaluation Clinic</li><li>Onondaga County District Attorney&rsquo;s Office</li><li>Onondaga County Department of Social Services Child Protective Services</li><li>Abused Persons Unit &ndash; Onondaga County Sheriffs and Syracuse City Police</li><li>Vera House</li><li>National Center for Missing and Exploited Children</li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nisl odio, fringilla non egestas eget, tincidunt vel purus. Donec mattis est lectus, sit amet congue lectus. In hac habitasse platea dictumst. Nulla quis eros ac urna sagittis laoreet ac in lacus. Phasellus sollicitudin, erat quis ullamcorper sagittis, urna lorem ullamcorper eros, tincidunt venenatis dolor tellus non augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam et quam turpis, sed tristique nunc. Duis tempus blandit lectus quis lacinia. Donec eget tincidunt neque. Quisque quam odio, ornare at tristique vel, faucibus et mi.</p><p>Aliquam tortor quam, pharetra hendrerit iaculis vel, facilisis at justo. Cras dignissim condimentum vestibulum. In non sapien metus, ut sagittis lectus. Pellentesque at pellentesque ipsum. Curabitur vitae neque ipsum. Phasellus mattis mattis neque ac pellentesque. Sed ut tellus magna. Nunc imperdiet mattis felis, a aliquet ipsum varius non.</p><p>Morbi semper nibh tempor tellus sollicitudin vel vehicula neque molestie. Nam nibh purus, mollis eu facilisis nec, dapibus at dolor. Ut at dignissim eros. Vivamus arcu lectus, interdum vel faucibus tempor, tempor sit amet metus. Mauris pretium, orci nec pretium auctor, massa leo laoreet velit, et facilisis tellus enim in tortor. Praesent et dui et sapien ornare gravida. Sed convallis ante quis augue consequat lobortis. Nam ac diam at odio pulvinar condimentum.</p><p>Vestibulum vitae odio ligula, nec pretium tellus. Suspendisse potenti. Donec ut metus et quam luctus sodales. Suspendisse et est a ligula mollis rutrum eu vel massa. Sed a venenatis massa. Vestibulum sed nunc et neque accumsan vehicula. Integer sed nisi massa, sit amet dictum nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum diam eget eros rutrum tristique.</p><p>Vestibulum id ligula nulla. In cursus, enim id aliquam adipiscing, dui orci vulputate sem, vitae facilisis nulla velit sit amet velit. Maecenas consectetur, mauris non luctus sodales, turpis libero mollis tellus, vel elementum neque ante sit amet lacus. Aenean consectetur, tortor eu dignissim feugiat, lorem nulla sodales sapien, nec blandit dolor nunc nec sapien. Cras tincidunt dui non ipsum cursus id tincidunt est fringilla. Donec eget tellus in lectus eleifend elementum. Curabitur aliquet varius leo, eu cursus mauris dignissim non. Mauris gravida tortor condimentum ligula tincidunt scelerisque. Vivamus sit amet felis tortor, eget bibendum augue. Pellentesque vel nunc sed orci ullamcorper rutrum vel eu sem. In sodales erat tincidunt magna porttitor posuere. Donec quis quam sodales nulla blandit condimentum. Donec rutrum, libero et aliquam viverra, odio enim ultricies leo, et fermentum augue est a quam. Ut pellentesque, enim rutrum egestas condimentum, purus nibh mollis mi, vel tristique ipsum mi vitae purus. Donec accumsan pharetra nisi, vitae malesuada dolor convallis non.</p>';
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
  'plid' => $about_the_center_mlid, // Parent
);
menu_link_save($item);

/**
 * Capital campaign
 */

// Capital campaign
$title = 'Capital campaign';
$path = 'capital-campaign';
$body_text = '<h2>An Urgent Need in Our Community</h2><p>Both national and local data demonstrates a growing challenge. Nationally, 1 out of 4 girls and 1 out of 6 boys will experience some form of sexual abuse before the age of 18 (Center for Disease Control, 2005). Right here in Onondaga County in 2010 alone, there were over 5,000 child abuse reports to the child abuse hot line representing approximately 9,000 children who were suspected victims of abuse, often by the people they trust most.</p><p>McMahon/Ryan&rsquo;s current location lacks the space to effectively coordinate the services and needs for all these children and their families.&nbsp; Despite our best efforts, many of the services these young victims need remain scattered across the county. At the most critical point of disclosure, a child is not able to receive all services in a child friendly location. Further, to get needed treatment and support, abused children and their families must negotiate a maze of systems, which can be completely overwhelming. The community is also burdened by the costs of a fragmented system.</p><p>As a result of the expanded role and services that McMahon/Ryan plays and evidenced by the increase in reported child abuse cases, McMahon/Ryan began exploring a more comprehensive community solution that would more fully engage our collaborating agencies. The best solution to the growing needs in Onondaga County was to establish an accredited Child Advocacy Center.</p><h2>Our Vision</h2><p>It is our vision to provide a location where all members of the Child Abuse Response Team (CART) can be located under one roof, promoting the ability of all professionals to efficiently work together for abused children. It is critical to provide comprehensive, quality care in a compassionate manner to these children in order to minimize the trauma they&rsquo;ve endured and to prevent potential negative life consequences. Without early intervention, these children often go on to have significant emotional or behavioral problems, which can include: depression, drug and alcohol abuse, prostitution, adolescent pregnancy and becoming juvenile abusers themselves.</p><p>McMahon/Ryan Child Advocacy Site opened its new doors to a totally renovated 30,000 square foot building, the former Reid Hall (former location of Syracuse University&rsquo;s University College) at 601 East Genesee Street in June 2011. This new location provides space for all the agencies that are members of the Child Abuse Response Team to co-locate under one roof.</p><p>This vision begins with the concept that no one agency or professional alone can prevent and treat the problem of child abuse. A multi-disciplinary response is necessary. Children in Onondaga County, who are victims of, or witnesses to, sexual and or physical abuse, will receive coordinated services from legal, medical, child protective, mental health, and law enforcement professionals who partner together to assist the child in one location. This ultimately means lives saved and more children helped along the path to recovery.</p><p>There are over 400 CACs across the country, 40 of which are in New York State and 26 of these are accredited. McMahon/Ryan Child Advocacy Site will be 1 of 8 New York centers who have all the core disciplines, (law enforcement, CPS, mental health, medical and prosecution) located within their center (info obtained from NYSCARCC). Currently, McMahon/Ryan Child Advocacy Site is accredited at the associate level.</p><h2>Turn the Vision into Reality</h2><p>In order to bring the vision of a CAC to fruition, we are embarking on a $3 million capital campaign that will be conducted in three phases. The campaign will ensure that the critical services McMahon/Ryan and our partner organizations provide now will be available in this community for decades.</p><ul><li><strong>Phase 1:</strong> Initial investments in renovations, infrastructure and start up costs <em>$750,000</em></li><li><strong>Phase 2:</strong> Capital improvement &amp; operations to support facility <em>$1,250,000</em></li><li><strong>Phase 3:</strong> Endowment for continuation of programs <em>$1,000,000</em></li></ul><p><strong>Total Campaign: </strong><em>$3,000,000</em></p><p>In addition to support from the community for the capital campaign, McMahon/Ryan will receive operating support through New York State&#39;s Preventive Services dollars &ndash; funding we will receive due to the agencies co-locating with us. Once we become fully accredited, we will receive additional funding each year from the Office of Children and Family Services and from the National Children&#39;s Alliance.</p>';
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
  'weight' => 3,
);
$capital_campaign_mlid = menu_link_save($item);

// Join us
$title = 'Join us';
$path = 'capital-campaign/join-us';
$body_text = '<p>This major undertaking involves many moving components &ndash; engaging our partner agencies, logistics and layout, traffic flow, and meeting the accreditation standards of the different agencies, to name just a few. However, the greatest challenge for us was finding the right location that would be the perfect location and serve all our needs.</p><p>When we were presented with the opportunity to co-locate at Reid Hall, we knew we had to act quickly! This site is ideal in that it has ample space for all agencies, including a private entrance for law enforcement. The landlord has been supportive of our efforts and provided us with favorable financing for the renovation costs that allowed us to begin renovations in January 2011, when the lease was signed.</p><p>Renovations are complete and all agencies moved during summer 2011. Once all agencies are located under one roof, New York State Preventative Services funds will also begin, which will cover approximately 62 percent of McMahon/Ryan&rsquo;s operating budget. These funds are critical to the abused children in Central New York and are only available when all agencies are located under one roof and operating as an effective team.</p><p>We are pursuing our capital campaign at an aggressive pace due to the &quot;perfect storm&quot; that allowed everything to align in an ideal situation &ndash; the availability of the building, the landlord&rsquo;s interest in moving forward with the project prior to a completed capital campaign, our community partners&#39; agreements, and the opportunity for national and state funding.</p><p>Our vision is to establish an accredited Child Advocacy Center in Onondaga County to serve our children. With the help of our partners &ndash; and with help from individuals, foundations, and corporations &ndash; we will be able to help children on their healing journey and work to educate the community about child abuse prevention. We ask for your support in making this vision a reality!</p><p>With your support, we can change lives.</p><p><strong>Our $3 million capital campaign, to be completed within a three-year period will fund the total renovation and help to sustain the McMahon/Ryan Child<br />Advocacy Site. Please invest in the future of our children and join us in our mission today!</strong></p><p>Helen Marrone, Honorary Co-Chair:</p><blockquote><p>As a former Prosecutor in Knoxville, Tennessee, I know first-hand just how professional all the experts are who work at child advocacy centers. Everyone is under one roof, and almost nothing falls through the cracks.</p></blockquote><ul><li>The Campaign welcomes gifts and pledges over a period of up to 3 years.</li><li>All gifts of $1,500 or more will be recognized on the donor wall Naming opportunities are available for gifts of $5,000 or more.</li><li>Naming rights will be recognized in perpetuity, however the Board of Directors reserves the right to revoke the naming rights if circumstances are deemed necessary.</li><li>Naming opportunities will be reserved on a first come first served basis.</li><li>A signed pledge card, letter of intent, or actual gift must be received prior to formally accepting the naming opportunity.</li></ul><h2>Recognition Levels</h2><ul><li><strong>Platinum Star (18&rdquo;)</strong> <em>$50,000 and above</em></li><li><strong>Gold Star (12&rdquo;)</strong> <em>$20,000 to above</em></li><li><strong>Silver Star (7&rdquo;)</strong> <em>$5,000 to above</em></li><li><strong>Bronze Star (4&rdquo;)</strong> <em>$1,500 to above</em></li><li><strong>Friends</strong> <em>Up to $1,500</em> (recognized in annual report)</li></ul>';
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
  'plid' => $capital_campaign_mlid, // Parent
);
menu_link_save($item);

// Committee
$title = 'Committee';
$path = 'capital-campaign/committee';
$body_text = '<h2>Postured for Success</h2><p>The Capital Campaign Committee will be led by the dynamic trio of community leaders who will serve as Honorary Chairs:</p><ul><li>Juli Boeheim</li><li>William J. Fitzpatrick</li><li>Helen Marrone</li></ul><h2>Capital Campaign Committee</h2><ul><li>Juli Boeheim, Honorary Co-Chair</li><li>William Fitzpatrick, Honorary Co-Chair</li><li>Jane Fahey-Sudaby</li><li>Michael Arcuri</li><li>John O&rsquo;Brien</li><li>Lloyd Withers</li><li>Morey Ryan</li><li>Julie Cecile, Executive Director</li><li>Helen Marrone, Honorary Co-Chair</li><li>Barry Weiss</li><li>Nancy Green</li><li>Gene Conway</li><li>Emily Kulkus</li><li>Martha Ryan</li><li>Amy Delia</li><li>Patti Giancola, Campaign Director</li></ul><p>Juli Boeheim, Honorary Co-Chair:</p><blockquote><p>As a mother, I am particularly concerned about the ability of children to recover from the trauma and go on and lead normal, productive lives. The new McMahon/Ryan Child Advocacy Site will maximize the opportunity for every victim to fully recover.</p></blockquote>';
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
  'plid' => $capital_campaign_mlid, // Parent
);
menu_link_save($item);

// Community partnerships
$title = 'Community partnerships';
$path = 'capital-campaign/community-partnerships';
$body_text = '<p>Onondaga County is fortunate to have fundamental resources in place to address the problem of child abuse. In the early 1980&rsquo;s, the <strong>Child Abuse Management Team</strong> was created. This multidisciplinary team had representation from law enforcement, Vera House, Rape Crisis Center, Child Protective Services, Alliance and medical who collaborated to improve the system for child victims and their families. McMahon/Ryan Child Advocacy Site began 12 years ago to enhance the efforts of this team by providing an organization that was focused on child abuse.</p><p><strong>Onondaga County District Attorney, William J. Fitzpatrick</strong> is nationally recognized for his efforts in advocating for victims especially children. In 1992, upon taking office he established the Special Victims Bureau which is dedicated to having Assistant District Attorneys and investigators who are trained and experienced in handling child abuse and sexual assault cases. District Attorney Fitzpatrick was also instrumental in creating the joint Abused Persons Unit for the Syracuse Police and Onondaga County Sheriff&#39;s Department in 1994, which is a specially trained law enforcement unit that responds to all abuse situations in Onondaga County. Today it is the only configuration of its type in New York State.</p><p>In addition to Mr. Fitzpatrick&#39;s efforts, <strong>Onondaga County First Chief Assistant District Attorney Rick Trunfio</strong> has been instrumental in writing and updating many of the laws in New York State relating to child abuse. Mr. Trunfio also lectures across the United States on prosecuting child and sexual assault cases.</p><p><strong>Dr. Ann Botash</strong>, a pediatrician, is a national expert in medical evaluation of child sexual and physical abuse. Dr. Botash founded the Child Abuse Referral and Evaluation (CARE) Program at Upstate Medical University Hospital in 1990. This special clinic offers medical exams and forensic evidence collection for suspected abuse victims 18 years old or younger as well as assistance with referrals to community agencies that provide victim advocacy services for families in a time of crisis. A part time clinic is currently located at the McMahon/Ryan Child Advocacy Site.</p><p>McMahon/Ryan Child Advocacy Site is uniquely positioned to facilitate bringing together all members of the multidisciplinary team to help abused children and work to prevent child abuse in Onondaga County in one safe and child-friendly atmosphere. Having all professionals co located under one roof will save time and resources. Professionals will share 30,000 square feet to ensure comprehensive and consistent support to child abuse victims. Also, on site there will be a 65 seat training room. The CAC model is a cost-effective way of dealing with this child abuse epidemic.</p>';
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
  'plid' => $capital_campaign_mlid, // Parent
);
menu_link_save($item);

/**
 * Sponsors
 */

// Sponsors
$title = 'Sponsors';
$path = 'sponsors';
$body_text = '<p><font color="red">Is this up to date and complete? Is there a particular order? Are there levels of sponsorship? Should it be partners, not sponsors?</font></p><ul><li><a href="http://www.sybercuse.com/main.html">Clear Channel</a></li><li><a href="http://sugarmanlaw.com/">Sugarman Law Firm, LLP</a></li><li><a href="http://www.wsyr.com/main.html">WSYR Radio</a></li><li><a href="http://www.lerentech.com/">Lerentech Solutions</a></li><li><a href="http://www.hbrcny.com/">Home Builders &amp; Remodelers of Central New York</a></li><li><a href="http://cnyRealtor.com">cnyRealtor.com</a></li></ul>';
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
  'weight' => 4,
);
menu_link_save($item);