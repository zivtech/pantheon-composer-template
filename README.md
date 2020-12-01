Drip Acquia Drupal8
====

[![Build Guide](https://img.shields.io/badge/confluence-build%20guide-%23172B4D?logo=confluence)](https://zivtechjira.atlassian.net/wiki/spaces/ZKB/pages/1100054543/Starting+a+New+Drupal+8+Project+with+Drip)
[![Developer Guide](https://img.shields.io/badge/confluence-developer%20guide-%23172B4D?logo=confluence)](https://zivtechjira.atlassian.net/wiki/spaces/ZKB/pages/1100054543/Starting+a+New+Drupal+8+Project+with+Drip)
[![Current Sprint](https://img.shields.io/badge/jira-current%20sprint-%230052CC?logo=jira)](https://zivtechjira.atlassian.net/secure/RapidBoard.jspa?rapidView=[BOARD_ID])
[![Development Site](https://img.shields.io/badge/acquia-dev-%2391ba2c)](http://[SUBDOMAIN].devcloud.acquia-sites.com/)
[![Jenkins Deploy](https://img.shields.io/badge/jenkins-deploy-%23D24939?logo=jenkins&logoColor=fff)](https://jenkins.ops.zivtech.com/job/Deploy%20TEMPLATE%20from%20Github%20to%20Acquia%20Dev/)

This project is based on the [Acquia Drupal Minimal Project](https://github.com/acquia/drupal-minimal-project).

## Important files and directories

### `/docroot`

The web files are located in the `/docroot` subdirectory, this facilitates a
Composer based workflow.

### `/config`

The `/config` directory holds Drupal's `.yml` configuration files.

### `composer.json`

This site is managed by Composer! All core and contrib modules and libraries are
added to the project via `composer.json` and `composer.lock` keeps track of
the exact version of each modules (or other dependency). Modules, themes, and
libraries are placed in the correct directories thanks to the `"installer-paths"`
section of `composer.json`. `composer.json` also includes instructions for
`drupal-scaffold` which takes care of placing some individual files in the
correct places like `settings.php`.

See [Update Drupal core via Composer](https://www.drupal.org/docs/updating-drupal/update-drupal-core-via-composer)
for instructions to update.

## Deployments

Deployments are automatic to the Acquia Development environment via the Jenkins
job [Deploy TEMPLATE from Github to Acquia Dev](https://jenkins.ops.zivtech.com/job/Deploy%20TEMPLATE%20from%20Github%20to%20Acquia%20Dev/)
when code is merged/pushed to `master`.

Additionally, we use [Acquia webhooks](https://docs.acquia.com/acquia-cloud/develop/api/cloud-hooks/) to run this [script](https://github.com/zivtech/zivtech/drip/blob/acquia8/hooks/common/post-code-update/drush-updb-cr-cim.sh) to clear cache, run updb, and import configuration when code is updated on any environment on Acquia.

## Local development

Local development uses [Lando](https://lando.dev/). All that is needed to get a
local development environment running is `lando start`.

### Front end

The front end is compiled using [gulp](https://gulpjs.com/). Run the following commands from the theme root (`/docroot/themes/custom/THEME`):

```
# Install dependencies
lando npm install

# Build theme assets
lando gulp build

# Rebuild theme assets on change
lando gulp watch

# View the full list of gulp commands
lando gulp --tasks
```
