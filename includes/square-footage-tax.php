<?php

function _themename__pluginname_register_square_footage_tax()
{
    $labels = [
        'name'              => esc_html_x('Square Footages', 'taxonomy general name', '_themename-_pluginname'),
        'singular_name'     => esc_html_x('Square Footage', 'taxonomy singular name', '_themename-_pluginname'),
        'search_items'      => esc_html__('Search Square Footages', '_themename-_pluginname'),
        'all_items'         => esc_html__('All Square Footages', '_themename-_pluginname'),
        'parent_item'       => esc_html__('Parent Square Footage', '_themename-_pluginname'),
        'parent_item_colon' => esc_html__('Parent Square Footage:', '_themename-_pluginname'),
        'edit_item'         => esc_html__('Edit Square Footage', '_themename-_pluginname'),
        'update_item'       => esc_html__('Update Square Footage', '_themename-_pluginname'),
        'add_new_item'      => esc_html__('Add New Square Footage', '_themename-_pluginname'),
        'new_item_name'     => esc_html__('New Square Footage Name', '_themename-_pluginname'),
        'menu_name'         => esc_html__('Square Footages', '_themename-_pluginname'),
    ];
    $args = array(
        'labels' => $labels,
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'square_footage')
    );
    register_taxonomy('_themename_square_footage', ['_themename_suite'], $args);
}

add_action('init', '_themename__pluginname_register_square_footage_tax');
