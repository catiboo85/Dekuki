<?php
/**
 * Dekuki functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dekuki
 */

if ( ! function_exists( 'dekuki_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dekuki_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Dekuki, use a find and replace
		 * to change 'dekuki' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dekuki', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'dekuki' ),
			'menu-2' => esc_html__( 'Footer', 'dekuki' ),
			'menu-3' => esc_html__( 'Footer2', 'dekuki' ),

		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'dekuki_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'dekuki_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dekuki_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'dekuki_content_width', 640 );
}
add_action( 'after_setup_theme', 'dekuki_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dekuki_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dekuki' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dekuki' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dekuki_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dekuki_scripts() {
	
	wp_enqueue_style( 'dekuki-style', get_stylesheet_uri() );

	// adding the customs and tachyons onto the functions 
	wp_enqueue_style( 'dekuki-tachyons', get_template_directory_uri() . '/css/tachyons.css' );
	wp_enqueue_style( 'dekuki-custom', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'dekuki-fonts', get_template_directory_uri() . '/css/fonts.css' );

	// adding the javascript page for marquee
	wp_enqueue_script( 'dekuki-marquee', get_template_directory_uri() . '/js/marquee.js');
	
	// adding the javascript page for the barba js
	wp_enqueue_script( 'dekuki-barba', get_template_directory_uri() . '/js/barba.js');
	
	// adding the javascript page for the custom javascript 
	wp_enqueue_script( 'dekuki-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.9.0', true);

}
add_action( 'wp_enqueue_scripts', 'dekuki_scripts' );

// Adding scripts for flickity carousel

function flickity_scripts() {
	wp_enqueue_script( 'flickityjs', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array( 'jquery' ), '1.9.0', true );
	wp_enqueue_script( 'flickityjs-init', get_template_directory_uri(). '/js/flickity.init.js', array( 'flickityjs' ), '1.9.0', true );

	wp_enqueue_style( 'flickitycss', get_template_directory_uri() . '/css/flickity.min.css', 'all');
	
}
add_action( 'wp_enqueue_scripts', 'flickity_scripts' );

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


