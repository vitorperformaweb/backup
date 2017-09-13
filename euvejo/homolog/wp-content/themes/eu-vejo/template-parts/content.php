<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EuVejo
 */

?>

<article id="post-<?php the_ID(); ?>" class="post-completo">
	<div <?php post_class(); ?>>
		<div class="categorias">
			<?php echo get_the_category_list(); ?>
		</div>
		
		<h2>
			
				<?php the_title(); ?>
			
		</h2>

		<div class="data">
			<?php the_date(); ?>
		</div>
		
		<div class="post-content">
			<?php the_content(); ?>
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
