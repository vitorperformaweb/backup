<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php
get_header(); 
$birkita_option = birkita_global_var_declare('birkita_option');
if (isset($birkita_option) && ($birkita_option != '')): 
    $birkita_layout = $birkita_option['birkita_archive-layout'];
    $cur_tag_id = $wp_query->get_queried_object_id();
    $cat_opt = get_option('birkita_cat_opt'); 
endif;
$birkita_layout = 'classic-content';   
if (isset($cat_opt[$cur_tag_id]) && is_array($cat_opt[$cur_tag_id]) && array_key_exists('cat_layout',$cat_opt[$cur_tag_id])) { $birkita_layout = $cat_opt[$cur_tag_id]['cat_layout'];};
?>
<div class="birkita_archive-content-wrap <?php if (!(($birkita_layout == 'big-classic') || ($birkita_layout == 'big-blog') || ($birkita_layout == 'big-grid')  || ($birkita_layout == 'big-masonry'))): echo 'content-sb-section clear-fix'; endif;?>">
    <div class="birkita_archive-content <?php if (($birkita_layout == 'big-classic') || ($birkita_layout == 'big-blog') || ($birkita_layout == 'big-grid') || ($birkita_layout == 'big-masonry')): echo 'fullwidth-section'; else : echo 'content-section'; endif;?>">
    		<div class="birkita_header">
                <div class="main-title">
                    <h3><?php
    
    				$var = get_query_var('post_format');
    				// POST FORMATS
    				if ($var == 'post-format-image') :
    					esc_html_e('Image ', 'birkita');
    				elseif ($var == 'post-format-gallery') :
    					esc_html_e('Gallery ', 'birkita');
    				elseif ($var == 'post-format-video') :
    					esc_html_e('Video ', 'birkita');
    				elseif ($var == 'post-format-audio') :
    					esc_html_e('Audio ', 'birkita');
    				endif;
    
    				if ( is_day() ) :
    					printf( esc_html__( 'Daily Archives: %s', 'birkita'), get_the_date() );
    				elseif ( is_month() ) :
    					printf( esc_html__( 'Monthly Archives: %s', 'birkita'), get_the_date( _x( 'F Y', 'monthly archives date format', 'birkita') ) );
    				elseif ( is_year() ) :
    					printf( esc_html__( 'Yearly Archives: %s', 'birkita'), get_the_date( _x( 'Y', 'yearly archives date format', 'birkita') ) );
    				elseif ( is_tag() ) :
                        printf( esc_html__( 'Tag: %s', 'birkita'), single_tag_title('',false) );
                    else :
    					esc_html_e( 'Archives', 'birkita');
    				endif;
    			?></h3>
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