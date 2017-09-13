<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package brasilsolair
 */

get_header();
while ( have_posts() ) : the_post();
?>
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
						<?php the_content(); ?>
					
				
			</div>
		</div>
	</div>

<?php
endwhile; // End of the loop.
get_footer();