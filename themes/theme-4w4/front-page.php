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
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="article-menu">
				<?php
				$precedent = "0";
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					//593-2j2 Aniamtion et interactivite jeux (75h)
					$titre_grand = get_the_title();
					$session = substr($titre_grand, 4,1);
								// 1er nb = debut selection 2e nb = fin de la selection
					$nbHeure = substr($titre_grand, -4, 3);
					$titre = substr($titre_grand, 8, -6);
					$sigle = substr($titre_grand, 0, 7);
					$typeCours = get_field('type_de_cours');

					if($precedent != $typeCours): ?>
						<?php if($precedent != "0"): ?>
							</section> <!--ici on ferme la section ouverte precedement -->
						<?php endif; ?>
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
