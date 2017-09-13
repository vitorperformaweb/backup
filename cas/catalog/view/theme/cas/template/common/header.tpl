<?php

$currentpath  = 'catalog/view/theme/cas';

require_once('catalog/view/theme/cas/template/common/mobile_detect.php');

$detect = new Mobile_Detect;

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
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>
        <?php echo $title; ?>
    </title>
    <base href="<?php echo $base; ?>" />
    <?php if ($description) { ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php } ?>
    <?php if ($keywords) { ?>
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <?php } ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if ($icon) { ?>
    <link href="<?php echo $icon; ?>" rel="icon" />
    <?php } ?>
    <?php foreach ($links as $link) { ?>
    <link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
    <?php } ?>
    <link href="<?php echo $currentpath; ?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="catalog/view/theme/cas/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
    <?php foreach ($styles as $style) { ?>
    <link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
    <?php } ?>
    <!-- <link href="<?php echo $currentpath; ?>/assets/fonts/brandon/brandon.css" rel="stylesheet" type="text/css" charset="utf-8" /> -->
    <link href="<?php echo $currentpath; ?>/assets/font/stylesheet.css" rel="stylesheet">
    <link href="<?php echo $currentpath; ?>/assets/lib/owlcarousel/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="<?php echo $currentpath; ?>/assets/lib/hover-min.css" rel="stylesheet" media="screen" />
    <link href="<?php echo $currentpath; ?>/assets/lib/animate.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $currentpath; ?>/assets/lib/jcarousel/jcarousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $currentpath; ?>/assets/lib/bootstrap-spinner/jquery.bootstrap-touchspin.min.css" />
    <!-- <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet"> -->
    <link href="<?php echo $currentpath; ?>/assets/font/stylesheet.css" rel="stylesheet">
    <link href="<?php echo $currentpath; ?>/assets/css/estilo.css?v<?php echo time() ?>" rel="stylesheet">
    <link href="<?php echo $currentpath; ?>/assets/lib/icheck/skins/square/grey.css" rel="stylesheet">

    <style>
        .gift{background: #000; padding: 10px;}
        .gift label{ display: block; width: 100%; color: #FFF; position: relative; font-size: 14px; -webkit-transition: all 200ms; transition: all 200ms; cursor: pointer; margin: 0 !important; padding: 0}
        .gift label::before{ 
            content: ""; 
            display: block; 
            width: 20px; 
            height: 20px; 
            position: absolute; 
            left: -50px; 
            top: 0px;
            opacity: 0;
            -webkit-transition: all 200ms;
            transition: all 200ms;
            background: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQxNS41ODIgNDE1LjU4MiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDE1LjU4MiA0MTUuNTgyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTQxMS40Nyw5Ni40MjZsLTQ2LjMxOS00Ni4zMmMtNS40ODItNS40ODItMTQuMzcxLTUuNDgyLTE5Ljg1MywwTDE1Mi4zNDgsMjQzLjA1OGwtODIuMDY2LTgyLjA2NCAgIGMtNS40OC01LjQ4Mi0xNC4zNy01LjQ4Mi0xOS44NTEsMGwtNDYuMzE5LDQ2LjMyYy01LjQ4Miw1LjQ4MS01LjQ4MiwxNC4zNywwLDE5Ljg1MmwxMzguMzExLDEzOC4zMSAgIGMyLjc0MSwyLjc0Miw2LjMzNCw0LjExMiw5LjkyNiw0LjExMmMzLjU5MywwLDcuMTg2LTEuMzcsOS45MjYtNC4xMTJMNDExLjQ3LDExNi4yNzdjMi42MzMtMi42MzIsNC4xMTEtNi4yMDMsNC4xMTEtOS45MjUgICBDNDE1LjU4MiwxMDIuNjI4LDQxNC4xMDMsOTkuMDU5LDQxMS40Nyw5Ni40MjZ6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==) center no-repeat;
        }
        .gift input{ display: none !important; }
        .gift input:checked + label{ padding-left: 30px;}
        .gift input:checked + label:before{ left: 0; opacity: 1; }
        .bt-add{
            display: block; width: 100%; color: #FFF !important; position: relative; font-size: 14px; -webkit-transition: all 200ms; transition: all 200ms; cursor: pointer; margin: 15px 0 0; background: #000; padding: 10px; text-align: center
        } 
    </style>

    <script src="<?php echo $currentpath; ?>/assets/lib/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $currentpath; ?>/assets/lib/jquery.mask.min.js" type="text/javascript"></script>
    <script src="<?php echo $currentpath; ?>/assets/lib/jcarousel/jcarousel.js" type="text/javascript"></script>
    <script src="<?php echo $currentpath; ?>/assets/lib/jquery.elevateZoom.min.js" type="text/javascript"></script>
    <?php foreach ($scripts as $script) { ?>
    <script src="<?php echo $script; ?>" type="text/javascript"></script>
    <?php } ?>
    <script src="<?php echo $currentpath; ?>/assets/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo $currentpath; ?>/assets/lib/owlcarousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php echo $currentpath; ?>/assets/lib/bootstrap-spinner/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="<?php echo $currentpath; ?>/assets/js/jsCookie.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
    <script src="<?php echo $currentpath; ?>/assets/lib/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="<?php echo $currentpath; ?>/assets/js/script.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/common.js" type="text/javascript"></script>
    <script>
        $_GET = function(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        $(document).ready(function(){
            console.log("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX>>>>>"+"<?php echo @$customer_lastname2; ?>")
            $('body').on('change','.gift input', function(){
                if($('.gift input').is(':checked')){
                    // checked
                    q = 1;
                }else{
                    // unchecked
                    q = 0;
                }
                $.ajax({
                    url: "catalog/view/theme/cas/template/common/forGift.php?user_lastname=<?php echo @$customer_lastname2; ?>&gift="+q,
                    success: function(d){
                        console.log(d);
                    }
                })
            })
        })
    </script>
    <?php

if ($detect->isMobile() && !$detect->isTablet()) {

setcookie("isMob",true);

$_SESSION["mobile"] = 1;

?>
        <script>
        $(document).ready(function() {
            $('#nav-icon4').click(function() {
                $(this).toggleClass('open');
                $('.menuMob, .menucover').toggleClass('open');
            });
            $('.menucover').click(function() {
                $(this).toggleClass('open');
                $('.menuMob, #nav-icon4').toggleClass('open');
            })
        });
        </script>
        <?php }else{

	setcookie("isMob",false);

	$_SESSION["mobile"] = 0;

 } ?>
        <?php echo $google_analytics; ?> </head>

<body class="<?php echo $class; ?>" id="mmenu">
    <?php 

if ($detect->isMobile() && !$detect->isTablet()) {

?>
    <div class="menucover"></div>
    <div class="menuMob">
        <div>
            <ul>
                <li class="userArea">
                    <div class="userMenu">
                        <?php if($logged){ ?> <a onclick="return false;">Olá, <span><?php echo @$customer_firstname2; ?></span><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="submenu subUserArea">
                            <ul>
                                <li>
                                    <a href="<?php echo $account; ?>">
                                        <?php echo $text_account; ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $order; ?>">
                                        <?php echo $text_order; ?>
                                    </a>
                                </li>
                                <!-- <li><a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a></li> -->
                                <li>
                                    <a href="<?php echo $logout; ?>">
                                        <?php echo $text_logout; ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <?php }else{ ?> <a href="<?php echo $login; ?>" class="userNotLogged">Entre <span>ou cadastre-se</span></a>
                        <?php } ?> </div>
                </li>
                <li><a href="" onclick="return false;">coleções <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <?php if ($categories) { ?>
                    <div class="submenu">
                        <div>
                            <ul>
                                <?php foreach ($categories as $category) { ?>
                                <li class="dropdown">
                                    <a href="<?php echo $category['href']; ?>">
                                        <?php echo $category['name']; ?> </a>
                                </li>
                                <?php } ?> </ul>
                        </div>
                    </div>
                    <?php } ?> </li>
                <li><a href="" onclick="return false;">onde encontrar <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <div class="submenu">
                         <div>
                                <ul>

                                <?php
                                    foreach($lojas as $k=>$l){
                                        foreach($l as $kk=>$v){
                                ?>
                                    <li class="dropdown">
                                        <a href="<?php echo $v['url']; ?>"><?php echo $v['title']; ?></a>
                                    </li>
                                <?php    }
                                    } ?>
                                </ul>
                            </div>
                    </div>
                </li>
                <!-- <li><a href="">onde encontrar</a></li> -->
                <li><a href="quemsomos">quem somos</a></li>
                <li><a href="love-walks">love walks</a></li>
                <!-- <li><a href="index.php?route=information/information&information_id=7">cas plus water</a></li> -->
            </ul>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div id="nav-icon4"> <span></span> <span></span> <span></span> </div>
            <div class="logo">
                <h1><a href="">CAS</a></h1> </div>
            <div class="headerCart">
                <div>
                    <a href="index.php?route=checkout/cart" class="cart"> <i class="bag"></i> <span id="cart-total"><?php echo $GLOBALS['itemcarrinho']; ?></span> </a>
                </div>
            </div>
        </div>
    </div>
    <?php }else{ ?>
    <div class="header">
        <div class="logo">
            <h1><a href="">CAS</a></h1> </div>
        <div class="menu">
            <div>
                <ul>
                    <li><a href="" onclick="return false;">coleções</a>
                        <?php if ($categories) { ?>
                        <div class="submenu">
                            <div>
                                <ul>
                                    <?php foreach ($categories as $category) { ?>
                                    <li class="dropdown">
                                        <a href="<?php echo $category['href']; ?>">
                                            <?php echo $category['name']; ?> </a>
                                    </li>
                                    <?php } ?> </ul>
                            </div>
                        </div>
                        <?php } ?> </li>
                    <li><a href="" onclick="return false;">onde encontrar</a>
                        <div class="submenu">
                            <div>
                                <ul>

                                <?php
                                    foreach($lojas as $k=>$l){
                                        foreach($l as $kk=>$v){
                                ?>
                                    <li class="dropdown">
                                        <a href="<?php echo $v['url']; ?>"><?php echo $v['title']; ?></a>
                                    </li>
                                <?php    }
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="quemsomos">quem somos</a></li>
                    <li><a href="love-walks">love walks</a></li>
                </ul>
            </div>
        </div>
        <div class="headerCart">
            <div class="userArea">
                <div class="userMenu">
                    <?php if($logged){ ?>
                    <a onclick="return false;"><img src="catalog/view/theme/cas/assets/img/botao-perola.png"> Olá, <span><?php echo $customer_firstname2; ?></span></a>
                    <div class="submenu subUserArea">
                        <ul>
                            <li>
                                <a href="<?php echo $account; ?>">
                                    <?php echo $text_account; ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $order; ?>">
                                    <?php echo $text_order; ?>
                                </a>
                            </li>
                            <!-- <li><a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a></li> -->
                            <li>
                                <a href="<?php echo $logout; ?>">
                                    <?php echo $text_logout; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <?php }else{ ?>
                    <a href="<?php echo $login; ?>" class="userNotLogged"><img src="catalog/view/theme/cas/assets/img/botao-perola.png"> Login
                        <!-- Entre <span>ou cadastre-se</span> --></a>
                    <?php } ?> </div>
            </div>
            <div>
                <a href="index.php?route=checkout/cart" class="cart"> <i class="bag"></i> <span id="cart-total"><?php echo $GLOBALS['itemcarrinho']; ?></span> </a>
            </div>
        </div>
    </div>
    <?php 

}

?>
