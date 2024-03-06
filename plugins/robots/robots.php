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


if( ! defined( 'ROBOTS_INCLUDE' ) ) {
    define( 'ROBOTS_INCLUDE', plugin_dir_path( __FILE__) . 'includes');
}

require ROBOTS_INCLUDE . '/cpt-robots.php';