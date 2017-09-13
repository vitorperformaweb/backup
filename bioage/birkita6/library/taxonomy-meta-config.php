<?php
/**
 * Registering meta sections for taxonomies
 *
 * All the definitions of meta sections are listed below with comments, please read them carefully.
 * Note that each validation method of the Validation Class MUST return value.
 *
 * You also should read the changelog to know what has been changed
 *
 */

// Hook to 'admin_init' to make sure the class is loaded before
// (in case using the class in another plugin)
add_action( 'admin_init', 'birkita_register_taxonomy_meta_boxes' );

/**
 * Register meta boxes
 *
 * @return void
 */
function birkita_register_taxonomy_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Taxonomy_Meta' ) )
		return;

	$meta_sections = array();

	// First meta section
	$meta_sections[] = array(
		'title'      => esc_html__('birkita Category Options','birkita'),             // section title
		'taxonomies' => array('category', 'post_tag'), // list of taxonomies. Default is array('category', 'post_tag'). Optional
		'id'         => 'birkita_cat_opt',                 // ID of each section, will be the option name

		'fields' => array(                             // List of meta fields
			// SELECT
			array(
				'name'    => esc_html__('Category layout','birkita'),
				'id'      => 'cat_layout',
				'type'    => 'select',
				'options' => array('global' => esc_html__('Global setting','birkita'), 'big-blog'=>esc_html__('Large Blog Big', 'birkita'), 'small-blog'=>esc_html__('Large Blog Small', 'birkita'), 'big-classic'=>esc_html__('Classic Blog Big', 'birkita'), 'small-classic'=>esc_html__('Classic Blog Small', 'birkita'),
																					'big-masonry'=>esc_html__('Masonry Big', 'birkita'), 'small-masonry'=>esc_html__('Masonry Small', 'birkita'), 'big-grid'=>esc_html__('Grid Big', 'birkita'), 'small-grid'=>esc_html__('Grid Small', 'birkita')),
                'std' => 'global',
                'desc' => esc_html__('Global setting option is set in Theme Option panel','birkita')
			),
            // CHECKBOX
			array(
				'name' => esc_html__('Display featured slider','birkita'),
				'id'   => 'cat_feat',
				'type' => 'checkbox',
			),
		),
	);

	foreach ( $meta_sections as $meta_section )
	{
		new RW_Taxonomy_Meta( $meta_section );
	}
}
