<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Eventos
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bioage
 */
get_header(); ?>

<div class="lista-de-eventos">
	<?php
	while ( have_posts() ) : the_post();
		// check if the repeater field has rows of data
		if( have_rows('lista_de_eventos') ):

		 	// loop through the rows of data
		    while ( have_rows('lista_de_eventos') ) : the_row(); ?>

		        
		        
		        <div class="box-evento" data-regiao="<?php the_sub_field('regiao'); ?>">
					<div class="imagem-evento">
						<?php
							$data = get_sub_field('data');
							$dateformatstring = "d/m";
							$unixtimestamp = strtotime($data);
							
						?>
						<div class="data-evento"> <?php echo date_i18n($dateformatstring, $unixtimestamp); ?> </div>
						<img src="<?php the_sub_field('imagem'); ?>" alt="">
					</div>
					<div class="titulo-evento"><?php the_sub_field('nome_do_evento'); ?></div>
					<hr>
					<div class="descricao-evento">
						<?php the_sub_field('info'); ?>
					</div>
					<a class="link-evento evento-gratuito hide" href="#"> Comprar </a>
				</div>

		<?php endwhile;

		else :

		    // no rows found

		endif;
	endwhile;

	?>
</div>