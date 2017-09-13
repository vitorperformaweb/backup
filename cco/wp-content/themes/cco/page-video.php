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
 * Template Name: Videos
 * @package CCO
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
			<div class="conteudo-pagina">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="" class="hide link-do-canal" target="_blank">teste</a>
	<?php endwhile;?>
	<script>
		jQuery('body').on('click','.ytwd_main_video_info1',function(){
			window.open('http://www.youtube.com/channel/UC5j5SjdBroQNh_XClTJYhnA?sub_confirmation=1','_blank');
		})
	</script>
<?php
get_footer();
