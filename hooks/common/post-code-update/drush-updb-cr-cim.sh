#!/bin/sh
#
# Cloud Hook: drush-updb-cr-cim
#
# Run drush update-database, configuration-import, and cache-clear all in the
# target environment. This script works as any Cloud hook.


# Map the script inputs to convenient names.
site=$1
target_env=$2
drush_alias=$site'.'$target_env

# Execute a standard drush commands.
drush10 @$drush_alias updb -y
drush10 @$drush_alias cim vcs -y
drush10 @$drush_alias cr -y
