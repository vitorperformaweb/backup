<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CCO
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<?php wp_head(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js" integrity="sha256-X44h8GHeGHTkrwY/CVo4kYfEBYPJAzlG5Aaou4Jco1g=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" integrity="sha256-5ad0JyXou2Iz0pLxE+pMd3k/PliXbkc65CO5mavx8s8=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.standalone.min.css" integrity="sha256-RMGrTGgTqr/RK4mbfJ/9dLy8Dz0oetp7mREUfq7o3IA=" crossorigin="anonymous" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js" integrity="sha256-urCxMaTtyuE8UK5XeVYuQbm/MhnXflqZ/B9AOkyTguo=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.pt-BR.min.js" integrity="sha256-QN6KDU+9DIJ/9M0ynQQfw/O90ef0UXucGgKn0LbUtq4=" crossorigin="anonymous"></script>

<script type="text/javascript" src="/cco/wp-content/themes/cco/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://sorgalla.com/jcarousel/examples/vertical/jcarousel.vertical.css">

</head>

<body <?php body_class(); ?>>
	<div class="topo">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php echo do_shortcode('[google-translator]'); ?>


				</div>
				<div class="col-md-offset-5 col-md-4 text-right">
					<span class="numero telefone">
						<img src="<?php the_field('icone_telefone',8); ?>">
						<?php the_field('telefone',8); ?>
					</span>
					<span class="numero whatsapp">
						<img src="<?php the_field('icone_whatsapp',8); ?>">
						<?php the_field('whatsapp',8); ?>
					</span>
				</div>
			</div>
		</div>
	</div>
	<header role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<span class="hide">Centro de Cirurgia Oral</span>
							<img src="<?php the_field('logotipo',8); ?>">
						</a>
					</h1>
				</div>
				<div class="col-md-6">
					<ul class="menu-primario">
					<?php while ( have_rows('menu_principal',8) ) : the_row();?>
				        <li>
				        	<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('titulo'); ?></a>
				        </li>
				    <?php endwhile; ?>
			    		<li>
			    			<a href="#" class="glyphicon glyphicon-menu-hamburger abrir-menu"></a>
			    		</li>
				    </ul>
				</div>
				<div class="col-md-offset-0 col-md-3 text-right">
					<span data-toggle="modal" data-target="#agendamento" class="agende-consulta" style="background-image: url('<?php the_field('cor_do_botao',8); ?>')">
						<?php the_field('texto_do_botao',8); ?>
					</span>
				</div>
			</div>
		</div>
	</header>
	<div class="menu-adicional">
		
		<ul class="menu-segundario">
			<div class="fechar"><i class="fa fa-times" aria-hidden="true"></i></div>
			<?php while ( have_rows('menu_adicional',8) ) : the_row();?>
		        <li>
		        	<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('titulo'); ?></a>
		        </li>
	    	<?php endwhile; ?>
	    </ul>
	    <div class="clearfix"></div>
	</div>

	<div id="content" class="site-content">
