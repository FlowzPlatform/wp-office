<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://henryreith.co/
 * @since      1.0.0
 *
 * @package    Hrm_leadpages_leadbox
 * @subpackage Hrm_leadpages_leadbox/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Hrm_leadpages_leadbox
 * @subpackage Hrm_leadpages_leadbox/admin
 * @author     Henry Reith <support@fridgemedia.co>
 */
class Hrm_leadpages_leadbox_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
     * Holds the values to be used in the fields callbacks
     *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $options    The current version of this plugin.
	 */
    private $options;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->plugin_slug = $plugin_name;

		// Add the options page and menu item.
		add_action( 'admin_menu', array( $this, 'add_plugin_admin_menu' ) );

		// Add an action link pointing to the options page.
		$plugin_basename = plugin_basename( plugin_dir_path( realpath( dirname( __FILE__ ) ) ) . $this->plugin_name . '.php' );
		add_filter( 'plugin_action_links_' . $plugin_basename, array( $this, 'add_action_links' ) );

		// Add meta boxes to options page
		add_action( 'admin_init', array( $this, 'Hrm_leadpages_leadbox_settings_init' ) );

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hrm_leadpages_leadbox_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hrm_leadpages_leadbox_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/hrm-leadpages-leadbox-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hrm_leadpages_leadbox_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hrm_leadpages_leadbox_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/hrm-leadpages-leadbox-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register the administration menu for this plugin into the WordPress Dashboard menu.
	 *
	 * @since    1.0.0
	 */
	public function add_plugin_admin_menu() {

		/*
		 * Add a settings page for this plugin to the Settings menu.
		 *
		 * NOTE:  Alternative menu locations are available via WordPress administration menu functions.
		 *
		 *        Administration Menus: http://codex.wordpress.org/Administration_Menus
		 *
		 * @TODO:
		 *
		 * - Change 'Page Title' to the title of your plugin admin page
		 * - Change '$this->plugin_name' to the text for menu item for the plugin settings page
		 * - Change 'manage_options' to the capability you see fit
		 *   For reference: http://codex.wordpress.org/Roles_and_Capabilities
		 */
		$this->plugin_screen_hook_suffix = add_options_page(
				__( 'LeadBox ShortCode', $this->plugin_slug ), 'LeadBox ShortCode', 'manage_options', $this->plugin_slug, array( $this, 'display_plugin_admin_page' )
		);

	}

	/**
	 * Add settings action link to the plugins page.
	 *
	 * @since    1.0.0
	 */
	public function add_action_links( $links ) {
		return array_merge(
				array(
			'settings' => '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_slug ) . '">' . __( 'Settings' ) . '</a>',
			/* 'donate' => '<a href="https://henryreith.co/plugins/">' . __( 'More Plugins From Henry Reith', $this->plugin_slug ) . '</a>' */
				), $links
		);
	}

	/**
	 * Render the settings page for this plugin.
	 *
	 * @since    1.0.0
	 */
	public function display_plugin_admin_page() {
		// Set class property
		$options = get_option( 'hrm_leadpages_leadbox_settings' );
		// Main setting display (render) 
		include_once( 'partials/hrm-leadpages-leadbox-admin-display.php' );
	}

	public function Hrm_leadpages_leadbox_settings_init() { 

		register_setting( 'pluginPage', 'Hrm_leadpages_leadbox_settings' );

		add_settings_section(
			'Hrm_leadpages_leadbox_pluginPage_section', 
			__( 'Leadbox Info', 'hrm_leadpages_leadbox' ),
			array( $this, 'Hrm_leadpages_leadbox_settings_section_callback' ), 
			'pluginPage'
		);

		add_settings_field( 
			'hrm_site_defaults_leadbox_src', 
			__( 'LeadBox src', 'hrm_leadpages_leadbox' ), 
			array( $this, 'Hrm_leadpages_leadbox_text_field_0_render' ), 
			'pluginPage', 
			'Hrm_leadpages_leadbox_pluginPage_section' 
		);


	}

	public function Hrm_leadpages_leadbox_text_field_0_render() { 

		$options = get_option( 'hrm_leadpages_leadbox_settings' );
		?>
		<input type='text' name='Hrm_leadpages_leadbox_settings[hrm_site_defaults_leadbox_src]' value='<?php echo $options['hrm_site_defaults_leadbox_src']; ?>'>
		<?php

	}


	public function Hrm_leadpages_leadbox_settings_section_callback() { 

		echo __( 'This is the src= bit from the LeadPages LeadBox code that will look like https://subdomain.leadpages.co/leadbox-992.js', 'hrm_leadpages_leadbox' );

	}

}