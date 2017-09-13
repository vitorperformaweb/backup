<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EuVejo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/parallax.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/PTSans-Regular/styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/PTSans-Bold/styles.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" role="banner">
		<div class="container">	
			<div class="row">
				<div class="col-md-2">
					<div class="site-branding">
						<?php
						if ( is_front_page() && is_home() ) { ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php } else { ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php } ?>
					</div>
				</div>
				<div class="col-md-offset-1 col-md-6">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
				<div class="col-md-offset-1 col-md-2">
					<div class="social">
						<ul>
							<li>
								<a href="<?php the_field('twitter',1742); ?>" target="_blank">
									<i class="fa fa-twitter" aria-hidden="true"></i>	
								</a>
							</li>
							<li>
								<a href="<?php the_field('facebook',1742); ?>" target="_blank">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_field('instagram',1742); ?>" target="_blank">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_field('pinterest',1742); ?>" target="_blank">
									<i class="fa fa-pinterest-p" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="header-mobile">
		<div class="container">	
			<div class="row">
				<div class="col-xs-4">
					<div class="site-branding">
						<?php
						if ( is_front_page() && is_home() ) { ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php } else { ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php } ?>
					</div>
				</div>
				<div class="col-xs-offset-6 col-xs-2 abrir-menu">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="overlay-menu-mobile">
		<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		<div class="fechar-menu"></div>
	</div>
	<script type="text/javascript">
		$('.overlay-menu-mobile .fechar-menu').click(function(){
			$('body').removeClass('no-scroll');
			$('.overlay-menu-mobile').fadeOut();
			$('.overlay-menu-mobile .menu-menu-container').animate({
				'margin-left' : '-100%'
			})
		})
		$('.header-mobile .abrir-menu').click(function(){
			$('body').toggleClass('no-scroll');
			$('.overlay-menu-mobile').fadeIn();
			$('.overlay-menu-mobile .menu-menu-container').animate({
				'margin-left' : 0
			})
		})
	</script>
	<div id="content" class="site-content">
