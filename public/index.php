<?php
// WordPress view bootstrapper

if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

define('WP_USE_THEMES', true);
$blogHeaderPath = dirname(__FILE__) . DS . 'app' . DS . 'wp-blog-header.php';
if (!is_file($blogHeaderPath)) {
    throw new Exception('No Wordpress Installation Found');
}
require($blogHeaderPath);