<?php

/*
* Plugin Name: SoftUni Plugin
* Plugin URI:
https://example.com/softuni.bg
* Description: Our first plugin for the cours
* Version: 1.0.0
* Requires at least: 5.0
* Requires PHP: 8.0
* Author: SoftUni
* Author URI: https://softuni.bg/
* License: GPL v2 or later
* License URI:
https://www.gnu.org/licenses/gpl-2.0.html
* Update URI: https://example.com/myplugin/
* Text Domain: softuni
* Domain Path: /languages
*/

include 'includes/functions.php';


if( ! defined( 'ROBOTS_INCLUDE' ) ) {
    define( 'ROBOTS_INCLUDE', plugin_dir_path( __FILE__) . 'includes');
}

require ROBOTS_INCLUDE . '/cpt-robots.php';