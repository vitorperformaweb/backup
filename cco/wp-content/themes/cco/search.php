<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package CCO
 */

get_header(); ?>

	
		<div class="cabecalho" style="background-image: url('<?php the_field('titulo_background_imagem',132); ?>')">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-title"><?php printf( esc_html__( 'Resultados para: %s', 'cco' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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