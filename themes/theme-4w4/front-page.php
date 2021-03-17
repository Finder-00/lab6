<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<!-- Masquer l'affichague du mot 'Archive' -->
				<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="article-menu">
				<?php
				$precedent = "0";
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					//593-2j2 Aniamtion et interactivite jeux (75h)
					$titre_complet = get_the_title();
						// 1er nb = debut selection 2e nb = fin de la selection
					$session = substr($titre_complet, 4,1);
					$nbHeure = substr($titre_complet, -4, 3);
					$titre = substr($titre_complet, 8, -6);
					$sigle = substr($titre_complet, 0, 7);
					$typeCours = get_field('type_de_cours');

					if($precedent != $typeCours): ?>
						<?php if($precedent != "0"): ?>
							</section> <!--ici on ferme la section ouverte precedement -->
							<span></span> <!-- ligne separant les sections-->
						<?php endif; ?>
						<h1><?php echo $titre ?></h1>
						<section>
					<?php endif; ?>
					
					<article>
						<p><?php echo $sigle . " - " . $nbHeure. " - " . $typeCours; ?></p>
						<a href="<?php echo get_permalink(); ?>"> <?php echo $titre; ?></a>
						<p>Session : <?php echo $session; ?></p>
					</article>
				<?php 
				$precedent = $typeCours;
				endwhile;?>
			</section>
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
