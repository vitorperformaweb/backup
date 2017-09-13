<?php
/**
 * Plugin Name: birkita: Grid Module
 * Plugin URI: http://demo.monotheme.info/birkita/
 * Description: This widget displays latests posts in grid layout
 * Version: 1.0
 * Author: birkita
 * Author URI: http://demo.monotheme.info/birkita/author/birkita
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init', 'birkita_register_main_grid_module');

function birkita_register_main_grid_module(){
	register_widget('birkita_main_grid');
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */ 
class birkita_main_grid extends WP_Widget {
	
	/**
	 * Widget setup.
	 */
	function __construct(){
		/* Widget settings. */	
		$widget_ops = array('classname' => 'module-main-grid', 'description' => esc_html__('[Full-width module] Displays grid module in full-width section.', 'birkita'));
		
		/* Create the widget. */
		parent::__construct('birkita_main_grid', esc_html__('*birkita: Module Main Grid', 'birkita'), $widget_ops);
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
        if ($query->post_count < 5) {
            return false;
        }
        ?>
		<div class="grid-widget-posts" >
            <div class="birkita_half clear-fix">
                <?php while ( $query -> have_posts() ) : $query -> the_post(); $post_id = get_the_ID(); 
                    $birkita_count = $query->current_post + 1;
                ?>
                    <div class="type-in birkita_post-<?php echo esc_attr($birkita_count);?>">
                        <div <?php post_class(); ?>>
                            <div class="thumb hide-thumb">
                                <?php  echo (birkita_get_thumbnail($post_id, 'birkita_600_450')); ?>
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
        					<div class="post-info">	
                                <div class="post-cat">                                                 
                                    <?php
                                        $category = get_the_category( $post_id );
                                        $cat_link = get_category_link( $category[0]->term_id );
                                        echo '<a class="main-color-hover" href="'; echo ($cat_link); echo '">';
                                        echo ($category[0]->cat_name);
                                        echo '</a>';
                                    ?>                                           
                                </div>				
        						<h2 class="post-title">
        							<a href="<?php the_permalink() ?>">
        								<?php
                                            $birkita_title = the_title(FALSE);
                                            $short_title = birkita_the_excerpt_limit($birkita_title, 10);
        									echo ($short_title); 
        								?>
        							</a>
        						</h2>
                                <?php if ($birkita_count == 2) {?>
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
                                <?php }?> 
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
                <?php endwhile; ?>
            </div>
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