# Drupal Deployment Skeleton

*Drupal Deployment Skeleton* (DDS) is a structure that optimizes Drupal site deployments using a combination of Bash scripts, drush, and drush&#95;make.

Developed to facilitate the rapid deployment and development of commercial sites, this skeleton can be leveraged to allow you to create your own scriptable deployments.  **You must customize these scripts to your environment** to be able to use it; this is not a turnkey package.

This package is intended to accompany the presentation "Optimize Site Deployments with Drush" by Jon Peck, first given at [DrupalCamp WNY on October 14th, 2011](http://drupalcampwny.org/sessions/optimize-site-deployments-drush).

# Requirements

* [Drush](http://drupal.org/project/drush) - command line shell and scripting interface for Drupal
* [Drush Make](http://drupal.org/project/drush&#95;make) - an extension to drush that can create a ready-to-use drupal site, pulling sources from various locations

# Usage

    projects/NAME/config/install.sh dev
    projects/NAME/config/install.sh prod
    projects/NAME/config/rebuild.sh dev
    projects/NAME/config/rebuild.sh prod

# Contents

Scripts that need to be edited for the skeleton to function have been clearly marked.  **Review all content before executing** to avoid unintended behavior.

- config\ - All configurations are stored here, and should be placed in the base&#95;path&#95;project\NAME\config
  - cfg&#95;parser.sh - (contributed code)
  - config.ini - **EDIT** - configuration for each environment; name is the project name, base&#95;path&#95;workspace is where the folder goes and base&#95;path&#95;project is the where the project (configuration files) are stored.
  - drush.make - **EDIT** - Standard drush&#95;make configuration example, includes a number of modules that I use, along with jQuery UI 1.6, CKEditor 3.6.2, a placeholder for a custom module and theme from a SVN repository, and placeholders for patches.
  - drushrc.dev.php - **EDIT** - Standard drush site installation configuration for development.
  - drushrc.prod.php - **EDIT** - Standard drush site installation configuration for production.
  - install.sh - **EDIT** - Script to install a site using the configurations in this folder.  Disables comment module, removes orphaned actions, enables modules, clears the cache, and sets file permissions.
  - rebuild.sh - Script to rebuild a site, which means it will delete the database and all files within the folder, then install.
  - setup.sh - Loads the INI parser, the configuration, and checks if it can find the configuration.
- modules\ - Folder for custom modules.
  - example\ - Example module.
    - content&#95;types\ - CCK Content Type definitions
      - testimonial.cck - Exported CCK Content Type
    - defaults\ - Collection of default values used in the installation.
      - blocks.inc.php - SQL for disabling "Powered by Drupal" and "User login" blocks for a given theme.
      - contact.inc.php - Sets contact page defaults, creates menu link
      - content.inc.php - Programmatically creating two pages and menu links
      - d7-blocks.inc.php - Drupal 7 SQL for disabling "Powered by Drupal" and "User login" blocks for a given theme.
      - d7-content.inc.php - Drupal 7 basic page and menu creation 
      - d7-wysiwyg.inc.php - Drupal 7 SQL for creating WYSIWYG profiles.
      - imagecache&#95;presets.inc.php - Exported imagecache presets
      - permissions.inc.php - Creates a role, then grants and revokes permissions.
      - taxonomy.inc.php - Creates a vocabulary, then terms in that vocabulary.
      - users.inc.php - Creates a new user in a given role
      - variables.inc.php - Sets site variables, including site slogan, node paths, theme, XML sitemap, disabling user registration, customizing the contact form, and much more.
      - wysiwyg.inc.php - SQL for creating two WYSIWYG profiles for CKEditor, one for plain text and one for HTML.
    - example.info - Standard module info
    - example.install - Implementation of hook&#95;install; in order - variables, blocks, content types, clear content type cache, creates content, sets contact form and menu item, taxonomy, WYSIWYG, permissions, and users
    - example.module - hook&#95;imagecache&#95;default&#95;presets

## Contributed code

* [Bash INI Parser](http://ajdiaz.wordpress.com/2008/02/09/bash-ini-parser/) by Andr&eacute;s J. D&iacute;az, MIT License.

## Contributing

The Drupal Deployment Skeleton source code is [hosted on GitHub](https://github.com/fluxsauce/DrupalDeploySkel).

Please use the [issue tracker](https://github.com/fluxsauce/DrupalDeploySkel/issues) if you find any bugs or wish to contribute.

### MIT license

Drupal Deployment Skeleton (excluding contributed code) is Copyright (c) 2011 Jon Peck and [FluxSauce](http://fluxsauce.com)

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, 
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.