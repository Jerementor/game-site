<?php
//Loading in Scripts
function thegc_enqueue_styles(){
    wp_enqueue_script('webflow-js', get_template_directory_uri() . '/assets/js/webflow.js', array('jquery'));
    wp_enqueue_script('thegc_custom', get_template_directory_uri() . '/assets/js/thegc_custom.js', array('jquery'));

    
    wp_enqueue_style("normalize",  get_template_directory_uri() . "/assets/css/normalize.css");
    wp_enqueue_style("webflow",  get_template_directory_uri() . "/assets/css/webflow.css");
    wp_enqueue_style("thegameclass",  get_template_directory_uri() ."/assets/css/thegameclass.webflow.css");
    wp_enqueue_style("thegameclass-style", get_stylesheet_uri());
    
}
add_action("wp_enqueue_scripts", "thegc_enqueue_styles");

function thegc_menu_setup(){
    
    //Registers custom primary nav menu 
    register_nav_menus( array(
        'logged-in'     => __("Logged-In Menu", "thegameclass-login"),
        'logged-out'    => __("Logged-Out Menu", "thegameclass-logout"),
        'drop-down'    => __("Dropdown Menu", "thegameclass-drop"),
        'second-nav'    => __("Second Nav Menu", "thegameclass-secondnav"),
        
    ));
    
}
add_action("after_setup_theme", "thegc_menu_setup");

function thegc_setup(){
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	
	) );
}
add_action( 'after_setup_theme', 'thegc_setup' );


// remove_filter('the_content', 'wpautop');
add_post_type_support( 'page', 'excerpt' );