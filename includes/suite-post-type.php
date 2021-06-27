<?php

function suite_custom_post_setup_post_type()
{

    $labels = array(
        'name'                  => esc_html_x('Suites', 'Post type general name', 'Hollys_custom_suite_plugin'),
        'singular_name'         => esc_html_x('Suite Item', 'Post type singular name', 'Hollys_custom_suite_plugin'),
        'menu_name'             => esc_html_x('Suites', 'Admin Menu text', 'Hollys_custom_suite_plugin'),
        'name_admin_bar'        => esc_html_x('Suite Item', 'Add New on Toolbar', 'Hollys_custom_suite_plugin'),
        'add_new'               => esc_html__('Add New Suite', 'Hollys_custom_suite_plugin'),
        'add_new_item'          => esc_html__('Add New Suite Item', 'Hollys_custom_suite_plugin'),
        'new_item'              => esc_html__('New Suite', 'Hollys_custom_suite_plugin'),
        'edit_item'             => esc_html__('Edit Suite', 'Hollys_custom_suite_plugin'),
        'view_item'             => esc_html__('View Suite', 'Hollys_custom_suite_plugin'),
        'view_items'            => esc_html__('View Suite', 'Hollys_custom_suite_plugin'),
        'all_items'             => esc_html__('All Suites', 'Hollys_custom_suite_plugin'),
        'search_items'          => esc_html__('Search Suite', 'Hollys_custom_suite_plugin'),
        'parent_item_colon'     => esc_html__('Parent Suite:', 'Hollys_custom_suite_plugin'),
        'not_found'             => esc_html__('No Suite Items found.', 'Hollys_custom_suite_plugin'),
        'not_found_in_trash'    => esc_html__('No Suite Items found in Trash.', 'Hollys_custom_suite_plugin'),
        'featured_image'        => esc_html_x('Suite Item Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Hollys_custom_suite_plugin'),
        'set_featured_image'    => esc_html_x('Set Suite item image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Hollys_custom_suite_plugin'),
        'remove_featured_image' => esc_html_x('Remove Suite item image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Hollys_custom_suite_plugin'),
        'use_featured_image'    => esc_html_x('Use as Suite item image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Hollys_custom_suite_plugin'),
        'archives'              => esc_html_x('Suite archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Hollys_custom_suite_plugin'),
        'insert_into_item'      => esc_html_x('Insert into Suite item', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Hollys_custom_suite_plugin'),
        'uploaded_to_this_item' => esc_html_x('Uploaded to this Suite item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Hollys_custom_suite_plugin'),
        'filter_items_list'     => esc_html_x('Filter Suite items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Hollys_custom_suite_plugin'),
        'items_list_navigation' => esc_html_x('Suite items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Hollys_custom_suite_plugin'),
        'items_list'            => esc_html_x('Suite items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Hollys_custom_suite_plugin'),
    );

    $args = array(
        'labels' => $labels,
        'capability_type' => 'Suites',
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-store',
        'rewrite' => array('slug' => 'suites'),
        'supports'  => array('title', 'custom-fields', 'editor', 'thumbnail', 'excerpt', 'comments'),
    );
    register_post_type('suite_custom_post', $args);
}

add_action('init', 'suite_custom_post_setup_post_type');
