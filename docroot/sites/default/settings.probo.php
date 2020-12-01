<?php

$config['environment_indicator.indicator']['bg_color'] = '#440027';
$config['environment_indicator.indicator']['fg_color'] = '#fff';
$config['environment_indicator.indicator']['name'] = getenv('PULL_REQUEST_NAME');

$settings['config_sync_directory'] = dirname(DRUPAL_ROOT) . '/config/default';
