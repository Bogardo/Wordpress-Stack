<?php
/**
 * Paths
 *
 * Path for the application and web root directory
 */
$root_dir = dirname(__DIR__);
$webroot_dir = $root_dir . DS . 'public';

/**
 * Load Configuration
 *
 * Set up our global environment constant and load its config first
 * Default: production
 */
define('WP_ENV', getenv('WP_ENV') ?: (php_sapi_name() == "cli" ? 'development' : 'production'));

$configFound = false;
$envConfig = dirname(__FILE__) . DS .'environments' . DS . WP_ENV . '.php';
if (file_exists($envConfig)) {
    $configFound = true;
    require_once $envConfig;
}

if (!defined('WP_HOME')) {
    throw new Exception('No Configuration File Loaded');
}
define('WP_SITEURL', WP_HOME . "/app");

/**
 * Database
 *
 * Global database configuration
 */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = 'wp_';

/**
 * Post Settings
 *
 * Custom settings for autosave and post revisions
 */
define('AUTOSAVE_INTERVAL', '30');
define('WP_POST_REVISIONS', '100');

/**
 * Wordpress Content Directory
 *
 * Defines new location for the wordpress wp-content directory
 * This is moved out of the core to ease development
 */
define('CONTENT_DIR', 'content');
define('WP_CONTENT_DIR', $webroot_dir . DS . CONTENT_DIR);
define('WP_CONTENT_URL', WP_HOME . "/" .CONTENT_DIR);


/**
 * Custom System Settings
 */
//define('WP_AUTO_UPDATE_CORE', false);
//define('AUTOMATIC_UPDATER_DISABLED', true);
//define('DISALLOW_FILE_MODS', true);
//define('DISALLOW_FILE_EDIT', true);

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
  define('ABSPATH', $webroot_dir . DS . 'app' . DS);
}