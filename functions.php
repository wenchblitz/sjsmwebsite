<?php
/**
 * sjsmwebsite functions and definitions
 *
 * @package sjsmwebsite
 */

//Hides Admin bar
add_filter('show_admin_bar', '__return_false');

//Add Thumbnails
add_theme_support('post-thumbnails'); 

//Add Widget
function wpb_widgets_init() {

	register_sidebar( array(
		'name' =>__( 'Upcoming Events', 'wpb'),
		'id' => 'sidebar-events',
		'description' => __( 'Appears on the static front page template', 'sjsm' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    
	/*register_sidebar( array(
		'name' => __( 'Main Sidebar', 'sjsm' ),
		'id' => 'sidebar-1',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );*/
}

add_action( 'widgets_init', 'wpb_widgets_init' );

/* Bootstrap Menu into Wordpress Theme */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'sjsm' ) );
        } endif;

function wpt_register_js() {
    /*wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');*/
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 'null', true );
    wp_enqueue_script('jquery.bootstrap.min');
}

add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap.min' );
}

add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus(
    array(
        'primary' => __('top_menu', 'Main Menu'),
        )
);

//exclude pages from searches
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','SearchFilter');
//foo

    
//Securing Themes
//add_filter('login_errors', create_function('$a', "return null;"));
//remove_action('wp_head', 'wp_generator');

?>