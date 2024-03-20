<?php

/**
 * Never worry about cache again!
 */

 add_theme_support( 'post-thumbnails' );

function softuni_assets ( $hook )
{

	// $my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'js/custom.js' ));
	// $my_css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ));

	// 
	$args = array(
		'in_footer' => true,
		'strategy'  => 'defer',
	);

	wp_enqueue_script ( 'bootstrap-min-js', get_template_directory_uri () . '/assets/js/bootstrap.min.js', array(), $args );
	wp_enqueue_script ( 'jquery.magnific-popup', get_template_directory_uri () . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', $args );
	wp_enqueue_script ( 'owl.carousel', get_template_directory_uri () . '/assets/js/owl.carousel.min.js', array(), '1.0.0', $args );
	// wp_enqueue_script( 'softuni-scripts', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.3', $args );

	wp_enqueue_style ( 'bootstrap.min.css', get_template_directory_uri () . '/assets/css/bootstrap.min.css', false, '1.0.0' );
	wp_enqueue_style ( 'ionicons.css', get_template_directory_uri () . '/assets/css/ionicons.css', false, '1.0.0' );
	wp_enqueue_style ( 'magnific-popup.css', get_template_directory_uri () . '/assets/css/magnific-popup.css', false, '1.0.0' );
	wp_enqueue_style ( 'main.css', get_template_directory_uri () . '/assets/css/main.css', false, '1.0.0' );
	wp_enqueue_style ( 'owl.carousel.css', get_template_directory_uri () . '/assets/css/owl.carousel.css', false, '1.0.0' );
	wp_enqueue_style ( 'owl.carousel.theme.min.css', get_template_directory_uri () . '/assets/css/owl.carousel.theme.min.css', false, '1.0.0' );


}
add_action ( 'wp_enqueue_scripts', 'softuni_assets' );

/**
 * Register 
 */

function robots_register_nav_menus ()
{
	register_nav_menus (
		array(
			'primary_menu'      => __ ( 'Primary Menu', 'robots' ),
			'popular_serviices' => __ ( 'Popular Services', 'robots' ),
			'important_links'   => __ ( 'Important Links', 'robots' ),
			'lates_services'    => __ ( 'Latest services', 'robots' ),
		)
	);
}
add_action ( 'after_setup_theme', 'robots_register_nav_menus' );


/**
 * Our Sidebars here
 */

function robots_sidebars ()
{
	register_sidebar (
		array(
			'id'            => 'footer-1',
			'name'          => __ ( 'Footer 1' ),
			'description'   => __ ( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	
	register_sidebar (
		array(
			'id'            => 'footer-2',
			'name'          => __ ( 'Footer 2' ),
			'description'   => __ ( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	
	register_sidebar (
		array(
			'id'            => 'footer-3',
			'name'          => __ ( 'Footer 3' ),
			'description'   => __ ( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar (
		array(
			'id'            => 'footer-4',
			'name'          => __ ( 'Footer 4' ),
			'description'   => __ ( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action ( 'widgets_init', 'robots_sidebars' );