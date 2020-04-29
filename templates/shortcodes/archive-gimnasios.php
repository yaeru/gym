<?php
// Shortcode Archive Gimnasios
function shortcode_loop_gimnasios() {
    $args = array(  
        'post_type' => 'gimnasio',
        'post_status' => 'publish',
        'posts_per_page' => 8,
        'orderby' => 'title',
        'order' => 'ASC',
    );

    $loop = new WP_Query( $args );
    $rst = '<div>';
    while ( $loop->have_posts() ) : $loop->the_post(); 
        $rst = $rst
        . '<article class="loop-gim">'
        . '<div class="avatar">'
        . do_shortcode( '[rwmb_meta id="single_image_48tqr05i1zf"]' )
        . '</div>'
        . '<div class="loop-content">'
        . '<h2>'. get_the_title(). '</h2>'
        . '<p>'. get_the_excerpt(). '</p>'
        . '<a href="'. get_permalink($post->ID) . '" class="button">' . 'Ver más' . '</a>'
        . '</div>'
        . '</article>';
    endwhile;
    return $rst . '</div>';

    wp_reset_postdata();
    
}
add_shortcode('archive-gimnasios', 'shortcode_loop_gimnasios');
