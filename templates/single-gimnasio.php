<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gym
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">
	<div class="container">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
			include 'template-parts/content.php';
		}
	}

	?>
	</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php

get_footer();