<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://andregagnon.com
 * @since             1.0.0
 * @package           Glam_Donation_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       GLAM Donation Tools
 * Plugin URI:        https://github.com/andygagnon/glam-donation-tools
 * Description:       Code snippets, tools to accept donations using WooCommerce.
 * Version:           1.0.0
 * Author:            Andre Gagnon
 * Author URI:        https://andregagnon.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       glam-donation-tools
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GLAM_DONATION_TOOLS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-glam-donation-tools-activator.php
 */
function activate_glam_donation_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-glam-donation-tools-activator.php';
	Glam_Donation_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-glam-donation-tools-deactivator.php
 */
function deactivate_glam_donation_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-glam-donation-tools-deactivator.php';
	Glam_Donation_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_glam_donation_tools' );
register_deactivation_hook( __FILE__, 'deactivate_glam_donation_tools' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-glam-donation-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_glam_donation_tools() {

	$plugin = new Glam_Donation_Tools();
	$plugin->run();

}
run_glam_donation_tools();
