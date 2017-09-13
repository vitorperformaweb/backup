<?php
/* Template Name: Locação */ 
get_header();
while ( have_posts() ) : the_post();
?>
<style>
.page-template-page-locacao .imagemBackground ul li{width: 33%;}
</style>
	<div class="imagem-destacada" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url(); ?>">
		
		<h1><?php the_title(); ?></h1>
		
	</div>
	<section class="page-content">
		
			<?php while ( have_rows('produto') ) : the_row(); ?>
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
								<div class="acao">
									<span class="abrirContato">
										Solicitar Orçamento
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>
	
<?php
endwhile; // End of the loop.
get_footer();