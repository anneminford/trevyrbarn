<?php


/**
 * Enqueue scripts and styles.
 */

// wp_deregister_script('jquery');
// wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), false, '1.9.1', true);


/**
 * Enqueues scripts and styles for front-end.
 */
 
wp_deregister_script('jquery');
wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), false, '1.9.1', true);
 
function migration_scripts_styles() {
	//global $wp_styles;

	/*
	 * Loads our main stylesheet.
	 */
	
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/libs/bootstrap-css/css/bootstrap.min.css' );

	wp_enqueue_style( 'gulp-wordpress-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/libs/bootstrap-css/js/bootstrap.min.js');

	wp_enqueue_script( 'application-js', get_template_directory_uri() . '/js/app.min.js');

	// wp_register_style('bootstrap', get_template_directory_uri() . '/libs/bootstrap-css/js/bootstrap.min.js' );

	wp_enqueue_script( 'map-js', '//maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyB-nprOaC5KHE25mFcnDI80B84YT7u_UZ4', array(jquery), '0.0.1', false );

// AIzaSyB-nprOaC5KHE25mFcnDI80B84YT7u_UZ4
// <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=your_api_key_here"></script>


	wp_enqueue_script( 'googlemap-js', get_template_directory_uri() . '/js/maps.js', array(jquery), '0.0.1', false );
	
	wp_enqueue_style('google-heading', '//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic');

	/*
	 * Optional: Loads the Internet Explorer specific stylesheet.
	 */
	//wp_enqueue_style( 'migration-ie', get_template_directory_uri() . '/css/ie.css', array( 'migration-style' ), '20121010' );
	//$wp_styles->add_data( 'migration-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'migration_scripts_styles' );

// Register Custom Navigation Walker https://github.com/twittem/wp-bootstrap-navwalker/
// require_once('wp_bootstrap_navwalker.php');

// register_nav_menus( array(
//     'primary' => __( 'Primary Menu', 'migration-theme-master' ),
// ) );


// function gulp_wordpress_scripts() {

// 	wp_register_style('bootstrap', get_template_directory_uri() . '/libs/bootstrap-css/css/bootstrap.min.css' );

//     $dependencies = array('bootstrap');

//     wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 

// 	wp_enqueue_style( 'gulp-wordpress-style', get_stylesheet_uri() );

// 	wp_register_style('bootstrap', get_template_directory_uri() . '/libs/bootstrap-css/js/bootstrap.min.js' );

// 	$dependencies = array('jquery');
//     wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );

// 	wp_enqueue_script( 'gulp-wordpress-javascript', get_template_directory_uri() . '/js/app.min.js', array(), '20151215', true );

// 	wp_enqueue_script( 'map-js', '//maps.googleapis.com/maps/api/js?sensor=true', array(jquery), '0.0.1', false );

// 	wp_enqueue_script( 'googlemap-js', get_template_directory_uri() . '/js/maps.js', array(jquery), '0.0.1', false );

// 	wp_enqueue_style('google-heading', '//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic');
	
// }
// add_action( 'wp_enqueue_scripts', 'gulp_wordpress_scripts' );

