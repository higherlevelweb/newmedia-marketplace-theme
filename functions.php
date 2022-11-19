<?php
/**
 * newmedia-marketplace functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newmedia-marketplace
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
function newmedia_marketplace_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on newmedia-marketplace, use a find and replace
		* to change 'newmedia-marketplace' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'newmedia-marketplace', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'newmedia-marketplace' ),
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
			'newmedia_marketplace_custom_background_args',
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
add_action( 'after_setup_theme', 'newmedia_marketplace_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function newmedia_marketplace_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'newmedia_marketplace_content_width', 640 );
}
add_action( 'after_setup_theme', 'newmedia_marketplace_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newmedia_marketplace_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'newmedia-marketplace' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'newmedia-marketplace' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'newmedia_marketplace_widgets_init' );

/**
 * Enqueue default scripts and styles.
 */
function newmedia_marketplace_scripts() {
	wp_enqueue_style( 'newmedia-marketplace-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'newmedia-marketplace-style', 'rtl', 'replace' );

	wp_enqueue_script( 'newmedia-marketplace-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'newmedia_marketplace_scripts' );

/**
 * Enqueue theme custom scripts and styles.
 * <link rel="stylesheet" href="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/css/animate.css/animate.min.css" type="text/css" />
 * <link rel="stylesheet" href="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/css/glyphicons/glyphicons.css" type="text/css" />
 * <link rel="stylesheet" href="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/css/font-awesome/css/font-awesome.min.css" type="text/css" />
 * <link rel="stylesheet" href="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/css/material-design-icons/material-design-icons.css" type="text/css" />
 * <link rel="stylesheet" href="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
 * <link rel="stylesheet" href="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/css/styles/app.css" type="text/css" />
 * <link rel="stylesheet" href="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/css/styles/style.css" type="text/css" />
 * <link rel="stylesheet" href="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/css/styles/font.css" type="text/css" />
 * <link rel="stylesheet" href="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/libs/mediaelement/build/mediaelementplayer.min.css" type="text/css" />
 * <link rel="stylesheet" href="https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/libs/mediaelement/build/mep.css" type="text/css" />
*/

function theme_styles()  
{ 

	// Register styles for loading only on certain pages
	wp_register_style( 'owl-carousel', get_template_directory_uri() . '/libs/owl.carousel/dist/assets/owl.carousel.min.css' );
	wp_register_style( 'owl-theme', get_template_directory_uri() . '/libs/owl.carousel/dist/assets/owl.theme.css"' );

	// Enqueue all of the styles that need to appear on all pages
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css/animate.min.css' );
	wp_enqueue_style( 'glyphicons', get_template_directory_uri() . '/css/glyphicons/glyphicons.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'material-design-icons', get_template_directory_uri() . '/css/material-design-icons/material-design-icons.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'app', get_template_directory_uri() . '/css/styles/app.css' );
	wp_enqueue_style( 'font', get_template_directory_uri() . '/css/styles/font.css' );
	wp_enqueue_style( 'media-element-player', get_template_directory_uri() . '/libs/mediaelement/build/mediaelementplayer.min.css' );
	wp_enqueue_style( 'mep', get_template_directory_uri() . '/libs/mediaelement/build/mep.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/styles/style.css' );

	// Conditionally load registered styles for loading only on certain pages
	if(is_page('home')) {
		wp_enqueue_style('owl-carousel');
		wp_enqueue_style('owl-theme');
	} else {
		echo "Not home page";
	}

}
add_action('wp_enqueue_scripts', 'theme_styles');

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

