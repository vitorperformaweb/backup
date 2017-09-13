<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CCO
 */

?>
<div class="contato-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="secao-titulo">
					<?php the_field('titulo',12); ?>
				</div>
				<div class="texto">
					<?php the_field('texto',12); ?>
				</div>
				<div class="telefone fonte-grande">
					<img src="<?php the_field('icone_telefone',12); ?>">
					<?php the_field('telefone',12); ?>
				</div>
				<div class="telefone fonte-grande">
					<img src="<?php the_field('icone_whatsapp',12); ?>">
					<?php the_field('whatsapp',12); ?>
				</div>
				<div class="telefone">
					<img src="<?php the_field('icone_endereco',12); ?>">
					<?php the_field('enderecoo',12); ?>
				</div>
				<div class="telefone">
					<img src="<?php the_field('icone_email',12); ?>">
					<?php the_field('email',12); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="texto_mapa">
					<?php the_field('texto_mapa',12); ?>
				</div>
				<a href="#" class="mapa-link" target="_blank">
					<img src="<?php the_field('imagem_mapa',12); ?>">
				</a>
				<div class="texto_adicional">
					<?php the_field('texto_adicional',12); ?>
				</div>
				<script type="text/javascript">
					urlGMap = "<?php echo the_field('link_google_maps',12); ?>";
					urlWaze = "<?php echo the_field('link_waze',12); ?>";
					if(jQuery(window).width() < 1026){
						jQuery('.mapa-link').attr('href',urlWaze);
					}else{
						jQuery('.mapa-link').attr('href',urlGMap);
					}
				</script>
			</div>
		</div>
	</div>
</div>