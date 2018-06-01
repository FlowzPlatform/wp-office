<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://henryreith.co/
 * @since             1.0.0
 * @package           Hrm_Leadpages_Leadbox
 *
 * @wordpress-plugin
 * Plugin Name:       Leadpages Leadbox
 * Plugin URI:        https://henryreith.co/leadpages-plugin/
 * Description:       This plugin helps you quickly inset LeadPages LeadBox shortcode in your pages and blog. Plus it gives you some high converting CTA's to use.
 * Version:           1.0.0
 * Author:            Henry Reith
 * Author URI:        https://henryreith.co/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hrm-leadpages-leadbox
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hrm-leadpages-leadbox-activator.php
 */
function activate_hrm_leadpages_leadbox() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hrm-leadpages-leadbox-activator.php';
	Hrm_Leadpages_Leadbox_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hrm-leadpages-leadbox-deactivator.php
 */
function deactivate_hrm_leadpages_leadbox() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hrm-leadpages-leadbox-deactivator.php';
	Hrm_Leadpages_Leadbox_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hrm_leadpages_leadbox' );
register_deactivation_hook( __FILE__, 'deactivate_hrm_leadpages_leadbox' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hrm-leadpages-leadbox.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hrm_leadpages_leadbox() {

	$plugin = new Hrm_Leadpages_Leadbox();
	$plugin->run();

}
run_hrm_leadpages_leadbox();
