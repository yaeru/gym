<?php
/**
 * Registration of parts
 */
include plugin_dir_path(__FILE__) . '/registration.php';
/**
 * Load the templates
 */
include plugin_dir_path(__FILE__) . '/template-functions.php';

/**
 * Load the Shortcodes
 */
include plugin_dir_path(__FILE__) . '/shortcodes.php';

/**
 * Load the Widgets
 */
include plugin_dir_path(__FILE__) . '/widgets.php';

/**
 * Add the css
 */
// Update CSS public
wp_enqueue_style( 'gym', plugins_url() . '/gym/public/css/gym-view.css');
// Update CSS within in Admin
wp_enqueue_style('admin-styles', plugins_url().'/gym/admin/css/gym-admin.css');

/**
 * Add my new menu to the Admin Control Panel
 */
// Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'
add_action( 'admin_menu', 'gym_admin_link', 11 );

// Add a new top level menu link to the ACP
function gym_admin_link() {
  add_menu_page(
    GYM_NAME, // Title of the page
    GYM_NAME, // Text to show on the menu link
    'manage_options', // Capability requirement to see the link
    GYM_PATH . '/includes/dashboard.php', // The 'slug' - file to display when clicking the link
    '',
    'dashicons-store',
    
  );
  
  
  add_submenu_page(
    GYM_PATH . '/includes/dashboard.php', 'Gimnasios', 'Gimnasios', 'edit_pages' , 'edit.php?post_type=gimnasio'
  );
  add_submenu_page(
    GYM_PATH . '/includes/dashboard.php', 'Nuevo Gimnasio', 'Nuevo Gimnasio', 'edit_pages' , 'post-new.php?post_type=gimnasio'
  );
  add_submenu_page(
    GYM_PATH . '/includes/dashboard.php', 'Ajustes', 'Ajustes', 'manage_options', GYM_PATH . '/includes/ajustes.php'
  );

}

// Function for Search
function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if($wp_query->is_search && $post_type == 'gimnasios' )
  {
    return (plugin_dir_path( __DIR__ ).'templates/archive-search.php');
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser'); 
