<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="col-xs-12 col-md-3 item">
		<div class="categoria">
			<?php
				foreach((get_the_category()) as $category) {
				    echo '<span>' . $category->cat_name . '</span>';
				}
			?>
		</div>
		<a href="<?php the_permalink(); ?>">
			<?php echo get_the_post_thumbnail() ?>
		</a>
	</div>

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
