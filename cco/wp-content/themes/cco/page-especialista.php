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
 * Template Name: Especialista
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
			<?php while ( have_rows('lista_de_especialistas') ) : the_row(); ?>
				<div class="especialista" >
					<div class="container" style="background-image: url(<?php the_sub_field('background');?>)">
						<div class="imagem-doutor">
							<img src="<?php the_sub_field('imagem_do_especialista') ;?>">
						</div>
						<div class="box-info">
							<div class="col-sm-12">
								<div class="nome">
									<?php the_sub_field('nome') ;?> | <?php the_sub_field('cro') ;?>
								</div>
								<div class="descricao">
									<?php the_sub_field('descricao') ;?>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="especialidades">
									<?php the_sub_field('especialidades') ;?>
								</div>
							</div>
							<div class="col-sm-6 text-right">
								<?php while ( have_rows('redes_sociais') ) : the_row(); ?>
									<a class="rede" href="<?php the_sub_field('link');?>" target="_blank">
										<img src="<?php the_sub_field('icone');?>">
									</a>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
		    <?php endwhile; ?>
		    	<?php if(have_rows('lista-de-dentistas')){ ?>
			    <div class="lista-profissionais lista-dentistas">
			    	<div class="container">
			    		<div class="row">
			    			<div class="col-sm-12">
			    				<h2>Dentistas</h2>
			    			</div>
			    		</div>
			    			<div class="carrossel-profissionais owl-carousel owl-theme">
			    			<?php while ( have_rows('lista-de-dentistas') ) : the_row(); ?>
				    			<div>
				    				<div class="box-profissional">
				    					<div class="foto" style="background-image: url('<?php the_sub_field('foto'); ?>')"></div>
				    					<div class="nome"><?php the_sub_field('nome'); ?></div>
				    					<div class="cro"><?php the_sub_field('cro'); ?></div>
				    					<div class="especialidade"><?php the_sub_field('especialidade'); ?></div>
				    				</div>
				    			</div>
			    			<?php endwhile; ?>
			    			</div>
			    	</div>
			    </div>
			    <?php } ?>
			    <?php if(have_rows('lista-de-colaboradores')){ ?>
			     <div class="lista-profissionais lista-colaboradores">
			    	<div class="container">
			    		<div class="row">
			    			<div class="col-sm-12">
			    				<h2>Colaboradores</h2>
			    			</div>
			    		</div>
			    			<div class="carrossel-profissionais owl-carousel owl-theme">
				    			<?php while ( have_rows('lista-de-colaboradores') ) : the_row(); ?>
					    			<div>
					    				<div class="box-profissional">
					    					<div class="foto" style="background-image: url('<?php the_sub_field('foto'); ?>')"></div>
					    					<div class="nome"><?php the_sub_field('nome'); ?></div>
					    					<div class="cargo"><?php the_sub_field('cargo'); ?></div>
					    				</div>
					    			</div>
				    			<?php endwhile; ?>
			    			</div>
			    	</div>
			    </div>
			    <?php } ?>
			</div>
		</div>
	<?php endwhile;?>

<?php
get_footer();