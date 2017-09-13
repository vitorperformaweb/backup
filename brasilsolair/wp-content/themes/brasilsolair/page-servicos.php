<?php
/* Template Name: Serviços */ 
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
	<section class="cinza" data-parallax="scroll" data-image-src="<?php the_field('imagem_de_background'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h2><?php the_field('titulo_projetos'); ?></h2>
				<?php the_field('conteudo_projetos'); ?>
					
				</div>
			</div>
		</div>
	</section>
	<section class="branco">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?php the_field('titulo_consultoria'); ?></h2>
					<?php
						the_field('conteudo_consultoria');
					?>
					<div class="lista-itens">
						<?php
							while ( have_rows('itens_consultoria') ) : the_row(); ?>
								<div class="item">
									<img src="<?php the_sub_field('imagem'); ?>">
						        	<?php the_sub_field('texto'); ?>
					        	</div>
					    <?php
					    	endwhile;
					    ?>
					</div>

				</div>
			</div>
		</div>
	</section>
	
<?php
endwhile; // End of the loop.
get_footer();