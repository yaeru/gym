<?php

/**
 *
 * Trigger this file on Plugin Uninstall
 *
 * @package Gym
 */

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// Access the Database via SQL
global $wpdb;
$wpdb->querry( "DELETE FROM wp_posts WHERE post_type = 'book'" );
$wpdb->querry( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)" );
$wpdb->querry( "DELETE FROM wp_term_relationships WHERE objet_id NOT IN (SELECT id FROM wp_posts)" );