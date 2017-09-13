<?php
/*
Template Name: Blog
*/
?>
<?php
get_header(); 
$birkita_option = birkita_global_var_declare('birkita_option');
if (isset($birkita_option) && ($birkita_option != '')):
    $birkita_layout = $birkita_option['birkita_blog-layout'];
endif;
if ($birkita_layout == 'grid-2') {
    $col = 2;    
} else if ($birkita_layout == 'grid-3') {
    $col = 3;
}
?>
<div class="birkita_archive-content-wrap <?php if (!(($birkita_layout == 'big-classic') || ($birkita_layout == 'big-blog') || ($birkita_layout == 'big-grid')  || ($birkita_layout == 'big-masonry'))): echo 'content-sb-section clear-fix'; endif;?>">
    <div class="birkita_archive-content <?php if (($birkita_layout == 'big-classic') || ($birkita_layout == 'big-blog') || ($birkita_layout == 'big-grid') || ($birkita_layout == 'big-masonry')): echo 'fullwidth-section'; else : echo 'content-section'; endif;?>">
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('post_type=post&post_status=publish&paged=' . $paged);
        ?>
            <div class="birkita_header">
                <div class="main-title">
                    <h3>
                        <?php esc_html_e( 'Blog', 'birkita');?>
                    </h3>
                </div>
    		</div>
            <?php 
            if (have_posts()) { 
    
                 if (($birkita_layout == 'big-blog') || ($birkita_layout == 'small-blog')) {
                    echo '<div class="module-large-blog">';
                    echo '<div class="large-blog-content-container">';
                        while (have_posts()): the_post();
                        echo birkita_large_blog_render(get_the_ID(), 40);
                        endwhile;
                    echo '</div></div>';
                    if (function_exists("birkita_paginate")) {
                        echo '<div class="birkita_page-pagination">';
                            birkita_paginate();
                        echo '</div>';
                    }
                } else if ($birkita_layout == 'big-classic') {
                    echo '<div class="classic-blog-content-container">';
                        while (have_posts()): the_post();
                        echo birkita_classic_blog_render(get_the_ID(), 25);
                        endwhile;
                    echo '</div>';
                    if (function_exists("birkita_paginate")) {
                        echo '<div class="birkita_page-pagination">';
                            birkita_paginate();
                        echo '</div>';
                    }
                } else if (($birkita_layout == 'big-grid')||($birkita_layout == 'small-grid')) {
                    echo '<div class="module-grid-content-wrap clear-fix">';
                        while (have_posts()): the_post();                           
                            echo birkita_post_grid(get_the_ID());
                        endwhile;
                    echo '</div>';
                    if (function_exists("birkita_paginate")) {
                        echo '<div class="birkita_page-pagination">';
                            birkita_paginate();
                        echo '</div>';
                    }
				} else if (($birkita_layout == 'big-masonry')||($birkita_layout == 'small-masonry')) {
                    echo '<div class="module-masonry-wrapper clear-fix"><div class="masonry-content-container">';
                        while (have_posts()): the_post();             				
        				    echo birkita_masonry_render(get_the_ID());
                        endwhile;
                    echo '</div></div>';
                    if (function_exists("birkita_paginate")) {
                        echo '<div class="birkita_page-pagination">';
                            birkita_paginate();
                        echo '</div>';
                    }
                } else if ($birkita_layout == 'small-classic') {
                    echo '<div class="classic-blog-content-container">';
                        while (have_posts()): the_post();
                        echo birkita_classic_blog_render(get_the_ID(), 18);
                        endwhile;
                    echo '</div>';
                    if (function_exists("birkita_paginate")) {
                        echo '<div class="birkita_page-pagination">';
                            birkita_paginate();
                        echo '</div>';
                    }
                 } else {
                    echo '<div class="module-large-blog">';
                    echo '<div class="large-blog-content-container">';
                        while (have_posts()): the_post();
                        echo birkita_large_blog_render(get_the_ID(), 40);
                        endwhile;
                    echo '</div></div>';
                    if (function_exists("birkita_paginate")) {
                        echo '<div class="birkita_page-pagination">';
                            birkita_paginate();
                        echo '</div>';
                    }
                }
            } else { esc_html_e('No post to display','birkita');} ?>
    </div>
    <?php
    if (!($birkita_layout == 'big-classic') && !($birkita_layout == 'big-blog') && !($birkita_layout == 'big-grid') && !($birkita_layout == 'big-masonry')) {
        get_sidebar();
    }
    ?>
</div>
<?php get_footer(); ?>