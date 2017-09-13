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
 * Template Name: A Clinica
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
				

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
				<div class="tratamentos-home" style="background-image: url('<?php the_field('background',83); ?>')">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="clinica-box-branco">
									<h2><?php the_field('titulo',83); ?></h2>
									<p>
										<?php the_field('conteudo',83); ?>
									</p>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="tour-360 text-right">
									<a href="/cco/tour-360/">
										<span><?php the_field('texto_tour',28); ?></span>
										<img src="<?php the_field('botao_tour',28); ?>">
									</a>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="video-institucional">
					<?php
						$inst = get_field('video_institucional');
						$inst = explode('v=', $inst)[1];
					?>
					<iframe src="https://www.youtube.com/embed/<?php echo $inst; ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="bg-cinza-f6f6f6">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="galeria-clinica">
									<h2><strong>VEJA AS FOTOS</strong> DE NOSSA ESTRUTUTA</h2>
									<div class="lista-fotos owl-carousel owl-theme">
										<?php while ( have_rows('lista_de_imagens') ) : the_row(); ?>
											<div class="item responsove_lightbox" >
												<a href="<?php the_sub_field('imagem');?>" style="background-image: url(<?php the_sub_field('imagem');?>)">
													<img src="<?php the_sub_field('imagem');?>" class="hide"/>
												</a>
											</div>
										<?php endwhile; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="na-midia na-midia-interno">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2><strong>A CCO</strong> na Mídia</h2>
							</div>
							<div class="col-sm-12">
								<div class="televisao">
									<div class="secao-titulo">
										<img src='/cco/imagens/tv.png'> Televisão
									</div>
									<div class="lista-videos-interno owl-carousel owl-theme">
										<?php
											while ( have_rows('lista_de_videos',83) ) : the_row();
											$youtubeId = get_sub_field('link_do_youtube');
											$youtubeId = explode('v=', $youtubeId)[1];
										?>
										<div class="video" data-video="<?php echo $youtubeId; ?>">

											<iframe src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
											<div class="titulo"><?php the_sub_field('titulo',83); ?></div>
											<div class="descricao"><?php the_sub_field('descricao',83); ?></div>
										</div>
										<?php endwhile; ?>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="radio">
									<div class="secao-titulo">
										<img src='/cco/imagens/radio.png'> Rádio
									</div>
									<div class="lista-radio-interno owl-carousel owl-theme">
										<?php
											while ( have_rows('lista_de_audios',83) ) : the_row();
											$youtubeId = get_sub_field('link_do_youtube');
											$youtubeId = explode('v=', $youtubeId)[1];
										?>
										<div class="radio" data-video="<?php echo $youtubeId; ?>">

											<iframe src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
											<div class="titulo"><?php the_sub_field('titulo'); ?></div>
											<div class="descricao"><?php the_sub_field('descricao'); ?></div>
										</div>
										<?php endwhile; ?>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="artigos-publicados">
									<div class="secao-titulo">
										<img src='/cco/imagens/artigos.png'> Artigos Publicados
									</div>
									<div class="lista-artigos">
										<ul class="artigos">
										<?php while ( have_rows('lista_de_artigos',83) ) : the_row(); ?>
											<li class="row">
												<a href="<?php the_sub_field('link'); ?>">
													<div class="col-sm-1 data">
														<?php
															$data = get_sub_field('data');
															$data = new DateTime($data);
															echo $data->format('j/m/y');
														?>
													</div>
													<div class="col-sm-9 titulo">
														<?php the_sub_field('titulo_do_artigo'); ?>
													</div>
													<div class="col-sm-2 logo">
														<img src="<?php the_sub_field('logo_do_portal'); ?>">
													</div>
												</a>
											</li>
										<?php endwhile; ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="bg-cinza-f6f6f6 tratamentos">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h2 class="text-center"><?php the_field('chamada',83);?></h2>
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
<script type="text/javascript">
	jQuery('.lista-artigos .artigos').slick({
	  slidesToShow: 6,
	  slidesToScroll: 1,
	  vertical: true,
	  verticalSwiping: true,
	  infinite: false
	});
</script>
<?php
get_footer();
