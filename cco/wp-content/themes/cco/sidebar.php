<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CCO
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=1778400079074001";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<aside id="secondary" class="widget-area" role="complementary">
	<div class="banners-blog">
		<?php while ( have_rows('lista_de_banners',134) ) : the_row(); ?>
			<a class="banner" target="_blank" href="<?php the_sub_field('link'); ?>">
				<img src="<?php the_sub_field('banner'); ?>">
			</a>
		<?php endwhile; ?>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="fb-page" data-href="https://www.facebook.com/centrodecirurgiaoral/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/centrodecirurgiaoral/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/centrodecirurgiaoral/">Centro de Cirurgia Oral</a></blockquote></div>
</aside><!-- #secondary -->
