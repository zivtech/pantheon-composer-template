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


$config['search_api_attachments.admin_config'] = [
  'extraction_method' => 'solr_extractor',
  'solr_extractor_configuration' => [
    'solr_server' => 'default',
  ],
//  'tika_extractor_configuration' => [
//    'tika_path' => '/srv/bin/tika-app-1.16.jar'
//  ],
];

$config['search_api.server.default'] = [
  'backend_config' => [
    'connector' => 'standard',
    'connector_config' => [
      'host' => $info['solr']['internal_connection']['host'],
      'port' => $info['solr']['internal_connection']['port'],
      'path' => '/',
      'core' => $info['solr']['core'],
    ],
  ],
];

// This will prevent Drupal from setting read-only permissions on sites/default.
$settings['skip_permissions_hardening'] = TRUE;

// This will ensure the site can only be accessed through the intended host
// names. Additional host patterns can be added for custom configurations.
$settings['trusted_host_patterns'] = ['.*'];

$config['environment_indicator.indicator']['name'] = 'Lando';
$config['environment_indicator.indicator']['bg_color'] = '#ed3f7a';
$config['environment_indicator.indicator']['fg_color'] = '#fff';

// SMTP Configuration MailHog
$config['swiftmailer.transport']['transport'] = 'smtp';
$config['swiftmailer.transport']['smtp_host'] = 'mail.nclc-library.lndo.site';
$config['swiftmailer.transport']['smtp_port'] = '1025';
$config['swiftmailer.transport']['smtp_encryption'] = '0';
$config['swiftmailer.transport']['smtp_credential_provider'] = 'swiftmailer';
$config['swiftmailer.transport']['smtp_credentials']['swiftmailer']['username'] = '';
$config['swiftmailer.transport']['smtp_credentials']['swiftmailer']['password'] = null;

$config['config_split.config_split.local']['status'] = TRUE;
