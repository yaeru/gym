<?php
/**
 * Template loader
 *
 * @param string $template The template that is called.
 * 
 * @return string Template, that is thrown per modification.
 */
function wpse352898_template_loader( $template ) {
    $find = array();
    $file = '';
    if ( is_single() && 'gimnasio' === get_post_type() ) {
        // Singular template for CPT 'gimnasio' in a theme.
        $file   = 'single-gimnasio.php';
        $find[] = $file;
        // Directory in a theme, where user can define their custom template to override plugin imposed template.
        $find[] = 'gym-templates/' . $file;
    }
    if ( $file ) {
        $template = locate_template( array_unique( $find ) );
        if ( ! $template ) {
            // Load template file from the plugin under this directory.
            $template = untrailingslashit( plugin_dir_path( __DIR__ ) ) . '/templates/' . $file;
        }
    }
    return $template;
}

add_filter( 'template_include', 'wpse352898_template_loader' );