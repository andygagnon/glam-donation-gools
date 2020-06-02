<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://andregagnon.com
 * @since      1.0.0
 *
 * @package    Glam_Donation_Tools
 * @subpackage Glam_Donation_Tools/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Glam_Donation_Tools
 * @subpackage Glam_Donation_Tools/includes
 * @author     Andre Gagnon <andy.gagnon@gmail.com>
 */
class Glam_Donation_Tools_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'glam-donation-tools',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
