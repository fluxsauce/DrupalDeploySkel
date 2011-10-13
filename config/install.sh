#!/bin/bash
DIR="$( cd "$( dirname "$0" )" && pwd )"
source "${DIR}/setup.sh" $1

# Get files
cd ${base_path_workspace}
drush -y make --force-complete --no-patch-txt "${base_path_project}/${name}/config/drush.make" ${name}

# Install
cd ${base_path_workspace}/${name}
drush -y site-install --config="${base_path_project}/${name}/config/drushrc.${1}.php"

# Disable modules
drush -y dis comment

# Remove orphaned actions
drush php-eval 'actions_synchronize(actions_list(TRUE), TRUE);'

# Enable modules
## Required
drush -y en \
  admin_menu \
  ctools \
  schema \
  image \
  nodewords_admin \
  nodewords_basic \
  nodewords_extra \
  nodewords_custom_pages \
  nodewords \
  nodewords_verification_tags \
  nodewords_tokens \
  nodewords_ui \
  globalredirect \
  pathauto \
  seochecklist \
  token \
  basic_seo_rules \
  seo_checker \
  googleanalytics \
  vertical_tabs \
  xmlsitemap \
  xmlsitemap_engines \
  xmlsitemap_menu \
  xmlsitemap_node \
  content \
  content_copy \
  fieldgroup \
  text \
  optionwidgets \
  nodereference \
  nodereferrer \
  number \
  link \
  imagecache \
  imagecache_ui \
  imageapi \
  imageapi_gd \
  filefield \
  imagefield \
  jquery_update \
  auto_nodetitle \
  contact \
  emvideo \
  emfield \
  media_youtube \
  THEME \
  wysiwyg \
  permissions_api \
  better_formats

## Custom
drush -u 1 -y en ${name}

# Remove unnecessary module
drush -y dis permissions_api

# Clear cache
drush cc all

# Set permissions
if [ $1 == "dev" ]
  then
    sudo chown www-data:www-data ${base_path_workspace}/${name}/sites/default/files
elif [ $1 == "prod" ]
  then
    sudo chown -R www-data.www-data ${base_path_workspace}/${name}
    sudo chgrp -R www-data ${base_path_workspace}/${name}
    sudo chmod -R g+w ${base_path_workspace}/${name}
fi