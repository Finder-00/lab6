<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

	global $tPropriete;
?>

<!-- ne recois pas les valeur de tPropriete -->
<article class="slide_conteneur">
		<div class="slide">
		<?php the_post_thumbnail( 'thumbnail') ?>
			<div class="slide_info">
				<p> <?php echo $tPropriete['sigle'] . " - " . $tPropriete['nbHeure'] . " - " . $tPropriete['typeCours']; ?></p>
				<a href="<?php echo get_permalink(); ?>"> <?php echo $tPropriete['titre']; ?></a>
				<p>Session : <?php echo $tPropriete['session'];?></p>
			</div>
		</div>
</article>