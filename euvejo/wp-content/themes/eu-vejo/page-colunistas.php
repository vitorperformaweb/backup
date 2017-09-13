
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
 * Template Name: Colunistas
 * @package EuVejo
 */

get_header(); ?>


<div class="imagem-destaque">	</div>
<script type="text/javascript">
	$('.imagem-destaque').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>
<div class="container pagina-post">
	<div class="row">
		<div class="col-md-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'page' );


					endwhile;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				if( have_rows('lista_de_colunistas') ){ ?>
					<div class="lista-de-colunistas row">
					 	<?php while ( have_rows('lista_de_colunistas') ) : the_row(); ?>
							<div class="col-md-3">
								<div class="card">
									<div class="imagem" style="background-image: url(<?php the_sub_field('imagem');?>)"></div>
									<div class="nome"><?php the_sub_field('nome');?></div>
									<div class="profissao"><?php the_sub_field('profissao');?></div>
									<div class="descricao"><?php the_sub_field('descricao');?></div>
								</div>
							</div>
					   <?php endwhile; ?>
					</div>
				<?php } ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php
get_footer();
