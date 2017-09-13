<?php get_header();?>
<?php
$birkita_option = birkita_global_var_declare('birkita_option');
?>
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('post_type=post&post_status=publish&paged=' . $paged);
?>
<div class="birkita_archive-content-wrap content-sb-section clear-fix">
    <div id="post-<?php the_ID(); ?>" <?php post_class('birkita_archive-content content-section');?>>
        <div class="birkita_header">
            <div class="main-title">
                <h3>
                    <?php esc_html_e( 'Latest Articles', 'birkita');?>
                </h3>
            </div>
    	</div>
        <?php
        if (have_posts()) {
            echo '<div class="module-masonry-wrapper clear-fix">';
            echo '<div class="masonry-content-container">';
                while (have_posts()): the_post();
                echo birkita_masonry_render(get_the_ID());
                endwhile;
            echo '</div></div>';
            if (function_exists("birkita_paginate")) {
                echo '<div class="birkita_page-pagination">';
                    birkita_paginate();
                echo '</div>';
            }
        }
        ?>
    </div>
    <?php get_sidebar();?>
</div>
<?php get_footer(); ?>