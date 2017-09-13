<!--<home sidebar widget>-->
<?php 
    $birkita_option = birkita_global_var_declare('birkita_option');
?>
    <?php  if ( (is_front_page() && is_active_sidebar( 'home_sidebar' ) ) || ( !is_front_page() && (is_active_sidebar( 'page_sidebar' ) || is_active_sidebar( 'home_sidebar' )))):?>
		<div class="sidebar <?php if (isset($birkita_option['birkita_sidebar-position']) && ($birkita_option['birkita_sidebar-position'] == 'left')){echo 'left';}?>">
            <div class="sidebar-wrap <?php if ($birkita_option['birkita_sidebar-sticky'] == 1) echo "stick";?>" <?php if ($birkita_option['birkita_sidebar-sticky'] == 1) echo "id= 'sidebar-stick'";?>>
                <div class="sidebar-wrap-inner">
                    <?php 
                        if (is_front_page()) {
                                dynamic_sidebar('home_sidebar');
                        } else {
                            if ( is_active_sidebar( 'page_sidebar' )) {
                                dynamic_sidebar('page_sidebar');
                            } else {
                                    dynamic_sidebar('home_sidebar');
                            }
                        }
                    ?>  
                </div>	
            </div>
		</div>
    <?php endif; ?>
<!--</home sidebar widget>-->