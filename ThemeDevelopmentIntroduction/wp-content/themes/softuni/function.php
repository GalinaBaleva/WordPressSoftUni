<?php

/**
 * Never worry about cache again!
 */
function softuni_assets($hook) {

	
	// $my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'js/custom.js' ));
	// $my_css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ));
	
	// 
	wp_enqueue_script( 'booltstrap-mini', get_template_directory_uri(), '/assets/js/bootstrap.min.js',  );


}
add_action('wp_enqueue_scripts', 'my_load_scripts');