<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CCO
 */

get_header(); ?>

	
		<div class="cabecalho" style="background-image: url('<?php the_field('titulo_background_imagem',132); ?>')">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>BLOG</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
							<div class="row">
								<div class="col-md-5">
									<div class="imagem-destacada" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>')">
									</div>
								</div>
								<div class="col-md-7">
									<div class="post-titulo">
										<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
									</div>
									<div class="post-info">
										<?php cco_posted_on(); ?>
									</div>
									<div class="entry-content">
										<?php
											$content = get_the_content();
											echo substr($content, 0, 400);
										?>
									</div>
								</div>
							</div>
						</article>
					<?php 

						endwhile;


					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
				<div class="col-md-offset-1 col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
		

<?php
get_footer();
