<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php

	//get_template_part( 'template-parts/entry-header' );
	include 'entry-header.php';
	?>

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content gym-container">
			<div class="gym-main">
				<div class="gym-content">
					<h3 class="gym-h3">About</h3>
					<?php the_content(); ?>
				</div>
				<aside class="gym-info"><?php include 'gym-info.php'; ?></aside>
			</div>
		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="entry-content">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}
	
	?>

</article><!-- .post -->
