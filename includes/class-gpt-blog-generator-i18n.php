<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://farhanali.me
 * @since      1.0.0
 *
 * @package    Gpt_Blog_Generator
 * @subpackage Gpt_Blog_Generator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Gpt_Blog_Generator
 * @subpackage Gpt_Blog_Generator/includes
 * @author     Farhan Ali <farhan.logicware@gmail.com>
 */
class Gpt_Blog_Generator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gpt-blog-generator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
