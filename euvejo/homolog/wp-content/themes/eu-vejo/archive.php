<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EuVejo
 */

get_header(); ?>
<?php if (z_taxonomy_image_url() != "") { ?>
	<div class="parallax-window">
		<div class="container" style="position: relative; z-index: 2;">
			<div class="row">
				<div class="col-md-12">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
					?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('.parallax-window').parallax({imageSrc: '<?php  echo z_taxonomy_image_url(); ?>'});
	</script>
<?php  } else { ?>
	<div class="parallax-window" >
		<div class="container" style="position: relative; z-index: 2;">
			<div class="row">
				<div class="col-md-12">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						
					?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('.parallax-window').parallax({imageSrc: '<?php the_field("imagem",1730); ?>'});
	</script>
<?php } ?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) :


					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'resumo' );

					endwhile;

					wp_pagenavi();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
