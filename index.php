<?php
/*
Plugin Name:  Hollys_custom_suite_plugin
Plugin URI:   
Description:  Adding Custom Suite Post Types
Version:      1.0.0
Author:       Nick Brown
Author URI:   http://nickrossbrown.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Hollys_custom_suite_plugin
Domain Path:  /languages
*/

if (!defined('WPINC')) {
    die;
}

include_once('includes/suite-post-type.php');

function suite_custom_post_activate()
{
    suite_custom_post_activate();
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'Hollys_custom_suite_plugin_activate');

function Hollys_custom_suite_plugin_deactivate()
{
    unregister_post_type('suite_custom_post');
    flush_rewrite_rules();
}

register_deactivation_hook(__FILE__, 'Hollys_custom_suite_plugin_deactivate');
