<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


function admin_link($items, $args) {
    if  (is_user_logged_in() && $args->menu) {
$admin_menu_item = '<li id="menu-item-admin" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-admin"><a href="#">Admin</a></li>';
 $position = strpos($items, '<li id="menu-item-50');
  if ($position !== false) {
            $items = substr_replace($items, $admin_menu_item, $position, 0);
        }
    }
    return $items;
};

add_filter( 'wp_nav_menu_items', 'admin_link', 10, 2 );