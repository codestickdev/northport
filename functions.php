<?php
/**
 * Northport functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Northport
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nortphort_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Northport, use a find and replace
		* to change 'nortphort' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'nortphort', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-left' => esc_html__( 'Left', 'nortphort' ),
		)
	);
	register_nav_menus(
		array(
			'menu-right' => esc_html__( 'Right', 'nortphort' ),
		)
	);
	register_nav_menus(
		array(
			'menu-mobile' => esc_html__( 'Mobile', 'nortphort' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'nortphort_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'nortphort_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nortphort_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nortphort_content_width', 640 );
}
add_action( 'after_setup_theme', 'nortphort_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nortphort_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nortphort' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nortphort' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nortphort_widgets_init' );


/*
 *	Ajax url
 */
add_action('wp_head', 'ajaxurl');
function ajaxurl() {
   echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}

/*
 *	ACF Google Maps
 */
function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyCVsxlxHIR-f5y2bHNk-_GmTGvbyBuZW_A';
	return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

/**
 * ACF local JSON 
 */
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}

/**
 * Enqueue scripts and styles.
 */
function nortphort_scripts() {
	wp_enqueue_style( 'nortphort-custom-css', get_template_directory_uri() . '/css/custom.css', array(), _S_VERSION );
	wp_enqueue_style( 'nortphort-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'nortphort-style', 'rtl', 'replace' );

	wp_register_script( 'jquery', get_template_directory_uri() . '/plugins/jQuery/jquery-3.6.0.min.js', null, null, true );
	wp_enqueue_script('jquery');

	// Slick
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/plugins/slick/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/plugins/slick/slick.css', array(), _S_VERSION );
	wp_register_script( 'slick-script', get_template_directory_uri() . '/plugins/slick/slick.min.js', null, null, true );
	wp_enqueue_script('slick-script');

	// Counter
	wp_register_script( 'counter', get_template_directory_uri() . '/plugins/counter/jQuerySimpleCounter.js', null, null, true );
	wp_enqueue_script('counter');

	// Lightbox
	wp_enqueue_style( 'lightbox-css', get_template_directory_uri() . '/plugins/lightbox/dist/css/lightbox.min.css', array(), _S_VERSION );
	wp_register_script( 'lightbox-script', get_template_directory_uri() . '/plugins/lightbox/dist/js/lightbox.min.js', null, null, true );
	wp_enqueue_script('lightbox-script');

	// Custom js
	wp_register_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', null, null, true );
	wp_enqueue_script('custom-js');

	// Map js
	wp_register_script( 'map-js', get_template_directory_uri() . '/js/_map.js', null, null, true );
	wp_enqueue_script('map-js');
	
	wp_enqueue_script( 'nortphort-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nortphort_scripts' );


/**
 * WP Admin bar margin delete.
 */
add_action('get_header', 'filter_head');
function filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
} 

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
