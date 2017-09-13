<?php 
	/* Template Name: Home */ 
	get_header(); 
?>


	<div id="slideshow" class="owl-carousel owl-theme">
		<?php  while ( have_rows('slideshow',121) ) : the_row(); ?>
			
			<div class="item" style="background-image: url(<?php the_sub_field('imagem',121); ?>);">
				<div class="box">
					<div class="titulo">
						<?php the_sub_field('titulo',121); ?>
					</div>
					<div class="subtitulo">
						<?php the_sub_field('subtitulo',121); ?>
					</div>
					<div class="call">
						<a href="<?php the_sub_field('link',121); ?>">
							<?php the_sub_field('call_to_action',121); ?>
						</a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	
	<script>
		let alturaJanela = jQuery(window).height();
		let alturaHeader = jQuery("header").height();
		let alturaSlider = alturaJanela - alturaHeader - 35;
		jQuery("#slideshow .item").height(alturaSlider);

		jQuery('#slideshow').owlCarousel({
		    loop:true,
		    margin:0,
		    nav:true,
		    items: 1,
		    autoplay: true,
		    autoplayTimeout: 5000,
		    navText: ["&#x027E8;","&#10217;"]
		})
	</script>
	
	<!-- <section>
		<div class="container">
			<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			?>

		</div>
	</section> -->
	<section class="por-que">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="titulo">
						<?php the_field('titulo_1',15); ?>
					</h2>
				</div>
				<?php  while ( have_rows('itens',15) ) : the_row(); ?>
					<div class="col-md-3">
						<div class="razao">
							<span class="icone"><?php the_sub_field('icone',15); ?></span>
							<span class="titulo"><?php the_sub_field('titulo',15); ?></span>
							<span class="texto"><?php the_sub_field('texto',15); ?></span>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<section class="conheca-solucoes" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/img/homesolucoes.jpg">
				<a href="<?php echo get_page_link(113); ?>">Clique aqui e conheça <strong>nossas soluções</strong></a>
	</section>


	<section id="como-funciona">
		<div class="page-template-page-locacao owl-carousel owl-theme">
			<?php while ( have_rows('produto',113) ) : the_row(); ?>
				<div class="imagemBackground">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2><?php the_sub_field('titulo'); ?></h2>
								<div class="descricao">
									<?php the_sub_field('descricao'); ?>
								</div>

								<?php 
									if( have_rows('icones') ){  ?>
									<ul>
								<?php while ( have_rows('icones') ) : the_row();
								?>
									
									
										<li>
											<img src="<?php the_sub_field('imagem'); ?>">
											<span><?php the_sub_field('texto'); ?></span>
										</li>
									
								<?php endwhile; ?>
									</ul>
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>
	<script>
		
		jQuery('#como-funciona .page-template-page-locacao').owlCarousel({
		    loop:true,
		    margin:0,
		    nav:true,
		    items: 1,
		    autoplay: true,
		    autoplayTimeout: 5000,
		    navText: ["&#x027E8;","&#10217;"]
		})
	</script>
	<section class="clientes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="titulo">
						<?php the_field('titulo_3',15); ?>
					</h2>
				</div>
				<div class="col-md-12">
					<div class="slider-clientes owl-carousel owl-theme">
						<?php  while ( have_rows('clientes',15) ) : the_row(); ?>
							<div class="item">
								<img src="<?php the_sub_field('logotipo_do_cliente',15); ?>" alt="<?php the_sub_field('nome_do_cliente',15); ?>">
							</div>
						<?php endwhile; ?>
					</div>
				</div>
				<script type="text/javascript">
					jQuery('.slider-clientes').owlCarousel({
					    loop:true,
					    margin:30,
					    nav:false,
					    dots: true,
					    items: 5,
					    autoplay: true,
					    autoplayTimeout: 5000,
					    responsiveClass:true,
					    responsive:{
					        0:{
					            items:1
					        },
					        600:{
					            items:3
					        },
					        1000:{
					            items:5
					        }
					    }
					})
				</script>
			</div>
		</div>
	</section>
<?php
	get_footer();
?>

