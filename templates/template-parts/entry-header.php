<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<header class="card-header <?php echo esc_attr( $entry_header_classes ); ?>">
	<div class="cover">
		<?php
		the_post_thumbnail();
		?>
	</div>
	<div class="data">
		<figure class="gym-logo">
			<?php echo do_shortcode( '[rwmb_meta id="single_image_48tqr05i1zf"]' ); ?>
		</figure>
		<?php
		if ( is_singular() ) {

			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		}

		$intro_text_width = '';

		if ( is_singular() ) {
			$intro_text_width = ' small';
		} else {
			$intro_text_width = ' thin';
		}

		if ( has_excerpt() && is_singular() ) {
			?>

			<div class="intro-text section-inner max-percentage<?php echo $intro_text_width; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
				<?php the_excerpt(); ?>
			</div>

			<?php
		}
		?>
		<nav>
			<ul>
				<li>Facebook</li>
				<li>Facebook</li>
				<li>Facebook</li>
			</ul>
		</nav>
	</div>
</header>