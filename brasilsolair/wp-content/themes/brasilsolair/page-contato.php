<?php
/* Template Name: Contato */ 
get_header();
while ( have_posts() ) : the_post();
?>
	<div class="imagem-destacada" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url(); ?>">
		
		<h1><?php the_field("titulo"); ?></h1>
		<h2><?php the_field("sub-titulo"); ?></h2>
		
	</div>
	<section class="container page-content">
		<div class="row">
			<div class="col-md-12 ">
						<?php the_content(); ?>
			</div>
			<div class="col-md-offset-2 col-xs-12 col-md-8">
					<?php echo do_shortcode('[contact-form-7 id="4" title="Página Contato"]'); ?>
			</div>
		</div>
	</section>
<?php
endwhile; // End of the loop.
get_footer();