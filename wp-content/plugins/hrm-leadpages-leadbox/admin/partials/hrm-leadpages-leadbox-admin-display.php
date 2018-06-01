<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://henryreith.co/
 * @since      1.0.0
 *
 * @package    Hrm_Leadpages_Leadbox
 * @subpackage Hrm_Leadpages_Leadbox/admin/partials
 */

/* This file should primarily consist of HTML with a little bit of PHP. */
?>
        <div id="leadbox-shortcode-settings" class="wrap">
		
			<h2>Leadpages Leadbox Options</h2>
			<div id="poststuff">
				<div id="post-body" class="metabox-holder columns-2">
					<div id="post-body-content">
						<form action='options.php' method='post'>
				
							<?php
							// This prints out all hidden setting fields
							settings_fields( 'pluginPage' );
							do_settings_sections( 'pluginPage' );
							submit_button();
							?>
							
						</form>
					</div>
					<div id="postbox-container-1" class="postbox-container">
						<h2>How To Guide</h2>
						<p>For an indepth guide on how this plugin works and all of the shortcode options please visit the <a href="https://henryreith.co/leadbox-plugin/" target="_blank" title="Full Guide">original blog post here.</a></p>
						<h2>Updates</h2>
						<p>This plugin will be regularly updated. These updates will be sent out via email. To receive updates with new features and big fixes you must be on the <a href="https://henryreith.co/leadbox-shortcode-notifcation-list/" target="_blank" title="Click to Receive Plugin Updates">LeadBoxes ShortCode Notification List.</a></p>
						<h2>Feature Requests</h2>
						<p>If you have any feature requests or ideas how i can make this better for you please jump over to the <a href="https://henryreith.co/leadbox-plugin/" target="_blank" title="Full Guide">original blog post here</a> and add it in the comments.</p>
						<h2>Support</h2>
						<p>If you find a bug or have a question please jump over to the <a href="https://henryreith.co/leadbox-plugin/" target="_blank" title="Full Guide">original blog post here</a> and add it in the comments.</p>
						<h2>Free Training</h2>
						<p>
							<a href="https://henryreith.co/leadbox-shortcode-plugin-cta/" taregt="_blank">
								<img src="https://henryreith.co/leadbox-shortcode-plugin-cta-image/" width="100%">
								<br>
								View Free Training
							</a>
						</p>
					</div>
				</div>

			</div>
			<style type="text/css">
				#poststuff .stuffbox>h3, #poststuff h2, #poststuff h3.hndle{
					padding-left: 0 !important;
				}
				#postbox-container-1 h2 {
					padding-bottom: 0;
				}
			</style>
		</div>