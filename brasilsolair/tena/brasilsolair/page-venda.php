<?php
/* Template Name: Venda */ 
get_header();
while ( have_posts() ) : the_post();
?>
	<div class="imagem-destacada" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url(); ?>">
		
		<h1><?php the_title(); ?></h1>
		
	</div>
	<section class="container page-content">
		<div class="row">
			<?php while ( have_rows('produtos_para_venda') ) : the_row(); ?>
				<div class="col-md-6">
					<div class="card">
						<div class="imagem" style="background-image: url('<?php the_sub_field('imagem'); ?>')">
							
							<div class="overlay">
								<h2><?php the_sub_field('titulo'); ?></h2>
							</div>
						</div>
						<div class="descricao">
							<?php the_sub_field('descricao'); ?>
						</div>
						<div class="acao">
							<span class="abrirContato">
								Solicitar Orçamento
							</span>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>
	
<?php
endwhile; // End of the loop.
get_footer();