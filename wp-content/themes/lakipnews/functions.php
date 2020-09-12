<?php
// // Register Custom Navigation Walker
// require_once('wp_bootstrap_navwalker.php');

// // Add theme support to bootstrap navigation
// function my_theme_setup()
// {
//   register_nav_menus(array(
//     'primary' => __('Primary Menu')
//   ));
// }
// add_action('after_setup_theme', 'my_theme_setup');

// // Bootstrap navigation
// function bootstrap_nav()
// {
//   wp_nav_menu(array(
//     'menu'              => 'primary',
//     'theme_location'    => 'primary',
//     'depth'             => 2,
//     'container'         => 'div',
//     'container_class'   => 'collapse navbar-collapse',
//     'container_id'      => 'bs-example-navbar-collapse-1',
//     'menu_class'        => 'nav navbar-nav',
//     'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
//     'walker'            => new wp_bootstrap_navwalker()
//   ));
// }


// Daftarkan sebuah sidebar baru yang diberi nama 'sidebar'
function add_widget_Support()
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}
// Kaitkan inisiasi widget dan jalankan fungsi
add_action('widgets_init', 'add_Widget_Support');
// Daftarkan menu navigasi baru
function add_Main_Nav()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
// Hook to the init action hook, run our navigation menu function
// Kaitkan ke init action hook, jalankan function menu navigasi.
add_action('init', 'add_Main_Nav');








// batas ++
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/wp_bootstrap_pagination.php';
register_nav_menus(array(
    'primary' => __('Primary Menu', 'MyTema'),
));
add_theme_support('post-thumbnails');
function set_excerpt_length()
{
    return 35;
}
add_filter('excerpt_length', 'set_excerpt_length');

function wpb_init_widgets($id)
{
    register_sidebar(array(
        'name'  => 'Sidebar',
        'id'    => 'sidebar',
        'before_widget' => '<div class="p-3 list_sb">',
        'after_widget' => '</div>',
        'before_title' => '<h4><i class="fa fa-caret-right"></i> ',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'wpb_init_widgets');
function customize_wp_bootstrap_pagination($args)
{
    $args['previous_string'] = 'previous';
    $args['next_string'] = 'next';
    return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');