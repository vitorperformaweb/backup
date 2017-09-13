<?php
/* Template Name: Projetos */ 
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
		<div class="row">
				<div class="col-md-12">
					<?php echo do_shortcode('[envira-gallery id="70"]'); ?>
				</div>
			</div>
	</section>
<?php
endwhile; // End of the loop.
get_footer();