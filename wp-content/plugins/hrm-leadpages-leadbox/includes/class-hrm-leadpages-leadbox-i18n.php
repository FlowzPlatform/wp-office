<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://henryreith.co/
 * @since      1.0.0
 *
 * @package    Hrm_Leadpages_Leadbox
 * @subpackage Hrm_Leadpages_Leadbox/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hrm_Leadpages_Leadbox
 * @subpackage Hrm_Leadpages_Leadbox/includes
 * @author     Henry Reith <support@fridgemedia.co>
 */
class Hrm_Leadpages_Leadbox_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hrm-leadpages-leadbox',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
