<?php
/**
 * Plugin Name: birkita: Large Blog Module
 * Plugin URI: http://demo.monotheme.info/birkita/
 * Description: This module displays latest posts in large blog layout
 * Version: 1.0
 * Author: birkita
 * Author URI: http://demo.monotheme.info/birkita/author/birkita
 *
 */

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init', 'birkita_register_large_blog_module');

function birkita_register_large_blog_module(){
	register_widget('birkita_large_blog');
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */ 
class birkita_large_blog extends WP_Widget {
	
	/**
	 * Widget setup.
	 */
	function __construct(){
		/* Widget settings. */	
		$widget_ops = array('classname' => 'module-large-blog module-large-blog-1', 'description' => esc_html__('[Full-width module][Content module] Displays latest posts in large blog layout in content section.','birkita'));
		
		/* Create the widget. */
		parent::__construct('birkita_large_blog', esc_html__('*birkita: Module Large Blog','birkita'), $widget_ops);
	}
	
	/**
	 * display the widget on the screen.
	 */
	function widget($args, $instance){	
        global $birkita_ajax, $birkita_ajax_btnstr;
        wp_localize_script( 'birkita-module-loadpost', 'ajax_btn_str', $birkita_ajax_btnstr );
		extract($args);
        $uid = uniqid('large-blog-', true);
        $title = apply_filters('widget_title', $instance['title'] );
        $entries_display = esc_attr($instance['entries_display']);
        $entries_loadmore = esc_attr($instance['entries_loadmore']);
        $post_offset = esc_attr($instance['post_offset']);
        $excerpt_length = esc_attr($instance['excerpt_length']);
        
        if(!isset($post_offset) || ($post_offset == null)) {
            $post_offset = 0;
        }
        $cat_id = $instance['category'];
         
        $birkita_ajax[$uid]['entries'] = $entries_loadmore;
        
        $birkita_ajax[$uid]['offset'] = $post_offset;
        
        $birkita_ajax[$uid]['excerpt_length'] = $excerpt_length;
        
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
                'offset' => $post_offset,
				'posts_per_page' => $entries_display,
                );  
        } else if ($cat_id[0] == 'all'){ 
      		    $args = array(
    				'post_status' => 'publish',
    				'ignore_sticky_posts' => 1,
                    'offset' => $post_offset,
    				'posts_per_page' => $entries_display,
                );
        } else {
		$args = array(
				'category__in' => $cat_id,
				'post_status' => 'publish',
				'ignore_sticky_posts' => 1,
                'offset' => $post_offset,
				'posts_per_page' => $entries_display,
                );
        }
        $birkita_ajax[$uid]['args'] = $args;
        wp_localize_script( 'birkita-module-loadpost', 'birkita_ajax', $birkita_ajax );
        
        $query = new WP_Query( $args ); ?>
        <div id="<?php echo esc_attr($uid);?>" class="birkita_large-blog-wrapper" >
         	
    		<div class="large-blog-content-container">
                <?php while ( $query -> have_posts() ) : $query -> the_post(); ?>
                    <?php $post_id = get_the_ID();?>
                    <?php echo birkita_large_blog_render($post_id, $excerpt_length);?>
                <?php endwhile;?>
            </div>	
            <div class="large-blog-ajax loadmore-button">
                <div class="ajaxtext ajax-load-btn"><span></span>+ Mat&eacute;rias</div>
                <div class="loading-animation"></div>
            </div>
        </div>                        
	<!-- End category -->			
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
        $instance['post_offset'] = $new_instance['post_offset'];
        $instance['entries_loadmore'] = $new_instance['entries_loadmore'];
        $instance['excerpt_length'] = $new_instance['excerpt_length'];
		return $instance;
	}
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */	
	function form($instance){
		$widget_cat_id = $this->get_field_id( 'category' );
		$defaults = array('title' => '', 'category' => 'all', 'entries_display' => 6, 'entries_loadmore' => 4, 'post_offset' => 0, 'excerpt_length' => 45);
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
        
        <p>
            <label for="<?php echo ($this->get_field_id( 'entries_display' )); ?>"><strong><?php esc_attr_e('Number of entries to display', 'birkita'); ?></strong></label>
            <input type="text" id="<?php echo ($this->get_field_id('entries_display')); ?>" class="widget-option" name="<?php echo ($this->get_field_name('entries_display')); ?>" value="<?php echo ($instance['entries_display']); ?>" />
        </p>
        
        <p>
            <label for="<?php echo ($this->get_field_id( 'post_offset' )); ?>"><strong><?php esc_attr_e('Post Offset', 'birkita'); ?></strong></label>
            <input type="text" id="<?php echo ($this->get_field_id('post_offset')); ?>" class="widget-option" name="<?php echo ($this->get_field_name('post_offset')); ?>" value="<?php echo ($instance['post_offset']); ?>" />
        </p>
        
        <p>
            <label for="<?php echo ($this->get_field_id( 'entries_loadmore' )); ?>"><strong><?php esc_attr_e('Number of entries to load more', 'birkita'); ?></strong></label>
            <input type="text" id="<?php echo ($this->get_field_id('entries_loadmore')); ?>" class="widget-option" name="<?php echo ($this->get_field_name('entries_loadmore')); ?>" value="<?php echo ($instance['entries_loadmore']); ?>" />
        </p>
        
        <p>
            <label for="<?php echo ($this->get_field_id( 'excerpt_length' )); ?>"><strong><?php esc_attr_e('Exceprt Length', 'birkita'); ?></strong></label>
            <input type="text" id="<?php echo ($this->get_field_id('excerpt_length')); ?>" class="widget-option" name="<?php echo ($this->get_field_name('excerpt_length')); ?>" value="<?php echo ($instance['excerpt_length']); ?>" />
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