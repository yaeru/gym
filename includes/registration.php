<?php
/**
 * Registro de los Custom post Type, Taxonomies y Metabox
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

// CPT
function gym_register_custom_post_type() {
    $args = array (
        'label' => esc_html__( 'Gimnasios', 'gym' ),
        'labels' => array(
            'menu_name' => esc_html__( 'Gimnasios', 'gym' ),
            'name_admin_bar' => esc_html__( 'Gimnasio', 'gym' ),
            'add_new' => esc_html__( 'Add new', 'gym' ),
            'add_new_item' => esc_html__( 'Add new Gimnasio', 'gym' ),
            'new_item' => esc_html__( 'New Gimnasio', 'gym' ),
            'edit_item' => esc_html__( 'Edit Gimnasio', 'gym' ),
            'view_item' => esc_html__( 'View Gimnasio', 'gym' ),
            'update_item' => esc_html__( 'Update Gimnasio', 'gym' ),
            'all_items' => esc_html__( 'All Gimnasios', 'gym' ),
            'search_items' => esc_html__( 'Search Gimnasios', 'gym' ),
            'parent_item_colon' => esc_html__( 'Parent Gimnasio', 'gym' ),
            'not_found' => esc_html__( 'No Gimnasios found', 'gym' ),
            'not_found_in_trash' => esc_html__( 'No Gimnasios found in Trash', 'gym' ),
            'name' => esc_html__( 'Gimnasios', 'gym' ),
            'singular_name' => esc_html__( 'Gimnasio', 'gym' ),
        ),
        'public' => true,
        'description' => 'Gimnasios de Argentina',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-store',
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite_no_front' => false,
        'menu_position' => 100,
        'show_in_menu' => false,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'page-attributes',
        ),
        'rewrite' => true,
    );
    register_post_type( 'gimnasio', $args );
}
add_action( 'init', 'gym_register_custom_post_type' );

// TAX
function create_gym_taxonomies() {
    $args = array (
        'label' => esc_html__( 'Ciudades', 'gym' ),
        'labels' => array(
            'menu_name' => esc_html__( 'Ciudades', 'gym' ),
            'all_items' => esc_html__( 'All Ciudades', 'gym' ),
            'edit_item' => esc_html__( 'Edit Ciudad', 'gym' ),
            'view_item' => esc_html__( 'View Ciudad', 'gym' ),
            'update_item' => esc_html__( 'Update Ciudad', 'gym' ),
            'add_new_item' => esc_html__( 'Add new Ciudad', 'gym' ),
            'new_item_name' => esc_html__( 'New Ciudad', 'gym' ),
            'parent_item' => esc_html__( 'Parent Ciudad', 'gym' ),
            'parent_item_colon' => esc_html__( 'Parent Ciudad:', 'gym' ),
            'search_items' => esc_html__( 'Search Ciudades', 'gym' ),
            'popular_items' => esc_html__( 'Popular Ciudades', 'gym' ),
            'separate_items_with_commas' => esc_html__( 'Separate Ciudades with commas', 'gym' ),
            'add_or_remove_items' => esc_html__( 'Add or remove Ciudades', 'gym' ),
            'choose_from_most_used' => esc_html__( 'Choose most used Ciudades', 'gym' ),
            'not_found' => esc_html__( 'No Ciudades found', 'gym' ),
            'name' => esc_html__( 'Ciudades', 'gym' ),
            'singular_name' => esc_html__( 'Ciudad', 'gym' ),
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => false,
        'show_in_rest' => true,
        'hierarchical' => true,
        'query_var' => true,
        'sort' => true,
        'rewrite_no_front' => false,
        'rewrite_hierarchical' => false,
        'rewrite' => true,
    );
    register_taxonomy( 'ciudad', array( 'gimnasio' ), $args );

    $args = array (
        'label' => esc_html__( 'Actividades', 'gym' ),
        'labels' => array(
            'menu_name' => esc_html__( 'Actividades', 'gym' ),
            'all_items' => esc_html__( 'All Actividades', 'gym' ),
            'edit_item' => esc_html__( 'Edit Actividad', 'gym' ),
            'view_item' => esc_html__( 'View Actividad', 'gym' ),
            'update_item' => esc_html__( 'Update Actividad', 'gym' ),
            'add_new_item' => esc_html__( 'Add new Actividad', 'gym' ),
            'new_item_name' => esc_html__( 'New Actividad', 'gym' ),
            'parent_item' => esc_html__( 'Parent Actividad', 'gym' ),
            'parent_item_colon' => esc_html__( 'Parent Actividad:', 'gym' ),
            'search_items' => esc_html__( 'Search Actividades', 'gym' ),
            'popular_items' => esc_html__( 'Popular Actividades', 'gym' ),
            'separate_items_with_commas' => esc_html__( 'Separate Actividades with commas', 'gym' ),
            'add_or_remove_items' => esc_html__( 'Add or remove Actividades', 'gym' ),
            'choose_from_most_used' => esc_html__( 'Choose most used Actividades', 'gym' ),
            'not_found' => esc_html__( 'No Actividades found', 'gym' ),
            'name' => esc_html__( 'Actividades', 'gym' ),
            'singular_name' => esc_html__( 'Actividad', 'gym' ),
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => false,
        'show_in_rest' => true,
        'hierarchical' => true,
        'query_var' => true,
        'sort' => false,
        'rewrite_no_front' => false,
        'rewrite_hierarchical' => false,
        'rewrite' => true,
    );
    register_taxonomy( 'actividad', array( 'gimnasio' ), $args );
}
add_action( 'init', 'create_gym_taxonomies', 0 );



/**
 * Create the metabox
 * @link https://developer.wordpress.org/reference/functions/add_meta_box/
 */
function _gym_create_metabox() {
    // Can only be used on a single post type (ie. page or post or a custom post type).
    // Must be repeated for each post type you want the metabox to appear on.
    add_meta_box(
        '_gym_metabox', // Metabox ID
        'Detalles', // Title to display
        '_gym_render_metabox', // Function to call that contains the metabox content
        'gimnasio', // Post type to display metabox on
        'normal', // Where to put it (normal = main colum, side = sidebar, etc.)
        'default' // Priority relative to other metaboxes
    );
}
add_action( 'add_meta_boxes', '_gym_create_metabox' );



/**
 * Create the metabox default values
 * This allows us to save multiple values in an array, reducing the size of our database.
 * Setting defaults helps avoid "array key doesn't exit" issues.
 * @todo
 */
function _gym_metabox_defaults() {
    return array(
        'item_name' => '', /* Name */
        'item_logo' => '', /* Logo */
        'item_phone' => '', /* Phone */
        'item_facebook' => '', /* Facebook */
        'item_instagram' => '', /* Instagram */
        'item_twitter' => '', /* Twitter */
    );
}

/**
 * Render the metabox markup
 * This is the function called in `_gym_create_metabox()`
 */
function _gym_render_metabox() {

    // Variables
    global $post; // Get the current post data
    $saved = get_post_meta( $post->ID, '_gym', true ); // Get the saved values
    $defaults = _gym_metabox_defaults(); // Get the default values
    $details = wp_parse_args( $saved, $defaults ); // Merge the two in case any fields don't exist in the saved data

    ?>

    <fieldset>

        <!-- Name -->
        <div class="rwmb-field rwmb-url-wrapper">
            <div class="rwmb-label">
                <label for="_gym_custom_metabox_item_address">
                    <?php
                                // This runs the text through a translation and echoes it (for internationalization)
                    _e( 'Dirección', '_gym' );

                    ?>
                </label>
            </div>
            <?php
                        // It's important that the `name` is an array. This let's us
                        // easily loop through all fields later when we go to save
                        // our submitted data.
                        //
                        // The `esc_attr()` function here escapes the data for
                        // HTML attribute use to avoid unexpected issues
            ?>
            <div class="rwmb-input">
                <input
                type="text" name="_gym_custom_metabox[item_address]" id="_gym_custom_metabox_item_address" value="<?php echo esc_attr( $details['item_address'] ); ?>">
            </div>
        </div>


        <!-- Logo -->        
        <div class="rwmb-field rwmb-url-wrapper">
            <div class="rwmb-label">
                <!--<label for="_gym"><?php _e( 'Field Label', 'events' )?></label><br>-->
                <label for="_gym_custom_metabox_item_logo">
                    <?php
                                // This runs the text through a translation and echoes it (for internationalization)
                    _e( 'Logo', '_gym' );

                    ?>
                </label>
            </div>

            <div class="rwmb-input">
                <div class="rwmb-media-view">

                    <br>

                    <?php 
                    /**
                     * The button that opens our media uploader
                     * The `data-media-uploader-target` value should match the ID/unique selector of your field.
                     * We'll use this value to dynamically inject the file URL of our uploaded media asset into your field once successful (in the myplugin-media.js file)
                     */ 
                    ?>
                    <button type="button" class="button" id="events_video_upload_btn" data-media-uploader-target="#_gym_custom_metabox_item_logo"><?php _e( 'Upload Media', 'gym' )?></button>

                    <ul class="rwmb-media-list ui-sortable">
                        <li class="rwmb-image-item attachment thumbnail">
                            <input type="url" class="sr-only" name="_gym_custom_metabox[item_logo]" id="_gym_custom_metabox_item_logo" value="<?php echo esc_attr( $details['item_logo'] ); ?>">
                            <div class="attachment-preview">
                                <div class="thumbnail">
                                    <div class="centered">
                                        <img src="<?php echo esc_attr( $details['item_logo'] ); ?>" class="item-logo">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Phone -->
        <div class="rwmb-field rwmb-url-wrapper">
            <div class="rwmb-label">
                <label for="_gym_custom_metabox_item_phone">
                    <?php _e( 'Teléfono', '_gym' ); ?>
                </label>
            </div>
            <div class="rwmb-input">
                <input type="number" name="_gym_custom_metabox[item_phone]" id="_gym_custom_metabox_item_phone" value="<?php echo esc_attr( $details['item_phone'] ); ?>">
            </div>
        </div>


        <div class="rwmb-field rwmb-heading-wrapper">
            <h4 id="heading_qxvrmogagor">Redes Sociales</h4>
        </div>

        <!-- Facebook -->
        <div class="rwmb-field rwmb-url-wrapper">
            <div class="rwmb-label">
                <label for="_gym_custom_metabox_item_4">
                    <?php _e( 'Facebook', '_gym' ); ?>
                </label>
            </div>
            <div class="rwmb-input">
                <input type="url" name="_gym_custom_metabox[item_facebook]" id="_gym_custom_metabox_item_facebook" value="<?php echo esc_url( $details['item_facebook'] ); ?>" placeholder="https://facebook.com">
            </div>
        </div>

        <!-- Instagram -->
        <div class="rwmb-field rwmb-url-wrapper">
            <div class="rwmb-label">
                <label for="_gym_custom_metabox_item_instagram">
                    <?php _e( 'Instagram', '_gym' ); ?>
                </label>
            </div>
            <div class="rwmb-input">
                <input type="url" name="_gym_custom_metabox[item_instagram]" id="_gym_custom_metabox_item_instagram" value="<?php echo esc_url( $details['item_instagram'] ); ?>">
            </div>
        </div>

        <!-- Twitter -->
        <div class="rwmb-field rwmb-url-wrapper">
            <div class="rwmb-label">
                <label for="_gym_custom_metabox_item_twitter">
                    <?php _e( 'Twitter', '_gym' ); ?>
                </label>
            </div>
            <div class="rwmb-input">
                <input type="url" name="_gym_custom_metabox[item_twitter]" id="_gym_custom_metabox_item_twitter" value="<?php echo esc_url( $details['item_twitter'] ); ?>">
            </div>
        </div>

    </fieldset>

    <?php

    // Security field
    // This validates that submission came from the
    // actual dashboard and not the front end or
    // a remote server.
    wp_nonce_field( '_gym_form_metabox_nonce', '_gym_form_metabox_process' );

}


//
// Save our data
//

/**
 * Save the metabox
 * @param  Number $post_id The post ID
 * @param  Array  $post    The post data
 */
function _gym_save_metabox( $post_id, $post ) {

    // Verify that our security field exists. If not, bail.
    if ( !isset( $_POST['_gym_form_metabox_process'] ) ) return;

        // Verify data came from edit/dashboard screen
    if ( !wp_verify_nonce( $_POST['_gym_form_metabox_process'], '_gym_form_metabox_nonce' ) ) {
        return $post->ID;
    }

    // Verify user has permission to edit post
    if ( !current_user_can( 'edit_post', $post->ID )) {
        return $post->ID;
    }

    // Check that our custom fields are being passed along
    // This is the `name` value array. We can grab all
    // of the fields and their values at once.
    if ( !isset( $_POST['_gym_custom_metabox'] ) ) {
        return $post->ID;
    }

    /**
         * Sanitize all data
         * This keeps malicious code out of our database.
         */

    // Set up an empty array
    $sanitized = array();

    // Loop through each of our fields
    foreach ( $_POST['_gym_custom_metabox'] as $key => $detail ) {
        // Sanitize the data and push it to our new array
        // `wp_filter_post_kses` strips our dangerous server values
        // and allows through anything you can include a post.
        $sanitized[$key] = wp_filter_post_kses( $detail );
    }

    // Save our submissions to the database
    update_post_meta( $post->ID, '_gym', $sanitized );

}
add_action( 'save_post', '_gym_save_metabox', 1, 2 );



//
// Save a copy to our revision history
// This is optional, and potentially undesireable for certain data types.
// Restoring a a post to an old version will also update the metabox.

/**
 * Save events data to revisions
 * @param  Number $post_id The post ID
 */
function _gym_save_revisions( $post_id ) {

    // Check if it's a revision
    $parent_id = wp_is_post_revision( $post_id );

    // If is revision
    if ( $parent_id ) {

        // Get the saved data
        $parent = get_post( $parent_id );
        $details = get_post_meta( $parent->ID, '_gym', true );

        // If data exists and is an array, add to revision
        if ( !empty( $details ) && is_array( $details ) ) {
            // Get the defaults
            $defaults = _gym_metabox_defaults();

            // For each default item
            foreach ( $defaults as $key => $value ) {
                // If there's a saved value for the field, save it to the version history
                if ( array_key_exists( $key, $details ) ) {
                    add_metadata( 'post', $post_id, '_gym_' . $key, $details[$key] );
                }
            }
        }

    }

}
add_action( 'save_post', '_gym_save_revisions' );



/**
 * Restore events data with post revisions
 * @param  Number $post_id     The post ID
 * @param  Number $revision_id The revision ID
 */
function _gym_restore_revisions( $post_id, $revision_id ) {

    // Variables
    $post = get_post( $post_id ); // The post
    $revision = get_post( $revision_id ); // The revision
    $defaults = _gym_metabox_defaults(); // The default values
    $details = array(); // An empty array for our new metadata values

    // Update content
    // For each field
    foreach ( $defaults as $key => $value ) {

        // Get the revision history version
        $detail_revision = get_metadata( 'post', $revision->ID, '_gym_' . $key, true );

        // If a historic version exists, add it to our new data
        if ( isset( $detail_revision ) ) {
            $details[$key] = $detail_revision;
        }
    }

    // Replace our saved data with the old version
    update_post_meta( $post_id, '_gym', $details );

}
add_action( 'wp_restore_post_revision', '_gym_restore_revisions', 10, 2 );



/**
 * Get the data to display on the revisions page
 * @param  Array $fields The fields
 * @return Array The fields
 */
function _gym_get_revisions_fields( $fields ) {

    // Get our default values
    $defaults = _gym_metabox_defaults();

    // For each field, use the key as the title
    foreach ( $defaults as $key => $value ) {
        $fields['_gym_' . $key] = ucfirst( $key );
    }

    return $fields;

}
add_filter( '_wp_post_revision_fields', '_gym_get_revisions_fields' );



/**
 * Display the data on the revisions page
 * @param  String|Array $value The field value
 * @param  Array        $field The field
 */
function _gym_display_revisions_fields( $value, $field ) {
    global $revision;
    return get_metadata( 'post', $revision->ID, $field, true );
}
add_filter( '_wp_post_revision_field_my_meta', '_gym_display_revisions_fields', 10, 2 );



/**
 * Load the media uploader and our custom myplugin-media.js file
 * Change `myplugin_custom_post_type` to whatever the post type for your metabox is
 * You may also need to change the `plugins_url()` path to match your plugin folder structure (currently assumes flat with no subfolders)
 */
function myplugin_load_admin_scripts( $hook ) {
    global $typenow;
    if( $typenow == 'gimnasio' ) {
        wp_enqueue_media();

        // Registers and enqueues the required javascript.
        //wp_register_script( 'meta-box-image', plugins_url( 'gym/includes/gym-media.js' , __FILE__ ), array( 'jquery' ) );

        wp_register_script('meta-box-image', plugins_url().'/gym/includes/gym-media.js', array( 'jquery' ) );

        wp_localize_script( 'meta-box-image', 'meta_image',
            array(
                'title' => __( 'Choose or Upload Media', 'events' ),
                'button' => __( 'Use this media', 'events' ),
            )
        );
        wp_enqueue_script( 'meta-box-image' );
    }
}
add_action( 'admin_enqueue_scripts', 'myplugin_load_admin_scripts', 10, 1 );





//////////////////////////////////////


/*add_action( 'add_meta_boxes', 'yael_metabox' );  
function yael_metabox()  
{  
    add_meta_box( 'detalles-2', 'Detalles 2', 'yael_meta_box_cb', 'gimnasio', 'normal', 'high' );
}
function yael_meta_box_cb( $post )  
{
}


// Metabox
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = array (
        'title' => esc_html__( 'Detalles', 'gym' ),
        'id' => 'detalles',
        'post_types' => array(
            0 => 'gimnasio',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'autosave' => true,
        'fields' => array(
            array (
                'id' => $prefix . 'single_image_48tqr05i1zf',
                'type' => 'single_image',
                'name' => esc_html__( 'Logo', 'gym' ),
            ),
            array (
                'id' => $prefix . 'text_aksw80fq83r',
                'type' => 'text',
                'name' => esc_html__( 'Teléfono', 'gym' ),
                'clone' => 1,
                'max_clone' => 5,
                'add_button' => esc_html__( 'Agregar otro teléfono', 'gym' ),
            ),
            array (
                'id' => $prefix . 'osm_vyrbqiptf2j',
                'type' => 'osm',
                'name' => esc_html__( 'Ubicación', 'gym' ),
                'std' => 'La plata',
                'desc' => esc_html__( 'Donde esta', 'gym' ),
                'language' => 'es',
                'address_field' => 'osm_vyrbqiptf2j',
                'region' => 'Ar',
            ),
            array (
                'id' => $prefix . 'heading_qxvrmogagor',
                'type' => 'heading',
                'name' => esc_html__( 'Redes Sociales', 'gym' ),
            ),
            array (
                'id' => $prefix . 'url_pq2xk2yfxj',
                'type' => 'url',
                'name' => esc_html__( 'Facebook', 'gym' ),
            ),
            array (
                'id' => $prefix . 'url_92mhmbidg3u',
                'type' => 'url',
                'name' => esc_html__( 'Instagram', 'gym' ),
            ),
            array (
                'id' => $prefix . 'url_g3ig6y6t5jd',
                'type' => 'url',
                'name' => esc_html__( 'Twitter', 'gym' ),
            ),
        ),
        'text_domain' => 'gym',
    );

    return $meta_boxes;
}
*/