<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EuVejo
 */

?>

<article id="post-<?php the_ID(); ?>" class="post-completo pagina-completa">
	<div <?php post_class(); ?>>
		
		<h1>
			
				<?php the_title(); ?>
			
		</h1>
		
		<div class="post-content">
			<?php the_content(); ?>
		</div>

	</div>
</article>
