<?php
/**
 * Restless functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Restless
 * @since Restless 1.0
 */

/**
 * Restless only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'restless_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Restless 1.0
 */



function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 300 );



function restless_setup() {

	

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 300, 300, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'restless' ),
		'social'  => __( 'Social Links Menu', 'restless' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	//add_theme_support( 'post-formats', array(
	//	'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	//) );

}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'restless_setup' );

/**
 * Register widget area.
 *
 * @since Restless 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'restless' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );





// Load our css 
function css()  
{  	
	
	
	
    // Main style file
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.min.css'); 
    wp_enqueue_style( 'style' ); 


    // Fontawsome
	wp_register_style( 'fa', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css'); 
    wp_enqueue_style( 'fa' ); 
	
	

    

}  
add_action( 'wp_enqueue_scripts', 'css' );


##################----|| Scripts

// We remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

// Load our scripts
function scripts()
{

	// Replace wordpress jquery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js', array(), '1.0.0', false );
	wp_enqueue_script( 'jquery' );
	
	// Twitter bootstrap
	wp_register_script( 'twitter_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'twitter_bootstrap' );

		// Twitter bootstrap
	wp_register_script( 'menu', get_template_directory_uri() . '/js/menu.js', array(), '1.0.0', true );
	wp_enqueue_script( 'menu' );
	
	// modernizr
	wp_register_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '1.0.0', false );
	wp_enqueue_script( 'modernizr' );


	// classie
	wp_register_script( 'classie', get_template_directory_uri() . '/js/classie.js', array(), '1.0.0', true );
	wp_enqueue_script( 'classie' );




	//if ( is_home() || is_page()) {  }// Don't load on home,post and pages
	//else {
	// list.js
	//wp_register_script( 'list', get_template_directory_uri() . '/js/list.min.js', array(), '1.0.0', true );
	//wp_enqueue_script( 'list' );
	//}
	
	
	// Smooth-scroll
	//wp_register_script( 'smooth-scroll', '//cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.4.12/jquery.smooth-scroll.min.js', array(), '1.0.0', true );
	//wp_enqueue_script( 'smooth-scroll' );
	
	
	
	// Main footer executions
    //wp_register_script( 'main_footer', get_template_directory_uri() . '/js/footer.js', array(), '1.0.0', true );
    //wp_enqueue_script( 'main_footer' );
	
	// Social media stuff FB, G+ etc
	//wp_register_script( 'social', get_template_directory_uri() . '/js/social-functions.js', array(), '1.0.0', true );
	//wp_enqueue_script( 'social' );
	
}

add_action( 'wp_enqueue_scripts', 'scripts');









/**
 * Custom template tags for this theme.
 *
 * @since Restless 1.0
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/cp.php';



