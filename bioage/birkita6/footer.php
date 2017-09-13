<?php
/**
 * The Footer for the theme.
 *
 */
?>
            </div>
    		<!-- MAIN BODY CLOSE -->
    		<!-- FOOTER OPEN -->
            <?php $birkita_option = birkita_global_var_declare('birkita_option');?>            
    		<div class="footer <?php if ( $birkita_option ['birkita_responsive-switch'] == 0 ){echo('birkita_site-container');}?>">
                <?php birkita_get_footer_instagram($birkita_option)?>
                <?php birkita_get_footer_widgets()?>
                <?php birkita_get_footer_lower();?>
    		
    		</div>
    		<!-- FOOTER close -->
            
        </div>
        <!-- page-wrap close -->
        
      </div>
      <!-- site-container close-->
    <?php birkita_footer_localize()?>
    <?php wp_footer(); ?> 
</body>
</html>