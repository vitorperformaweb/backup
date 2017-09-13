<?php

/**
	ReduxFramework Config File
	For full documentation, please visit: https://github.com/ReduxFramework/ReduxFramework/wiki
**/

if ( !class_exists( "ReduxFramework" ) ) {
	return;
} 
if ( !class_exists( "Redux_Framework_config" ) ) {
	class Redux_Framework_config {

		public $args = array();
		public $sections = array();
		public $theme;
		public $ReduxFramework;

		public function __construct( ) {

			// Just for demo purposes. Not needed per say.
			$this->theme = wp_get_theme();

			// Set the default arguments
			$this->setArguments();
			
			// Set a few help tabs so you can see how it's done
			$this->setHelpTabs();

			// Create the sections and fields
			$this->setSections();
			
			if ( !isset( $this->args['opt_name'] ) ) { // No errors please
				return;
			}
			
			$this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
			add_filter('redux/options/'.$this->args['opt_name'].'/sections', array( $this, 'dynamic_section' ) );

		}


		/**

			This is a test function that will let you see when the compiler hook occurs. 
			It only runs if a field	set with compiler=>true is changed.

		**/

		function compiler_action($options, $css) {

		}



		/**
		 
		 	Custom function for filtering the sections array. Good for child themes to override or add to the sections.
		 	Simply include this function in the child themes functions.php file.
		 
		 	NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
		 	so you must use get_template_directory_uri() if you want to use any of the built in icons
		 
		 **/

		function dynamic_section($sections){


		    return $sections;
		}
		
		
		/**

			Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.

		**/
		
		function change_arguments($args){

		    
		    return $args;
		}
			
		
		/**

			Filter hook for filtering the default value of any given field. Very useful in development mode.

		**/

		function change_defaults($defaults){
		    $defaults['str_replace'] = "Testing filter hook!";
		    
		    return $defaults;
		}


		// Remove the demo link and the notice of integrated demo from the redux-framework plugin
		function remove_demo() {
			
			// Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
			if ( class_exists('ReduxFrameworkPlugin') ) {
				remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_meta_demo_mode_link'), null, 2 );
			}

			// Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
			remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );	

		}


		public function setSections() {

			/**
			 	Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
			 **/


		

			ob_start();

			$ct = wp_get_theme();
			$this->theme = $ct;
			$item_name = $this->theme->get('Name'); 
			$tags = $this->theme->Tags;
			$screenshot = $this->theme->get_screenshot();
			$class = $screenshot ? 'has-screenshot' : '';

			$customize_title = sprintf( esc_html__( 'Customize &#8220;%s&#8221;','birkita'), $this->theme->display('Name') );

			?>
			<div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
				<?php if ( $screenshot ) : ?>
					<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
					<a href="<?php echo esc_url(wp_customize_url()); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr( $customize_title ); ?>">
						<img src="<?php echo esc_url( $screenshot ); ?>" alt="<?php esc_attr_e( 'Current theme preview', 'birkita'); ?>" />
					</a>
					<?php endif; ?>
					<img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>" alt="<?php esc_attr_e( 'Current theme preview', 'birkita'); ?>" />
				<?php endif; ?>

				<h4>
					<?php echo (esc_attr($this->theme->display('Name'))); ?>
				</h4>

				<div>
					<ul class="theme-info">
						<li><?php printf( esc_html__('By %s','birkita'), $this->theme->display('Author') ); ?></li>
						<li><?php printf( esc_html__('Version %s','birkita'), $this->theme->display('Version') ); ?></li>
						<li><?php echo '<strong>'.esc_html__('Tags', 'birkita').':</strong> '; ?><?php printf( $this->theme->display('Tags') ); ?></li>
					</ul>
					<p class="theme-description"><?php echo esc_attr($this->theme->display('Description')); ?></p>
					<?php if ( $this->theme->parent() ) {
						printf( ' <p class="howto">' . esc_html__( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.', 'birkita') . '</p>',
							esc_html__( 'http://codex.wordpress.org/Child_Themes','birkita'),
							$this->theme->parent()->display( 'Name' ) );
					} ?>
					
				</div>

			</div>

			<?php
			$item_info = ob_get_contents();
			    
			ob_end_clean();

			$sampleHTML = '';

			// ACTUAL DECLARATION OF SECTIONS
            
                $this->sections[] = array(
    				'icon' => 'el-icon-wrench',
    				'title' => esc_html__('General Settings', 'birkita'),
    				'fields' => array(
    					array(
    						'id'=>'birkita_primary-color',
    						'type' => 'color',
    						'title' => esc_html__('Primary color', 'birkita'), 
    						'subtitle' => esc_html__('Pick a primary color for the theme.', 'birkita'),
    						'default' => '#d6976d',
    						'validate' => 'color',
						),
                        array(
    						'id'=>'birkita_page-color',
    						'type' => 'color',
    						'title' => esc_html__('Page color', 'birkita'), 
    						'subtitle' => esc_html__('Pick a color for the page.', 'birkita'),
    						'default' => '#ffffff',
    						'validate' => 'color',
						),
                        array(
                            'id'=>'birkita_archive-page-color',
                            'type' => 'color',
                            'title' => esc_html__('Archive Page color', 'birkita'), 
                            'subtitle' => esc_html__('Pick a color for the archive page.', 'birkita'),
                            'default' => '#fafafa',
                            'validate' => 'color',
                        ),
    				)
    			);
                $this->sections[] = array(
    				'icon' => 'el-icon-tasks',
    				'title' => esc_html__('Site Layout', 'birkita'),
    				'fields' => array(
                        array(
    						'id'=>'birkita_site-layout',
    						'type' => 'button_set',
    						'title' => esc_html__('Site layout', 'birkita'),
    						'subtitle'=> esc_html__('Choose between wide and boxed layout', 'birkita'),
    						'options' => array('1' => esc_html__('Wide', 'birkita'),'2' => esc_html__('Boxed', 'birkita')),
    						'default' => '1'
						),
                        array(
    						'id'=>'birkita_body-bg',
    						'type' => 'background',
                            'required' => array('birkita_site-layout','=','2'),
    						'output' => array('body'),
    						'title' => esc_html__('Site background', 'birkita'), 
    						'subtitle' => esc_html__('Choose background image or background color for boxed layout', 'birkita'),
						),
                        array(
    						'id'=>'birkita_responsive-switch',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable responsive', 'birkita'),
    						'subtitle'=> esc_html__('Enable responsive layout', 'birkita'),
    						'default' 		=> 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),
                        array(
    						'id'=>'birkita_sb-responsive-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable sidebar in responsive layout', 'birkita'),
    						'subtitle' => esc_html__('Choose to display or hide sidebar in responsive layout', 'birkita'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),
    				)
    			);
                $this->sections[] = array(
    				'icon' => 'el-icon-credit-card',
    				'title' => esc_html__('Header Settings', 'birkita'),
    				'fields' => array(
                        array(
    						'id'=>'birkita_logo',
    						'type' => 'media', 
    						'url'=> true,
    						'title' => esc_html__('Site logo', 'birkita'),
    						'subtitle' => esc_html__('Upload logo of your site that is displayed in header', 'birkita'),
                            'placeholder' => esc_html__('No media selected','birkita')
						),
                        array(
    						'id'=>'birkita_header-social-switch',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable Header Social Items and Search', 'birkita'),
    						'subtitle' => esc_html__('Enable social icons and Search in top-bar', 'birkita'),
    						"default" => 0,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),	
                        array(
    						'id'=>'birkita_social-header',
    						'type' => 'text',
                            'required' => array('birkita_header-social-switch','=','1'),
    						'title' => esc_html__('Social media', 'birkita'),
    						'subtitle' => esc_html__('Set up social links for site', 'birkita'),
    						'options' => array('fb'=>'Facebook Url', 'twitter'=>'Twitter Url', 'gplus'=>'GPlus Url', 'linkedin'=>'Linkedin Url',
                                               'pinterest'=>'Pinterest Url', 'instagram'=>'Instagram Url', 'dribbble'=>'Dribbble Url', 
                                               'youtube'=>'Youtube Url', 'vimeo'=>'Vimeo Url', 'vk'=>'VK Url', 'rss'=>'RSS Url'),
    						'default' => array('fb'=>'', 'twitter'=>'', 'gplus'=>'', 'linkedin'=>'', 'pinterest'=>'', 'instagram'=>'', 'dribbble'=>'', 
                                                'youtube'=>'', 'vimeo'=>'', 'vk'=>'', 'rss'=>'')
						),
                        array(
    						'id'=>'birkita_header-search',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable Header Search', 'birkita'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),
                        array(
    						'id'=>'birkita_header-bg',
    						'type' => 'background',
    						'output' => array('.header-wrap'),
    						'title' => esc_html__('Header background', 'birkita'), 
    						'subtitle' => esc_html__('Choose background image or background color for site header', 'birkita'),
						),
                        array(
            				'id'=>'birkita_header-layout',
            				'type' => 'select',
                            'title' => esc_html__('Header layout', 'birkita'), 
                            'subtitle' => esc_html__('Choose site header layout', 'birkita'),
                            'options' => array('left' => esc_html__('Left', 'birkita'),'center'=>esc_html__('Center', 'birkita')),                            
    						'default' => 'center',
        				),
                        array(
    						'id'=>'birkita_fixed-nav-switch',
    						'type' => 'button_set', 
    						'title' => esc_html__('Enable fixed header menu', 'birkita'),
    						'subtitle'=> esc_html__('Choose between fixed and static header navigation', 'birkita'),
                            'options' => array('1' => esc_html__('Static', 'birkita'),'2' => esc_html__('Fixed', 'birkita')),
    						'default' => '1',
						),
                        array(
    						'id'=>'birkita_header-banner-switch',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable header banner', 'birkita'),
    						'subtitle' => esc_html__('Enable banner in header', 'birkita'),
    						"default" => 0,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),
                        array(
    						'id'=>'birkita_header-banner',
    						'type' => 'text',
                            'required' => array('birkita_header-banner-switch','=','1'),
    						'title' => esc_html__('Header banner', 'birkita'),
    						'subtitle' => esc_html__('Set up banner displays in header', 'birkita'),
    						'options' => array('imgurl'=> esc_html__('Image URL', 'birkita'), 'linkurl'=> esc_html__('Link URL', 'birkita')),
    						'default' => array('imgurl'=>'http://', 'linkurl'=>'http://')
						),
                        array(
                            'id'=>'birkita_banner-script',
                            'type' => 'textarea',
                            'title' => esc_html__('Google Adsense Code', 'birkita'),
                            'required' => array('birkita_header-banner-switch','=','1'),
                            'default' => '',
                        ),
    				)
    			);
                $this->sections[] = array(
    				'icon' => 'el-icon-credit-card',
    				'title' => esc_html__('Footer Settings', 'birkita'),
    				'fields' => array(
                        array(
    						'id'=>'birkita_footer-instagram',
    						'type' => 'switch',
    						'title' => esc_html__('Footer Instagram', 'birkita'),
    						'default' 	=> 0,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),
                        array(
                            'id' => 'section-instagram-header-start',
                            'title' => esc_html__('Footer Instagram Setting', 'birkita'),
                            'subtitle' => '',
                            'required' => array('birkita_footer-instagram','=','1'),
                            'type' => 'section',                             
                            'indent' => true // Indent all options below until the next 'section' option is set.
                        ),
                        array(
    						'id'=>'birkita_footer-instagram-title',
    						'title' => esc_html__('Instagram Section Title', 'birkita'),
                            'type' => 'text',                            
						),
                        array(
    						'id'=>'birkita_footer-instagram-username',
    						'title' => esc_html__('Instagram Username', 'birkita'),
                            'type' => 'text',                            
						),
                        array(
                            'id' => 'section-instagram-header-end',
                            'type' => 'section',                             
                            'indent' => false // Indent all options below until the next 'section' option is set.
                        ),
                        array(
    						'id'=>'birkita_backtop-switch',
    						'type' => 'switch', 
    						'title' => esc_html__('Scroll top button', 'birkita'),
    						'subtitle'=> esc_html__('Show scroll to top button in right lower corner of window', 'birkita'),
    						'default' 		=> 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),
                        array(
    						'id'=>'cr-text',
    						'type' => 'textarea',
    						'title' => esc_html__('Copyright text - HTML Validated', 'birkita'), 
    						'subtitle' => esc_html__('HTML Allowed (wp_kses)', 'birkita'),
    						'validate' => 'html', 
                            'default' 		=> '',
						),
    				)
    			);
                $this->sections[] = array(
            		'icon'    => ' el-icon-font',
            		'title'   => esc_html__('Typography', 'birkita'),
            		'fields'  => array(
                        array(
            				'id'=>'birkita_header-font',
            				'type' => 'typography', 
                            'output' => array('.main-nav #main-menu .menu > li > a, .top-nav ul.menu > li, .birkita_mega-menu .birkita_sub-menu > li > a,
                            .birkita_dropdown-menu .birkita_sub-menu > li > a, #main-mobile-menu li'),
            				'title' => esc_html__('Navigation font', 'birkita'),
            				'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
            				'font-size'=>false,
            				'line-height'=>false,
            				'color'=>false,
            				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
            				'units'=>'px', // Defaults to px
                            'text-align' => false,
            				'subtitle'=> esc_html__('Font options for menu, category title and module title', 'birkita'),
            				'default'=> array( 
            					'font-weight'=>'700', 
            					'font-family'=>'Montserrat', 
            					'google' => true,
            				    ),
                        ),
                        array(
            				'id'=>'birkita_meta-font',
            				'type' => 'typography', 
                            'output' => array('.post-meta, .post-cat, .meta-bottom .post-author, .rating-wrap'),
            				'title' => esc_html__('Post Meta font', 'birkita'),
            				'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
            				'font-size'=>false,
            				'line-height'=>false,
            				'color'=>false,
            				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
            				'units'=>'px', // Defaults to px
                            'text-align' => false,
            				'subtitle'=> esc_html__('Font options for title of posts', 'birkita'),
            				'default'=> array( 
            					'font-weight'=>'400', 
            					'font-family'=>'Montserrat', 
            					'google' => true,
            				    ),
                        ),
                        array(
            				'id'=>'birkita_title-font',
            				'type' => 'typography', 
                            'output' => array('h1, h2, h3, h4, h5, h5, h6, .post-title , .grid-container .post-info .post-title , .post-title.post-title-masonry, .post-nav-link-title h3, span.comment-author-link,
                            .recentcomments a:last-child, ul.ticker li h2 a, .header .logo.logo-text h1, .widget_recent_entries a, .loadmore-button .ajax-load-btn, .widget_nav_menu > div > ul > li,
                            .birkita_review-box .birkita_criteria-wrap .birkita_criteria'),
            				'title' => esc_html__('Post title font', 'birkita'),
            				'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
            				'font-size'=>false,
            				'line-height'=>false,
            				'color'=>false,
            				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
            				'units'=>'px', // Defaults to px
                            'text-align' => false,
            				'subtitle'=> esc_html__('Font options for title of posts', 'birkita'),
            				'default'=> array( 
            					'font-weight'=>'700', 
            					'font-family'=>'Montserrat', 
            					'google' => true,
            				    ),
                        ),
                        array(
            				'id'=>'birkita_module-title-font',
            				'type' => 'typography', 
                            'output' => array('.birkita_header .birkita_title h3, .birkita_header .main-title h3, .footer .birkita_header .main-title h3'),
            				'title' => esc_html__('Module title font', 'birkita'),
            				'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
            				'font-size'=>false,
            				'line-height'=>false,
            				'color'=>false,
            				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
            				'units'=>'px', // Defaults to px
                            'text-align' => false,
            				'subtitle'=> esc_html__('Font options for title of Modules', 'birkita'),
            				'default'=> array( 
            					'font-weight'=>'700', 
            					'font-family'=>'Montserrat', 
            					'google' => true,
            				    ),
                        ),
                        array(
            				'id'=>'birkita_body-font',
            				'type' => 'typography',
                            'output' => array('body, textarea, input, p, 
                            .entry-excerpt, .comment-text, .comment-author, .article-content,
                            .comments-area, .tag-list, .birkita_author-meta h3 '), 
            				'title' => esc_html__('Text font', 'birkita'),
            				'google'=>true, // Disable google fonts. Won't work if you haven't defined your google api key
            				'font-size'=>false,
            				'line-height'=>false,
            				'color'=>false,
            				'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
            				'units'=>'px', // Defaults to px
                            'text-align' => false,
            				'subtitle'=> esc_html__('Font options for text body', 'birkita'),
            				'default'=> array(
            					'font-weight'=>'400', 
            					'font-family'=>'Montserrat', 
            					'google' => true,
                            ),
            			),
                    ),
                );
                $this->sections[] = array(
    				'icon' => 'el-icon-file-edit',
    				'title' => esc_html__('Post Settings', 'birkita'),
    				'fields' => array(
                        array(
                            'id' => 'section-postmeta-start',
                            'title' => esc_html__('Post meta', 'birkita'),
                            'subtitle' => esc_html__('Options for displaying post meta in modules and widgets','birkita'),
                            'type' => 'section',                             
                            'indent' => true // Indent all options below until the next 'section' option is set.
                        ),
                        array(
                            'id'=>'birkita_meta-review-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable post meta review score', 'birkita'),
                            "default" => 1,
                            'on' => esc_html__('Enabled', 'birkita'),
                            'off' => esc_html__('Disabled', 'birkita'),
                        ),
                        array(
                            'id'=>'birkita_meta-author-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable post meta author', 'birkita'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
                        ),
                        array(
                            'id'=>'birkita_meta-date-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable post meta date', 'birkita'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
                        ),
                        array(
                            'id'=>'birkita_meta-comments-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable post meta comments', 'birkita'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
                        ),
                        array(
                            'id' => 'section-postmeta-end',
                            'type' => 'section',                             
                            'indent' => false // Indent all options below until the next 'section' option is set.
                        ),
                        
    				)
    			);
                $this->sections[] = array(
            		'icon'    => 'el-icon-book',
            		'title'   => esc_html__('Pages Setting', 'birkita'),
            		'heading' => esc_html__('Pages Setting','birkita'),
            		'desc'    => esc_html__('Setting layout for pages', 'birkita'),
            		'fields'  => array(
                        array(
                            'id'=>'birkita_sidebar-sticky',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Sticky Sidebar', 'birkita'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
                        ),
                        array(
                            'id'=>'birkita_sidebar-position',
                            'type' => 'select',
                            'title' => esc_html__('Sidebar Position', 'birkita'),
                            'default' => 'right',
    						'options' => array('right' => esc_html__('Right','birkita'), 'left' => esc_html__('Left','birkita')),
                        ),
                        array(
            				'id'=>'birkita_blog-layout',
            				'type' => 'select',
                            'title' => esc_html__('Blog page layout', 'birkita'), 
    						'options' => array('big-blog'=>esc_html__('Large Blog Big', 'birkita'), 'small-blog'=>esc_html__('Large Blog Small', 'birkita'), 'big-classic'=>esc_html__('Classic Blog Big', 'birkita'), 'small-classic'=>esc_html__('Classic Blog Small', 'birkita'),
											   'big-masonry'=>esc_html__('Masonry Big', 'birkita'), 'small-masonry'=>esc_html__('Masonry Small', 'birkita'), 'big-grid'=>esc_html__('Grid Big', 'birkita'), 'small-grid'=>esc_html__('Grid Small', 'birkita')),
    						'default' => 'small-blog',
            			),
                        array(
            				'id'=>'birkita_author-layout',
            				'type' => 'select',
                            'title' => esc_html__('Author page layout', 'birkita'), 
    						'options' => array('big-blog'=>esc_html__('Large Blog Big', 'birkita'), 'small-blog'=>esc_html__('Large Blog Small', 'birkita'), 'big-classic'=>esc_html__('Classic Blog Big', 'birkita'), 'small-classic'=>esc_html__('Classic Blog Small', 'birkita'),
											   'big-masonry'=>esc_html__('Masonry Big', 'birkita'), 'small-masonry'=>esc_html__('Masonry Small', 'birkita'), 'big-grid'=>esc_html__('Grid Big', 'birkita'), 'small-grid'=>esc_html__('Grid Small', 'birkita')),
    						'default' => 'small-blog',
            			),
                        array(
            				'id'=>'birkita_category-layout',
            				'type' => 'select',
                            'title' => esc_html__('Category page layout', 'birkita'),
                            'subtitle' => esc_html__('Global setting for layout of category archive page, will be overridden by layout option in category edit page.', 'birkita'), 
    						'options' => array('big-blog'=>esc_html__('Large Blog Big', 'birkita'), 'small-blog'=>esc_html__('Large Blog Small', 'birkita'), 'big-classic'=>esc_html__('Classic Blog Big', 'birkita'), 'small-classic'=>esc_html__('Classic Blog Small', 'birkita'),
											   'big-masonry'=>esc_html__('Masonry Big', 'birkita'), 'small-masonry'=>esc_html__('Masonry Small', 'birkita'), 'big-grid'=>esc_html__('Grid Big', 'birkita'), 'small-grid'=>esc_html__('Grid Small', 'birkita')),
    						'default' => 'small-blog',
            			),
                        array(
            				'id'=>'birkita_archive-layout',
            				'type' => 'select',
                            'title' => esc_html__('Archive page layout', 'birkita'), 
                            'subtitle' => esc_html__('Layout for Archive page and Tag archive.', 'birkita'),
    						'options' => array('big-blog'=>esc_html__('Large Blog Big', 'birkita'), 'small-blog'=>esc_html__('Large Blog Small', 'birkita'), 'big-classic'=>esc_html__('Classic Blog Big', 'birkita'), 'small-classic'=>esc_html__('Classic Blog Small', 'birkita'),
											   'big-masonry'=>esc_html__('Masonry Big', 'birkita'), 'small-masonry'=>esc_html__('Masonry Small', 'birkita'), 'big-grid'=>esc_html__('Grid Big', 'birkita'), 'small-grid'=>esc_html__('Grid Small', 'birkita')),
    						'default' => 'small-blog',
            			),
                        array(
            				'id'=>'birkita_search-layout',
            				'type' => 'select',
                            'title' => esc_html__('Search page layout', 'birkita'), 
                            'subtitle' => esc_html__('Layout for Search page', 'birkita'),
    						'options' => array('big-blog'=>esc_html__('Large Blog Big', 'birkita'), 'small-blog'=>esc_html__('Large Blog Small', 'birkita'), 'big-classic'=>esc_html__('Classic Blog Big', 'birkita'), 'small-classic'=>esc_html__('Classic Blog Small', 'birkita'),
											   'big-masonry'=>esc_html__('Masonry Big', 'birkita'), 'small-masonry'=>esc_html__('Masonry Small', 'birkita'), 'big-grid'=>esc_html__('Grid Big', 'birkita'), 'small-grid'=>esc_html__('Grid Small', 'birkita')),
    						'default' => 'small-blog',
            			),
                        array(
            				'id'=>'birkita_search-result',
            				'type' => 'select',
                            'title' => esc_html__('Remove Pages in Search Result', 'birkita'),
    						'options' => array('yes' => esc_html__('yes', 'birkita'), 'no' => esc_html__('no', 'birkita')),
    						'default' => 'yes',
            			),
                    ),
                );
                $this->sections[] = array(
    				'icon' => 'el-icon-list-alt',
    				'title' => esc_html__('Single Settings', 'birkita'),
    				'fields' => array(
                        array(
    						'id'=>'birkita_single-featimg',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable featured image', 'birkita'),
    						'subtitle' => esc_html__('Enable featured image in single post', 'birkita'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),
                        array(
    						'id'=>'birkita_sharebox-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable share box', 'birkita'),
    						'subtitle' => esc_html__('Enable share links below single post', 'birkita'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
                            'indent' => true
						),
                        array(
                            'id'=>'section-sharebox-start',
                            'type' => 'section',                             
                            'indent' => true // Indent all options below until the next 'section' option is set.
                        ),
                        array(
                            'id'=>'birkita_fb-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Facebook share link', 'birkita'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
                        ),
                        array(
                            'id'=>'birkita_tw-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Twitter share link', 'birkita'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
                        ),
                        array(
                            'id'=>'birkita_gp-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Google+ share link', 'birkita'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
                        ),
                        array(
                            'id'=>'birkita_pi-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Pinterest share link', 'birkita'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
                        ),
                        array(
                            'id'=>'birkita_li-sw',
                            'type' => 'switch',
                            'title' => esc_html__('Enable Linkedin share link', 'birkita'),
                            "default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
                        ),
                        array(
                            'id'=>'section-sharebox-end',
                            'type' => 'section', 
                            'indent' => false // Indent all options below until the next 'section' option is set.
                        ), 
                        array(
    						'id'=>'birkita_authorbox-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable author box', 'birkita'),
    						'subtitle' => esc_html__('Enable author information below single post', 'birkita'),
    						"default" => 0,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),
                        array(
    						'id'=>'birkita_postnav-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable post navigation', 'birkita'),
    						'subtitle' => esc_html__('Enable post navigation below single post', 'birkita'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),
                        array(
    						'id'=>'birkita_related-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable related posts', 'birkita'),
    						'subtitle' => esc_html__('Enable related posts below single post', 'birkita'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),  
                        array(
    						'id'=>'birkita_comment-sw',
    						'type' => 'switch', 
    						'title' => esc_html__('Enable comment section', 'birkita'),
    						'subtitle' => esc_html__('Enable comment section below single post', 'birkita'),
    						"default" => 1,
    						'on' => esc_html__('Enabled', 'birkita'),
    						'off' => esc_html__('Disabled', 'birkita'),
						),    	
    				)
    			);
                $this->sections[] = array(
    				'icon' => 'el-icon-css',
    				'title' => esc_html__('Custom CSS', 'birkita'),
    				'fields' => array(
                        array(
    						'id'=>'birkita_css-code',
    						'type' => 'ace_editor',
    						'title' => esc_html__('CSS Code', 'birkita'), 
    						'subtitle' => esc_html__('Paste your CSS code here.', 'birkita'),
    						'mode' => 'css',
    			            'theme' => 'chrome',
       			            'default' => "",
    					),                                           	
    				)
    			);				
					

			$theme_info = '<div class="redux-framework-section-desc">';
			$theme_info .= '<p class="redux-framework-theme-data description theme-uri">'.esc_html__('<strong>Theme URL:</strong> ', 'birkita').'<a href="'.$this->theme->get('ThemeURI').'" target="_blank">'.$this->theme->get('ThemeURI').'</a></p>';
			$theme_info .= '<p class="redux-framework-theme-data description theme-author">'.esc_html__('<strong>Author:</strong> ', 'birkita').$this->theme->get('Author').'</p>';
			$theme_info .= '<p class="redux-framework-theme-data description theme-version">'.esc_html__('<strong>Version:</strong> ', 'birkita').$this->theme->get('Version').'</p>';
			$theme_info .= '<p class="redux-framework-theme-data description theme-description">'.$this->theme->get('Description').'</p>';
			$tabs = $this->theme->get('Tags');
			if ( !empty( $tabs ) ) {
				$theme_info .= '<p class="redux-framework-theme-data description theme-tags">'.esc_html__('<strong>Tags:</strong> ', 'birkita').implode(', ', $tabs ).'</p>';	
			}
			$theme_info .= '</div>';

			$this->sections[] = array(
				'type' => 'divide',
			);

			$this->sections[] = array(
				'icon' => 'el-icon-info-sign',
				'title' => esc_html__('Theme Information', 'birkita'),
				'fields' => array(
					array(
						'id'=>'raw_new_info',
						'type' => 'raw',
						'content' => $item_info,
						)
					),   
				);
		}	

		public function setHelpTabs() {

			/*// Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
			$this->args['help_tabs'][] = array(
			    'id' => 'redux-opts-1',
			    'title' => esc_html__('Theme Information 1', 'birkita'),
			    'content' => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'birkita')
			);

			$this->args['help_tabs'][] = array(
			    'id' => 'redux-opts-2',
			    'title' => esc_html__('Theme Information 2', 'birkita'),
			    'content' => esc_html__('<p>This is the tab content, HTML is allowed.</p>', 'birkita')
			);

			// Set the help sidebar
			$this->args['help_sidebar'] = esc_html__('<p>This is the sidebar content, HTML is allowed.</p>', 'birkita');*/

		}


		/**
			
			All the possible arguments for Redux.
			For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

		 **/
		public function setArguments() {
			
			$theme = wp_get_theme(); // For use with some settings. Not necessary.

			$this->args = array(
	            
	            // TYPICAL -> Change these values as you need/desire
				'opt_name'          	=> 'birkita_option', // This is where your data is stored in the database and also becomes your global variable name.
				'display_name'			=> $theme->get('Name'), // Name that appears at the top of your panel
				'display_version'		=> $theme->get('Version'), // Version that appears at the top of your panel
				'menu_type'          	=> 'menu', //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
				'allow_sub_menu'     	=> true, // Show the sections below the admin menu item or not
				'menu_title'			=> esc_html__( 'Theme Options', 'birkita'),
	            'page'		 	 		=> esc_html__( 'Theme Options', 'birkita'),
	            'google_api_key'   	 	=> 'AIzaSyBdxbxgVuwQcnN5xCZhFDSpouweO-yJtxw', // Must be defined to add google fonts to the typography module
	            'global_variable'    	=> '', // Set a different name for your global variable other than the opt_name
	            'dev_mode'           	=> false, // Show the time the page took to load, etc
	            'customizer'         	=> true, // Enable basic customizer support

	            // OPTIONAL -> Give you extra features
	            'page_priority'      	=> null, // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	            'page_parent'        	=> 'themes.php', // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	            'page_permissions'   	=> 'manage_options', // Permissions needed to access the options panel.
	            'menu_icon'          	=> '', // Specify a custom URL to an icon
	            'last_tab'           	=> '', // Force your panel to always open to a specific tab (by id)
	            'page_icon'          	=> 'icon-themes', // Icon displayed in the admin panel next to your menu_title
	            'page_slug'          	=> '_options', // Page slug used to denote the panel
	            'save_defaults'      	=> true, // On load save the defaults to DB before user clicks save or not
	            'default_show'       	=> false, // If true, shows the default value next to each field that is not the default value.
	            'default_mark'       	=> '', // What to print by the field's title if the value shown is default. Suggested: *


	            // CAREFUL -> These options are for advanced use only
	            'transient_time' 	 	=> 60 * MINUTE_IN_SECONDS,
	            'output'            	=> true, // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
	            'output_tag'            	=> true, // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
	            //'domain'             	=> 'birkita', // Translation domain key. Don't change this unless you want to retranslate all of Redux.
	            //'footer_credit'      	=> '', // Disable the footer credit of Redux. Please leave if you can help it.
	            

	            // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	            'database'           	=> '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	            
	        
	            'show_import_export' 	=> true, // REMOVE
	            'system_info'        	=> false, // REMOVE
	            
	            'help_tabs'          	=> array(),
	            'help_sidebar'       	=> '',             
				);


			// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.		
			$this->args['share_icons'][] = array(
			    'url' => 'https://github.com/ReduxFramework/ReduxFramework',
			    'title' => 'Visit us on GitHub', 
			    'icon' => 'el-icon-github'
			);		
			$this->args['share_icons'][] = array(
			    'url' => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
			    'title' => 'Like us on Facebook', 
			    'icon' => 'el-icon-facebook'
			);
			$this->args['share_icons'][] = array(
			    'url' => 'http://twitter.com/reduxframework',
			    'title' => 'Follow us on Twitter', 
			    'icon' => 'el-icon-twitter'
			);
			$this->args['share_icons'][] = array(
			    'url' => 'http://www.linkedin.com/company/redux-framework',
			    'title' => 'Find us on LinkedIn', 
			    'icon' => 'el-icon-linkedin'
			);

			
	 
			// Panel Intro text -> before the form
			if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false ) {
				if (!empty($this->args['global_variable'])) {
					$v = $this->args['global_variable'];
				} else {
					$v = str_replace("-", "_", $this->args['opt_name']);
				}
				$this->args['intro_text'] = '';
			} else {
				$this->args['intro_text'] = '';
			}

			// Add content after the form.
			$this->args['footer_text'] = '' ;

		}
	}
	new Redux_Framework_config();

}


/** 

	Custom function for the callback referenced above

 */
if ( !function_exists( 'redux_my_custom_field' ) ):
	function redux_my_custom_field($field, $value) {
	    print_r($field);
	    print_r($value);
	}
endif;

/**
 
	Custom function for the callback validation referenced above

**/
if ( !function_exists( 'redux_validate_callback_function' ) ):
	function redux_validate_callback_function($field, $value, $existing_value) {
	    $error = false;
	    $value =  'just testing';
	    /*
	    do your validation
	    
	    if(something) {
	        $value = $value;
	    } elseif(something else) {
	        $error = true;
	        $value = $existing_value;
	        $field['msg'] = 'your custom error message';
	    }
	    */
	    
	    $return['value'] = $value;
	    if($error == true) {
	        $return['error'] = $field;
	    }
	    return $return;
	}
endif;
