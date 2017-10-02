<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://laccadive.io
 * @since             1.0.0
 * @package           Lio_Ebook_Creator
 *
 * @wordpress-plugin
 * Plugin Name:       LIO eBook Creator
 * Plugin URI:        https://github.com/laccadive-io/lio-ebook-creator
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Laccadive IO
 * Author URI:        https://laccadive.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lio-ebook-creator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-lio-ebook-creator-activator.php
 */
function activate_lio_ebook_creator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lio-ebook-creator-activator.php';
	Lio_Ebook_Creator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-lio-ebook-creator-deactivator.php
 */
function deactivate_lio_ebook_creator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-lio-ebook-creator-deactivator.php';
	Lio_Ebook_Creator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_lio_ebook_creator' );
register_deactivation_hook( __FILE__, 'deactivate_lio_ebook_creator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-lio-ebook-creator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_lio_ebook_creator() {

	$plugin = new Lio_Ebook_Creator();
	$plugin->run();

}
run_lio_ebook_creator();
