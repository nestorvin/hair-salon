<?php
# Add Css and JavaScript
# -------------------------------------------
function my_script_enqueue()
{

    wp_enqueue_style('my-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
    // wp_enqueue_script('my-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
    
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
}

add_action('wp_enqueue_scripts', 'my_script_enqueue');

add_theme_support('custom-header');


function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'awesome_theme_setup');


add_theme_support('custom-header');
add_theme_support( 'post-thumbnails' );
add_theme_support('post-formats',array('aside','image','video'));



 

function wpdocs_theme_slug_widgets_init() {
    register_sidebar( 
        array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'Widgets in this area will be shown on all posts and pages.', 'textdomain',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-h1-title">',
        'after_title'   => '</h2>',
    ) 
);
    register_sidebar( 
        array(
        'name'          => 'Sidebar2',
        'id'            => 'sidebar-2',
        'description'   => 'Widgets in this area will be shown on all posts and pages.', 'textdomain',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-h1-title">',
        'after_title'   => '</h2>',
    ) 
);

}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

?>





