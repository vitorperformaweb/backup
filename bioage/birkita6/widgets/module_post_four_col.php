<?php
/**
 * Plugin Name: birkita: Module Post Four Column
 * Plugin URI: http://demo.monotheme.info/birkita/
 * Description: This module displays one main posts above and list of four posts below in a column
 * Version: 1.0
 * Author: birkita
 * Author URI: http://demo.monotheme.info/birkita/author/birkita
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init', 'birkita_register_module_post_four_col');

function birkita_register_module_post_four_col(){
	register_widget('birkita_module_post_four_col');
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */ 
class birkita_module_post_four_col extends WP_Widget {
	
	/**
	 * Widget setup.
	 */
	function __construct(){
		/* Widget settings. */	
		$widget_ops = array('classname' => 'module-post-four module-post-four-col', 'description' => esc_html__('[Content module] Displays one main posts above and list of four posts below in a column', 'birkita'));
		
		/* Create the widget. */
		parent::__construct('birkita_module_post_four_col', esc_html__('*birkita: Module Posts Four Column', 'birkita'), $widget_ops);
	}
	
	
	/**
	 * display the widget on the screen.
	 */
	function widget($args, $instance){
        $birkita_option = birkita_global_var_declare('birkita_option');
        extract($args);
        $title = apply_filters('widget_title', $instance['title'] );
        $cat_id = $instance['category'];
        $entries_display = 5;
        $args = array();
        echo ($before_widget);  
        if ( $title ) {
            $birkita_title = '<div class="main-title"><h3>'.esc_html($title).'</h3></div>';
            echo ($before_title .$birkita_title. $after_title);
        }	
            
        if ($cat_id[0] == 'feat') {    
            $args = array(
        		'post__in'  => get_option( 'sticky_posts' ),
        		'post_status' => 'publish',
        		'ignore_sticky_posts' => 1,
        		'posts_per_page' => $entries_display,
                );  
        } else if ($cat_id[0] == 'all'){ 
        	    $args = array(
        			'post_status' => 'publish',
        			'ignore_sticky_posts' => 1,
        			'posts_per_page' => $entries_display,
                );
        } else {
        $args = array(
        		'category__in' => $cat_id,
        		'post_status' => 'publish',
        		'ignore_sticky_posts' => 1,
        		'posts_per_page' => $entries_display,
                );
        }
        $query = new WP_Query( $args ); 
        ?>
		<div class="module-post-four-wrap section clear-fix">
            <?php if ( $query -> have_posts() ) : $query -> the_post(); $post_id = get_the_ID();?>
            <div <?php post_class('large-post type-out clear-fix'); ?>>
                <div class="large-post-wrap">
                    <div class="large-post-item clear-fix">
                        <div class="thumb hide-thumb">
            				<a href="<?php the_permalink() ?>">
                                <?php echo (birkita_get_thumbnail($post_id, 'birkita_570_380'));?>
                            </a>
                            <?php echo birkita_review_score($post_id); ?>
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
                        <div class="post-info table">
                            <div class="table-cell">
                                <div class="post-cat">
                                    <?php echo birkita_get_category_link($post_id);?>
                                </div>
            					<h3 class="post-title">
            						<a href="<?php the_permalink() ?>">
            							<?php 
            								$birkita_title = get_the_title();
            								echo birkita_the_excerpt_limit($birkita_title, 10);
            							?>
            						</a>
            					</h3>  
                                <div class="entry-excerpt">
                                    <?php 
                                        $string = get_the_excerpt();
                                        echo birkita_the_excerpt_limit($string, 30); 
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if ( $query -> have_posts() ) {?>	   
    			<?php while ( $query -> have_posts() ) : $query -> the_post(); $post_id = get_the_ID();?>	
                    <div class="small-posts post-list clear-fix">
                        <div class="small-posts-wrap">
    						<div class="small-posts-item type-out clear-fix">
    							<div class="thumb hide-thumb">
    								<a href="<?php the_permalink() ?>">
                                        <?php echo (birkita_get_thumbnail($post_id, 'birkita_570_380'));?>
                                    </a>
    							</div>						
    							<div class="sub-post content-type-2 post-four-type clear-fix">
                                    <div class="post-cat">                                                 
                                        <?php echo birkita_get_category_link($post_id);?>                                      
                                    </div>
    								<h4 class="post-title post-title-sub-post">
                                        <a href="<?php the_permalink() ?>">
                                            <?php $birkita_title = get_the_title();
    										     echo birkita_the_excerpt_limit($birkita_title, 10); 
                                            ?>
                                        </a>
                                    </h4>
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
    							</div>
    						</div>
    					</div>
                    </div>
    			<?php endwhile; ?>
            <?php }?> <!-- End Post List -->					
		</div><!-- module post four wrap -->
	<!-- End category -->
	<?php	
		/* After widget (defined by themes). */
		echo ($after_widget);
	}
	/**
	 * update widget settings
	 */
	function update($new_instance, $old_instance){
		$instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = $new_instance['category'];
		return $instance;
	}
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */	
	function form($instance){
        $widget_cat_id = $this->get_field_id( 'category' );
		$defaults = array('title' => '', 'category' => 'feat');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
        <!-- Title: Text Input -->     
		<p>
			<label for="<?php echo ($this->get_field_id( 'title' )); ?>"><strong><?php esc_attr_e('Title: ', 'birkita'); ?></strong></label>
            <input type="text" id="<?php echo ($this->get_field_id( 'title' )); ?>" class="widget-option" name="<?php echo ($this->get_field_name( 'title' )); ?>" value="<?php echo ($instance['title']); ?>" />
		</p>
        
		<!-- Categories-->
		<p>
			<label for="<?php echo ($this->get_field_id('category')); ?>"><strong><?php esc_attr_e('Post Source:', 'birkita'); ?></strong></label> 
			<select id="<?php echo ($this->get_field_id('category')); ?>" name="<?php echo ($this->get_field_name('category')); ?>[]" class="widget-option widefat categories tn-category-field" size="5" multiple='multiple' >
				<option value='feat'><?php esc_attr_e( 'Featured Posts', 'birkita' ); ?></option>
                <option value='all'><?php esc_attr_e( 'All Categories', 'birkita' ); ?></option>
				<?php $categories = get_categories('hide_empty=0&depth=1&type=post'); ?>
				<?php foreach($categories as $category) { ?>
				<option value='<?php echo ($category->term_id); ?>'><?php echo ($category->cat_name); ?></option>
				<?php } ?>
			</select>
		</p>											
        <script>
        jQuery(document).ready(function($){
            <?php
                $cat_array = json_encode($instance['category']);
                echo "var instant = ". $cat_array . ";\n";
            ?>
            var status = 0;
            var widget_cat_id = "<?php echo ($widget_cat_id); ?>";
            $("#"+widget_cat_id).find("option").each(function(){
                $this = $(this);
                if (($(instant).length == 0) && ($this.attr('value') == 'all')) {
                    $this.attr('selected','selected');
                    return false;
                }
                $(instant).each(function(index, value){
                    if(value == $this.attr('value')){
                        $this.attr('selected','selected');
                    }
                });
                if ((($this.attr('value') == 'feat') || ($this.attr('value') == 'all')) && ($this.is(':selected'))){
                    return false;
                }
            });
        });
        </script>
	<?php }
}
    ?>