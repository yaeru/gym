<?php
/**
 * Welcome section.
 *
 * @package Gym
 */

if (! current_user_can ('manage_options')) wp_die (__ ('No tienes suficientes permisos para acceder a esta página.'));
?>
<div class="wrap">
	<h1>Bienvenido a <?php _e( GYM_NAME, 'gym' ) ?></h1>
	<p>Descripcion del plugin</p>
	<p class="about-buttons">
		<a target="_blank" class="button" href="<?php echo esc_url( 'https://docs.metabox.io?utm_source=WordPress&utm_medium=link&utm_campaign=plugin' ); ?>"><?php esc_html_e( 'Documentation', 'meta-box' ); ?></a>
		<a target="_blank" class="button" href="<?php echo esc_url( 'https://metabox.io/plugins/?utm_source=WordPress&utm_medium=link&utm_campaign=plugin' ); ?>"><?php esc_html_e( 'Extensions', 'meta-box' ); ?></a>
		<a target="_blank" class="button" href="<?php echo esc_url( 'https://metabox.io/support/?utm_source=WordPress&utm_medium=link&utm_campaign=plugin' ); ?>"><?php esc_html_e( 'Support', 'meta-box' ); ?></a>
	</p>
</div>
<?php