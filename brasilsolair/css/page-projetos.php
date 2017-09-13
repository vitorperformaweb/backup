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
		<section id="contador" style="background: #ff9c00">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="titulo" style="color: #FFF; display: inline-block; margin: auto; border: 1px solid #FFF; padding: 10px 20px; margin-bottom: 40px;"><?php the_field('titulo_2',15); ?></h2>
				</div>
				<div class="col-md-12 text-center contador">
					
					<span id="contador">
					</span>
					<span>kWh</span>
					<?php
						$valor = get_field('comofunciona',15);
						$valor = strip_tags($valor)
					?>
					<script type="text/javascript">
						var valor = 14663595;
						var easingFn = function (t, b, c, d) {
						  var ts = (t /= d) * t;
						  var tc = ts * t;
						  return b + c * (tc + -3 * ts + 3 * t);
						}
						var options2 = {
						   useEasing : true,
							easingFn: easingFn, 
						  useGrouping : false, 
						  separator : '.', 
						  decimal : ',', 
						  prefix : '', 
						  suffix : '' 
						};
						var demo = new CountUp("contador", valor, 234617520 ,0, 30000000, options2);
						demo.start();
					</script>
				</div>
			</div>
		</div>
	</section>
		<div class="row">
				<div class="col-md-12">
					<?php echo do_shortcode('[envira-gallery id="217"]'); ?>
				</div>
			</div>
	</section>
<?php
endwhile; // End of the loop.
get_footer();