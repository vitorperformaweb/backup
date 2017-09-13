<?php
/**
 * The Header for the theme.
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    	wp_head();
    ?>
</head>
<?php 
    $birkita_option = birkita_global_var_declare('birkita_option');
    $logo = array();
    if (isset($birkita_option)):
        $backtop = $birkita_option['birkita_backtop-switch'];
        $site_layout = $birkita_option['birkita_site-layout'];
    endif;
?>
<body <?php body_class(); ?> >
    <div class="site-container <?php if ($site_layout == 1) echo 'wide'; else echo 'boxed';?>">
    	<!-- page-wrap open-->
    	<div class="page-wrap clear-fix">
    
    		<!-- header-wrap open -->
  		    <?php birkita_get_header();?>
            <!-- header-wrap close -->
    		
    		<!-- backtop open -->
    		<?php if ($backtop) { ?>
                <div id="back-top">
                    <span class="top-arrow"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                </div>
                
            <?php } ?>
    		<!-- backtop close -->
    		
    		<!-- MAIN BODY OPEN -->
    		<div class="main-body birkita_site-container clear-fix">