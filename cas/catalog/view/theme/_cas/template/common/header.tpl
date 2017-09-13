<?php $currentpath  = 'catalog/view/theme/cas'; ?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content= "<?php echo $keywords; ?>" />
<?php } ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if ($icon) { ?>
<link href="<?php echo $icon; ?>" rel="icon" />
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>

<link href="<?php echo $currentpath; ?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<?php foreach ($styles as $style) { ?>
<link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<link href="<?php echo $currentpath; ?>/assets/fonts/brandon/brandon.css" rel="stylesheet" type="text/css" charset="utf-8" />
<link href="<?php echo $currentpath; ?>/assets/lib/owlcarousel/owl.carousel.css" rel="stylesheet" media="screen" />
<link href="<?php echo $currentpath; ?>/assets/lib/hover-min.css" rel="stylesheet" media="screen" />
<link href="<?php echo $currentpath; ?>/assets/lib/animate.css" rel="stylesheet" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $currentpath; ?>/assets/lib/jcarousel/jcarousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo $currentpath; ?>/assets/lib/bootstrap-spinner/jquery.bootstrap-touchspin.min.css" />
<!-- <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet"> -->
<link href="<?php echo $currentpath; ?>/assets/css/estilo.css" rel="stylesheet">




<script src="<?php echo $currentpath; ?>/assets/lib/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo $currentpath; ?>/assets/lib/jcarousel/jcarousel.js" type="text/javascript"></script>
<script src="<?php echo $currentpath; ?>/assets/lib/jquery.elevateZoom.min.js" type="text/javascript"></script>
<?php foreach ($scripts as $script) { ?>
<script src="<?php echo $script; ?>" type="text/javascript"></script>
<?php } ?>
<script src="<?php echo $currentpath; ?>/assets/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $currentpath; ?>/assets/lib/owlcarousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo $currentpath; ?>/assets/lib/bootstrap-spinner/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="<?php echo $currentpath; ?>/assets/js/jsCookie.js" type="text/javascript"></script>

<script src="<?php echo $currentpath; ?>/assets/js/script.js" type="text/javascript"></script>

<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<?php echo $google_analytics; ?>
</head>

<body class="<?php echo $class; ?>">
<!-- <div class="hide"><?php echo $cart; ?></div> -->
<div class="topcart">
	<div class="iconcart">
		<i></i>
	</div>
	<div class="carttext">
		<a href="index.php?route=checkout/cart"><p>CARRINHO</p></a>
	</div>
	<div class="cartitems">
		<p>(<span id="cart-total"><?php echo $GLOBALS['itemcarrinho']; ?></span>)</p>
	</div>
</div>

<div class="top">
	<div class="linerFreteTop">
		<div class="container">
			<div class="containTextFrete text-center">
				<p>FRETE GRÁTIS A PARTIR DE DOIS PARES</p>
			</div>
			<div class="containFlagLanguage">
				<div class="actFlag">
					
				</div>
				<div class="languages">
					<ul>
						<li><a href="">Português</a></li>
						<li><a href="">English</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="logo">
				<h1><a href="#">CAS</a></h1>
			</div>
			<div class="menu">
				<ul>
					<li><a class="hvr-overline-from-center">COLEÇÕES</a>
					<!-- <?php echo "<pre>",print_r($categories),"</pre>";?> -->
					<?php if ($categories) { ?>
					<div class="submenu">
						<div>
							<ul>
								<?php foreach ($categories as $category) { ?>
	        						<li class="dropdown">
	        							<a href="<?php echo $category['href']; ?>">
	        								<?php echo $category['name']; ?>
	        							</a>
	        						</li>
	        					<?php } ?>
							</ul>
						</div>
					</div>
					<?php } ?>
					</li>
					<li><a class="hvr-overline-from-center" href="">ONDE ENCONTRAR</a></li>
					<li><a class="hvr-overline-from-center" href="index.php?route=information/information&information_id=4">QUEM SOMOS</a></li>
					<li><a class="hvr-overline-from-center" href="index.php?route=information/information&information_id=7">CAS + WATER</a></li>
					<li><a class="hvr-overline-from-center" href="">BLOG</a></li>
					<?php if ($logged) { ?>
					<li><a class="hvr-overline-from-center" href="">MINHA CONTA</a>
						<div class="submenu">
						<div>
							<ul>
								
        						<li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
					            <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
					            <li><a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a></li>
					            <li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
	        					
							</ul>
						</div>
					</div>
					</li>
					<?php } else { ?>
					<li><a class="hvr-overline-from-center" href="<?php echo $login; ?>">LOG IN</a></li>
					<?php }?>
				</ul>
			</div>
			<div class="obotao">
				<div class="bt">
				</div>
			</div>
		</div>
	</div>
</div>
