<?php
/* Template Name: Quem Somos */ 
get_header();
while ( have_posts() ) : the_post();
?>
	<div class="imagem-destacada" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url(); ?>">
		
		<h1><?php the_title(); ?></h1>
		
	</div>
	<section class="container page-content">
		<div class="row">
			<div class="col-md-12 ">
				
						<?php the_content(); ?>
					
				
			</div>
		</div>
	</section>
	<section class="cinza">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="box">
						<div class="imagem">
							<img src="<?php the_field('box_1_-_imagem') ;?>">
						</div>
						<div class="conteudo">
							<h3><?php the_field('box_1_-_titulo') ;?></h3>
							<div class="texto">
								<?php the_field('box_1_-_texto') ;?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box">
						<div class="imagem">
							<img src="<?php the_field('box_2_-_imagem') ;?>">
						</div>
						<div class="conteudo">
							<h3><?php the_field('box_2_-_titulo') ;?></h3>
							<div class="texto">
								<?php the_field('box_2_-_texto') ;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="branco">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-lg">
						<div class="imagem">
							<img src="<?php the_field('box_3_-_imagem') ;?>">
						</div>
						<div class="conteudo">
							<h3><?php the_field('box_3_-_titulo') ;?></h3>
							<div class="texto">
								<?php the_field('box_3_-_texto') ;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="cinza">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="conteudo missao-visao">
						<h3><?php the_field('box_4_-_titulo') ;?></h3>
						<div class="texto">
							<?php the_field('box_4_-_texto') ;?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="conteudo missao-visao">
						<h3><?php the_field('box_5_-_titulo') ;?></h3>
						<div class="texto">
							<?php the_field('box_5_-_texto') ;?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="conteudo missao-visao">
						<h3><?php the_field('box_6_-_titulo') ;?></h3>
						<div class="texto">
							<?php the_field('box_6_-_texto') ;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="branco principios-valores">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Principios e <span>Valores</span></h3>
					<div class="texto">
						<?php the_field('principios_e_valores'); ?>
					</div>
				</div>
				<div class="col-offset-md-1 col-md-5">
					<img src="<?php echo get_template_directory_uri() ?>/img/agreement.png" style="opacity: 0.1;">
				</div>
			</div>
		</div>
	</section>
<?php
endwhile; // End of the loop.
get_footer();