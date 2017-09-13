<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CCO
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<div class="row">
		<div class="col-md-5">
			<div class="imagem-destacada" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>')">
			</div>
		</div>
		<div class="col-md-7">
			<div class="post-titulo">
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			</div>
			<div class="post-info">
				<?php cco_posted_on(); ?>
			</div>
			<div class="entry-content">
				<?php
					$content = get_the_content();
					echo substr($content, 0, 400);
				?>
			</div>
		</div>
	</div>
</article>
