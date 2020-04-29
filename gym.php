<?php
/**
* Plugin Name: Gym - Alquiler de Salas
* Plugin URI:  https://www.quierohacertuweb.com/
* Description: Alquiler de salas de gimnasios para profesores.
* Version:     0.0.1
* Author:      QuieroHacerTuWeb
* Author URI:  https://www.quierohacertuweb.com/
* License:     GPL2
* Text Domain: gym
*
* @package Gym
*
*/
defined( 'ABSPATH' ) || exit;

// Include mfp-functions.php, use require_once to stop the script if mfp-functions.php is not found
require_once plugin_dir_path(__FILE__) . 'includes/functions.php';

define('GYM_PATH', plugin_dir_path(__FILE__));
define('GYM_NAME', ("Gym"));
 
/**
 * Activate the plugin.
 */
function gym_activate() { 
    // Trigger our function that registers the custom post type plugin.
    gym_register_custom_post_type(); 
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'gym_activate' );

/**
 * Deactivation hook.
 */
function gym_deactivate() {
    // Unregister the post type, so the rules are no longer in memory.
    unregister_post_type( 'gimnasio' );
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'gym_deactivate' );