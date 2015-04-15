<?php

/**
 * @file
 * Local development override configuration feature.
 *
 * To activate this feature, copy and rename it such that its path plus
 * filename is 'sites/example.com/settings.local.php', where example.com
 * is the name of your site. Then, go to the bottom of
 * 'sites/example.com/settings.php' and uncomment the commented lines that
 * mention 'settings.local.php'.
 */

/**
 * Enable local development services.
 */
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

/**
 * Show all error messages, with backtrace information.
 */
$config['system.logging']['error_level'] = 'verbose';

/**
 * Disable CSS and JS aggregation.
 */
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

/**
 * Disable the render cache.
 *
 * This setting disables the render cache by using the Null cache back-end
 * defined by the development.services.yml file above.
 *
 * Do not use this setting until after the site is installed.
 */
$settings['cache']['bins']['render'] = 'cache.backend.null';

/**
 * Allow test modules and themes to be installed.
 *
 * Drupal ignores test modules and themes by default for performance reasons.
 * During development it can be useful to install test extensions for debugging
 * purposes.
 */
$settings['extension_discovery_scan_tests'] = TRUE;

/**
 * Enable access to rebuild.php.
 *
 * This setting can be enabled to allow Drupal's php and database cached
 * storage to be cleared via the rebuild.php page. Access to this page can also
 * be gained by generating a query string from rebuild_token_calculator.sh and
 * using these parameters in a request to rebuild.php.
 */
$settings['rebuild_access'] = TRUE;
$databases['default']['default'] = array (
  'database' => 'blog',
  'username' => 'root',
  'password' => 'morpheus',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'CSOeqTuIcvqQ5MyZr2KYJ2dFDjJ6klS90bQSjlyTrFXfl-B0xhj6AE1J6s6JXzwh-ncQ3x7wlQ';
$settings['install_profile'] = 'minimal';
$config_directories['active'] = 'sites/default/files/config_kdhoCcMzQaCoiW_eiw5cE4r6Ph2g9EV_DBzbt4mIvm4OzrvgzE0MMAT5Cq1GAMrdlazwqawUvg/active';
$config_directories['staging'] = 'sites/default/files/config_kdhoCcMzQaCoiW_eiw5cE4r6Ph2g9EV_DBzbt4mIvm4OzrvgzE0MMAT5Cq1GAMrdlazwqawUvg/staging';

$settings['twig_debug'] = true;
$settings['cache']['bins']['render'] = 'cache.backend.null';

if (file_exists(__DIR__ . '/settings.local.php')) {
   include __DIR__ . '/settings.local.php';
 }
$settings['container_yamls'][] = __DIR__ . '/services.yml';