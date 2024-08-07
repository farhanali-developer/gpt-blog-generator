<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://farhanali.me
 * @since      1.0.0
 *
 * @package    Gpt_Blog_Generator
 * @subpackage Gpt_Blog_Generator/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Gpt_Blog_Generator
 * @subpackage Gpt_Blog_Generator/admin
 * @author     Farhan Ali <farhan.logicware@gmail.com>
 */
class Gpt_Blog_Generator_Admin {

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
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_action( 'admin_menu', array($this, 'my_menu_pages') );

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
		 * defined in Gpt_Blog_Generator_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gpt_Blog_Generator_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/gpt-blog-generator-admin.css', array(), $this->version, 'all' );

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
		 * defined in Gpt_Blog_Generator_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gpt_Blog_Generator_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/gpt-blog-generator-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Add plugin menu items
	 *
	 * @since    1.0.0
	 */
	public function my_menu_pages() {
		add_menu_page( 'GPT Blog Generator', 'GPT Blog Generator', 'manage_options', 'gpt-blog-generator', array($this, 'general_settings'), 'dashicons-tickets', 2 );
		add_submenu_page( 'gpt-blog-generator', 'General Settings', 'General', 'manage_options', 'gpt-blog-generator', array($this, 'general_settings') );
		add_submenu_page( 'gpt-blog-generator', 'Settings', 'Settings', 'manage_options', 'settings', array($this, 'settings') );
	}

	/**
	 * Output for the main menu page
	 *
	 * @since    1.0.0
	 */
	public function general_settings() {
		echo '<h1>GPT Blog Generator</h1>';
		// Add your output HTML here
	}

	/**
	 * Output for the submenu settings page
	 *
	 * @since    1.0.0
	 */
	public function settings() {
		echo '<h1>Settings</h1>';
		// Add your output HTML here
	}

}
