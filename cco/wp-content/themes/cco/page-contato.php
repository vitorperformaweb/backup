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
 * Template Name: Contato
 */

get_header(); ?>

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
			<div class="conteudo-pagina pagina-contato">
				<div class="container">
					<div class="row">
								<div class="col-sm-offset-1 col-sm-5">
									<div class="texto">
									<?php the_content();?>
									</div>
									<div class="form-contato">
										<?php echo do_shortcode('[contact-form-7 id="149" title="Pagina Contato"]'); ?>
									</div>

								</div>
								<div class="col-sm-offset-1 col-sm-4">
									<img src="<?php the_field('imagem',144);?>">
								</div>
					</div>
				</div>
				<div class="faixa-contato">
					<div class="container">
						<div class="row">
							<div class="col-sm-offset-1 col-sm-4 texto">
								<?php the_field('texto',144);?>
							</div>
							<div class="col-sm-6">
								<div class="telefone">
									<img src="<?php the_field('icone_telefone',12); ?>">
									<?php the_field('telefone',12); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile;?>

<?php
get_footer();
