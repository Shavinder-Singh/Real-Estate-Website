<?php
function child_enqueue_styles()
{
    // wp_enqueue_style('propertytheme-style', get_stylesheet_uri(), array(), PROPERTYTHEME_VERSION);
    wp_enqueue_style('propertytheme-child-style', get_stylesheet_directory_uri() . "/styles/main.css", array('propertytheme-theme-css'), null, 'all');
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15)
    ?>

<?php
add_theme_support('custom-header');
?>
<?php
register_nav_menus(
    array(
        'primary-menu' => esc_html__('Primary Menu', 'top-menu'),
    )
)
    ?>

<?php
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args)
{
    return "";
}

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
function clear_nav_menu_item_class($classes, $item, $args)
{
    return array();
}
?>
<?php

function my_acf_json_save_point($path)
{
    return get_stylesheet_directory() . '/acf-json';
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

// Hide toolbar for subscribers
function hide_admin_bar_for_subscribers()
{
    if (current_user_can('subscriber')) {
        // Hide the toolbar for subscribers
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'hide_admin_bar_for_subscribers');
