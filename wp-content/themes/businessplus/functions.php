<?php
/**
 * businessplus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package businessplus
 */

if ( ! function_exists( 'businessplus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function businessplus_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on businessplus, use a find and replace
	 * to change 'businessplus' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'businessplus', get_template_directory() . '/languages' );

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

	// footer-menu - имя меню и display location
	register_nav_menu( 'menu-1', 'Primary' );
	register_nav_menu( 'menu-2', 'footer-menu' );

	add_theme_support( 'custom-logo' );

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
	add_theme_support( 'custom-background', apply_filters( 'businessplus_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	$args = array(
		'flex-width'    => true,
		'width'         => 1366,
		'flex-width'    => true,
		'height'        => 395,
		'default-image' => get_template_directory_uri() . '/img/blog-header.png',
		);
	add_theme_support( 'custom-header', $args );

}
endif;
add_action( 'after_setup_theme', 'businessplus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function businessplus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'businessplus_content_width', 640 );
}
add_action( 'after_setup_theme', 'businessplus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function businessplus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'businessplus' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'businessplus' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'businessplus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function businessplus_scripts() {
	wp_enqueue_style( 'businessplus-style', get_stylesheet_uri() );



	wp_enqueue_script('jquery');
	wp_enqueue_script( 'Jq', get_template_directory_uri() . '/libs/jquery/dist/jquery.js', array(), '20151215', true );
	wp_enqueue_script( 'businessplus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'businessplus-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap-sass/assets/javascripts/bootstrap.min.js', array(), '20151215', true );
		wp_enqueue_script( 'slickJs', get_template_directory_uri() . '/libs/slick-carousel/slick/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'my-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'businessplus_scripts' );

function new_excerpt_length($length) {
	return 65;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter('excerpt_more', function($more) {
	return '';
});


//services
function services_post_type() {
	$args = array(
      'label' => 'Home Services',   //название постайпа в меню
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => 'services-reviews'),
      'query_var' => true,
      'supports' => array(
      	'title',
      	'editor',
      	'excerpt',
      	'trackbacks',
      	'custom-fields',
      	'comments',
      	'revisions',
      	'thumbnail',
      	'author',
      	'page-attributes',)
      );
	register_post_type( 'services-reviews', $args );
}
add_action( 'init', 'services_post_type' );

//about
function about_post_type() {
	$args = array(
      'label' => 'Home About',
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => 'about'),
      'query_var' => true,
      'supports' => array(
      	'title',
      	'editor',
      	'excerpt',
      	'trackbacks',
      	'custom-fields',
      	'comments',
      	'revisions',
      	'thumbnail',
      	'author',
      	'page-attributes',)
      );
	register_post_type( 'about', $args );
}
add_action( 'init', 'about_post_type' );

//clients slider
function clients_post_type() {
	$args = array(
      'label' => 'Clients Slides',
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => 'clients-slider'),
      'query_var' => true,
      'supports' => array(
      	'title',
      	'editor',
      	'excerpt',
      	'trackbacks',
      	'custom-fields',
      	'comments',
      	'revisions',
      	'thumbnail',
      	'author',
      	'page-attributes',)
      );
	register_post_type( 'clients-slider', $args );
}
add_action( 'init', 'clients_post_type' );

//clients slider
function partners_post_type() {
	$args = array(
      'label' => 'Parners Slides',
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => 'partners-slider'),
      'query_var' => true,
      'supports' => array(
      	'title',
      	'editor',
      	'excerpt',
      	'trackbacks',
      	'custom-fields',
      	'comments',
      	'revisions',
      	'thumbnail',
      	'author',
      	'page-attributes',)
      );
	register_post_type( 'partners-slider', $args );
}
add_action( 'init', 'partners_post_type' );

register_sidebar( array(
	'name' => __( 'Footer widget area', 'businessplus' ),
	'id' => 'sidebar-footer-1',
	'description' => __( 'Footer widget area', 'businessplus' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );


register_sidebar( array(
	'name' => __( 'Blog widget area', 'businessplus' ),
	'id' => 'blog_content_social',
	'description' => __( 'Blog widget area', 'businessplus' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) );

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
