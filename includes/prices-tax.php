<?php
function _themename__pluginname_register_prices_tax()
{
    $labels = [
        'name'              => esc_html_x('Prices', 'taxonomy general name', '_themename-_pluginname'),
        'singular_name'     => esc_html_x('Price', 'taxonomy singular name', '_themename-_pluginname'),
        'search_items'      => esc_html__('Search Prices', '_themename-_pluginname'),
        'all_items'         => esc_html__('All Prices', '_themename-_pluginname'),
        'parent_item'       => esc_html__('Parent Price', '_themename-_pluginname'),
        'parent_item_colon' => esc_html__('Parent Price:', '_themename-_pluginname'),
        'edit_item'         => esc_html__('Edit Price', '_themename-_pluginname'),
        'update_item'       => esc_html__('Update Price', '_themename-_pluginname'),
        'add_new_item'      => esc_html__('Add New Price', '_themename-_pluginname'),
        'new_item_name'     => esc_html__('New Price Name', '_themename-_pluginname'),
        'menu_name'         => esc_html__('Prices', '_themename-_pluginname'),
    ];
    $args = array(
        'labels' => $labels,
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'price')
    );
    register_taxonomy('_themename_prices', ['_themename_suite'], $args);
}
add_action('init', '_themename__pluginname_register_prices_tax');
