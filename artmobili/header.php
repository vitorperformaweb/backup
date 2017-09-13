<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<style>
			#dicaCompleta .conteudoDica .fechar{
				right: 10px;
			}
			.no-scroll{
				overflow-y: hidden;
			}
			#dicaCompleta .conteudoDica{
				overflow-y: scroll;
   			 	height: 500px;
			}
		</style>
	</head>
	<body <?php body_class(); ?>>
			<!-- header -->
			<header class="header clear" role="banner">
					<div class="container">
					<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
								<h1>Art Mobili Marcenaria</h1>
							</a>
						</div>
						<!-- /logo -->

						<div class="frase-topo">
							Seu sonho é a fonte da nossa criação
						</div>

						<!-- nav -->
						<div class="social">
							<a href="<?php the_field('facebook',8); ?>" target="_blank">
								<i class="fa fa-facebook-square" aria-hidden="true"></i>
							</a>
							<a href="<?php the_field('instagram',8); ?>" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
							<a href="#" id="telefone">
								<strong>Ligue agora:</strong> <?php the_field('telefone',8); ?></a>
						</div>
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
					</div>
					<!-- /nav -->

			</header>
			<div class="menuFixo">
				<div class="container">
					<div class="col-md-3 logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<div class="col-md-9">
						<nav>
							<?php html5blank_nav(); ?>
						</nav>
					</div>
				</div>
			</div>
			<!-- /header -->
