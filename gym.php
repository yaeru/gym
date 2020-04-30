<?php
/**
* @package Gym
*/
/*
Plugin Name: Gym - Alquiler de Salas
Plugin URI:  https://www.quierohacertuweb.com/
Description: Alquiler de salas de gimnasios para profesores.
Version:     0.0.1
Author:      QuieroHacerTuWeb
Author URI:  https://www.quierohacertuweb.com/
License:     GPL2
Text Domain: gym
*/
defined( 'ABSPATH' ) or die('Hey, out!');

class GymPlugin
{

	public $plugin;

	function __construct() {
		$this->plugin = plugin_basename( __FILE__ );
		$this->create_post_type();
	}

	function register() {
		add_action( 'admin_enqueue_scripts', array ( $this, 'enqueue') );

		add_action( 'admin_menu', array( $this, 'add_admin_pages') );

		add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
	}

	public function settings_link( $links ) {
		$settings_link = '<a href="admin.php?page=gym_plugin">Setting</a>';
		array_push( $links, $settings_link );
		return $links;
	}

	public function add_admin_pages() {
		add_menu_page( 'Gym Plugin', 'Gym', 'manage_options', 'gym_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
	}

	public function admin_index() {
		// require template
		require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
	}

	function create_post_type() {
		add_action( 'init', array( $this, 'custom_post_type') );
	}

	/*function activate() {
		// generated a CPT
		$this->custom_post_type();
		// flush rewrite rules
		flush_rewrite_rules();
	}

	function deactivate() {
		// flush rewrite rules
		flush_rewrite_rules();
	}*/

	function custom_post_type() {
		register_post_type( 'book', ['public' => true, 'label' => 'Books']);
	}

	function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/style.css', __FILE__ ) );
		wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/script.js', __FILE__ ) );
	}
}

if ( class_exists( 'GymPlugin' ) ) {
	$gymPlugin = new GymPlugin();
	$gymPlugin->register();
}

// activation
require_once plugin_dir_path( __FILE__ ) . 'inc/gym-plugin-activate.php';
register_activation_hook( __FILE__, array( 'GymPluginActivate', 'activate') );

// deactivation
require_once plugin_dir_path( __FILE__ ) . 'inc/gym-plugin-deactivate.php';
register_deactivation_hook( __FILE__, array( 'GymPluginDeactivate', 'deactivate') );




/*
// Include mfp-functions.php, use require_once to stop the script if mfp-functions.php is not found
require_once plugin_dir_path(__FILE__) . 'includes/functions.php';

define('GYM_PATH', plugin_dir_path(__FILE__));
define('GYM_NAME', ("Gym"));
 
// Activate the plugin.
function gym_activate() { 
    // Trigger our function that registers the custom post type plugin.
    gym_register_custom_post_type(); 
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'gym_activate' );

// Deactivation hook.
function gym_deactivate() {
    // Unregister the post type, so the rules are no longer in memory.
    unregister_post_type( 'gimnasio' );
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'gym_deactivate' );

*/