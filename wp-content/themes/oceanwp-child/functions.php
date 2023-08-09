<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


function admin_link($items, $args) {
    if  (is_user_logged_in() && $args->menu) {
$admin_menu_item = '<li><a href="#">Admin</a></li>';
        $items = $admin_menu_item . $items;
    }
    return $items;
};

add_filter( 'wp_nav_menu_items', 'admin_link', 10, 2 );