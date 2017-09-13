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
 * Template Name: Tratamento
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
						<div class="col-sm-offset-2 col-sm-8">
							<div class="video-tratamento">
								<?php 
									$youtubeId = get_field('url_do_youtube');
									$youtubeId = explode('v=', $youtubeId)[1];
								?>
								<iframe src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-sm-offset-2 col-sm-8">
							<div class="tenho-interesse" data-toggle="modal" data-target="#agendamento">
								EU TENHO INTERESSE
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-12">
								<h2 class="tratamento-titulo">
									<?php the_title();?>
								</h2>
								
								<?php the_content(); ?>
								
							</div>
						</div>
						<div class="col-sm-12">
							<div class="artigos-relacionados">
								<div class="col-sm-12">
									<h3><?php the_field('titulo_artigos_relacionados');?></h3>
								</div>
								<div class="col-sm-12">
									<div class="lista-artigos owl-carousel owl-theme">
									<?php $post_objects = get_field('posts_relacionados');

										if( $post_objects ): ?>
										    <?php foreach( $post_objects as $post_object):?>
										        <div>
										            <a href="<?php echo get_permalink($post_object->ID); ?>">
										            	<div class="imagem" style="background-image: url(<?php echo get_the_post_thumbnail_url($post_object->ID,'original'); ?>) ">
															
										            	</div>
										            	<span class="post-titulo">
										            		<?php echo get_the_title($post_object->ID); ?>
									            		</span>
										            	
										            </a>
										        </div>
										    <?php endforeach; ?>
										<?php endif;

										?>
									</div>
								</div>
							
							</div>
						</div>
						<?php if(get_field('titulo_videos_relacionados')){ ?>
							<div class="col-sm-12">
								<div class="videos-relacionados">
									<div class="col-sm-12">
										<h3><?php the_field('titulo_videos_relacionados');?></h3>
									</div>
									<div class="col-sm-12">
										<div class="lista-de-videos owl-carousel owl-theme">
											<?php while ( have_rows('lista_de_videos') ) : the_row();
												$youtubeId = get_sub_field('url_do_video');
												$youtubeId = explode('v=', $youtubeId)[1];
											?>
												<div data-video="<?php echo $youtubeId; ?>">

													<iframe src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen width="100%"></iframe>
												</div>
										    <?php endwhile; ?>
												
										</div>
									</div>
								
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
					<div class="outros-tratamentos">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="col-sm-12">
										<h3>Mais Tratamentos</h3>
									</div>
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
