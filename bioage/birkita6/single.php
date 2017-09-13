<?php get_header();?>
<?php 
    $birkita_option = birkita_global_var_declare('birkita_option');
    $social_share = array();
    $share_box = $birkita_option['birkita_sharebox-sw'];
    if ($share_box){
        $social_share['fb'] = $birkita_option['birkita_fb-sw'];
        $social_share['tw'] = $birkita_option['birkita_tw-sw'];
        $social_share['gp'] = $birkita_option['birkita_gp-sw'];
        $social_share['pi'] = $birkita_option['birkita_pi-sw'];
        $social_share['li'] = $birkita_option['birkita_li-sw'];
    }
    $authorbox_sw = $birkita_option['birkita_authorbox-sw'];
    $postnav_sw = $birkita_option['birkita_postnav-sw'];
    $related_sw = $birkita_option['birkita_related-sw'];
    $comment_sw = $birkita_option['birkita_comment-sw'];
?>
    
<?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php 
            $birkitaPostID = get_the_ID();
            $birkitaReviewSW = get_post_meta($birkitaPostID,'birkita_review_checkbox',true);
            if($birkitaReviewSW == '1') {
                $reviewPos = get_post_meta($birkitaPostID,'birkita_review_box_position',true);
            }
            $birkita_layout = get_post_meta($birkitaPostID,'birkita_post_layout',true);
        ?>
        <div class="single-page clear-fix">
            <div class="article-content-wrap">
                <?php 
                    if(($birkita_layout == 'feat-fw') || ($birkita_layout == 'no-sidebar')) {
                        echo birkita_post_format_display($birkitaPostID, $birkita_layout);
                    }
                ?>  
                <div class="<?php if ($birkita_layout != 'no-sidebar') { echo 'content-sb-section clear-fix'; } else {echo 'content-wrap';}?>">
                    <div class="main <?php if($birkita_layout == 'no-sidebar') {echo 'post-without-sidebar';}?>">
                        <div class="singletop">
    						<div class="post-cat">
    							<?php echo birkita_get_category_link($birkitaPostID);?>
    						</div>					
                            <h3 class="post-title">
    							<?php 
    								echo get_the_title();
    							?>
        					</h3>     
                            <div class="post-meta clear-fix">      
                                <div class="post-author">
                                    <span class="avatar">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <?php the_author_posts_link();?>                            
                                </div>                                                
                                <div class="date">
                                    <span><i class="fa fa-clock-o"></i></span>
                                    <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>">
                    				    <?php echo get_the_date(); ?>
                                    </a>
                    			</div>		
                                <div class="meta-comment">
                        			<span><i class="fa fa-comments-o"></i></span>
                        			<a href="<?php echo (get_permalink($birkitaPostID).'#comments');?>"><?php echo get_comments_number($birkitaPostID)?></a>
                        		</div>				   
                    		</div>   
                        </div>
                        <?php if(($birkita_layout != 'feat-fw') && ($birkita_layout != 'no-sidebar')) {?>
                        <?php echo birkita_post_format_display($birkitaPostID, $birkita_layout);?>
                        <?php }?>
                        <div class="article-content">
                            <?php if(isset($reviewPos) && ($reviewPos != 'below')) {?>
                            <?php echo birkita_post_review_boxes($birkitaPostID, $reviewPos);?>
                            <?php }?>
                            <?php echo birkita_single_content($birkitaPostID);?>
                            <?php if(isset($reviewPos) && ($reviewPos == 'below')) {?>
                            <?php echo birkita_post_review_boxes($birkitaPostID, $reviewPos);?>
                            <?php }?>
                        </div>
                        <?php 
                            wp_link_pages( array(
    							'before' => '<div class="post-page-links">',
    							'pagelink' => '<span>%</span>',
    							'after' => '</div>',
    						)
    					 );?>
    <!-- TAGS -->
                        <?php
                			$tags = get_the_tags();
                            if ($tags): 
                                echo birkita_single_tags($tags);
                            endif; 
                        ?>
    <!-- SHARE BOX -->
                        <?php if ($share_box) {?>                                                                    
                            <?php echo birkita_share_box($birkitaPostID, $social_share);?>
                        <?php }?>
    <!-- NAV -->
                        <?php
                        if($postnav_sw) {   
                            $next_post = get_next_post();
                            $prev_post = get_previous_post();
                            if (!empty($prev_post) || !empty($next_post)): ?> 
                                <?php echo birkita_single_post_nav($next_post, $prev_post);?>
                            <?php endif; ?>
                        <?php }?>
    <!-- AUTHOR BOX -->
                        <?php $birkita_author_id = $post->post_author;?>
                        <?php if ($authorbox_sw) {?>
                        <?php
                            echo birkita_author_details($birkita_author_id);
                        ?>
                        <?php }?>
                        <?php echo birkita_get_article_info(get_the_ID(), $birkita_author_id);?>
    <!-- RELATED POST -->
                        <?php if ($related_sw){?>  
                            <div class="related-box">
                                <?php $birkita_related_num = 2; echo (birkita_related_posts($birkita_related_num));?>
                            </div>
                        <?php }?>
    <!-- COMMENT BOX -->
                        <?php if($comment_sw  && (comments_open())) {?>
                            <div class="comment-box clear-fix">
                                <?php comments_template(); ?>
                            </div> <!-- End Comment Box -->
                        <?php }?>
                    </div>
                    <!-- Sidebar -->
                    <?php if ($birkita_layout != 'no-sidebar') {?>
                        <?php get_sidebar(); ?>        
                    <?php }?>
                </div>
            </div>
        </div>
<?php endwhile; endif; ?>    
        

<?php get_footer();?>