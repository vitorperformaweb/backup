<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
							<div class="post-topo">
								<div class="row">
									<div class="col-md-9">
										<div class="post-titulo">
											<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
										</div>
									</div>
									<div class="col-md-3 autor-data">
										<?php echo get_avatar( get_the_author_meta('user_email'), $size = '250'); ?>
										<?php cco_posted_on(); ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 conteudo-post">
									<?php the_content(); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<?php if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif; ?>
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
