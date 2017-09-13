<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brasilsolair
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="logo-social">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri() ?>/img/logobranco.png">
						</a>
						<div class="social">
							<a href="#">
								<img src="<?php echo get_template_directory_uri() ?>/img/facebook.png">
							</a>
							<a href="#">
								<img src="<?php echo get_template_directory_uri() ?>/img/twitter.png">
							</a>
							<a href="#">
								<img src="<?php echo get_template_directory_uri() ?>/img/linkedin.png">
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-1"><span class="linha"></span></div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-3">
							<div class="endereco">
								<strong>SEDE - Rio de Janeiro</strong>
								<p>Rua do Ouvidor 88 – 9º andar</p>
								<p>CEP: 20040-030 | Centro</p>
								<p>Rio de Janeiro, RJ</p>
								<p>Tel.: +55 21 2512-2121</p>
							</div>
						</div>

						<div class="col-md-3">
							<div class="endereco">
								<strong>FILIAL - Teresina</strong>
								<p>Rua Castelo do Piauí 2545</p>
								<p>CEP: 64009-330 | Memorare</p>
								<p>Teresina, PI</p>
								<p>Tel.: +55 86-3214-3885</p>
							</div>
						</div>

						<div class="col-md-3">
							<div class="endereco">
								<strong>FILIAL - João pessoa</strong>
								<p>Av. Dr. Walter Bellian s/nº Q 37, Lt 1420 </p>
								<p>CEP: 58082-005 | Distrito Industrial</p>
								<p>João Pessoa, PB</p>
								<p>Tel.: +55 83 3233-710</p>
							</div>
						</div>

						<div class="col-md-3">
							<div class="endereco">
								<strong>FILIAL - FLORIANO</strong>
								<p>Rod. BR 230, nº 249</p>
								<p>CEP: 64800-000 | Bairro Cancela</p>
								<p>Floriano, PI</p>
								<p>Tel.: +55 89-3521-5289</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright">
		© 2017 - Brasil Solair - Todos os direitos reservados
	</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
<?php wp_footer(); ?>

</body>
</html>
