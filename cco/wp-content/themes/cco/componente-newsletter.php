<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CCO
 */

?>
<div id="newsletter">
	<div class="container">
		<div class="row news">
			<div class="col-sm-8">
				<span class="frase"><?php the_field('texto-news',12); ?></span>
			</div>
			<div class="col-xs-8 col-sm-9">
				<?php 
					$args = array(
						'prepend' => '', 
						'showname' => true,
						'nametxt' => 'Nome:', 
						'nameholder' => 'Nome', 
						'emailtxt' => 'E-mail:',
						'emailholder' => 'E-mail', 
						'showsubmit' => true, 
						'submittxt' => 'Quero as Dicas', 
						'jsthanks' => true,
						'thankyou' => 'Thank you for subscribing to our mailing list'
					);
					echo smlsubform($args);
				?>
			</div>
			<div class="col-xs-4 col-sm-3" style="height: 50px;">
				<div class="seta">
					<img src="<?php the_field('seta',12); ?>">
				</div>
				<div class="mulher">
					<img src="<?php the_field('imagem_newsletter',12); ?>">
				</div>
			</div>
			<script>
				jQuery('.sml_submitbtn').val('<?php the_field('texto_botao',12); ?>');
				jQuery('.sml_submitbtn').attr('style','background-image: url("<?php the_field('cor_botao',12); ?>")');
			</script>
		</div>
	</div>
</div>