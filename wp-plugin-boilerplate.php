<?php
/**
 * Plugin Name: WP Plugin Boilerplate
 * Plugin URI: https://github.com/arnaudbroes/wp-plugin-boilerplate
 * Description: Personal boilerplate for WordPress plugins.
 * Version: 1.0.0
 * Requires at least: 4.9.0
 * Requires PHP: 5.4.3
 * Author: Arnaud Broes
 * Author URI: https://arnaudbroes.com
 * Text Domain: wp-boiler-plate
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! defined( 'WP_PLUGIN_BOILERPLATE_FILE' ) ) {
	define( 'WP_PLUGIN_BOILERPLATE_FILE', __FILE__ );
}

if ( ! defined( 'WP_PLUGIN_BOILERPLATE_DIR' ) ) {
	define( 'WP_PLUGIN_BOILERPLATE_DIR', dirname( WP_PLUGIN_BOILERPLATE_FILE ) );
}

require_once( WP_PLUGIN_BOILERPLATE_DIR . '/app/wpPluginBoilerplate.php' );

wpb();