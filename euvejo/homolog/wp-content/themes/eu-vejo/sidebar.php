<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EuVejo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="sidebar widget-area" role="complementary">
	<section id="perfil" class="widget widget_perfil">
		<img src="<?php the_field('imagem',1712)?> ">
		<h2 class="widget-title">Sobre</h2>
		<div class="content">
			<?php the_field('resumo',1712)?>
		</div>
	</section>
	<div class="anuncios">
		<?php
			if( have_rows('lista_de_anuncios',1722) ){
			    while ( have_rows('lista_de_anuncios',1722) ) : the_row(); 
		?>
			        <div class="anuncio">
			        	<a href="<?php the_sub_field('link',1722);?>" target="_blank">
			        		<img src="<?php the_sub_field('imagem',1722);?>"/>
			        	</a>
			        </div>
		<?php
				endwhile;
			}
		?>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="anuncios">
		<?php
			if( have_rows('lista_de_anuncios2',1722) ){
			    while ( have_rows('lista_de_anuncios2',1722) ) : the_row(); 
		?>
			        <div class="anuncio">
			        	<a href="<?php the_sub_field('link',1722);?>" target="_blank">
			        		<img src="<?php the_sub_field('imagem',1722);?>"/>
			        	</a>
			        </div>
		<?php
				endwhile;
			}
		?>
	</div>
	<?php dynamic_sidebar( 'sidebar-1-2' ); ?>
</aside><!-- #secondary -->
