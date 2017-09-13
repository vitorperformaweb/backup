<?php get_header(); ?>

	<section class="listaDeProjetos">

		<div class="container">
		<h1 class="section-title">Projetos</h1>
		<?php get_template_part('loop'); ?>
		</div>
	</section>
	<div class="backFade">
	</div>
	<div id="projetosModal">
		<div class="conteudoProjetos">
			<span aria-hidden="true" class="fechar">&times;</span>
			<div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
