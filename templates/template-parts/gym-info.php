<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<?php
/*$metas = get_post_meta($post->ID, '_gym', TRUE);

echo "<ul>";
foreach ( $metas as $metakey => $value ) {
	echo "<li>". $metakey . $value . "</li>";
	//echo $metakey['name'];
}
echo '<li><a href="tel:'. $metas["item_3"] .'" target="_blank">Telefono '. $metas["item_3"] .'</a></li>';
echo "</ul>";
*/
?>
<h3 class="gym-h3">Contacto</h3>
<ul class="gym-info-ul">
	<li>🗺️ Direccion <?php echo $metas["address"]?></li>
	<li>📞 <a href="tel:'<?php $metas["phone"]?>" target="_blank"><?php echo $metas["phone"]?></a></li>
</ul>

<h3 class="gym-h3">Ciudad</h3>
<ul class="gym-info-ul"><?php echo get_the_term_list( $post->ID, 'ciudad', '<li class="city-item">', ', ', '</li>' ) ?></ul>

<h3 class="gym-h3">Actividades</h3>
<?php echo get_the_term_list( $post->ID, 'actividad', '<ul class="gym-info-ul"><li class="activity-item">', '</li><li>', '</li></ul>' ) ?>



