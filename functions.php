<?php

/* Add Customizer Functionality */
require get_template_directory() . '/includes/customizer-hundimauto.php';

/*
	Theme Setup
*/

if ( !function_exists( 'hundimauto_theme_setup' ) ) {

	/* Theme Setup */

	function hundimauto_theme_setup() {
		load_theme_textdomain( 'hundimauto', get_template_directory() . '/languages' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'responsive-embeds' );
		
		register_nav_menus(
			array(
				'primary' 		=> esc_html__( 'Primary Menu', 'hundimauto' ),
				'secondary'		=> esc_html__( 'Secondary Menu', 'hundimauto' ),
				'third'			=> esc_html__( 'Meta Menu', 'hundimauto' )
			)
		);
	}
}
add_action( 'after_setup_theme', 'hundimauto_theme_setup' );

/*
	Enqueue scripts and styles
*/

function hundimauto_assets() {

	// Enqueue CSS Files
	wp_enqueue_style( 'bootstrap', get_theme_file_uri('bootstrap/dist/css/bootstrap.min.css'), array(), 'v5.3.3', 'all' );
	wp_enqueue_style( 'flaticon', get_theme_file_uri('assets/font/flaticon.css'), array(), false, 'all' );
	wp_enqueue_style( 'hamburgers', get_theme_file_uri('assets/css/hamburgers.min.css'), array(), false, 'all' );
	wp_enqueue_style( 'animate-css', get_theme_file_uri('assets/css/animate.min.css'), array(), '4.1.1', 'all' );
	wp_enqueue_style( 'hundimauto', get_stylesheet_uri(), array('bootstrap'), '1.1', 'all' );

	// Enqueue JS Files
	// Don't enqueue jQuery files it'll be loaded from WordPress when required
	wp_enqueue_script( 'bootstrap', get_theme_file_uri('bootstrap/dist/js/bootstrap.min.js'), array(), 'v5.3.3', true );
	wp_enqueue_script( 'jquery-waypoints', get_theme_file_uri('assets/js/jquery.waypoints.min.js"'), array('jquery'), '4.0.0', true );
	wp_enqueue_script( 'froogaloop', get_theme_file_uri('assets/js/froogaloop.js"'), array(), false, true );
	wp_enqueue_script( 'vimeo-player', get_theme_file_uri('assets/js/vimeo.player.2.24.0.min.js'), array(), 'v2.24.0', true );
	wp_enqueue_script( 'hundimauto-js', get_theme_file_uri('assets/js/main-script.js'), array('jquery','jquery-ui-core','jquery-ui-selectmenu'), '1.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments') ) {
		wp_enqueue_script( 'comment-reply');
	}
}
add_action( 'wp_enqueue_scripts', 'hundimauto_assets' );

//Remove Gutenberg Block Library CSS from loading on the frontend
//https://smartwp.com/remove-gutenberg-css/
function smartwp_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

/*
	Enable SVG Upload
	https://www.sven-hoerig.de/ratgeber/wordpress-svg-upload-aktivieren/
*/
function allow_svg_upload( $mimes ) {
	$mimes[ 'svg' ] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );

/*
	Removing Emoji's from Code
	https://fastwp.de/wordpress-emoji-support-deaktivieren/
*/
function remove_tinymce_emoji($plugins)
{
	if (!is_array($plugins)) { return array(); }
	return array_diff($plugins, array('wpemoji'));
}
function remove_emoji()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'remove_tinymce_emoji');
}
add_action('init', 'remove_emoji');

/*
	Remove Classic themes.css completely
	https://generatepress.com/forums/topic/remove-classic-themes-css-completely/
*/
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'classic-theme-styles' );
    wp_dequeue_style( 'global-styles' );
}, 20 );