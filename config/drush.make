; Core version
core = 6.x

; API version
api = 2

; Core project
projects[drupal][version] = "6.22"

; Modules
projects[admin_menu][version] = "1.8"
projects[advanced_help][version] = "1.2"
projects[auto_nodetitle][version] = "1.2"
projects[better_formats][version] = "1.2"
projects[cck][version] = "2.9"
projects[ctools][version] = "1.8"
projects[emfield][version] = "2.5"
projects[filefield][version] = "3.10"
projects[globalredirect][version] = "1.x-dev"
projects[google_analytics][version] = "3.3"
projects[image][version] = "1.1"
projects[imageapi][version] = "1.10"
projects[imagecache][version] = "2.0-beta12"
projects[imagefield][version] = "3.10"
projects[jquery_update][version] = "2.0-alpha1"
projects[link][version] = "2.9"
projects[media_youtube][version] = "1.3"
projects[nodereferrer][version] = "1.0-rc2"
projects[nodewords][version] = "2.0-alpha1"
projects[pathauto][version] = "2.0-rc2"
projects[permissions_api][version] = "2.11"
projects[removelogmessage][version] = "1.1"
projects[schema][version] = "1.7"
projects[seo_checker][version] = "2.3"
projects[seo_checklist][version] = "3.0"
projects[token][version] = "1.16"
projects[vertical_tabs][version] = "1.0-rc2"
projects[wysiwyg][version] = "2.4"
projects[xmlsitemap][version] = "2.0-beta3"

; Libraries
libraries[jquery.ui][download][type] = "file"
libraries[jquery.ui][download][url] = "http://jquery-ui.googlecode.com/files/jquery.ui-1.6.zip"
libraries[jquery.ui][download][md5] = "c177d38bc7af59d696b2efd7dda5c605"

libraries[ckeditor][download][type] = "file"
libraries[ckeditor][download][url] = "http://download.cksource.com/CKEditor/CKEditor/CKEditor%203.6.2/ckeditor_3.6.2.zip"

; Custom modules
projects[MODULE_NAME][type] = "module"
projects[MODULE_NAME][download][type] = "svn"
projects[MODULE_NAME][download][url] = "http://svn.SERVER.com/PROJECT/modules/MODULE_NAME/"
projects[MODULE_NAME][download][username] = "USERNAME"
projects[MODULE_NAME][download][password] = "PASSWORD"

; Custom themes
projects[THEME_NAME][type] = "theme"
projects[THEME_NAME][download][type] = "svn"
projects[THEME_NAME][download][url] = "http://svn.SERVER.com/PROJECT/themes/THEME_NAME/"
projects[THEME_NAME][download][username] = "USERNAME"
projects[THEME_NAME][download][password] = "PASSWORD"

; Patches
; http://drupal.org/node/927018 Undefined index: path/title in admin_menu_link_build()
projects[admin_menu][patch][] = "http://SERVER.com/patches/admin_menu-927018-1-6.x-1.x.patch"
; http://drupal.org/node/1006938#comment-4661790
projects[drupal][patch][] = "http://SERVER.com/patches/555362-1.update_parse_files.D6_0.patch"