<?php get_header(); ?>

	<div class="projeto">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="nomeProjeto">
				<?php the_title(); ?>
			</div>
			<div class="descricaoProjeto">
				<?php the_field('descricao'); ?>
			</div>
			<div class="listaImagemProjeto">
				<?php if( have_rows('imagens_do_trabalho') ): ?>
					<?php while( have_rows('imagens_do_trabalho') ): the_row(); ?>
							<img src="<?php the_sub_field('imagem'); ?>">
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		<?php endwhile; ?> <?php endif; ?>
	</div>
<?php get_footer(); ?>