<?php

/*
 * Plugin Name:       Robots Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       My first robots plugin
 * Version:           1.0.0
 * Author:            Galina Baleva
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       robots
 * Domain Path:       /languages
 */


//  include "/includes/cpt-robots.php";

include 'includes/functions.php';


if (!defined('ROBOTS_INCLUDE')) {
    define('ROBOTS_INCLUDE', plugin_dir_path(__FILE__) . 'includes');
}

require ROBOTS_INCLUDE . '/cpt-robots.php';

/**
 * Enqueue all of the assets for my plugin
 */

function ro_robots_enqueue()
{
    wp_enqueue_script('robots-script', plugins_url('/assets/script.js', __FILE__), array('jquery'), 1.1);

    wp_localize_script( 'robots-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action('wp_enqueue_scripts', 'ro_robots_enqueue');
