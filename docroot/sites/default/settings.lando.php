<?php

$info = json_decode(getenv('LANDO_INFO'), TRUE);

$databases = array(
  'default' => array(
    'default' => array(
      'database' => $info['database']['creds']['database'],
      'username' => $info['database']['creds']['user'],
      'password' => $info['database']['creds']['password'],
      'host' => $info['database']['internal_connection']['host'],
      'port' => $info['database']['internal_connection']['port'],
      'driver' => 'mysql',
      'prefix' => '',
      'collation' => 'utf8mb4_general_ci',
    ),
  ),
);

/**
 * Search API + Solr configuration.
 */
#$config['search_api_attachments.admin_config'] = [
#  'extraction_method' => 'solr_extractor',
#  'solr_extractor_configuration' => [
#    'solr_server' => 'default',
#  ],
#];
#
#$config['search_api.server.default'] = [
#  'backend_config' => [
#    'connector' => 'standard',
#    'connector_config' => [
#      'host' => $info['solr']['internal_connection']['host'],
#      'port' => $info['solr']['internal_connection']['port'],
#      'path' => '/',
#      'core' => $info['solr']['core'],
#    ],
#  ],
#];

// This will prevent Drupal from setting read-only permissions on sites/default.
$settings['skip_permissions_hardening'] = TRUE;

// This will ensure the site can only be accessed through the intended host
// names. Additional host patterns can be added for custom configurations.
$settings['trusted_host_patterns'] = ['.*'];

$config['environment_indicator.indicator']['name'] = 'Lando';
$config['environment_indicator.indicator']['bg_color'] = '#ed3f7a';
$config['environment_indicator.indicator']['fg_color'] = '#fff';

/**
 * Config split configuration.
 */
#$config['config_split.config_split.local']['status'] = TRUE;
