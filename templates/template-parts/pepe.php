<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

$pepe_classes = '';

?>


<h1>FUNCIONA</h1>

<h3>meta</h3>

<?php
if ( get_post_meta( get_the_ID(), '_gym', true ) ) {
	$image_url = get_post_meta( get_the_ID(), '_gym', true );
}
else {
	$image_url = '';
}
?>