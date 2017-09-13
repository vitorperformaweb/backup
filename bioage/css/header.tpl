<?php
$kuler = Kuler::getInstance();
$theme = $kuler->getTheme();

$kuler->addStyle(array(
	"catalog/view/theme/$theme/stylesheet/bootstrap.min.css",
	"catalog/view/theme/$theme/stylesheet/_grid.css",
	"catalog/view/theme/$theme/stylesheet/stylesheet.css",
	"catalog/view/javascript/font-awesome/css/font-awesome.min.css",
));

if ($kuler->getRootSkin() == 'skin2') {
	$kuler->addStyle("catalog/view/theme/$theme/stylesheet/skin02.css");
} elseif ($kuler->getRootSkin() == 'skin3') {
	$kuler->addStyle("catalog/view/theme/$theme/stylesheet/skin03.css");
} else {
	$kuler->addStyle("catalog/view/theme/$theme/stylesheet/skin01.css");
  $kuler->addStyle("catalog/view/theme/$theme/stylesheet/performaweb.css");
}

$kuler->addScript(array(
	'catalog/view/javascript/jquery/jquery-2.1.1.min.js',
	'catalog/view/javascript/bootstrap/js/bootstrap.min.js',
	'catalog/view/javascript/common.js',
	"catalog/view/theme/$theme/js/lib/jquery.magnific-popup.min.js",
	"catalog/view/theme/$theme/js/lib/owl.carousel.min.js",
	"catalog/view/theme/$theme/js/lib/headroom.min.js",
	"catalog/view/theme/$theme/js/lib/jQuery.headroom.min.js",
	"catalog/view/theme/$theme/js/lib/main.js",
	"catalog/view/theme/$theme/js/utils.js"
));

?>
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
<!-- {STYLES} -->
<!-- {SCRIPTS} -->
<?php echo $google_analytics; ?>
<?php if($direction == "rtl") { ?>
  <link rel="stylesheet" type="text/css" href="catalog/view/theme/<?php echo $kuler->getTheme() ?>/stylesheet/rtl.css" media="screen">
<?php } ?>
</head>
<body class="<?php echo $class; ?> <?php echo $kuler->getBodyClass(); ?>">
<?php
$modules = Kuler::getInstance()->getModules('header_top');
if ($modules) {
  echo '<div class="header-top"><div class="container">'.implode('', $modules).'</div></div>';
}
?>
<div id="notification"></div>
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 ship text-left atendimento">
        Atendimento: (11) 97051-4681
      </div>
      <div class="col-lg-6 col-md-6 text-right" style="text-align: right;">
        <div id="top-links" class="nav topbar__my-accounts">
          <ul class="list-inline">
            <li>
              <?php if ($logged) { ?> 
                <a href="<?php echo $account; ?>">Bem vindo, <?php echo $customer_firstname; ?></a>
              <?php }else{ ?>
                <a href='index.php?route=account/login'>Bem vindo, acesse sua conta ou cadastre-se</a>
              <?php } ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.topbar -->
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div id="logo" class="site-logo">
          <?php if ($logo) { ?>
          <a href="<?php echo $home; ?>">
            <img src="/logo-preto-xs.png" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" />
          </a>
          <?php } else { ?>
          <h1><a href="<?php echo $home; ?>"><?php echo $name; ?></a></h1>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-7" style="    min-width: 730px;">
        <?php echo $search; ?>
      </div>
      <div class="col-lg-3" style="max-width: 245px;">
        <div class="minha-conta">
          <a href="<?php echo $account; ?>"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMzIDMzIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMyAzMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI2NHB4IiBoZWlnaHQ9IjY0cHgiPgo8Zz4KCTxwYXRoIGQ9Ik0xNi41LDMzQzcuNDAyLDMzLDAsMjUuNTk4LDAsMTYuNVM3LjQwMiwwLDE2LjUsMFMzMyw3LjQwMiwzMywxNi41UzI1LjU5OCwzMywxNi41LDMzeiBNMTYuNSwxQzcuOTUzLDEsMSw3Ljk1MywxLDE2LjUgICBTNy45NTMsMzIsMTYuNSwzMlMzMiwyNS4wNDcsMzIsMTYuNVMyNS4wNDcsMSwxNi41LDF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJNMTYuNSwzM2MtMy44NjksMC03LjYzNC0xLjM3Mi0xMC42MDEtMy44NjRjLTAuMTMyLTAuMTEtMC4xOTctMC4yODEtMC4xNzQtMC40NTJzMC4xMzQtMC4zMTcsMC4yOS0wLjM4NyAgIGMwLjQxMy0wLjE4NSwwLjg2Ny0wLjM3MSwxLjM3Ni0wLjU1NmMyLjYzMS0wLjk1OCwzLjkyOS0xLjgsNC40ODctMi45NjNjLTQuOTE4LTEuMjI1LTUuNDk4LTQuMjU5LTUuNTIxLTQuMzkzICAgYy0wLjAzMy0wLjE5NywwLjA1My0wLjM5NSwwLjIyLTAuNTA0YzAuMDk5LTAuMDY1LDIuNDU0LTEuNjc5LDIuNDU0LTUuODExYzAtNC40OTMsMC44ODgtOS4wODUsNy40NjktOS4wODUgICBzNy40NjksNC41OTMsNy40NjksOS4wODVjMCw0LjEzMiwyLjM1NSw1Ljc0NiwyLjQ1Niw1LjgxM2MwLjE2NCwwLjEwOSwwLjI1MSwwLjMwOCwwLjIxOCwwLjUwMiAgIGMtMC4wMjMsMC4xMzMtMC42MDQsMy4xNjgtNS41MjEsNC4zOTNjMC41NTksMS4xNjMsMS44NTYsMi4wMDQsNC40ODYsMi45NjNjMC41MDksMC4xODUsMC45NjQsMC4zNzEsMS4zNzYsMC41NTcgICBjMC4xNTcsMC4wNzEsMC4yNjcsMC4yMTcsMC4yOSwwLjM4N3MtMC4wNDIsMC4zNDEtMC4xNzQsMC40NTJDMjQuMTM1LDMxLjYyOCwyMC4zNywzMywxNi41LDMzeiBNNy4xOTEsMjguODg3ICAgQzkuODY4LDMwLjksMTMuMTQzLDMyLDE2LjUsMzJjMy4zNTgsMCw2LjYzMy0xLjEsOS4zMDktMy4xMTNjLTAuMTczLTAuMDY5LTAuMzU0LTAuMTM3LTAuNTQyLTAuMjA2ICAgYy0zLjM0LTEuMjE3LTQuNzc1LTIuMzM0LTUuMjk2LTQuMTIzYy0wLjAzOS0wLjEzNC0wLjAyLTAuMjc4LDAuMDUyLTAuMzk3YzAuMDcyLTAuMTIsMC4xOTEtMC4yMDQsMC4zMjctMC4yMzIgICBjMy44ODYtMC44MDIsNC45NTUtMi43MTksNS4yMjUtMy40NGMtMC43NDgtMC42My0yLjYwNS0yLjU4Mi0yLjYwNS02LjQxOGMwLTQuODUzLTEuMS04LjA4NS02LjQ2OS04LjA4NXMtNi40NjksMy4yMzItNi40NjksOC4wODUgICBjMCwzLjgzNi0xLjg1OCw1Ljc4OC0yLjYwNSw2LjQxOGMwLjI2OCwwLjcxNywxLjMzNSwyLjYzNyw1LjIyNCwzLjQzOWMwLjEzNywwLjAyOCwwLjI1NiwwLjExMiwwLjMyOCwwLjIzMSAgIGMwLjA3MSwwLjEyLDAuMDkxLDAuMjY0LDAuMDUyLDAuMzk3Yy0wLjUyLDEuNzg5LTEuOTU1LDIuOTA3LTUuMjk2LDQuMTI0bDAsMEM3LjU0NSwyOC43NSw3LjM2NSwyOC44MTgsNy4xOTEsMjguODg3eiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" /> Minha Conta</a>
        </div>
        <?php echo $cart; ?>
      </div>
    </div>
  </div>
	<?php
	$modules = Kuler::getInstance()->getModules('kuler_menu');
	if ($modules) {
		echo implode('', $modules);
	}else{
		?>
		<?php if ($categories) { ?>
			<nav id="menu" class="navigation">
				<div class="container">
					<span id="btn-mobile-toggle">
					  <?php echo $kuler->translate($kuler->getSkinOption('mobile_menu_title')); ?>
					</span>
					<ul class="main-nav">
						<li class="main-nav__item">
							<a href="<?php echo $base; ?>" <?php if ($kuler->getSkinOption('home_icon_type') == 'icon') { ?> class="home-icon" <?php } ?>>
								<?php echo $kuler->language->get('text_home') ?>
							</a>
						</li>
						<?php foreach ($categories as $category) { ?>
							<li class="main-nav__item">
								<a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
								<?php if (!empty($category['children'])) { ?>
									<span class="btn-expand-menu"></span>
								<?php } ?>
								<?php if ($category['children']) { ?>
									<div class="main-nav__secondary-nav">
										<div class="container">
											<?php for ($i = 0; $i < count($category['children']);) { ?>
												<ul>
													<?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
													<?php for (; $i < $j; $i++) { ?>
														<?php if (isset($category['children'][$i])) { ?>
															<li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo $category['children'][$i]['name']; ?></a>
																<?php if (!empty($category['children'][$i]['children'])) { ?>
																	<?php echo renderSubMenuRecursive($category['children'][$i]['children']); ?>
																<?php } ?>
															</li>
														<?php } ?>
													<?php } ?>
												</ul>
											<?php } ?>
										</div>
									</div>
								<?php } ?>
							</li>
						<?php } ?>
					</ul>
				</div>
			</nav><!-- /.navbar -->
		<?php } ?>
	<?php } ?>
</header><!-- /.header -->

<?php
function renderSubMenuRecursive($categories) {
  $html = '<ul class="sublevel">';

  foreach ($categories as $category)
  {
    $parent = !empty($category['children']) ? ' parent' : '';
    $active = !empty($category['active']) ? ' active' : '';
    $html .= sprintf("<li class=\"item$parent $active\"><a href=\"%s\">%s</a>", $category['href'], $category['name']);

    if (!empty($category['children']))
    {
      $html .= '<span class="btn-expand-menu"></span>';
      $html .= renderSubMenuRecursive($category['children']);
    }

    $html .= '</li>';
  }

  $html .= '</ul>';

  return $html;
}
?>
<div class="kl-main-content">
  <?php
  $modules = Kuler::getInstance()->getModules('promotion');
  if ($modules) {
    echo implode('', $modules);
  }
  ?>