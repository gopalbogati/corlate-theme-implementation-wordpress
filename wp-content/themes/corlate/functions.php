<?php
/**
 * corlate functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package corlate
 */

if ( ! function_exists( 'corlate_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function corlate_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on corlate, use a find and replace
	 * to change 'corlate' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'corlate', get_template_directory() . '/languages' );

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
//add theme header support
	add_theme_support( 'custom-header' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'corlate' ),
		'secondary'=>esc_html__( 'Secondary', 'corlate' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'corlate_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif;
add_action( 'after_setup_theme', 'corlate_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function corlate_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'corlate_content_width', 640 );
}
add_action( 'after_setup_theme', 'corlate_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function corlate_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'corlate' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'corlate_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function corlate_scripts() {
	//for corlate style enqueue
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css');
	wp_enqueue_style( 'animate-style', get_template_directory_uri(). '/css/animate.min.css');
	// wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/css/font-awesome.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/css/font-awesome.min.css');	
	wp_enqueue_style( 'responsive', get_template_directory_uri(). '/css/responsive.css');
	wp_enqueue_style( 'prettyphoto', get_template_directory_uri(). '/css/prettyPhoto.css');
	wp_enqueue_style( 'corlate-style', get_stylesheet_uri() );


//for jquery enqueue

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'corlate-navigation', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'customizer', get_template_directory_uri() . '/js/customizer.js', array('jquery'), '', true );

	wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/html5shiv.js', array(), '', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '', true );
	wp_enqueue_script( 'prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '', true );

	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array(), '', true );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), '', true );
///////
	wp_enqueue_script( 'corlate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );

	wp_enqueue_script( 'corlate-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'corlate_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

//social icons set_up
//require get_template_directory() . '/inc/social-icons.php';
//for navmenuwalker

//require get_template_directory().  '/inc/walker.php';
require get_template_directory() . '/inc/custom-customizer.php';
//creating costum post type
require get_template_directory() . '/inc/custom-post-type.php';

//adding custom widgets
require get_template_directory() . '/inc/custom-widgets.php';

add_action( 'init', 'slider_init' ); // custom posts and taxes
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */