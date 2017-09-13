<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CCO
 */

?>

<div id="ebook" style="background-image: url('<?php the_field('imagem_background',16); ?>')">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<img src="<?php the_field('imagem',16); ?>" class="imagem">
				<span class="texto-apoio">
					<?php the_field('texto',16); ?>
				</span>
			</div>
			<div class="col-sm-7">
				<div class="chamada">
					<?php the_field('chamada',16); ?>
				</div>
				<form id="solicitarEbook">
					<input type="text" placeholder="Nome" name="nome" class="input-texto" required>
					<input type="email" placeholder="E-mail" name="email" class="input-texto email" required>
					<input type="submit" value="<?php the_field('texto_botao',16); ?>" class="input-botao" style="background-image: url('<?php the_field('cor_botao',16); ?>')">
				</form>
			</div>

		</div>
	</div>
</div>