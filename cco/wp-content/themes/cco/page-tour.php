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
 * Template Name: Tour
 */

get_header(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpviU64aGZFzDmwYW_A2sgh_YCsjygtGo"></script>

	<?php while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="cabecalho" style="background-image: url('<?php the_field('titulo_background_imagem'); ?>')">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1><?php the_title();?></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="conteudo-pagina">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div id="ambiente">
								<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1spt-BR!2sbr!4v1490010512742!6m8!1m7!1sTeRrz8V3IscAAAQvOi0oSw!2m2!1d-16.69539603611019!2d-49.27133939570786!3f46.567337716298425!4f1.2070573983234993!5f0.4000000000000002" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="lista-de-ambiente owl-carousel owl-theme">
								<?php while ( have_rows('ambientes') ) : the_row(); ?>
										<div>
											<div class="item-ambiente" data-ambiente="<?php the_sub_field('codigo_html');?>" style="background-image: url(<?php the_sub_field('imagem_do_ambiente');?>) ">
											
											</div>
											<span class="nome-ambiente"><?php the_sub_field('nome_do_ambiente');?></span>
										</div>
								<?php endwhile; ?>
																						
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile;?>

<?php
get_footer();