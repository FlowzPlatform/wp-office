<?php
// Enable shortcodes in widgets
// add_filter('widget_text', 'do_shortcode');

/**
* hrm_leadbox_shortcode
*/
class hrm_leadbox_shortcode{

    /**
     * $shortcode_tag
     * holds the name of the shortcode tag
     * @var string
     */
    public $shortcode_tag = 'hrm_optin_2_step';
 
    /**
     * __construct
     * class constructor will set the needed filter and action hooks
     *
     * @param array $args
     */
    function __construct($args = array()){
	    //add shortcode
	    add_shortcode( $this->shortcode_tag, array( $this, 'shortcode_handler' ) );
	 
	    if ( is_admin() ){
	        add_action('admin_head', array( $this, 'admin_head') );
	        add_action( 'admin_enqueue_scripts', array($this , 'admin_enqueue_scripts' ) );
	    }
	}
 
    /**
     * shortcode_handler
     * @param  array  $atts shortcode attributes
     * @param  string $content shortcode content
     * @return string
     */
    function shortcode_handler( $atts, $content = null ) {
		$hrm_leadbox_settings = get_option( 'hrm_leadpages_leadbox_settings' );
		$hrm_options_leadbox_src = $hrm_leadbox_settings['hrm_site_defaults_leadbox_src'];
		extract(shortcode_atts(array(
	        "href" => '',
	        "type"	=> '',
	        "color"		=> '',
	        "class"		=> '',
	        "leadbox_data_config"	=> '%7B%7D',
	        "leadbox_src"	=> $hrm_options_leadbox_src,
	    ), $atts));
	    $entities = array('%3A');
	    $replacements = array(":");
	    $finalurl = str_replace($entities, $replacements, $href);
	    preg_match("/(?<=leadbox\/)(.*)(?=\/\d)/", $finalurl, $dataleadboxid);
	    if ( $type == 'callout' ) {
	    	if ( $color == 'blue' ) {
	    		return '<a href="'. esc_url( $href ) .'" target="_blank" class="hrm-callout hrm-callout-blue' . $class . '">' . do_shortcode($content) . '</a><script async data-leadbox="' . $dataleadboxid[1] . '" data-url="' . esc_url( $href ) .'" data-config="' . $leadbox_data_config . '" type="text/javascript" src="' . esc_url( $leadbox_src ) . '"></script>';
	    	}
	    	elseif ( $color == 'green' ){
	    		return '<a href="'. esc_url( $href ) .'" target="_blank" class="hrm-callout hrm-callout-green ' . $class . '">' . do_shortcode($content) . '</a><script async data-leadbox="' . $dataleadboxid[1] . '" data-url="' . esc_url( $href ) .'" data-config="' . $leadbox_data_config . '" type="text/javascript" src="' . esc_url( $leadbox_src ) . '"></script>';
	    	}
	    	else {
	    		return '<a href="'. esc_url( $href ) .'" target="_blank" class="hrm-callout ' . $class . '">' . do_shortcode($content) . '</a><script async data-leadbox="' . $dataleadboxid[1] . '" data-url="' . esc_url( $href ) .'" data-config="' . $leadbox_data_config . '" type="text/javascript" src="' . esc_url( $leadbox_src ) . '"></script>';
			}
	    } /* elseif ( $type == 'solidbanner' ) {
	    	return '<a href="'. esc_url( $href ) .'" target="_blank" class="hrm-cta-solidbanner' . $class . '"><div class="hrm-cta-solidbanner-inner">' . do_shortcode($content) . '</div><div class="hrm-cta-solidbanner-inner hrm-cta-solidbanner-sym transition-default"><i class="fa fa-download"></i></div></a><script async data-leadbox="' . $dataleadboxid[1] . '" data-url="' . esc_url( $href ) .'" data-config="' . $leadbox_data_config . '" type="text/javascript" src="' . esc_url( $leadbox_src ) . '"></script>';
	    } */ else {
	    	return '<a href="'. esc_url( $href ) .'" target="_blank" class="' . $class . '">' . do_shortcode($content) . '</a><script async data-leadbox="' . $dataleadboxid[1] . '" data-url="' . esc_url( $href ) .'" data-config="' . $leadbox_data_config . '" type="text/javascript" src="' . esc_url( $leadbox_src ) . '"></script>';
	    }

	}
 
    /**
     * admin_head
     * calls your functions into the correct filters
     * @return [type] [description]
     */
    function admin_head() {
	    // check user permissions
	    if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
	        return;
	    }
	 
	    // check if WYSIWYG is enabled
	    if ( 'true' == get_user_option( 'rich_editing' ) ) {
	        add_filter( 'mce_external_plugins', array( $this ,'mce_external_plugins' ) );
	        add_filter( 'mce_buttons', array($this, 'mce_buttons' ) );
	    }
	}
 
    /**
     * mce_external_plugins
     * Adds our tinymce plugin
     * @param  array $plugin_array
     * @return array
     */
    function mce_external_plugins( $plugin_array ) {
	    // $plugin_array[$this->shortcode_tag] = plugins_url( 'admin/js/hrm-mce-button.js' , __FILE__ );
	    $plugin_array[$this->shortcode_tag] = plugin_dir_url( dirname( __FILE__ ) ) . 'admin/js/hrm-mce-button.js';
	    return $plugin_array;
	}
 
    /**
     * mce_buttons
     * Adds our tinymce button
     * @param  array $buttons
     * @return array
     */
    function mce_buttons( $buttons ) {
	    array_push( $buttons, $this->shortcode_tag );
	    return $buttons;
	}
 
    /**
     * admin_enqueue_scripts
     * Used to enqueue custom styles
     * @return void
     */
    function admin_enqueue_scripts(){
	     // wp_enqueue_style('hrm_optin_2_step_shortcode', plugins_url( 'css/mce-button.css' , __FILE__ ) );
	}
}//end class

new hrm_leadbox_shortcode();