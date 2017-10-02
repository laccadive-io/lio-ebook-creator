<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://laccadive.io
 * @since      1.0.0
 *
 * @package    Lio_Ebook_Creator
 * @subpackage Lio_Ebook_Creator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Lio_Ebook_Creator
 * @subpackage Lio_Ebook_Creator/includes
 * @author     Laccadive IO <muhammad@laccadive.io>
 */
class Lio_Ebook_Creator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'lio-ebook-creator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
