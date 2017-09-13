<?php 
	/* Template Name: Home */ 
	get_header(); 
?>
	<div id="slideshow" class="owl-carousel owl-theme">
		<?php  while ( have_rows('slideshow',5) ) : the_row(); ?>
			
			<div class="item" style="background-image: url(<?php the_sub_field('imagem',5); ?>);">
				<div class="box">
					<div class="titulo">
						<?php the_sub_field('titulo',5); ?>
					</div>
					<div class="subtitulo">
						<?php the_sub_field('subtitulo',5); ?>
					</div>
					<div class="call">
						<a href="<?php the_sub_field('link',5); ?>">
							<?php the_sub_field('call_to_action',5); ?>
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
	
	<section>
		<div class="container">
			<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			?>

		</div>
	</section>
<?php
	get_footer();
?>

