<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 */

get_header(); ?>
<?php $birkita_option = birkita_global_var_declare('birkita_option');?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php 
    $fullwidth = get_post_meta($post->ID, 'birkita_page_fullwidth_checkbox', true);
?>
<div class="birkita_archive-content-wrap <?php if (!($fullwidth)): echo 'content-sb-section clear-fix'; endif;?>">

    <div class="birkita_archive-content <?php if ($fullwidth) {echo 'fullwidth-section';} else echo 'content-section'; ?>">
        <div class="article-thumb">
            <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
        </div> <!-- article-thumb -->
        <article class="post-article">
        <?php
        
        if (get_the_title()): ?>
            <div class="birkita_header">
                <div class="main-title">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </div>
        	</div>
        <?php else: ?>
            <div class="birkita_header">
                <div class="main-title">
                    <h3>
                        <?php esc_attr_e('Untitled','birkita'); ?>
                    </h3>
                </div>
        	</div>
        <?php endif; ?>
        
        <div class="article-content">
        <?php the_content(); ?>
        </div>

    </article>
    <?php if(($birkita_option['birkita_comment-sw']) && (comments_open())) {?>
        <div class="comment-box clearfix">
            <?php comments_template(); ?>
        </div> <!-- End Comment Box -->
    <?php }?>
<?php endwhile; endif; ?>

    </div> <!-- main-content -->
    
    <?php if (!$fullwidth) get_sidebar(); ?>
</div>   

<?php get_footer();?>