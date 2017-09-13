<?php
/**
 * The template for displaying archive pages
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
						<h1 class="page-title"><?php the_archive_title();?> </h1>
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
									<a href="<?php echo get_permalink(); ?>" class="imagem-destacada" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>')">
									</a>
								</div>
								<div class="col-md-7">
									<div class="post-titulo">
										<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
									</div>
									<div class="post-info">
										<?php cco_posted_on(); ?>
									</div>
									<div class="entry-content">
										<a href="<?php echo get_permalink(); ?>">
											<?php
												$content = get_the_content();
												$content = preg_replace("/<img[^>]+\>/i", "", $content);
												echo substr($content, 0, 400);
											?>
										<a>
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