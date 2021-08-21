<?php
// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'theme_name_scripts');

// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts()
{
	enqueue_versioned_style('wp-styles', '/assets/css/app.min.css');
	enqueue_versioned_script('script-name', '/assets/js/app.min.js', array(), '1.0.0', true);
}


// подключаем принудительное обновление сайта

/**
 * Enqueues script with WordPress and adds version number that is a timestamp of the file modified date.
 * 
 * @param string      $handle    Name of the script. Should be unique.
 * @param string|bool $src       Path to the script from the theme directory of WordPress. Example: '/js/myscript.js'.
 * @param array       $deps      Optional. An array of registered script handles this script depends on. Default empty array.
 * @param bool        $in_footer Optional. Whether to enqueue the script before </body> instead of in the <head>.
 *                               Default 'false'.
 */
function enqueue_versioned_script($handle, $src = false, $deps = array(), $in_footer = false)
{
	wp_enqueue_script($handle, get_stylesheet_directory_uri() . $src, $deps, filemtime(get_stylesheet_directory() . $src), $in_footer);
}

/**
 * Enqueues stylesheet with WordPress and adds version number that is a timestamp of the file modified date.
 *
 * @param string      $handle Name of the stylesheet. Should be unique.
 * @param string|bool $src    Path to the stylesheet from the theme directory of WordPress. Example: '/css/mystyle.css'.
 * @param array       $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
 * @param string      $media  Optional. The media for which this stylesheet has been defined.
 *                            Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
 *                            '(orientation: portrait)' and '(max-width: 640px)'.
 */
function enqueue_versioned_style($handle, $src = false, $deps = array(), $media = 'all')
{
	wp_enqueue_style($handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime(get_stylesheet_directory() . $src), $media);
}


// add menu
add_action('after_setup_theme', 'theme_register_nav');
function theme_register_nav()
{
	register_nav_menu('primary', 'Primary Menu');
	register_nav_menu('product_cats', 'Product Categories');
}

// add custom logo
add_theme_support('custom-logo');

// add options

// if (function_exists('acf_add_options_page')) {

// 	acf_add_options_page();
// }

// add images for posts 
add_theme_support( 'post-thumbnails' );

// add widgets

function wpb_widgets_init()
{

	register_sidebar(array(
		'name'          => 'Custom Footer Widget Area',
		'id'            => 'custom-footer-widget',
		'before_widget' => '<div class="footer__column">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="footer__column-title">',
		'after_title'   => '</p>',
	));
}
add_action('widgets_init', 'wpb_widgets_init');

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}
