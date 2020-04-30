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

// call metabox values
$metas = get_post_meta($post->ID, '_gym', TRUE);

?>

<header class="entry-header <?php echo esc_attr( $entry_header_classes ); ?>">
	<div class="card-header section-inner gym-container">
		<div class="cover">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="data">
			<figure class="gym-logo">
				<?php if ($metas["item_logo"] != null ) { ?>
					<img src="<?php echo $metas["item_logo"] ?>">
				<?php }?>

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
					<?php if ($metas["item_facebook"] != null ) { ?>
						<li><a href="<?php echo $metas["item_facebook"] ?>" target="_blank">Facebook</a></li>
						<?php
					}
					if ($metas["item_instagram"] != null ) { ?>
						<li><a href="<?php echo $metas["item_instagram"] ?>" target="_blank">Instagram</a></li>
						<?php
					}
					if ($metas["item_twitter"] != null ) { ?>
						<li><a href="<?php echo $metas["item_twitter"] ?>" target="_blank">Twitter</a></li>
					<?php } ?>
				</ul>
			</nav>
		</div>
	</div>
</header>