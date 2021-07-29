<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'wp-styles', get_template_directory_uri() . '/assets/css/app.min.css' );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1.0.0', true );
}

// add menu
add_action( 'after_setup_theme', 'theme_register_nav' );
function theme_register_nav() {
	register_nav_menu( 'primary', 'Primary Menu' );
	register_nav_menu( 'product_cats', 'Product Categories' );
}

add_theme_support( 'custom-logo' );

function wpb_widgets_init() {
 
	register_sidebar( array(
			'name'          => 'Custom Footer Widget Area',
			'id'            => 'custom-footer-widget',
			'before_widget' => '<div class="footer__column">',
			'after_widget'  => '</div>',
			'before_title'  => '<p class="footer__column-title">',
			'after_title'   => '</p>',
	) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

if( function_exists('acf_add_options_page') ) {
	
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