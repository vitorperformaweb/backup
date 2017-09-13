<?php
/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'birkita_';

$meta_boxes = array();

// Post Layout Options
$meta_boxes[] = array(
    'id' => "{$prefix}post_fullwidth",
    'title' => esc_html__( 'birkita Post Option', 'birkita'),
    'pages' => array( 'post' ),
    'context' => 'normal',
    'priority' => 'high',

    'fields' => array(
        array(
			'id' => "{$prefix}post_layout",
            'name' => esc_html__( 'Post Layout Option', 'birkita'),
			'desc' => esc_html__('Setup Post Layout', 'birkita'),
            'type' => 'select', 
			'options'  => array(
                            'standard' => esc_html__( 'Standard', 'birkita'),
                            'feat-fw' => esc_html__( 'Feature Image Full Width', 'birkita'),
                            'no-sidebar' => esc_html__('No Sidebar', 'birkita'), 
    				    ),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'standard',
		),
    )
);
// Page Layout Options
$meta_boxes[] = array(
    'id' => "{$prefix}page_fullwidth",
    'title' => esc_html__( 'birkita Page Option', 'birkita'),
    'pages' => array( 'page' ),
    'context' => 'normal',
    'priority' => 'high',

    'fields' => array(
        // Enable Review
        array(
            'name' => esc_html__( 'Make this page full-width', 'birkita'),
            'id' => "{$prefix}page_fullwidth_checkbox",
            'type' => 'checkbox',
            'std'  => 0,
        ),
    )
);
// 2nd meta box
$meta_boxes[] = array(
    'id' => "{$prefix}format_options",
    'title' => esc_html__( 'birkita Post Format Options', 'birkita'),
    'pages' => array( 'post' ),
    'context' => 'normal',
    'priority' => 'high',
	'fields' => array(        
        //Video
        array(
            'name' => esc_html__( 'Format Options: Video, Audio', 'birkita'),
            'desc' => esc_html__('Support Youtube, Vimeo, SoundCloud, DailyMotion, ... iframe embed code', 'birkita'),
            'id' => "{$prefix}media_embed_code_post",
            'type' => 'textarea',
            'placeholder' => esc_html__('Link ...', 'birkita'),
            'std' => ''
        ),
		// PLUPLOAD IMAGE UPLOAD (WP 3.3+)
		array(
			'name'             => esc_html__( 'Format Options: Image', 'birkita'),
            'desc'             => esc_html__('Image Upload', 'birkita'),
			'id'               => "{$prefix}image_upload",
			'type'             => 'plupload_image',
			'max_file_uploads' => 1,
		),
        //Gallery
        array(
            'name' => esc_html__( 'Format Options: Gallery', 'birkita'),
            'desc' => esc_html__('Gallery Images', 'birkita'),
            'id' => "{$prefix}gallery_content",
            'type' => 'image_advanced',
            'std' => ''
        )
    )
);

// Post Review Options
$meta_boxes[] = array(
    'id' => "{$prefix}review",
    'title' => esc_html__( 'birkita Review System', 'birkita'),
    'pages' => array( 'post' ),
    'context' => 'normal',
    'priority' => 'high',

    'fields' => array(
        // Enable Review
        array(
            'name' => esc_html__( 'Include Review Box', 'birkita'),
            'id' => "{$prefix}review_checkbox",
            'type' => 'checkbox',
            'desc' => esc_html__( 'Enable Review On This Post', 'birkita'),
            'std'  => 0,
        ),
        // Criteria 1 Text & Score
        array(
            'name'  => esc_html__( 'Criteria 1 Title', 'birkita'),
            'id'    => "{$prefix}ct1",
            'type'  => 'text',
        ),
        array(
            'name' => esc_html__( 'Criteria 1 Score', 'birkita'),
            'id' => "{$prefix}cs1",
            'type' => 'slider',
            'js_options' => array(
                'min'   => 0,
                'max'   => 10,
                'step'  => .1,
            ),
        ),
        // Criteria 2 Text & Score
        array(
            'name'  => esc_html__( 'Criteria 2 Title', 'birkita'),
            'id'    => "{$prefix}ct2",
            'type'  => 'text',
        ),
        array(
            'name' => esc_html__( 'Criteria 2 Score', 'birkita'),
            'id' => "{$prefix}cs2",
            'type' => 'slider',
            'js_options' => array(
                'min'   => 0,
                'max'   => 10,
                'step'  => .1,
            ),
        ),    
        // Criteria 3 Text & Score
        array(
            'name'  => esc_html__( 'Criteria 3 Title', 'birkita'),
            'id'    => "{$prefix}ct3",
            'type'  => 'text',
        ),
        array(
            'name' => esc_html__( 'Criteria 3 Score', 'birkita'),
            'id' => "{$prefix}cs3",
            'type' => 'slider',
            'js_options' => array(
                'min'   => 0,
                'max'   => 10,
                'step'  => .1,
            ),
        ),
        // Criteria 4 Text & Score
        array(
            'name'  => esc_html__( 'Criteria 4 Title', 'birkita'),
            'id'    => "{$prefix}ct4",
            'type'  => 'text',
        ),
        array(
            'name' => esc_html__( 'Criteria 4 Score', 'birkita'),
            'id' => "{$prefix}cs4",
            'type' => 'slider',
            'js_options' => array(
                'min'   => 0,
                'max'   => 10,
                'step'  => .1,
            ),
        ),
        // Criteria 5 Text & Score
        array(
            'name'  => esc_html__( 'Criteria 5 Title', 'birkita'),
            'id'    => "{$prefix}ct5",
            'type'  => 'text',
        ),
        array(
            'name' => esc_html__( 'Criteria 5 Score', 'birkita'),
            'id' => "{$prefix}cs5",
            'type' => 'slider',
            'js_options' => array(
                'min'   => 0,
                'max'   => 10,
                'step'  => .1,
            ),
        ),    
        // Criteria 6 Text & Score
        array(
            'name'  => esc_html__( 'Criteria 6 Title', 'birkita'),
            'id'    => "{$prefix}ct6",
            'type'  => 'text',
        ),
        array(
            'name' => esc_html__( 'Criteria 6 Score', 'birkita'),
            'id' => "{$prefix}cs6",
            'type' => 'slider',
            'js_options' => array(
                'min'   => 0,
                'max'   => 10,
                'step'  => .1,
            ),
        ),
        // Summary
        array(
            'name' => esc_html__( 'Summary', 'birkita'),
            'id'   => "{$prefix}summary",
            'type' => 'textarea',
            'cols' => 20,
            'rows' => 4,
        ),
        
        // Final average
        array(
            'name'  => esc_html__('Final Average Score','birkita'),
            'id'    => "{$prefix}final_score",
            'type'  => 'text',
        ),
        
        array(
            'id' => "{$prefix}review_box_position",
            'name' => esc_html__( 'Review Box Position', 'birkita'),
            'desc' => esc_html__('Setup review post position [left-content, right-content, above-content, below-content]', 'birkita'),
            'type' => 'select', 
            'options'  => array(
                            'left' => esc_html__( 'Left', 'birkita'),
                            'right' => esc_html__( 'Right ', 'birkita'),
                            'above' => esc_html__( 'Top', 'birkita'),
                            'below' => esc_html__( 'Bottom', 'birkita'),
                        ),
            // Select multiple values, optional. Default is false.
            'multiple'    => false,
            'std'         => 'left',
        ),
    )
);

/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
if ( ! function_exists( 'birkita_register_meta_boxes' ) ) {
    function birkita_register_meta_boxes() {
    	// Make sure there's no errors when the plugin is deactivated or during upgrade
    	if ( !class_exists( 'RW_Meta_Box' ) )
    		return;
    
    	global $meta_boxes;
    	foreach ( $meta_boxes as $meta_box )
    	{
    		new RW_Meta_Box( $meta_box );
    	}
    }
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'birkita_register_meta_boxes' );
