<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

?>

<article>
	<?php add_theme_support( 'post-thumbnails' ); ?>
	<?php echo type_vague($tPropriete['$typeCours']) ?>
	<p> <?php echo $tPropriete['$sigle'] . " - " . $tPropriete['$nbHeure'] . " - " . $tPropriete['$typeCours']; ?></p> <!-- 4w4 -  75h - web --> 
	<a href="<?php echo get_permalink(); ?>"> <?php echo $tPropriete['$titre']; ?></a>
	<p>Session : <?php echo $tPropriete['$session'];?></p>
</article>

<article class="slide_conteneur">
		<div class="slide">
			<img src="" alt="">
			<div class="slide_info">
				<p> 454-4w4 - 90h - Web</p>
				<a href=""></a>
				<p>Session 4</p>
			</div>
		</div>
	</article>