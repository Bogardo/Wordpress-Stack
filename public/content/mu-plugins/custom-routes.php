<?php

/**
 * Custom Routes
 * Custom routes to access the Dashboard and Login pages from simple urls
 */
add_action('wp_loaded', function()
{
    // Only run these rewrites when Wordpress has been installed
    if (!is_blog_installed()) {
        return false;
    }

    // Custom Admin Route
    add_rewrite_rule('^admin$', 'app/wp-admin', 'top');

    // Custom Login Route
    add_rewrite_rule('^login$', 'app/wp-login.php', 'top');

    flush_rewrite_rules();
});