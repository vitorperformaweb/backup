<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CCO
 */

?>

	<?php get_template_part( 'componente-newsletter' ); ?>

	<?php get_template_part( 'componente-contato' ); ?>


	</div><!-- #content -->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="redes-sociais">
						<?php while ( have_rows('redes_sociais',12) ) : the_row(); ?>
							<a href="<?php the_sub_field('link');?>" target="_blank">
								<img src="<?php the_sub_field('imagem');?>">
							</a>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="col-md-6 desenvolvido">
					<a href="http://www.loopmarketing.com.br/" target="_blank">Desenvolvido por Loop Marketing</a>
				</div>
			</div>
		</div>
	</footer>

	<div class="modal fade" id="modalEbook" tabindex="-1" role="dialog" aria-labelledby="modalEbook">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<?php 

					$file = get_field('arquivo_do_ebook',16);
					

					if( $file ): ?>
					
						<a href="<?php echo $file; ?>" target="_blank">

							<img src="<?php the_field('imagem_de_confirmacao',16); ?>">
						</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalNewsletter" tabindex="-1" role="dialog" aria-labelledby="modalEbook">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				
					
						<a href="<?php the_field('link',164); ?>" target="_blank">

							<img src="<?php the_field('imagem_sucesso',164); ?>">
						</a>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalContato" tabindex="-1" role="dialog" aria-labelledby="modalEbook">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				
					
						<a href="<?php the_field('link',170); ?>" target="_blank">

							<img src="<?php the_field('imagem_sucesso',170); ?>">
						</a>
			</div>
		</div>
	</div>

	<div class="modal fade" id="agendamento" tabindex="-1" role="dialog" aria-labelledby="modalEbook">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="position: relative;">
						<img src="/cco/imagens/agendamento.png" class="img-agendamento">
						<div class="linha-formulario">
							<div class="row">
								<?php echo do_shortcode('[contact-form-7 id="175" title="Agendamento"]'); ?>
							</div>
						</div>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>

</body>
</html>
