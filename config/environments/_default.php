<?php
/**
 * Database Configuration
 */
define('DB_NAME',       "");
define('DB_USER',       "");
define('DB_PASSWORD',   "");
define('DB_HOST',       "");

/**
 * Site (home) URL
 *
 * Full url including http://...
 */
define('WP_HOME', "");

/**
 * WordPress Localized Language
 * Default: English
 *
 * A corresponding MO file for the chosen language must be installed to app/languages
 */
define('WPLANG', "nl_NL");

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
#{{SALTS}}#

/**
 * WordPress debugging settings.
 */
ini_set('display_errors', 0);

define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
define('SAVEQUERIES', false);
define('SCRIPT_DEBUG', false);