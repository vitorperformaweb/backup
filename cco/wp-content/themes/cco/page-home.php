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
 * Template Name: Home
 */

get_header(); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

	<div id="primary" <?php post_class(); ?>>
		<div class="slideshow owl-carousel owl-theme">
			<?php while ( have_rows('imagens_do_slider',22) ) : the_row(); ?>
		       <div class="item">
		        	<a href="<?php the_sub_field('link'); ?>" style="background-image: url('<?php the_sub_field('imagem'); ?>')">
		        		<img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
		        	</a>
		        </div>
	    	<?php endwhile; ?>
    	</div>
    	<div class="slideshow-apoio">
    		<div class="container">
    			<div class="row">
    				<div class="col-sm-12">
    					<p><?php the_field('texto_de_apoio',22); ?></p>
    				</div>
    			</div>
    		</div>
    	</div>
    	<?php
    		if( get_field('habilitar_ebook',16) ){
    			get_template_part( 'componente-ebook' );
    		}
    	?>

    	

		<div class="tratamentos-home" style="background-image: url('<?php the_field('background',28); ?>')">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2><?php the_field('chamada',28); ?></h2>
					</div>
					<div class="tratamentos-destaque">
						<?php while ( have_rows('blocos_de_texto',28) ) : the_row(); ?>
							<div class="col-sm-4">
								<a class="tratamento" href="<?php the_sub_field('link'); ?>">
									<div class="tratamento-titulo">
										<img src="<?php the_sub_field('imagem'); ?>">
										<span><?php the_sub_field('titulo'); ?></span>
									</div>
									<div class="tratamento-descricao">
										<?php the_sub_field('texto'); ?>
									</div>
								</a>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="outros-tratamentos">
						<div class="col-sm-12">
							<ul class="lista-tratamentos">
								<?php while ( have_rows('outros_tratamentos',28) ) : the_row(); ?>
									<li>
										<a href="<?php the_sub_field('link'); ?>">
											<img src="<?php the_sub_field('icone'); ?>">
											<?php the_sub_field('titulo'); ?>
										</a>
									</li>
								<?php endwhile; ?>
							</ul>
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
		<div class="especialistas-home">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>Os Especialistas</h2>
					</div>
					<?php while ( have_rows('lista_de_especialistas',78) ) : the_row(); ?>
						<div class="col-sm-6 box-especialista">
							<div class="box">
								<div class="especialista">
									<img src="<?php the_sub_field('imagem_da_home'); ?>">
									<div class="especialista-nome">
										<?php the_sub_field('nome'); ?>
										<span><?php the_sub_field('cro'); ?></span>
									</div>
									<div class="especialista-descricao">
										<?php the_sub_field('descricao_da_home'); ?>
									</div>
									<a href="<?php echo get_permalink(78); ?>">
										Saiba Mais
									</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<?php if(get_field('habilitar_depoimentos',25)){ ?>
		<div class="depoimentos-home ">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>Depoimentos dos Pacientes</h2>
					</div>
					<div class="col-sm-12">
					<div class="listadepoimentos owl-carousel owl-theme">
						<?php
							while ( have_rows('lista_de_depoimentos',25) ) : the_row();
							$youtubeId = get_sub_field('url_do_youtube');
							$youtubeId = explode('v=', $youtubeId)[1];
						?>
							<div class="depoimento" data-video="<?php echo $youtubeId; ?>">
								<div class="video">
									<iframe src="https://www.youtube.com/embed/<?php echo $youtubeId; ?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="titulo">
									<?php the_sub_field('titulo'); ?>
								</div>
								<div class="descricao">
									<?php the_sub_field('descricao'); ?>
								</div>
							</div>
						<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		
		<div class="na-midia na-midia-home">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>CCO na Mídia</h2>
					</div>
					<div class="col-sm-5">
						<div class="televisao">
							<div class="secao-titulo">
								<img src='/cco/imagens/tv.png'> Televisão
							</div>
							<div class="lista-videos owl-carousel owl-theme">
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

						<div class="radio">
							<div class="secao-titulo">
								<img src='/cco/imagens/radio.png'> Rádio
							</div>
							<div class="lista-radio owl-carousel owl-theme">
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
					<div class="col-sm-offset-1 col-sm-6">
						<div class="artigos-publicados">
							<div class="secao-titulo">
								<img src='/cco/imagens/artigos.png'> Artigos Publicados
							</div>
							<div class="lista-artigos">
								<ul class="artigos">
								<?php while ( have_rows('lista_de_artigos',83) ) : the_row(); ?>
									<li class="row">
										<a href="<?php the_sub_field('link'); ?>">
											<div class="col-sm-2 data">
												<?php
													$data = get_sub_field('data');
													$data = new DateTime($data);
													echo $data->format('j/m/y');
												?>
											</div>
											<div class="col-sm-8 titulo">
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
	</div>
	


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
