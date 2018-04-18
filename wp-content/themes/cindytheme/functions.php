<?php

// include scripts and styles
require_once( __DIR__ . '/inc/scripts.php');

// include fonts
require_once( __DIR__ . '/inc/fonts.php');

// theme support
require_once( __DIR__ . '/inc/support.php');

// social links
require_once( __DIR__ . '/inc/social-settings.php');

// custom post types
require_once( __DIR__ . '/inc/custom-posts.php');


// change Posts to Projects
function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Projects';
    $submenu['edit.php'][5][0] = 'Projects';
    $submenu['edit.php'][10][0] = 'Add Projects';
    $submenu['edit.php'][16][0] = 'Projects Tags';
}
function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Projects';
    $labels->singular_name = 'Project';
    $labels->add_new = 'Add Project';
    $labels->add_new_item = 'Add Project';
    $labels->edit_item = 'Edit Project';
    $labels->new_item = 'Projects';
    $labels->view_item = 'View Projects';
    $labels->search_items = 'Search Projects';
    $labels->not_found = 'No Projects found';
    $labels->not_found_in_trash = 'No Projects found in Trash';
    $labels->all_items = 'All Projects';
    $labels->menu_name = 'Projects';
    $labels->name_admin_bar = 'Projects';
}
 
add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );