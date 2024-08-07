<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://farhanali.me
 * @since             1.0.0
 * @package           Gpt_Blog_Generator
 *
 * @wordpress-plugin
 * Plugin Name:       GPT Blog Generator
 * Plugin URI:        https://farhanali.me/plugins/gpt-blog-generator
 * Description:       GPT Blog Generator automates content creation for your WordPress site using the GPT API. Schedule daily, weekly, or monthly posts on specified topics with customizable cron jobs. Each blog is complete with categories, tags, and featured images, all assigned by GPT. Perfect for maintaining a consistent, high-quality content stream effortlessly.
 * Version:           1.0.0
 * Author:            Farhan Ali
 * Author URI:        https://farhanali.me/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gpt-blog-generator
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
define( 'GPT_BLOG_GENERATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gpt-blog-generator-activator.php
 */
function activate_gpt_blog_generator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gpt-blog-generator-activator.php';
	Gpt_Blog_Generator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gpt-blog-generator-deactivator.php
 */
function deactivate_gpt_blog_generator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gpt-blog-generator-deactivator.php';
	Gpt_Blog_Generator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gpt_blog_generator' );
register_deactivation_hook( __FILE__, 'deactivate_gpt_blog_generator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gpt-blog-generator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gpt_blog_generator() {

	$plugin = new Gpt_Blog_Generator();
	$plugin->run();

}
run_gpt_blog_generator();
