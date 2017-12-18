#!/bin/sh
drush site-install --yes --account-pass="admin"
drush pm-disable --yes overlay toolbar
drush pm-enable admin_menu devel --yes
