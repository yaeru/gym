<?php
/**
 * Registro de los Custom post Type, Taxonomies y Metabox
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Widget in dashboard
add_action('wp_dashboard_setup', 'new_gym_dashboard_widgets');

function new_gym_dashboard_widgets() {
	global $wp_meta_boxes;

	wp_add_dashboard_widget('custom_help_widget', 'Nuevo Gimnasio', 'new_gym_dashboard_help');
}

function new_gym_dashboard_help() {
	echo '<p>Welcome to Custom Blog Theme! Need help? Contact the developer <a href="mailto:yourusername@gmail.com">here</a>. For WordPress Tutorials visit: <a href="https://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';
}


// Recent post
function wps_recent_posts_dw() {
	?>
	<ul>
		<?php
		global $post;
		$args = array(
			'numberposts' => 5,
			'post_type'   => 'gimnasio',
		);
		
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) :  setup_postdata($post); ?>
			<li> (<? get_the_date(); ?> ) <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
	</ul>
	<?php
}

function add_wps_recent_posts_dw() {
	wp_add_dashboard_widget( 'wps_recent_posts_dw', __( 'Recent Gimnasios' ), 'wps_recent_posts_dw' );
}
add_action('wp_dashboard_setup', 'add_wps_recent_posts_dw' );


