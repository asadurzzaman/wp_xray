<?php

/**
 * @package wpxray
 * 
 *============================
        THEME SUPPORT OPTIONS
============================
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'wpxray_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wpxray_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wpxray, use a find and replace
		 * to change 'wpxray' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wpxray', get_template_directory() . '/languages' );

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
				'main-menu' => esc_html__( 'Primary Menu', 'wpxray' ),
                'mobile-menu' => esc_html__( 'Mobile Menu', 'wpxray' ),
                'footer-menu' => esc_html__( 'Footer Menu', 'wpxray' ),
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
				'wpxray_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'wpxray_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wpxray_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wpxray_content_width', 640 );
}
add_action( 'after_setup_theme', 'wpxray_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wpxray_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wpxray' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wpxray' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wpxray_widgets_init' );

// google fonts

if ( !function_exists('wpxray_fonts_url') ) :

	function wpxray_fonts_url()
	{
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin';
		if ('off' !== _x('on', 'Inter font: on or off', 'wpxray')) {
			$fonts[] = 'Inter: 100,200,300,400,500,600,700,800,900';
		} 
		if ('off' !== _x('on', 'Rubik font: on or off', 'wpxray')) {
			$fonts[] = 'Rubik: 400,500,700';
		}
		if ($fonts) {
			$fonts_url = add_query_arg(array(
				'family' => urlencode(implode('|', $fonts)),
				'subset' => urlencode($subsets),
			), '//fonts.googleapis.com/css');
		}

		return $fonts_url;
	}
endif;

// svg support
function wpxray_svg_types($mimes){

	// New allowed mime types.
	$mimes['svg']   = 'image/svg+xml';
	$mimes['svgz']  = 'image/svg+xml';
	$mimes['doc']   = 'application/msword';

	// Optional. Remove a mime type.
	unset($mimes['exe']);

	return $mimes;
}

add_filter('upload_mimes', 'wpxray_svg_types');