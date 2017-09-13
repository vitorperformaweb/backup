<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CCO
 * Template Name: Todos os Tratamentos
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="cabecalho" style="background-image: url('<?php the_field('titulo_background_imagem'); ?>')">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1><?php the_title();?></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="conteudo-pagina">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="col-sm-12">
								<h2><?php the_field('chamada');?></h2>
								<?php the_content(); ?>
								
							</div>
							<div class="col-sm-12">
								<div class="lista-tratamentos">
									<ul>
										<?php

											$args = array(
											    'post_type'      => 'page',
											    'posts_per_page' => -1,
											    'post_parent'    => 44,
											    'order'          => 'ASC',
											    'orderby'        => 'menu_order'
											 );
											$parent = new WP_Query( $args );
											if ( $parent->have_posts() ) : ?>

											    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
													<li style="background-image:url(<?php the_field('img_botao',get_the_ID()); ?>) ">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<span><?php the_title(); ?></span>
														</a>
													</li>
											    <?php endwhile; ?>
											<?php endif; wp_reset_query(); ?>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	<?php endwhile;?>

<?php
get_footer();
