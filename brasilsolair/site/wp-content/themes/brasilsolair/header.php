<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brasilsolair
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/libs/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/libs/owl/owl.carousel.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/libs/owl/owl.carousel.min.js"></script>

</head>

<body <?php body_class(); ?>>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="logotipo">
						<?php if ( is_front_page()) { ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php } else { ?>
								<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
						<?php } ?>
					</div>
				</div>
				<div class="col-md-offset-1 col-md-9 text-right">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
			</div>
		</div>
	</header>
	

	<div id="content" class="site-content">
