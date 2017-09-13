<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EuVejo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			2017 - Eu vejo. Todos os direitos reservados
			<span class="sep"> | </span>
			<a href="http://www.performaweb.com.br.com.br/" rel="designer" target="_blank">Performa Web</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">
	if($('#secondary').length > 0){
		linksSociais = $('header .social').html();
		$('#text-2 .textwidget').html(linksSociais)
	}
</script>
<?php wp_footer(); ?>

</body>
</html>
