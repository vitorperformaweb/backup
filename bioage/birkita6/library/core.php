<?php
$birkita_default_options = array
(
    'birkita_primary-color' => '#d6976d',
    'birkita_page-color' => '#fff',
    'birkita_archive-page-color' => '#fafafa',
    'birkita_site-layout' => '1',
    'birkita_responsive-switch' => '1',
    'birkita_sb-responsive-sw' => '1',
    'birkita_header-social-switch' => '0',
    'birkita_social-header' => array
        (
            'fb' => '',
            'twitter' => '',
            'gplus' => '',
            'linkedin' => '',
            'pinterest' => '',
            'instagram' => '',
            'dribbble' => '',
            'youtube' => '',
            'vimeo' => '',
            'vk' => '',
            'rss' => '',
        ),
    'birkita_header-search' => '1',
    'birkita_header-layout' => 'center',
    'birkita_fixed-nav-switch' => '1',
    'birkita_header-banner-switch' => '0',
    'birkita_header-banner' => array
        (
            'imgurl' => '',
            'linkurl' => '',
        ),

    'birkita_banner-script' => '',
    'birkita_footer-instagram' => '0',
    'birkita_backtop-switch' => '1',
    'birkita_header-font' => array
        (
            'font-weight' => '700',
            'font-family' => 'Montserrat',
            'google' => '1',
        ),

    'birkita_meta-font' => array
        (
            'font-weight' => '400',
            'font-family' => 'Montserrat',
            'google' => '1',
        ),

    'birkita_title-font' => array
        (
            'font-weight' => '700',
            'font-family' => 'Montserrat',
            'google' => '1',
        ),

    'birkita_module-title-font' => array
        (
            'font-weight' => '700',
            'font-family' => 'Montserrat',
            'google' => '1',
        ),

    'birkita_body-font' => array
        (
            'font-weight' => '400',
            'font-family' => 'Montserrat',
            'google' => '1',
        ),

    'birkita_meta-review-sw' => '1',
    'birkita_meta-author-sw' => '1',
    'birkita_meta-date-sw' => '1',
    'birkita_meta-comments-sw' => '1',
    'birkita_sidebar-sticky' => '1',
    'birkita_sidebar-position' => 'right',
    'birkita_blog-layout' => 'small-blog',
    'birkita_author-layout' => 'small-blog',
    'birkita_category-layout' => 'small-blog',
    'birkita_archive-layout' => 'small-blog',
    'birkita_search-layout' => 'small-blog',
    'birkita_search-result' => 'yes',
    'birkita_single-featimg' => '1',
    'birkita_sharebox-sw' => '1',
    'birkita_fb-sw' => '1',
    'birkita_tw-sw' => '1',
    'birkita_gp-sw' => '1',
    'birkita_pi-sw' => '1',
    'birkita_li-sw' => '1',
    'birkita_authorbox-sw' => '0',
    'birkita_postnav-sw' => '1',
    'birkita_related-sw' => '1',
    'birkita_comment-sw' => '1',
    'birkita_css-code' => '',
    'cr-text' => '',
    'REDUX_last_saved' => '1469979009',
    'REDUX_LAST_SAVE' => '1469979009',
);
if ( ! function_exists('birkita_header_social')){ 
    function birkita_header_social(){?>
    <?php $birkita_option = birkita_global_var_declare('birkita_option');?>
        <div class="header-social clear-fix">
			<ul>
				<?php if ($birkita_option['birkita_social-header']['fb']){ ?>
					<li class="fb"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['fb']); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<?php } ?>
				
				<?php if ($birkita_option['birkita_social-header']['twitter']){ ?>
					<li class="twitter"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['twitter']); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<?php } ?>
				
				<?php if ($birkita_option['birkita_social-header']['gplus']){ ?>
					<li class="gplus"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['gplus']); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
				<?php } ?>
				
				<?php if ($birkita_option['birkita_social-header']['linkedin']){ ?>
					<li class="linkedin"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['linkedin']); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<?php } ?>
				
				<?php if ($birkita_option['birkita_social-header']['pinterest']){ ?>
					<li class="pinterest"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['pinterest']); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
				<?php } ?>
				
				<?php if ($birkita_option['birkita_social-header']['instagram']){ ?>
					<li class="instagram"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['instagram']); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<?php } ?>
				
				<?php if ($birkita_option['birkita_social-header']['dribbble']){ ?>
					<li class="dribbble"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['dribbble']); ?>" target="_blank"><i class="fa fa-dribbble"></i></a></li>
				<?php } ?>
				
				<?php if ($birkita_option['birkita_social-header']['youtube']){ ?>
					<li class="youtube"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['youtube']); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
				<?php } ?>      							
				                                    
                <?php if ($birkita_option['birkita_social-header']['vimeo']){ ?>
					<li class="vimeo"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['vimeo']); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
				<?php } ?>
                
                <?php if ($birkita_option['birkita_social-header']['vk']){ ?>
					<li class="vk"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['vk']); ?>" target="_blank"><i class="fa fa-vk"></i></a></li>
				<?php } ?>
                
                <?php if ($birkita_option['birkita_social-header']['rss']){ ?>
					<li class="rss"><a href="<?php echo esc_url($birkita_option['birkita_social-header']['rss']); ?>" target="_blank"><i class="fa fa-rss"></i></a></li>
				<?php } ?>      
				
			</ul>
		</div>
    <?php
    }
}
/**
* ************* Display post thumbnail *************
*---------------------------------------------------
*/
if ( ! function_exists('birkita_get_thumbnail')){ 
    function birkita_get_thumbnail($birkita_postid, $size){
        if(has_post_thumbnail($birkita_postid))	
            return get_the_post_thumbnail( $birkita_postid, 'full' );
        else if(has_post_format('video'))
            return ('<div class="icon-thumb"><i class="fa fa-play-circle-o"></i></div>');
        else if(has_post_format('gallery'))
            return ('<div class="icon-thumb"><i class="fa fa-camera-retro"></i></div>');
        else if(has_post_format('audio'))
            return ('<div class="icon-thumb"><i class="fa fa-volume-down"></i></div>');
        else if(has_post_format('image'))
            return ('<div class="icon-thumb"><i class="fa fa-picture"></i></div>');
        else
            return ('<div class="icon-thumb"><i class="fa fa-pencil-square-o"></i></div>');
                
    }
}
if ( ! function_exists('birkita_initWpFilesystem')){ 
    function birkita_initWpFilesystem() {
        global $wp_filesystem;
    
        // Initialize the WordPress filesystem, no more using file_put_contents function
        if ( empty( $wp_filesystem ) ) {
            require_once ABSPATH . '/wp-admin/includes/file.php';
            WP_Filesystem();
        }
    }
}
/**
* ************* Custom excerpt *****************
*-----------------------------------------------
*/
if ( ! function_exists('birkita_string_limit_words')){
    function birkita_string_limit_words($string, $word_limit)
    {
      $words = explode(' ', $string, ($word_limit + 1));
      if(count($words) > $word_limit)
      array_pop($words);
      return implode(' ', $words);
    }
}

if ( ! function_exists('birkita_the_excerpt_limit')){
    function birkita_the_excerpt_limit($string, $word_limit){
        $strout = birkita_string_limit_words($string,$word_limit);
        if (strlen($strout) < strlen($string))
            $strout .=" ...";
        return $strout;
    }
}

if ( ! function_exists('birkita_excerpt')){
    function birkita_excerpt($limit) {
          $excerpt = explode(' ', get_the_excerpt(), $limit);
          if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
          } else {
            $excerpt = implode(" ",$excerpt);
          } 
          $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
          return $excerpt;
    }
}
/**
 * ************* Review Score *****************
 *---------------------------------------------------
 */
if ( ! function_exists( 'birkita_review_score' ) ) {
    function birkita_review_score ($post_id) {
        $ret = '';
        $birkita_review_en = get_post_meta($post_id, 'birkita_review_checkbox', true);
        if ($birkita_review_en) {
            $birkita_final_score = get_post_meta($post_id, 'birkita_final_score', true);
            $arc_percent = $birkita_final_score * 10;
            if (isset($birkita_final_score) && ($birkita_final_score != null)){
                $ret = '<div class="rating-wrap"><span>'.$birkita_final_score.'</span><canvas class="part-rating-canvas part-score" data-rating="'.$arc_percent.'"></canvas></div>';
            }
        }
        return $ret;
    }
}
if ( ! function_exists( 'birkita_excerpt_limit_by_word' ) ) {
    function birkita_excerpt_limit_by_word($string, $word_limit){
        $words = explode(' ', $string, ($word_limit + 1));
        if(count($words) > $word_limit)
        array_pop($words);
        $strout = implode(' ', $words);
        if (strlen($strout) < strlen($string))
            $strout .=" ...";
        return $strout;
    }
}

/** Post Grid **/
if ( ! function_exists('birkita_post_grid')) {
    function birkita_post_grid($post_id){?>
        <div <?php if(is_sticky()) post_class('sticky one-col type-out grid-1-type'); else post_class('one-col type-out grid-1-type'); ?>>
            <div class="post-wrapper">
                <div class="thumb hide-thumb">
    				<a href="<?php the_permalink() ?>">
                        <?php echo (birkita_get_thumbnail($post_id, 'birkita_570_380'));?>
                    </a>
                    <?php  echo birkita_review_score($post_id); ?>
                    <a href="<?php the_permalink() ?>">
                        <?php if (get_post_format($post_id) == 'video') {
                            echo '<span class="post-format-icon"><i class="fa fa-play" aria-hidden="true"></i></span>';
                        } else if (get_post_format($post_id) == 'audio') {
                            echo '<span class="post-format-icon"><i class="fa fa-music" aria-hidden="true"></i></span>';
                        } else if (get_post_format($post_id) == 'gallery') {
                            echo '<span class="post-format-icon"><i class="fa fa-camera" aria-hidden="true"></i></span>';
                        } else if (get_post_format($post_id) == 'image') {
                            echo '<span class="post-format-icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>';
                        } else {
                            echo '';
                        } ?>
                    </a>
                </div>
                <div class="post-details">
                    <div class="post-cat">                                                 
                        <?php echo birkita_get_category_link($post_id);?>                                      
                    </div>
                    <h3 class="post-title">
        				<a href="<?php the_permalink() ?>">
        					<?php 
        						$title = get_the_title();
        						echo birkita_the_excerpt_limit($title, 10);
        					?>
        				</a>
        			</h3> 
                    <div class="entry-excerpt">
                        <?php 
                            $string = get_the_excerpt();
                            echo birkita_the_excerpt_limit($string, 16); 
                        ?>
                    </div> 
                    <div class="post-meta clear-fix">                     
                        <div class="post-author">
                            <span class="avatar">
                                By
                            </span>
                            <?php the_author_posts_link();?>                            
                        </div> 
                        <div class="date">
                            <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
                        </div> 
                        <div class="meta-comment">
                            <span><i class="fa fa-comments-o"></i></span>
                            <a href="<?php echo (get_permalink($post_id).'#comments');?>">
                                <?php echo get_comments_number($post_id)?>
                            </a>
                        </div> 
                    </div>
                    <div class="read-more-post">
                        <?php if (the_title( ' ', ' ', false ) == "") {?>
                            <a href="<?php the_permalink() ?>">
                                <span>Continue Read</span>
                            </a>
                        <?php } ?>
                    </div>             
    			</div>
            </div> 					
		</div>
    <?php	
    }
}
/* Render Masonry Content */
if ( ! function_exists( 'birkita_masonry_render')) {
    function birkita_masonry_render($post_id){?> 
            <div <?php if(is_sticky()) post_class('sticky one-col type-out grid-1-type'); else post_class('one-col type-out grid-1-type'); ?>>
                <div class="post-wrapper">
                    <div class="thumb hide-thumb">
    					<a href="<?php the_permalink() ?>">
                            <?php echo (birkita_get_thumbnail($post_id, 'birkita_auto-size'));?>
                        </a>
                        <?php  echo birkita_review_score($post_id); ?>
                        <a href="<?php the_permalink() ?>">
                            <?php if (get_post_format($post_id) == 'video') {
                                echo '<span class="post-format-icon"><i class="fa fa-play" aria-hidden="true"></i></span>';
                            } else if (get_post_format($post_id) == 'audio') {
                                echo '<span class="post-format-icon"><i class="fa fa-music" aria-hidden="true"></i></span>';
                            } else if (get_post_format($post_id) == 'gallery') {
                                echo '<span class="post-format-icon"><i class="fa fa-camera" aria-hidden="true"></i></span>';
                            } else if (get_post_format($post_id) == 'image') {
                                echo '<span class="post-format-icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>';
                            } else {
                                echo '';
                            } ?>
                        </a>
                    </div>
                    <div class="post-details opacity-zero">
                        <div class="post-cat">                                                 
                            <?php echo birkita_get_category_link($post_id);?>                                      
                        </div>
                        <h3 class="post-title">
    						<a href="<?php the_permalink() ?>">
    							<?php 
    								$title = get_the_title();
    								echo birkita_the_excerpt_limit($title, 10);
    							?>
    						</a>
    					</h3>
                        <div class="entry-excerpt">
                            <?php 
                                $string = get_the_excerpt();
                                echo birkita_the_excerpt_limit($string, 16); 
                            ?>
                        </div>
                        <div class="post-meta clear-fix">
                            <div class="post-author">
                                <span class="avatar">
                                    By
                                </span>
                                <?php the_author_posts_link();?>                            
                            </div> 
                            <div class="date">
                                <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
                            </div> 
                            <div class="meta-comment">
                                <span><i class="fa fa-comments-o"></i></span>
                                <a href="<?php echo (get_permalink($post_id).'#comments');?>">
                                    <?php echo get_comments_number($post_id)?>
                                </a>
                            </div>                         
                        </div>
                        <div class="read-more-post">
                            <?php if (the_title( ' ', ' ', false ) == "") {?>
                                <a href="<?php the_permalink() ?>">
                                    <span>Continue Read</span>
                                </a>
                            <?php } ?>
                        </div>
					</div>
                 </div>
             </div>                   					
		<?php 
    }
}
/* Render Classic Blog Content */
if ( ! function_exists( 'birkita_classic_blog_render')) {
    function birkita_classic_blog_render($post_id, $excerpt_length){?>	                             
        <div <?php if(is_sticky()) post_class('sticky classic-blog-style type-out clear-fix'); else post_class('classic-blog-style type-out clear-fix'); ?>>
            <div class="thumb hide-thumb">
				<a href="<?php the_permalink() ?>">
                    <?php echo (birkita_get_thumbnail($post_id, 'birkita_570_380'));?>
                </a>
                <?php echo birkita_review_score($post_id);?>
                <a href="<?php the_permalink() ?>">
                    <?php if (get_post_format($post_id) == 'video') {
                        echo '<span class="post-format-icon"><i class="fa fa-play" aria-hidden="true"></i></span>';
                    } else if (get_post_format($post_id) == 'audio') {
                        echo '<span class="post-format-icon"><i class="fa fa-music" aria-hidden="true"></i></span>';
                    } else if (get_post_format($post_id) == 'gallery') {
                        echo '<span class="post-format-icon"><i class="fa fa-camera" aria-hidden="true"></i></span>';
                    } else if (get_post_format($post_id) == 'image') {
                        echo '<span class="post-format-icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>';
                    } else {
                        echo '';
                    } ?>
                </a>
            </div>
            <div class="post-details table">
                <div class="table-cell">
                    <div class="post-cat">
        				<?php echo birkita_get_category_link($post_id);?> 
        			</div>
                    <h3 class="post-title">
    					<a href="<?php the_permalink() ?>">
    						<?php 
    							$title = get_the_title();
    							echo birkita_the_excerpt_limit($title, 10);
    						?>
    					</a>
    				</h3>						                                
    				<div class="entry-excerpt">
                    <?php 
                    $string = get_the_excerpt();
                    echo birkita_the_excerpt_limit($string, $excerpt_length); ?>
                    </div>
                    <div class="post-meta">                                        
                        <div class="post-author">
                            <span class="avatar">
                                By
                            </span>
                            <?php the_author_posts_link();?>                            
                        </div>
                        <div class="date">
                            <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
                        </div>
                        <div class="meta-comment">
                            <span><i class="fa fa-comments-o"></i></span>
                            <a href="<?php echo (get_permalink($post_id).'#comments');?>">
                                <?php echo get_comments_number($post_id)?>
                            </a>
                        </div>
                    </div>
                    <div class="read-more-post">
                        <?php if (the_title( ' ', ' ', false ) == "") {?>
                            <a href="<?php the_permalink() ?>">
                                <span>Continue Read</span>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php 
    }
}

/* Render Large Blog Content */
if ( ! function_exists( 'birkita_large_blog_render')) {
    function birkita_large_blog_render($post_id, $excerpt_length){?>           
        <div <?php if(is_sticky()) post_class('sticky large-blog-style type-out clear-fix'); else post_class('large-blog-style type-out clear-fix'); ?>>
            <div class="thumb hide-thumb">
				<a href="<?php the_permalink() ?>">
                    <?php echo (birkita_get_thumbnail($post_id, 'birkita_1000_500'));?>
                </a>
                <?php echo birkita_review_score($post_id);?>
                <a href="<?php the_permalink() ?>">
                    <?php if (get_post_format($post_id) == 'video') {
                        echo '<span class="post-format-icon"><i class="fa fa-play" aria-hidden="true"></i></span>';
                    } else if (get_post_format($post_id) == 'audio') {
                        echo '<span class="post-format-icon"><i class="fa fa-music" aria-hidden="true"></i></span>';
                    } else if (get_post_format($post_id) == 'gallery') {
                        echo '<span class="post-format-icon"><i class="fa fa-camera" aria-hidden="true"></i></span>';
                    } else if (get_post_format($post_id) == 'image') {
                        echo '<span class="post-format-icon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>';
                    } else {
                        echo '';
                    } ?>
                </a>
            </div>
            <div class="post-details">
                <div class="post-cat">
                    <?php echo birkita_get_category_link($post_id);?>
                </div>
                <h3 class="post-title">
    				<a href="<?php the_permalink() ?>">
    					<?php 
    						$title = get_the_title();
    						echo birkita_the_excerpt_limit($title, 10);
    					?>
    				</a>
    			</h3>	                             
				<div class="entry-excerpt">
                <?php 
                $string = get_the_excerpt();
                echo birkita_the_excerpt_limit($string, $excerpt_length); ?>
                </div>
                <div class="post-meta clear-fix">                    
                    <div class="post-author">
                        <span class="avatar">
                            By
                        </span>
                        <?php the_author_posts_link();?>                            
                    </div>
                    <div class="date">
                        <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
                    </div>
                    <div class="meta-comment">
                        <span><i class="fa fa-comments-o"></i></span>
                        <a href="<?php echo (get_permalink($post_id).'#comments');?>">
                            <?php echo get_comments_number($post_id)?>
                        </a>
                    </div>
                </div>
                <div class="read-more-post">
                    <?php if (the_title( ' ', ' ', false ) == "") {?>
                        <a href="<?php the_permalink() ?>">
                            <span>Continue Read</span>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php 
    }
}
    
/**
 * AJAX SECTION 
 * 
 * ==================================*/
// Masonry
add_action( 'wp_ajax_masonry_load', 'birkita_ajax_masonry_load' );
add_action('wp_ajax_nopriv_masonry_load', 'birkita_ajax_masonry_load');
if ( ! function_exists( 'birkita_ajax_masonry_load' ) ) {
    function birkita_ajax_masonry_load() {
        $post_offset = isset( $_POST['post_offset'] ) ? $_POST['post_offset'] : 0;
        $entries = isset( $_POST['entries'] ) ? $_POST['entries'] : 0;
        $args = isset( $_POST['args'] ) ? $_POST['args'] : null;    
        $args[ 'posts_per_page' ] = $entries;
        $args[ 'offset' ] = $post_offset;
        $birkita_ajax_output = '';
                
        $the_query = new WP_Query( $args );
        while ( $the_query -> have_posts() ) : $the_query -> the_post();
            $birkita_ajax_output .= birkita_masonry_render(get_the_ID());
        endwhile;
        echo ($birkita_ajax_output);
        die();
    }
}
// Post Grid
add_action( 'wp_ajax_post_grid_load', 'birkita_ajax_post_grid_load' );
add_action('wp_ajax_nopriv_post_grid_load', 'birkita_ajax_post_grid_load');
if ( ! function_exists( 'birkita_ajax_post_grid_load' ) ) {
    function birkita_ajax_post_grid_load() {
        $post_offset = isset( $_POST['post_offset'] ) ? $_POST['post_offset'] : 0;
        $entries = isset( $_POST['entries'] ) ? $_POST['entries'] : 0;
        $args = isset( $_POST['args'] ) ? $_POST['args'] : null;    
        $args[ 'posts_per_page' ] = $entries;
        $args[ 'offset' ] = $post_offset;
        $birkita_ajax_output = '';
                
        $the_query = new WP_Query( $args );
        while ( $the_query -> have_posts() ) : $the_query -> the_post();
            $birkita_ajax_output .= birkita_post_grid(get_the_ID());
        endwhile;
        echo ($birkita_ajax_output);
        die();
    }
}
// Classic Blog
add_action( 'wp_ajax_classic_blog_load', 'birkita_ajax_classic_blog_load' );
add_action('wp_ajax_nopriv_classic_blog_load', 'birkita_ajax_classic_blog_load');
if ( ! function_exists( 'birkita_ajax_classic_blog_load' ) ) {
    function birkita_ajax_classic_blog_load() {
        $post_offset = isset( $_POST['post_offset'] ) ? $_POST['post_offset'] : 0;
        $entries = isset( $_POST['entries'] ) ? $_POST['entries'] : 0;
        $excerpt_length = isset( $_POST['excerpt_length'] ) ? $_POST['excerpt_length'] : 0;
        $args = isset( $_POST['args'] ) ? $_POST['args'] : null;    
        $args[ 'posts_per_page' ] = $entries;
        $args[ 'offset' ] = $post_offset;
        $birkita_ajax_output = '';        
        $the_query = new WP_Query( $args );
        while ( $the_query -> have_posts() ) : $the_query -> the_post(); 
            $post_id = get_the_ID();
            $birkita_ajax_output .= birkita_classic_blog_render($post_id, $excerpt_length);
        endwhile;
        echo ($birkita_ajax_output);
        die();
    }
}
// Large Blog
add_action( 'wp_ajax_large_blog_load', 'birkita_ajax_large_blog_load' );
add_action('wp_ajax_nopriv_large_blog_load', 'birkita_ajax_large_blog_load');
if ( ! function_exists( 'birkita_ajax_large_blog_load' ) ) {
    function birkita_ajax_large_blog_load() {
        $post_offset = isset( $_POST['post_offset'] ) ? $_POST['post_offset'] : 0;
        $entries = isset( $_POST['entries'] ) ? $_POST['entries'] : 0;
        $excerpt_length = isset( $_POST['excerpt_length'] ) ? $_POST['excerpt_length'] : 0;
        $args = isset( $_POST['args'] ) ? $_POST['args'] : null;    
        $args[ 'posts_per_page' ] = $entries;
        $args[ 'offset' ] = $post_offset;
        $birkita_ajax_output = '';        
        $the_query = new WP_Query( $args );
        $the_query = new WP_Query( $args );
        while ( $the_query -> have_posts() ) : $the_query -> the_post(); 
            $post_id = get_the_ID();
            $birkita_ajax_output .= birkita_large_blog_render($post_id, $excerpt_length);
        endwhile;
        echo ($birkita_ajax_output);
        die();
    }
}
if ( ! function_exists( 'birkita_get_article_info' ) ) { 
    function birkita_get_article_info($birkita_PostId, $birkita_author_id){  
        $article_info = '';
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $birkita_PostId ), 'full' );
        $article_info .= '<meta itemprop="author" content="'.get_the_author_meta('display_name', $birkita_author_id).'">';
        $article_info .= '<meta itemprop="headline " content="'.get_the_title($birkita_PostId).'">';
        $article_info .= '<meta itemprop="datePublished" content="'.date(DATE_W3C, get_the_time('U', $birkita_PostId)).'">';
        $article_info .= '<meta itemprop="image" content="'.esc_attr( $thumbnail_src[0] ).'">';
        $article_info .= '<meta itemprop="interactionCount" content="UserComments:' . get_comments_number($birkita_PostId) . '"/>';
        return $article_info;
    }
}
/**
 * birkita WP Native Gallery
 */
if ( ! function_exists( 'birkita_native_gallery' ) ) { 
     function birkita_native_gallery($birkita_PostId, $attachment_ids){
        global $justified_ids;
        $uid = rand();
        $justified_ids[]=$uid;
        wp_localize_script( 'birkita-customjs', 'justified_ids', $justified_ids );
        $ret = '';
        
        $ret .= '<div class="zoom-gallery justifiedgall_'.$uid.' justified-gallery" style="margin: 0px 0px 1.5em;">';
						if ($attachment_ids) :					
						foreach ($attachment_ids as $id) :
							$attachment_url = wp_get_attachment_image_src( $id, 'full' );
                            $attachment = get_post($id);
							$caption = apply_filters('the_title', $attachment->post_excerpt);
					
                            $ret .= '<a class="zoomer" title="'.$caption.'" data-source="'.$attachment_url[0].'" href="'.$attachment_url[0].'">'.wp_get_attachment_image($attachment->ID, 'full').'</a>';

						endforeach;
						endif;
			$ret .= '</div>';
            return $ret;
     }
}
/**
 *  Single Content
 */   
if ( ! function_exists( 'birkita_single_content' ) ) { 
    function birkita_single_content($birkita_PostId){
        $the_content = '';
        $the_content = apply_filters( 'the_content', get_the_content($birkita_PostId) );
        $the_content = str_replace( ']]>', ']]&gt;', $the_content );

        $post_content_str = get_the_content($birkita_PostId);
        $gallery_flag = 0;
        $i = 0;
        $ids = null;
        for ($i=0; $i < 10; $i++) {
            preg_match('/<style(.+(\n))+.*?<\/div>/', $the_content, $match);
                
            preg_match('/\[gallery.*ids=.(.*).\]/', $post_content_str, $ids);             
            
            if ($ids != null) {
                $the_content = str_replace($match[0], $ids[0] ,$the_content);          
                   
                $attachment_ids = explode(",", $ids[1]);
                $post_content_str = str_replace($ids[0], birkita_native_gallery ($birkita_PostId, $attachment_ids),$post_content_str);
                $the_content = str_replace($ids[0], birkita_native_gallery ($birkita_PostId, $attachment_ids),$the_content);
                $gallery_flag = 1;
            }
        }
        if($gallery_flag == 1) {
            return $the_content;
        }else {
            return the_content($birkita_PostId);
        }
    }
}
/**
 * Single Tags
 */
if ( ! function_exists( 'birkita_single_tags' ) ) { 
    function birkita_single_tags($tags) {
        $single_tags = '';
        $single_tags .= '<div class="s-tags">';
        $single_tags .= '<span>Tags</span>';
    		foreach ($tags as $tag):
    			$single_tags .= '<a href="'. get_tag_link($tag->term_id) .'" title="'. esc_attr(sprintf(esc_html__("View all posts tagged %s",'birkita'), $tag->name)) .'">'. $tag->name.'</a>';
    		endforeach;
        $single_tags .= '</div>';
        return $single_tags;
    }
}
/**
 * Post Navigation
 */
if ( ! function_exists( 'birkita_single_post_nav' ) ) { 
    function birkita_single_post_nav($next_post, $prev_post){
        $post_nav = '';
        $post_nav .= '<div class="s-post-nav clear-fix">';  
        if (!empty($prev_post)):
            $post_nav .= '<div class="nav-btn nav-prev">';
    		$post_nav .= '<div class="nav-title clear-fix">';
            $post_nav .= '<span class="icon"><i class="fa fa-long-arrow-left"></i></span>';
            $post_nav .= '<span>'.esc_html__("Previous Article",'birkita').'</span>';
            $post_nav .= '<h3>';
            $post_nav .= '<a href="'.get_permalink( $prev_post->ID ).'">'.birkita_excerpt_limit_by_word(get_the_title($prev_post->ID),7).'</a>';
            $post_nav .= '</h3>';
            $post_nav .= '</div></div>';
		endif;
        if (!empty($next_post)):
            $post_nav .= '<div class="nav-btn nav-next">';
            $post_nav .= '<div class="nav-title clear-fix">';
            $post_nav .= '<span class="icon"><i class="fa fa-long-arrow-right"></i></span>';
            $post_nav .= '<span>'.esc_html__("Next Article",'birkita').'</span>';
            $post_nav .= '<h3>';
            $post_nav .= '<a href="'.get_permalink( $next_post->ID ).'">'.birkita_excerpt_limit_by_word(get_the_title($next_post->ID),7).'</a>';
            $post_nav .= '</h3>';
            $post_nav .= '</div></div>';
        endif;                
        $post_nav .= '</div>';
        return $post_nav;
    }     
}
/**
 * ************* Related Post *****************
 *---------------------------------------------------
 */     

if ( ! function_exists( 'birkita_related_posts' ) ) {        
    function birkita_related_posts($birkita_number_related) {
        global $post;
        $birkita_post_id = $post->ID;
        if (is_attachment() && ($post->post_parent)) { $birkita_post_id = $post->post_parent; };
        $i = 1;
        $birkita_related_posts = array();
        $birkita_relate_tags = array();
        $birkita_relate_categories = array();
        $excludeid = array();
        $birkita_number_related_remain = 0;
        array_push($excludeid, $birkita_post_id);

            $birkita_tags = wp_get_post_tags($birkita_post_id);   
            $tag_length = sizeof($birkita_tags);                               
            $birkita_tag_check = $birkita_all_cats = NULL;
 
 // Get tag post
            if ($tag_length > 0){
                foreach ( $birkita_tags as $birkita_tag ) { $birkita_tag_check .= $birkita_tag->slug . ','; }             
                    $birkita_related_args = array(   'numberposts' => $birkita_number_related, 
                                                'tag' => $birkita_tag_check, 
                                                'post__not_in' => $excludeid,
                                                'post_status' => 'publish',
                                                'orderby' => 'rand'  );
                $birkita_relate_tags_posts = get_posts( $birkita_related_args );
                $birkita_number_related_remain = $birkita_number_related - sizeof($birkita_relate_tags_posts);
                if(sizeof($birkita_relate_tags_posts) > 0){
                    foreach ( $birkita_relate_tags_posts as $birkita_relate_tags_post ) {
                        array_push($excludeid, $birkita_relate_tags_post->ID);
                        array_push($birkita_related_posts, $birkita_relate_tags_post);
                    }
                }
            }
 // Get categories post
            $birkita_categories = get_the_category($birkita_post_id);  
            $category_length = sizeof($birkita_categories);       
            if ($category_length > 0){       
                foreach ( $birkita_categories as $birkita_category ) { $birkita_all_cats .= $birkita_category->term_id  . ','; }
                    $birkita_related_args = array(  'numberposts' => $birkita_number_related_remain, 
                                            'category' => $birkita_all_cats, 
                                            'post__not_in' => $excludeid, 
                                            'post_status' => 'publish', 
                                            'orderby' => 'rand'  );
                $birkita_relate_categories = get_posts( $birkita_related_args );
    
                if(sizeof($birkita_relate_categories) > 0){
                    foreach ( $birkita_relate_categories as $birkita_relate_category ) {
                        array_push($birkita_related_posts, $birkita_relate_category);
                    }
                }
            }
            if ( $birkita_related_posts != NULL ) {
                
                echo '<div id="birkita_related-posts" class="clear-fix">
                        <h3 class="block-title">'.esc_html__('Related Posts', 'birkita').'</h3><ul>';
                foreach ( $birkita_related_posts as $key => $post ) { //setup global post
                    if($key > ($birkita_number_related - 1))
                        break;                                   
                    setup_postdata($post);  
?> 
                    <li class="type-in">
						<div class="thumb-wrap">
							<div class="thumb">
								<a href="<?php the_permalink() ?>">
                                    <?php echo (birkita_get_thumbnail(get_the_ID(), 'birkita_330_220'));?>
                                </a>
							</div>
						</div>
						<div class="post-info">
                            <?php 
        					$category = get_the_category(); 
                            if (array_key_exists(0,$category)){
            					if($category[0]){?>  										
            						<div class="post-cat post-cat-bg">
            							<?php echo '<a  href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; ?>
            						</div>					
            			     <?php
            					}
                            }
        				    ?>
							<h3 class="post-title">
								<a href="<?php the_permalink() ?>">
									<?php
                                        $title = get_the_title();
                                        $short_title = birkita_the_excerpt_limit($title, 10);
										echo esc_attr($short_title); 
									?>
								</a>
							</h3>	
                            <div class="post-meta">
								<div class="post-author">
									<span class="avatar">
										By
									</span>
									<?php the_author_posts_link();?>                            
								</div>                                        
								<div class="date">
									<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
								</div>
							</div>
						</div>							
					</li>
<?php 
                  } 
               echo '</ul></div>';
            wp_reset_postdata();    
            }    
    }
}
/**
 * ************* Social Share Box *****************
 *---------------------------------------------------
 */
if ( ! function_exists( 'birkita_share_box' ) ) {          
    function birkita_share_box($birkita_PostId, $social_share) {
        $titleget = get_the_title($birkita_PostId);
        $fb_oc = "window.open('http://www.facebook.com/sharer.php?u=".urlencode(get_permalink())."','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;";
        $tw_oc = "window.open('http://twitter.com/share?url=".urlencode(get_permalink())."&amp;text=".str_replace(" ", "%20", $titleget)."','Twitter share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;";
        $gp_oc = "window.open('https://plus.google.com/share?url=".urlencode(get_permalink())."','Google plus','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;";
        $stu_oc = "window.open('http://www.stumbleupon.com/submit?url=".urlencode(get_permalink())."','Stumbleupon','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;";
        $li_oc = "window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=".urlencode(get_permalink())."','Linkedin','width=863,height=500,left='+(screen.availWidth/2-431)+',top='+(screen.availHeight/2-250)+''); return false;";
        $str_ret = '';
        $str_ret .= '<div class="birkita_share-box">';
        $str_ret .= '<div class="share-box-wrap">';
        $str_ret .= '<div class="share-box">';
        $str_ret .= '<ul class="social-share">';
        if (isset($social_share['fb']) && ($social_share['fb'])): 
            $str_ret .= '<li class="birkita_facebook_share"><a onClick="'.$fb_oc.'" href="http://www.facebook.com/sharer.php?u='.urlencode(get_permalink()).'"><div class="share-item-icon"><i class="fa fa-facebook " title="Facebook"></i></div></a></li>';
        endif; 
        if (isset($social_share['tw']) && ($social_share['tw'])):
            $str_ret .= '<li class="birkita_twitter_share"><a onClick="'.$tw_oc.'" href="http://twitter.com/share?url='.urlencode(get_permalink()).'&amp;text='.str_replace(" ", "%20", $titleget).'"><div class="share-item-icon"><i class="fa fa-twitter " title="Twitter"></i></div></a></li>';
        endif;
        if (isset($social_share['gp']) && ($social_share['gp'])):
            $str_ret .= '<li class="birkita_gplus_share"><a onClick="'.$gp_oc.'" href="https://plus.google.com/share?url='.urlencode(get_permalink()).'"><div class="share-item-icon"><i class="fa fa-google-plus " title="Google Plus"></i></div></a></li>';
        endif;
        if (isset($social_share['pi']) && ($social_share['pi'])):
            $str_ret .= '<li class="birkita_pinterest_share"><a href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());"><div class="share-item-icon"><i class="fa fa-pinterest " title="Pinterest"></i></div></a></li>';
        endif;
        if (isset($social_share['stu']) && ($social_share['stu'])):
            $str_ret .= '<li class="birkita_stumbleupon_share"><a onClick="'.$stu_oc.'" href="http://www.stumbleupon.com/submit?url='.urlencode(get_permalink()).'"><div class="share-item-icon"><i class="fa fa-stumbleupon " title="Stumbleupon"></div></i></a></li>';
        endif;
        if (isset($social_share['li']) && ($social_share['li'])):
            $str_ret .= '<li class="birkita_linkedin_share"><a onClick="'.$li_oc.'" href="http://www.linkedin.com/shareArticle?mini=true&amp;url='.urlencode(get_permalink()).'"><div class="share-item-icon"><i class="fa fa-linkedin " title="Linkedin"></i></div></a></li>';
        endif;      
        $str_ret .= '</ul>';
        $str_ret .= '</div>';
        $str_ret .= '</div>';
        $str_ret .= '</div>';
        return $str_ret;  
    }    
}
/**
* ************* Author box *****************
*---------------------------------------------------
*/ 
if ( ! function_exists( 'birkita_author_details' ) ) {   
    function birkita_author_details($birkita_author_id, $birkita_desc = true) {
        
        $birkita_author_email = get_the_author_meta('publicemail', $birkita_author_id);
        $birkita_author_name = get_the_author_meta('display_name', $birkita_author_id);
        $birkita_author_tw = get_the_author_meta('twitter', $birkita_author_id);
        $birkita_author_go = get_the_author_meta('googleplus', $birkita_author_id);
        $birkita_author_fb = get_the_author_meta('facebook', $birkita_author_id);
        $birkita_author_yo = get_the_author_meta('youtube', $birkita_author_id);
        $birkita_author_www = get_the_author_meta('url', $birkita_author_id);
        $birkita_author_desc = get_the_author_meta('description', $birkita_author_id);
        $birkita_author_posts = count_user_posts( $birkita_author_id ); 
    
        $birkita_author = NULL;
        $birkita_author .= '<div class="birkita_author-box clear-fix"><div class="birkita_author-avatar"><a href="'.get_author_posts_url($birkita_author_id).'">'. get_avatar($birkita_author_id, '75').'</a></div><div class="author-info" itemprop="author"><h3><a href="'.get_author_posts_url($birkita_author_id).'">'.$birkita_author_name.'</a></h3>';
                            
        if (($birkita_author_desc != NULL) && ($birkita_desc == true)) { $birkita_author .= '<p class="birkita_author-bio">'. $birkita_author_desc .'</p>'; }                    
        if (($birkita_author_email != NULL) || ($birkita_author_www != NULL) || ($birkita_author_tw != NULL) || ($birkita_author_go != NULL) || ($birkita_author_fb != NULL) ||($birkita_author_yo != NULL)) {$birkita_author .= '<div class="birkita_author-page-contact">';}
        if ($birkita_author_email != NULL) { $birkita_author .= '<a class="birkita_tipper-bottom" data-title="Email" href="mailto:'. $birkita_author_email.'"><i class="fa fa-envelope " title="'.esc_html__('Email', 'birkita').'"></i></a>'; } 
        if ($birkita_author_www != NULL) { $birkita_author .= ' <a class="birkita_tipper-bottom" data-title="Website" href="'. $birkita_author_www .'" target="_blank"><i class="fa fa-globe " title="'.esc_html__('Website', 'birkita').'"></i></a> '; } 
        if ($birkita_author_tw != NULL) { $birkita_author .= ' <a class="birkita_tipper-bottom" data-title="Twitter" href="//www.twitter.com/'. $birkita_author_tw.'" target="_blank" ><i class="fa fa-twitter " title="'.esc_html__('Twitter','birkita').'"></i></a>'; } 
        if ($birkita_author_go != NULL) { $birkita_author .= ' <a class="birkita_tipper-bottom" data-title="Google Plus" href="'. $birkita_author_go .'" rel="publisher" target="_blank"><i title="'.esc_html__('Google+','birkita').'" class="fa fa-google-plus " ></i></a>'; }
        if ($birkita_author_fb != NULL) { $birkita_author .= ' <a class="birkita_tipper-bottom" data-title="Facebook" href="'.$birkita_author_fb. '" target="_blank" ><i class="fa fa-facebook " title="'.esc_html__('Facebook','birkita').'"></i></a>'; }
        if ($birkita_author_yo != NULL) { $birkita_author .= ' <a class="birkita_tipper-bottom" data-title="Youtube" href="http://www.youtube.com/user/'.$birkita_author_yo. '" target="_blank" ><i class="fa fa-youtube " title="'.esc_html__('Youtube','birkita').'"></i></a>'; }
        if (($birkita_author_email != NULL) || ($birkita_author_www != NULL) || ($birkita_author_go != NULL) || ($birkita_author_tw != NULL) || ($birkita_author_fb != NULL) ||($birkita_author_yo != NULL)) {$birkita_author .= '</div>';}                          
        
        $birkita_author .= '</div></div><!-- close author-infor-->';
             
        return $birkita_author;
    }
}/**
 * birkita_ Comments
 */
/**
 * birkita Comments
 */
if ( ! function_exists( 'birkita_comments') ) {
    function birkita_comments($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		<li <?php comment_class(); ?>>
			<article id="comment-<?php comment_ID(); ?>" class="comment-article  media">
                <header class="comment-author clear-fix">
                    <div class="comment-avatar">
                        <?php echo get_avatar( get_comment_author_email(), 60 ); ?>  
                    </div>
                        <?php printf('<span class="comment-author-name">%s</span>', get_comment_author_link()) ?>
    					          <span class="comment-time" datetime="<?php comment_time('c'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>" class="comment-timestamp"><?php comment_time(esc_html__('j F, Y \a\t H:i', 'birkita')); ?> </a></span>
                        <span class="comment-links">
                            <?php
                                edit_comment_link(esc_html__('Edit', 'birkita'),'  ','');
                                comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])));
                            ?>
                        </span>
                    </header><!-- .comment-meta -->
                
                <div class="comment-text">
                    				
    				<?php if ($comment->comment_approved == '0') : ?>
    				<div class="alert info">
    					<p><?php esc_html_e('Your comment is awaiting moderation.', 'birkita') ?></p>
    				</div>
    				<?php endif; ?>
    				<section class="comment-content">
    					<?php comment_text() ?>
    				</section>
                </div>
			</article>
		<!-- </li> is added by WordPress automatically -->
		<?php
    }
}
/**
 * Canvas box 
 */
if ( ! function_exists( 'birkita_canvas_box') ) {
     function birkita_canvas_box($birkita_final_score){
        $birkita_option = birkita_global_var_declare('birkita_option');
        $birkita_best_rating = '10';
        $birkita_review_final_score = floatval($birkita_final_score);  
        $arc_percent = $birkita_final_score*10;
        $birkita_canvas_ret = '';                                       
        $score_circle = '<canvas class="rating-canvas" data-rating="'.$arc_percent.'"></canvas>';           
        $birkita_canvas_ret .= '<div class="birkita_score-box" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">'.$score_circle.'<meta itemprop="worstRating" content="1"><meta itemprop="bestRating" content="'. $birkita_best_rating .'"><span class="score" itemprop="ratingValue">'.$birkita_review_final_score.'</span></div><!--close canvas-->';
        return $birkita_canvas_ret;
    }
}
/**
* ************* Display post review box ********
*---------------------------------------------------
*/
if ( ! function_exists( 'birkita_post_review_boxes') ) {
    function birkita_post_review_boxes($birkita_post_id, $reviewPos){
        $birkita_option = birkita_global_var_declare('birkita_option');
        if (isset($birkita_option)){
            $primary_color = $birkita_option['birkita_primary-color'];
        }
        $birkita_custom_fields = get_post_custom();
        $birkita_review_checkbox = get_post_meta($birkita_post_id, 'birkita_review_checkbox', true );
        $birkita_best_rating = '10';
        if ( $birkita_review_checkbox == '1' ) {
             $birkita_review_checkbox = 'on'; 
        } else {
             $birkita_review_checkbox = 'off';
        }
        if ($birkita_review_checkbox == 'on') {
            $birkita_summary = get_post_meta($birkita_post_id, 'birkita_summary', true );                
            $birkita_final_score = get_post_meta($birkita_post_id, 'birkita_final_score', true );        
            
            if ( isset ( $birkita_custom_fields['birkita_ct1'][0] ) ) { $birkita_rating_1_title = $birkita_custom_fields['birkita_ct1'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_cs1'][0] ) ) { $birkita_rating_1_score = $birkita_custom_fields['birkita_cs1'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_ct2'][0] ) ) { $birkita_rating_2_title = $birkita_custom_fields['birkita_ct2'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_cs2'][0] ) ) { $birkita_rating_2_score = $birkita_custom_fields['birkita_cs2'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_ct3'][0] ) ) { $birkita_rating_3_title = $birkita_custom_fields['birkita_ct3'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_cs3'][0] ) ) { $birkita_rating_3_score = $birkita_custom_fields['birkita_cs3'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_ct4'][0] ) ) { $birkita_rating_4_title = $birkita_custom_fields['birkita_ct4'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_cs4'][0] ) ) { $birkita_rating_4_score = $birkita_custom_fields['birkita_cs4'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_ct5'][0] ) ) { $birkita_rating_5_title = $birkita_custom_fields['birkita_ct5'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_cs5'][0] ) ) { $birkita_rating_5_score = $birkita_custom_fields['birkita_cs5'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_ct6'][0] ) ) { $birkita_rating_6_title = $birkita_custom_fields['birkita_ct6'][0]; }
            if ( isset ( $birkita_custom_fields['birkita_cs6'][0] ) ) { $birkita_rating_6_score = $birkita_custom_fields['birkita_cs6'][0]; }
            
            $birkita_ratings = array();  
        
            for( $i = 1; $i < 7; $i++ ) {
                 if ( isset(${"birkita_rating_".$i."_score"}) ) { $birkita_ratings[] =  ${"birkita_rating_".$i."_score"};}
            }
            $birkita_review_ret = '<div class="birkita_review-box '.$reviewPos.' clear-fix"><div class="birkita_detail-rating clear-fix">'; 
            for( $j = 1; $j < 7; $j++ ) {
                
                 $k = ($j - 1);
            
                 if ((isset(${"birkita_rating_".$j."_title"})) && (isset(${"birkita_rating_".$j."_score"})) ) {                       
                        $birkita_review_ret .= '<div class="birkita_criteria-wrap"><span class="birkita_criteria">'. ${"birkita_rating_".$j."_title"}.'</span><span class="birkita_criteria-score">'. $birkita_ratings[$k].'</span>';                                     
                        $birkita_review_ret .= '<div class="birkita_bar clear-fix"><span class="birkita_overlay"><span class="birkita_zero-trigger" style="width:'. ( ${"birkita_rating_".$j."_score"}*10).'%"></span></span></div></div>';
                 }
            }
            $birkita_review_ret .= '</div>';
            $birkita_review_ret .= '<div class="summary-wrap clear-fix">';
            $birkita_review_ret .= '<div class="birkita_score-box" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"><meta itemprop="worstRating" content="1"><meta itemprop="bestRating" content="'. $birkita_best_rating .'"><span class="score" itemprop="ratingValue">'.$birkita_final_score.'</span><span class="score-title">'.esc_html__('Overall Score', 'birkita').'</span></div>';
            if ( $birkita_summary != NULL ) { $birkita_review_ret .= '<div class="birkita_summary"><div id="birkita_conclusion" itemprop="description">'.$birkita_summary.'</div></div>'; }                                    
            $birkita_review_ret .= '</div><!-- /birkita_author-review-box -->';
            $birkita_review_ret .= '</div> <!--birkita_review-box close-->';
            return $birkita_review_ret;
        }
    }
}
/**
* ************* Get youtube ID  *****************
*---------------------------------------------------
*/ 
if ( ! function_exists( 'birkita_parse_youtube') ) { 
    function birkita_parse_youtube($link){
     
        $regexstr = '~
            # Match Youtube link and embed code
            (?:                             # Group to match embed codes
                (?:<iframe [^>]*src=")?       # If iframe match up to first quote of src
                |(?:                        # Group to match if older embed
                    (?:<object .*>)?      # Match opening Object tag
                    (?:<param .*</param>)*  # Match all param tags
                    (?:<embed [^>]*src=")?  # Match embed tag to the first quote of src
                )?                          # End older embed code group
            )?                              # End embed code groups
            (?:                             # Group youtube url
                https?:\/\/                 # Either http or https
                (?:[\w]+\.)*                # Optional subdomains
                (?:                         # Group host alternatives.
                youtu\.be/                  # Either youtu.be,
                | youtube\.com              # or youtube.com
                | youtube-nocookie\.com     # or youtube-nocookie.com
                )                           # End Host Group
                (?:\S*[^\w\-\s])?           # Extra stuff up to VIDEO_ID
                ([\w\-]{11})                # $1: VIDEO_ID is numeric
                [^\s]*                      # Not a space
            )                               # End group
            "?                              # Match end quote if part of src
            (?:[^>]*>)?                       # Match any extra stuff up to close brace
            (?:                             # Group to match last embed code
                </iframe>                 # Match the end of the iframe
                |</embed></object>          # or Match the end of the older embed
            )?                              # End Group of last bit of embed code
            ~ix';
    
        preg_match($regexstr, $link, $matches);
    
        return $matches[1];
    
    }
}
/**
 * ************* Get vimeo ID *****************
 *---------------------------------------------------
 */  
if ( ! function_exists( 'birkita_parse_vimeo') ) { 
    function birkita_parse_vimeo($link){
     
        $regexstr = '~
            # Match Vimeo link and embed code
            (?:<iframe [^>]*src=")?       # If iframe match up to first quote of src
            (?:                         # Group vimeo url
                https?:\/\/             # Either http or https
                (?:[\w]+\.)*            # Optional subdomains
                vimeo\.com              # Match vimeo.com
                (?:[\/\w]*\/videos?)?   # Optional video sub directory this handles groups links also
                \/                      # Slash before Id
                ([0-9]+)                # $1: VIDEO_ID is numeric
                [^\s]*                  # Not a space
            )                           # End group
            "?                          # Match end quote if part of src
            (?:[^>]*></iframe>)?        # Match the end of the iframe
            (?:<p>.*</p>)?              # Match any title information stuff
            ~ix';
    
        preg_match($regexstr, $link, $matches);
    
        return $matches[1];
    }
}
/**
 * Video Post Format
 */
if ( ! function_exists( 'birkita_get_video_postFormat') ) {
    function birkita_get_video_postFormat($postFormat) { 
        $videoFormat = '';
        if ($postFormat['url'] != null) {
            $videoFormat .= '<div class="birkita_embed-video">';
            $videoFormat .= $postFormat['iframe'];
            $videoFormat .= '</div> <!-- End embed-video -->';
        }else {
            $videoFormat .= '';
        }
        return $videoFormat;
    }
}
/**
 * Audio Post Format
 */
if ( ! function_exists( 'birkita_get_audio_postFormat') ) {
    function birkita_get_audio_postFormat($birkita_PostId, $postFormat, $audioType) { 
        $audioFormat = '';
        if ($postFormat['url'] != null) {
            preg_match('/src="([^"]+)"/', wp_oembed_get( $postFormat['url'] ), $match);
            
            if(isset($match[1])) {
                $birkitaNewURL = $match[1];
            }else {
                return null;
            }

            $audioFormat .= '<div class="birkita_embed-audio"><div class="birkita_frame-wrap">';
            $audioFormat .= wp_oembed_get( $postFormat['url'] );
            $audioFormat .= '</div></div>';
        }else {
            $audioFormat .= '';
        }
        return $audioFormat;
    }
}
 /**
 * Gallery Post Format
 */
if ( ! function_exists( 'birkita_get_gallery_postFormat') ) {
    function birkita_get_gallery_postFormat($galleryImages, $birkita_layout) { 
        if(($birkita_layout == 'feat-fw') || ($birkita_layout == 'no-sidebar')) {
            $thumb_size = 'birkita_1000_500';
        }else {
            $thumb_size = 'birkita_630_400';
        }
        $galleryFormat = '';
        $galleryFormat .= '<div class="gallery-wrap">';
        $galleryFormat .= '<div id="birkita_gallery-slider" class="flexslider">';
        $galleryFormat .= '<ul class="slides">';
        foreach ( $galleryImages as $image ){
            $attachment_url = wp_get_attachment_image_src($image['ID'], 'full', true);
            $attachment = get_post($image['ID']);
            $caption = apply_filters('the_title', $attachment->post_excerpt);
            $galleryFormat .= '<li class="birkita_gallery-item">';
                $galleryFormat .= '<a class="zoomer" title="'.$caption.'" data-source="'.$attachment_url[0].'" href="'.$attachment_url[0].'">'.wp_get_attachment_image($attachment->ID, $thumb_size).'</a>';
                if (strlen($caption) > 0) {
                    $galleryFormat .= '<div class="caption">'.$caption.'</div>';
                }
            $galleryFormat .= '</li>';
        }
        $galleryFormat .= '</ul></div></div><!-- Close gallery-wrap -->';
        return $galleryFormat; 
    }
}
/**
 * ********* Get Post Category ************
 *---------------------------------------------------
 */ 
if ( ! function_exists('birkita_get_category_link')){
    function birkita_get_category_link($postid){ 
        $html = '';
        $category = get_the_category($postid); 
        if(isset($category[0]) && $category[0]){
            foreach ($category as $key => $value) {
                $html.= '<a href="'.get_category_link($value->term_id ).'">'.$value->cat_name.'</a>';  
            }
        						
        }
        return $html;
    }
}
/**
 * Standard Post Format
 */
if ( ! function_exists( 'birkita_get_standard_postFormat') ) {
    function birkita_get_standard_postFormat($birkita_PostId, $birkita_layout) { 
        if($birkita_layout == 'feat-fw') {
            $thumb_size = 'birkita_1000_500';
        }else {
            $thumb_size = 'birkita_750_375';
        }
        $imageFormat = '';
        $imageFormat .= '<div class="feature-thumb">'.get_the_post_thumbnail($birkita_PostId,'full').'</div>';
        return $imageFormat;        
    }
}
/**
 * Post Format Detect
 */
if ( ! function_exists( 'birkita_post_format_detect') ) {
    function birkita_post_format_detect($birkita_PostId) { 
        $birkita_format = array();
/** Video Post Format **/
        if(function_exists('has_post_format') && ( get_post_format( $birkita_PostId ) == 'video')){
            $birkitaURL = get_post_meta($birkita_PostId, 'birkita_media_embed_code_post', true);
            $birkitaUrlParse = parse_url($birkitaURL);
            $birkita_format['format'] = 'video';
            if (isset($birkitaUrlParse['host']) && (($birkitaUrlParse['host'] == 'www.youtube.com')||($birkitaUrlParse['host'] == 'youtube.com'))) { 
                $video_id = birkita_parse_youtube($birkitaURL);
                $birkita_format['iframe'] = '<iframe width="1050" height="591" src="http://www.youtube.com/embed/'.$video_id.'" allowFullScreen ></iframe>';
                $birkita_format['url'] = $birkitaURL;
            }else if (isset($birkitaUrlParse['host']) && (($birkitaUrlParse['host'] == 'www.vimeo.com')||($birkitaUrlParse['host'] == 'vimeo.com'))) {
                $video_id = birkita_parse_vimeo($birkitaURL);
                $birkita_format['iframe'] = '<iframe src="//player.vimeo.com/video/'.$video_id.'?api=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff"></iframe>';
                $birkita_format['url'] = $birkitaURL;
            }else {
                $birkita_format['iframe'] = null;
                $birkita_format['url'] = null;
                $birkita_format['notice'] = esc_html__('please put youtube or vimeo video link to the video post format section', 'birkita');
            }
        }
/** Audio Post Format **/        
        else if(function_exists('has_post_format') && (has_post_format('audio'))) {
            $birkitaURL = get_post_meta($birkita_PostId, 'birkita_media_embed_code_post', true);
            $birkitaUrlParse = parse_url($birkitaURL);
            $birkita_format['format'] = 'audio';
            if (isset($birkitaUrlParse['host']) && (($birkitaUrlParse['host'] == 'www.soundcloud.com')||($birkitaUrlParse['host'] == 'soundcloud.com'))) { 
                $birkita_format['url'] = $birkitaURL;
            }else {
                $birkita_format['url'] = null;
            }
        }
/** Gallery post format **/
        else if( function_exists('has_post_format') && has_post_format( 'gallery') ) {
            $birkita_format['format'] = 'gallery';
        }
/** Image Post Format **/
        else if( function_exists('has_post_format') && has_post_format( 'image') ) {
            $birkita_format['format'] = 'image';
        }
/** Standard Post **/
        else {
            $birkita_format['format'] = 'standard';
        }
        return $birkita_format;
        
    }
}

/**
 * ************* Display Post format *****************
 *---------------------------------------------------
 */ 
if ( ! function_exists( 'birkita_post_format_display') ) {
    function birkita_post_format_display($birkita_PostId, $birkita_layout) { 
        $birkita_option = birkita_global_var_declare('birkita_option');
        $postFormat = array();
        $postFormat = birkita_post_format_detect($birkita_PostId);
        $postFormatOut = '';
/** Video **/
        if($postFormat['format'] == 'video') {
            $postFormatOut .= birkita_get_video_postFormat($postFormat);
        }
/** Audio **/
        else if($postFormat['format'] == 'audio') {
            $postFormatOut .= birkita_get_audio_postFormat($birkita_PostId, $postFormat, null);
        }
/** Gallery **/
        else if($postFormat['format'] == 'gallery') {
            $galleryImages = rwmb_meta( 'birkita_gallery_content', $args = array('type' => 'image'), $birkita_PostId );
            $galleryLength = count($galleryImages); 
            if ($galleryLength == 0) {
                return null;
            }else {
                $postFormatOut .= birkita_get_gallery_postFormat($galleryImages, $birkita_layout);
            }
        }
/** Image **/
        else if($postFormat['format'] == 'image') {
            $attachmentID = get_post_meta($birkita_PostId, 'birkita_image_upload', true );
            $thumb_url = wp_get_attachment_image_src($attachmentID, true);
            if(isset($thumb_url[0])) {
                $postFormatOut .=  '<div class="feature-thumb">';
                $postFormatOut .= '<img src="'.$thumb_url[0].'" class="attachment-full wp-post-image" alt="4359236389_7da6b11ac5_o">';
                $postFormatOut .=  '</div> <!-- End Thumb -->';
            }
        }
/** Standard **/
        else if($postFormat['format'] == 'standard') {
            $postFormatOut .= birkita_get_standard_postFormat($birkita_PostId, $birkita_layout);
        }else {
            $postFormatOut .= '';
        }
        return $postFormatOut;
        
    }
}

/**
 * ************* Pagination *****************
 *---------------------------------------------------
 */ 
if ( ! function_exists( 'birkita_paginate') ) {
    function birkita_paginate(){  
        global $wp_query, $wp_rewrite, $birkita_option; 
        if ( $wp_query->max_num_pages > 1 ) : ?>
        <div id="pagination" class="clear-fix">
        	<?php
        		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        		$pagination = array(
        			'base' => esc_url(add_query_arg( 'paged','%#%' )),
        			'format' => '',
        			'total' => $wp_query->max_num_pages,
        			'current' => $current,
        			'prev_text' => '<i class="fa fa-long-arrow-left"></i>',
            		'next_text' => '<i class="fa fa-long-arrow-right"></i>',
        			'type' => 'plain'
        		);
        		
        		if( $wp_rewrite->using_permalinks() )
        			$pagination['base'] = user_trailingslashit( trailingslashit( esc_url(remove_query_arg( 's', get_pagenum_link( 1 ) )) ) . 'page/%#%/', 'paged' );
        
        		if( !empty( $wp_query->query_vars['s'] ) )
        			$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
        
        		echo paginate_links( $pagination );

        	?>
        </div>
<?php
    endif;
    }
}
/**
 * ************* Get Images Instagram *****************
 *---------------------------------------------------
 */
if ( ! function_exists( 'birkita_get_instagram') ) {  
    function birkita_get_instagram( $search_for, $cache_hours, $nr_images, $attachment ) {
		
    	if ( isset( $search_for['username'] ) && !empty( $search_for['username'] ) ) {
    		$search = 'user';
    		$search_string = $search_for['username'];
    	} else {
    		return esc_html__( 'Nothing to search for', 'birkita');
    	}
    	
    	
    	$opt_name  = 'jr_insta_' . md5( $search . '_' . $search_string );
    	$instaData = get_transient( $opt_name );
    	$user_opt  = (array) get_option( $opt_name );
    
    	if ( false === $instaData || $user_opt['search_string'] != $search_string || $user_opt['search'] != $search || $user_opt['cache_hours'] != $cache_hours || $user_opt['nr_images'] != $nr_images || $user_opt['attachment'] != $attachment ) {
    		
    		$instaData = array();
    		$user_opt['search']        = $search;
    		$user_opt['search_string'] = $search_string;
    		$user_opt['cache_hours']   = $cache_hours;
    		$user_opt['nr_images']     = $nr_images;
    		$user_opt['attachment']    = $attachment;
    
    		if ( 'user' == $search ) {
    			$response = wp_remote_get( 'https://www.instagram.com/' . trim( $search_string ), array( 'sslverify' => false, 'timeout' => 60 ) );
    		} 
    		if ( is_wp_error( $response ) ) {
    
    			return $response->get_error_message();
    		}
    		if ( $response['response']['code'] == 200 ) {
    			
    			$json = str_replace( 'window._sharedData = ', '', strstr( $response['body'], 'window._sharedData = ' ) );
    			
    			// Compatibility for version of php where strstr() doesnt accept third parameter
    			if ( version_compare( PHP_VERSION, '5.3.0', '>=' ) ) {
    				$json = strstr( $json, '</script>', true );
    			} else {
    				$json = substr( $json, 0, strpos( $json, '</script>' ) );
    			}
    			
    			$json = rtrim( $json, ';' );
    			// Function json_last_error() is not available before PHP * 5.3.0 version
    			if ( function_exists( 'json_last_error' ) ) {
    				
    				( $results = json_decode( $json, true ) ) && json_last_error() == JSON_ERROR_NONE;
    				
    			} else {
    				
    				$results = json_decode( $json, true );
    			}
    			
    			if ( $results && is_array( $results ) ) {
    
    				if ( 'user' == $search ) {
    					$entry_data = isset( $results['entry_data']['ProfilePage'][0]['user']['media']['nodes'] ) ? $results['entry_data']['ProfilePage'][0]['user']['media']['nodes'] : array();
    				} else {
    					$entry_data = isset( $results['entry_data']['TagPage'][0]['tag']['media']['nodes'] ) ? $results['entry_data']['TagPage'][0]['tag']['media']['nodes'] : array();
    				}
    				
    				if ( empty( $entry_data ) ) {
    					return esc_html__( 'No images found', 'birkita');
    				}
    
    				foreach ( $entry_data as $current => $result ) {
    
    					if ( $result['is_video'] == true ) {
    						$nr_images++;
    						continue;
    					}
    
    					if ( $current >= $nr_images ) {
    						break;
    					}
    
    					$image_data['code']       = $result['code'];
    					$image_data['username']   = 'user' == $search ? $search_string : false;
    					$image_data['user_id']    = $result['owner']['id'];
    					$image_data['caption']    = '';
    					$image_data['id']         = $result['id'];
    					$image_data['link']       = 'https://www.instagram.com/p/'. $result['code'] . '/';
    					$image_data['popularity'] = (int) ( $result['comments']['count'] ) + ( $result['likes']['count'] );
    					$image_data['timestamp']  = (float) $result['date'];
    					$image_data['url']        = $result['display_src'];
    					$image_data['url_thumbnail'] = $result['thumbnail_src'];
    
    						
    					$instaData[] = $image_data;
    
    					
    				} // end -> foreach
    				
    			} // end -> ( $results ) && is_array( $results ) )
    			
    		} else { 
    
    			return $response['response']['message'];
    
    		} // end -> $response['response']['code'] === 200 )
            //print_R($instaData);
    		update_option( $opt_name, $user_opt );
    		
    		if ( is_array( $instaData ) && !empty( $instaData )  ) {
    
    			//set_transient( $opt_name, $instaData, $cache_hours * 60 * 60 );
    		}
    		
    	} // end -> false === $instaData
    
    	return $instaData;
    } 
}
if ( ! function_exists( 'birkita_global_var_declare' ) ) {
    function birkita_global_var_declare($birkita_var) {
        if($birkita_var == 'birkita_option') {
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                global $birkita_option;
                return $birkita_option;
            }else {
                global $birkita_default_options;
                return $birkita_default_options;
            }
        }
        elseif($birkita_var == 'birkita_loadbutton_string') {
            global $birkita_loadbutton_string;
            return $birkita_loadbutton_string;
        }
        elseif($birkita_var == 'birkita_flex_el') {
            global $birkita_flex_el;
            return $birkita_flex_el;
        }
        elseif($birkita_var == 'birkita_megamenu_carousel_el') {
            global $birkita_megamenu_carousel_el;
            return $birkita_megamenu_carousel_el;
        }
        elseif($birkita_var == 'birkita_ticker') {
            global $birkita_ticker;
            return $birkita_ticker;
        }
        elseif($birkita_var == 'meta_boxes') {
            global $birkita_meta_boxes;
            return $birkita_meta_boxes;
        }
    }
}

if ( ! function_exists( 'birkita_count_twitter' ) ) {
    function birkita_count_twitter( $user ) {
		//check options
		if ( empty( $user ) ) {
			return false;
		}

		$params = array(
			'timeout'   => 120,
			'sslverify' => false
		);

		$filter   = array(
			'start_1' => 'ProfileNav-item--followers',
			'start_2' => 'title',
			'end'     => '>'
		);
		$response = wp_remote_get( 'https://twitter.com/' . $user, $params );

		//check & return
		if ( is_wp_error( $response ) || empty( $response['response']['code'] ) || '200' != $response['response']['code'] ) {
			return false;
		}
		//get content
		$response = wp_remote_retrieve_body( $response );

		if ( ! empty( $response ) && $response !== false ) {
			foreach ( $filter as $key => $value ) {

				$key = explode( '_', $key );
				$key = $key[0];

				if ( $key == 'start' ) {
					$key = false;
				} else if ( $value == 'end' ) {
					$key = true;
				}
				$key = (bool) $key;

				$index = strpos( $response, $value );
				if ( $index === false ) {
					return false;
				}
				if ( $key ) {
					$response = substr( $response, 0, $index );
				} else {
					$response = substr( $response, $index + strlen( $value ) );
				}
			}

			if ( strlen( $response ) > 100 ) {
				return false;
			}

			$count = birkita_extract_one_number( $response );

			if ( ! is_numeric( $count ) || strlen( number_format( $count ) ) > 15 ) {
				return false;
			}

			$count = intval( $count );

			return $count;
		} else {
			return false;
		}

	}
}
if ( ! function_exists( 'birkita_extract_one_number' ) ) {
    function birkita_extract_one_number( $str ) {
    	return intval( preg_replace( '/[^0-9]+/', '', $str ), 10 );
    }
}
if ( ! function_exists( 'birkita_get_header' ) ) {
    function birkita_get_header() {
        $birkita_option = birkita_global_var_declare('birkita_option');
        $logo = '';
        $header_layout= '';
        $ga_script = '';
        $header_banner = '';
        $imgurl = '';
        $linkurl = '';
        if (isset($birkita_option)){
            if ((isset($birkita_option['birkita_logo'])) && (($birkita_option['birkita_logo']) != NULL)){ 
                $logo = $birkita_option['birkita_logo'];
            }else {
                $logo = '';
            }
            $header_layout = $birkita_option['birkita_header-layout'];
            $ga_script = $birkita_option['birkita_banner-script'];
            $header_banner = $birkita_option['birkita_header-banner-switch'];
            if ($header_banner){ 
                    $imgurl = $birkita_option['birkita_header-banner']['imgurl'];
                    $linkurl = $birkita_option['birkita_header-banner']['linkurl'];
            }; 
        }
        ?>
        <div class="header-wrap header-<?php echo esc_attr($header_layout);?> header-black">
        
            <?php if (( has_nav_menu('menu-top')) || ( $birkita_option ['birkita_header-social-switch'] == 1 )) {?> 
                <div class="top-bar clear-fix">
                    <div class="header-inner birkita_site-container clear-fix">
    				
        					<?php if ( has_nav_menu('menu-top') ) {?> 
                        <nav class="top-nav">
                            <div class="mobile">
                                <i class="fa fa-bars"></i>
                            </div>
                            <?php wp_nav_menu(array('theme_location' => 'menu-top','container_id' => 'top-menu'));?> 
                                   
                        </nav><!--top-nav--> <?php }?>
                        <div class="social-search-icon clear-fix">
                            
                            <?php if ( $birkita_option ['birkita_header-social-switch'] == 1 ){ ?>		
            				    <?php birkita_header_social()?>
            				<?php } ?>
                            
                            <?php if ($birkita_option['birkita_header-search'] == 1){ ?>
                            <!--main-search-open-->
                            <div class="header-search">
                                <div id="header-search-button">
            				        <i class="fa fa-search"></i>
                                </div>
                                <form action="<?php echo esc_url(home_url('/')); ?>" id="header_searchform" method="get">
                                    <div class="header-searchform-wrap">
                                        <input type="text" name="s" id="s" placeholder="<?php esc_html_e( 'Search', 'birkita'); ?>"/>
                                    </div>
                                </form>
                            </div><!--main-search-close-->
                            <?php }?>
                            
                        </div>
                    </div>
                </div><!--top-bar-->
            <?php } ?>
            <!-- header open -->
            <div class="header">
                <div class="header-inner birkita_site-container">
        			<!-- logo open -->
                    <?php if (($logo != null) && (array_key_exists('url',$logo))) {
                            if ($logo['url'] != '') {
                        ?>
        			<div class="logo">
                        <h1>
                            <a href="<?php echo esc_url(get_home_url('/'));?>">
                                <img src="<?php echo esc_url($logo['url']);?>" alt="logo"/>
                            </a>
                        </h1>
        			</div>
        			<!-- logo close -->
                    <?php } else {?> 
                    <div class="logo logo-text">
                        <h1>
                            <a href="<?php echo esc_url(get_home_url('/'));?>">
                                <?php echo bloginfo( 'name' );?>
                            </a>
                        </h1>
        			</div>
                    <?php }
                    } else {?> 
                    <div class="logo logo-text">
                        <h1>
                            <a href="<?php echo esc_url(get_home_url('/'));?>">
                                <?php echo bloginfo( 'name' );?>
                            </a>
                        </h1>
        			</div>
                    <?php } ?>
                    <?php if ( $header_banner ) : ?>
                        <!-- header-banner open -->                             
            			<div class="header-banner">
                        <?php
                            if ($ga_script != ''){
                                echo ($ga_script);
                            } else { ?>
                                <a class="ads-banner-link" target="_blank" href="<?php echo esc_attr( $linkurl ); ?>">
                				    <img class="ads-banner" src="<?php echo esc_attr( $imgurl ); ?>" alt="Header Banner"/>
                                </a>
                            <?php }
                        ?> 
            			</div>                            
            			<!-- header-banner close -->
                    <?php endif; ?>
                </div>   			
            </div>
            <!-- header close -->
            <?php if ( has_nav_menu( 'menu-main' ) ) { ?>
			<!-- nav open -->
			<nav class="main-nav">
                <div class="birkita_site-container clear-fix">
                    <div class="header-inner clear-fix">
                        <div class="mobile">
                            <i class="fa fa-bars"></i>
                        </div>
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'menu-main',
                                'container_id' => 'main-menu',
                                'walker' => new birkita_Walker,
                                'depth' => '3' ) );
                            wp_nav_menu( array( 
                                'theme_location' => 'menu-main',
                                'depth' => '3',
                                'container_id' => 'main-mobile-menu' ) );
                        ?>
                    </div><!-- main-nav-inner -->
                </div>
			</nav>
            <?php }?>
			<!-- nav close -->
        </div>
    <?php
    }
}
if ( ! function_exists( 'birkita_get_footer_instagram' ) ) {
    function birkita_get_footer_instagram($birkita_option) {
    ?>
        <?php if (isset ($birkita_option['birkita_footer-instagram']) && ($birkita_option['birkita_footer-instagram'] == 1)) {
            $photos_arr = array();
            $photostream_title = '';
            
            $pp_instagram_username = $birkita_option['birkita_footer-instagram-username'];
			$search_for['username'] = $pp_instagram_username;
        	$photos_arr = birkita_get_instagram( $search_for, 8, 8, false );
			$photostream_title = $birkita_option['birkita_footer-instagram-title'];
        ?>
       <div class="footer_photostream_wrapper">
        	<h3><span><?php echo esc_html($photostream_title); ?></span></h3>
        	<ul class="footer_photostream clear-fix">
        		<?php
        			foreach($photos_arr as $photo)
        			{
        		?>
        			<li><a target="_blank" href="<?php echo esc_url($photo['link']); ?>"><img src="<?php echo esc_url($photo['url_thumbnail']); ?>" alt="<?php echo esc_attr($photo['id']); ?>" /></a></li>
        		<?php
        			}
        		?>
        	</ul>
        </div>
        <?php }?>
    <?php
    }
}
if ( ! function_exists( 'birkita_get_footer_widgets' ) ) {
    function birkita_get_footer_widgets() {
        if (is_active_sidebar('footer_sidebar_1') || is_active_sidebar('footer_sidebar_2') || is_active_sidebar('footer_sidebar_3'))  { ?>
        <div class="footer-content birkita_site-container clear-fix">
            <div class="footer-sidebar">
                <?php dynamic_sidebar( 'footer_sidebar_1' ); ?>
            </div>
            <div class="footer-sidebar">
                <?php dynamic_sidebar( 'footer_sidebar_2' ); ?>
            </div>
            <div class="footer-sidebar">
                <?php dynamic_sidebar( 'footer_sidebar_3' ); ?>
            </div>
        </div>
    <?php }
    }
}

if ( ! function_exists( 'birkita_get_footer_lower' ) ) {
    function birkita_get_footer_lower() {
        $birkita_option = birkita_global_var_declare('birkita_option');
        $birkita_allow_html = '';
        $cr_text = '';
        if (isset($birkita_option)):
            $birkita_allow_html = array(
                'a' => array(
                    'href' => array(),
                    'title' => array()
                ),
                'br' => array(),
                'em' => array(),
                'strong' => array(),
            );
            if(isset($birkita_option['cr-text']) && ($birkita_option['cr-text'] != '')) {
                $cr_text = $birkita_option['cr-text'];
            }
        endif;?>
    <div class="footer-lower">
        <div class="footer-lower-wrap birkita_site-container clear-fix">
            <div class="footer-inner">
                <div class="birkita_copyright"><?php echo wp_kses($cr_text, $birkita_allow_html);?></div>
            </div>
            <?php if ( has_nav_menu('menu-footer') ) {?> 
                <?php wp_nav_menu(array('theme_location' => 'menu-footer', 'depth' => '1', 'container_id' => 'footer-menu'));?>  
            <?php }?>
        </div>
    </div>
    <?php
    }
}
if ( ! function_exists( 'birkita_footer_localize' ) ) {
    function birkita_footer_localize() {
        $birkita_option = birkita_global_var_declare('birkita_option');
        $birkita_loadbutton_string = birkita_global_var_declare('birkita_loadbutton_string');
        $birkita_flex_el = birkita_global_var_declare('birkita_flex_el');
        $birkita_megamenu_carousel_el = birkita_global_var_declare('birkita_megamenu_carousel_el');
        $birkita_ticker = birkita_global_var_declare('birkita_ticker');

        $birkita_ajax_btnstr = array();
        $birkita_ajax_btnstr['loadmore'] = esc_html__('More', 'birkita');
        $birkita_ajax_btnstr['nomore'] = esc_html__('No More Posts', 'birkita');
        wp_localize_script( 'birkita-module-loadpost', 'ajax_btn_str', $birkita_ajax_btnstr );

            
        if ( is_active_widget('','','birkita_masonry')) {
            wp_localize_script( 'birkita-module-loadpost', 'loadbuttonstring', $birkita_loadbutton_string );
        }
        if ( is_active_widget('','','birkita_classic_blog')) {
            wp_localize_script( 'birkita-classicblog-loadpost', 'loadbuttonstring', $birkita_loadbutton_string );
        }
        if (isset($birkita_option)):
            $birkita_fixed_nav = $birkita_option['birkita_fixed-nav-switch'];            
        endif;
        wp_localize_script( 'birkita-customjs', 'fixed_nav', $birkita_fixed_nav );
        wp_localize_script( 'birkita-customjs', 'birkita_flex_el', $birkita_flex_el ); 
        wp_localize_script( 'birkita-customjs', 'megamenu_carousel_el', $birkita_megamenu_carousel_el );
        wp_localize_script( 'birkita-customjs', 'ticker', $birkita_ticker );
    }
}