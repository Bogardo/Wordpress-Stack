<?php
/**
 * Do not edit this file. Edit the config files found in the config/ dir instead.
 * This file is required in the root directory so WordPress can find it.
 * WP is hardcoded to look in its own directory or one directory up for wp-config.php.
 */

if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

/**
 * Load Composers Autoloader
 */
$composerAutoloader = dirname(__DIR__) . DS . 'vendor' . DS . 'autoload.php';
if (is_file($composerAutoloader)) {
	require_once($composerAutoloader);
}

/**
 * Load Configuration
 */
require_once(dirname(__DIR__) . DS . 'config' . DS . 'application.php');

require_once(ABSPATH . 'wp-settings.php');