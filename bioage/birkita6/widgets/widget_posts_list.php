<?php
/**
 * Plugin Name: birkita: Posts List Widget
 * Plugin URI: http://demo.monotheme.info/birkita/
 * Description: Posts List in sidebar
 * Version: 1.0
 * Author: birkita
 * Author URI: http://demo.monotheme.info/birkita/author/birkita
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init', 'birkita_register_posts_list_widget');

function birkita_register_posts_list_widget(){
	register_widget('birkita_posts_list');
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */ 
class birkita_posts_list extends WP_Widget {
	
	/**
	 * Widget setup.
	 */
	function __construct(){
		/* Widget settings. */	
		$widget_ops = array('classname' => 'widget-posts-list', 'description' => esc_html__('[Sidebar widget] Displays a List of Posts in sidebar.', 'birkita'));
		
		/* Create the widget. */
		parent::__construct('birkita_posts_list', esc_html__('*birkita: Widget Posts List','birkita'), $widget_ops);
	}
	
	/**
	 * display the widget on the screen.
	 */
	function widget($args, $instance){	
		$birkita_option = birkita_global_var_declare('birkita_option');
		extract($args);
        $title = apply_filters('widget_title', $instance['title'] );
        $entries_display = esc_attr($instance['entries_display']);
		$cat_id = $instance['category'];
        $style = $instance['style'];
        
        if(isset($style) && (($style == 'style-1') || ($style == ''))) {
            $style = 'style-1';
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
        if ( !($query -> have_posts()) ) return;
        echo ($before_widget); 
        if ( $title ) {
            echo ($before_title .esc_html($title). $after_title);
        }
        ?>
			<div class="post-list-wrap <?php echo esc_attr($style);?> type-out clear-fix">
				<ul class="small-posts">
                    <?php $query = new WP_Query( $args ); ?>
					<?php while($query->have_posts()): $query->the_post(); $post_id = get_the_ID(); ?>		
                        <li <?php post_class('post-item clear-fix'); ?>>
                            <div class="thumb hide-thumb">	
                                <?php
                                    echo (birkita_get_thumbnail($post_id, 'birkita_570_570'));
                                ?>
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
									<h4 class="post-title">
										<a href="<?php the_permalink() ?>">
											<?php 
												$title = get_the_title();
												echo birkita_the_excerpt_limit($title, 12);
											?>
										</a>
									</h4>
								</div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
			</div>			
		<?php
		echo ($after_widget);
	}
	
	/**
	 * update widget settings
	 */
	function update($new_instance, $old_instance){
		$instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = $new_instance['category'];
        $instance['entries_display'] = $new_instance['entries_display'];
        $instance['style'] = $new_instance['style'];
  
		return $instance;
	}
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */	
	function form($instance){
        $widget_cat_id = $this->get_field_id( 'category' );
		$defaults = array('title' => '', 'category' => 'feat', 'entries_display' => 4, 'style' => 1);
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<!-- Title: Text Input -->     
		<p>
			<label for="<?php echo ($this->get_field_id( 'title' )); ?>"><strong><?php esc_attr_e('Title: ', 'birkita'); ?></strong></label>
            <input type="text" id="<?php echo ($this->get_field_id( 'title' )); ?>" name="<?php echo ($this->get_field_name( 'title' )); ?>" value="<?php echo ($instance['title']); ?>" class="widget-option" />
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
        
        
		<p><label for="<?php echo ($this->get_field_id( 'entries_display' )); ?>"><strong><?php esc_attr_e('Number of entries to display (Min 4 entries)', 'birkita'); ?></strong></label>
		<input type="text" id="<?php echo ($this->get_field_id('entries_display')); ?>" name="<?php echo ($this->get_field_name('entries_display')); ?>" value="<?php echo ($instance['entries_display']); ?>" class="widget-option" /></p>
        
        <p>     
            <label for="<?php echo ($this->get_field_id( 'style' )); ?>"><strong><?php   esc_attr_e('Style: ','birkita'); ?></strong></label>    		 	
            <select id="<?php echo ($this->get_field_id( 'style' )); ?>" name="<?php echo ($this->get_field_name( 'style' )); ?>">            
                <option value="style-1" <?php if ($instance['style'] == 'style-1') echo 'selected="selected"'; ?>><?php esc_attr_e('Style 1', 'birkita');?></option>               
                <option value="style-2" <?php if ($instance['style'] == 'style-2') echo 'selected="selected"'; ?>><?php esc_attr_e('Style 2', 'birkita');?></option>                           	
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