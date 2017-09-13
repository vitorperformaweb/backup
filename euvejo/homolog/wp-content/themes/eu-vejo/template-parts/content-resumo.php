<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EuVejo
 */

?>
<article id="post-<?php the_ID(); ?>" class="post-resumo">
	<div <?php post_class(); ?>>
		
		<a href="<?php the_permalink(); ?>">
			<div class="imagem-destaque" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			</div>
		</a>
		<div class="categorias">
			<?php echo get_the_category_list(); ?>
		</div>
		
		<h2>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<div class="data">
			<?php the_date(); ?>
		</div>
		
		<div class="resumo">
			<?php the_excerpt(); ?>
		</div>
		<div class="text-center">
			<a href="<?php the_permalink(); ?>" class="abrir-post">
				<span>Leia mais</span>
			</a>
		</div>
		<div class="social">
			<div class="post-like">
				<?php echo do_shortcode('[kodex_post_like_buttons]');?>
			</div>

			<div class="post-share">
				COMPARTILHAR
				<div class="share-icons">
					<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" title="Facebook">
						<i class="fa fa-facebook"></i>
					</a>

					<a href="http://twitter.com/share?text=<?php the_permalink(); ?>" target="_blank" title="Twitter">
						<i class="fa fa-twitter"></i>
					</a>
					
					<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" title="Google plus">
						<i class="fa fa-google-plus"></i>
					</a>

				</div>
			</div>
			<div class="comments-link">
				<i class="fa fa-comment-o"></i><span class="disqus-comment-count" data-disqus-url="<?php the_permalink(); ?>"></span>
			</div>	
		</div>

	</div>
</article>