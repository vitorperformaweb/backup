<?php
/*
Template Name: Home Page
*/
?>
<?php get_header();?>
<style type="text/css">
    #birkita_carousel-2 .post-author a, #birkita_carousel-2 .type-in .post-cat a, {
        color: #FFF !important;
    }
</style>
<?php  if ( is_active_sidebar( 'fullwidth_section_top' ) ):?>
	<div class="fullwidth-section top">
        <?php dynamic_sidebar('fullwidth_section_top'); ?>  
	</div>
<?php endif; ?>

<?php  if ( is_active_sidebar( 'content_section' ) ):?>
        <div class="content-sb-section clear-fix">
    		<div class="content-section"  style="width: 100%">
                <?php dynamic_sidebar('content_section'); ?>  
    		</div>
            <?php get_sidebar();?>
        </div>
<?php endif; ?>

<?php  if ( is_active_sidebar( 'fullwidth_section_bottom' ) ):?>
		<div class="fullwidth-section bottom">
            <?php dynamic_sidebar('fullwidth_section_bottom'); ?>  
		</div>
<?php endif; ?>

<?php get_footer();?>