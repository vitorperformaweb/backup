<?php
$birkita_home_share_status= 0;
$birkita_home_share_array = array();
/**
 * Load the TGM Plugin Activator class to notify the user
 * to install the Envato WordPress Toolkit Plugin
 */
require_once( get_template_directory() . '/library/class-tgm-plugin-activation.php' );
if ( ! function_exists( 'birkita_tgmpa_register_toolkit' ) ) {
    function birkita_tgmpa_register_toolkit() {
        // Specify the Envato Toolkit plugin
        $plugins = array(
            array(
                'name' => esc_html__('ReduxFramework', 'birkita'),
                'slug' => 'redux-framework',
                'required' => false,
            ),
            array(
                'name' => esc_html__('Meta Box', 'birkita'),
                'slug' => 'meta-box',
                'required' => false,
            ),
            array(
                'name' => esc_html__('Contact Form 7', 'birkita'),
                'slug' => 'contact-form-7',
                'required' => false,
            ),
            array(
                'name' => esc_html__('Woocommerce', 'birkita'),
                'slug' => 'woocommerce',
                'required' => false,
            ),
            array(
                'name' => esc_html__('WooSidebars', 'birkita'),
                'slug' => 'woosidebars',
                'required' => false,
            ),
            array(
                'name' => esc_html__('Taxonomy Meta', 'birkita'),
                'slug' => 'taxonomy-meta',
                'required' => false,
            ),
            array(
                'name' => esc_html__('Birkita User El', 'birkita'),
                'slug' => esc_html__('birkita-user-el', 'birkita'),
                'source' => get_template_directory() . '/plugins/birkita-user-el.zip',
                'required' => true,
                'version' => '1.0',
                'external_url' => '',
            ),
        );
        // i18n text domain used for translation purposes
        $theme_text_domain = 'birkita';
         
        // Configuration of TGM
        $config = array(
            'domain'           => 'birkita',
            'default_path'     => '',
            'menu'             => 'install-required-plugins',
            'has_notices'      => true,
            'is_automatic'     => true,
            'message'          => '',
            'strings'          => array(
                'page_title'                      => esc_html__( 'Install Required Plugins', 'birkita' ),
                'menu_title'                      => esc_html__( 'Install Plugins', 'birkita' ),
                'installing'                      => esc_html__( 'Installing Plugin: %s', 'birkita' ),
                'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'birkita' ),
                'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'birkita' ),
                'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'birkita' ),
                'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'birkita' ),
                'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'birkita' ),
                'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'birkita' ),
                'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'birkita' ),
                'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'birkita' ),
                'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'birkita' ),
                'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'birkita' ),
                'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'birkita' ),
                'return'                          => esc_html__( 'Return to Required Plugins Installer', 'birkita' ),
                'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'birkita' ),
                'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'birkita' ),
                'nag_type'                        => 'updated'
            )
        );
        tgmpa( $plugins, $config );
    }
}
add_action( 'tgmpa_register', 'birkita_tgmpa_register_toolkit' );
/**
 * Load the Envato WordPress Toolkit Library check for updates
 * and direct the user to the Toolkit Plugin if there is one
 */
if ( ! function_exists( 'birkita_envato_toolkit_admin_init' ) ) {
    function birkita_envato_toolkit_admin_init() {
     
        // Include the Toolkit Library
        include_once( get_template_directory() . '/library/envato-wordpress-toolkit-library/class-envato-wordpress-theme-upgrader.php' );
    
    /**
     * Display a notice in the admin to remind the user to enter their credentials
     */
        function birkita_envato_toolkit_credentials_admin_notices() {
            $message = sprintf( esc_html__( 'To enable theme update notifications, please enter your Envato Marketplace credentials in the %s', 'birkita' ),
                "<a href='" . esc_url(admin_url()) . "admin.php?page=envato-wordpress-toolkit'>Envato WordPress Toolkit Plugin</a>" );
            echo "<div id='message' class='updated below-h2'><p>{$message}</p></div>";
        }
        
        // Use credentials used in toolkit plugin so that we don't have to show our own forms anymore
        $credentials = get_option( 'envato-wordpress-toolkit' );
        if ( empty( $credentials['user_name'] ) || empty( $credentials['api_key'] ) ) {
            
            return;
        }
    
        // Check updates only after a while
        $lastCheck = get_option( 'toolkit-last-toolkit-check' );
        if ( false === $lastCheck ) {
            update_option( 'toolkit-last-toolkit-check', time() );
            return;
        }
        
        // Check for an update every 3 hours
        if ( 10800 < ( time() - $lastCheck ) ) {
            return;
        }
        
        // Update the time we last checked
        update_option( 'toolkit-last-toolkit-check', time() );
        
        // Check for updates
        $upgrader = new Envato_WordPress_Theme_Upgrader( $credentials['user_name'], $credentials['api_key'] );
        $updates = $upgrader->check_for_theme_update();
         
        // If $updates->updated_themes_count == true then we have an update!
        
        // Add update alert, to update the theme
        if ((isset($updates->updated_themes_count)) && ( $updates->updated_themes_count )) {
            
        }
        
        /**
         * Display a notice in the admin that an update is available
         */
        function birkita_envato_toolkit_admin_notices() {
            $message = sprintf( esc_html__( 'An update to the theme is available! Head over to %s to update it now.', 'birkita' ),
                "<a href='" . esc_url(admin_url()) . "admin.php?page=envato-wordpress-toolkit'>Envato WordPress Toolkit Plugin</a>" );
            echo "<div id='message' class='updated below-h2'><p>{$message}</p></div>";
        }
    }
}
add_action( 'admin_init', 'birkita_envato_toolkit_admin_init' );

function birkita_removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'birkita_removeDemoModeLink');
/**-------------------------------------------------------------------------------------------------------------------------
 * remove redux admin page
 */
if ( ! function_exists( 'birkita_remove_redux_page' ) ) {
	function birkita_remove_redux_page() {
		remove_submenu_page( 'tools.php', 'redux-about' );
	}
	add_action( 'admin_menu', 'birkita_remove_redux_page', 12 );
}
/** 
 * Register ajax
 *---------------------------------------------------
 */
if ( ! function_exists( 'birkita_enqueue_ajax_url' ) ) {
	function birkita_enqueue_ajax_url() {
		echo '<script type="application/javascript">var ajaxurl = "' . esc_url(admin_url( 'admin-ajax.php' )) . '"</script>';
	}

	add_action( 'wp_enqueue_scripts', 'birkita_enqueue_ajax_url' );
}

/**
 * http://codex.wordpress.org/Content_Width
 */
if ( ! isset($content_width)) {
	$content_width = 1050;
}
/**
 * Register scripts
 *---------------------------------------------------
 */
 
if ( ! function_exists( 'birkita_scripts_method' ) ) {
    function birkita_scripts_method() {
         
        $birkita_option = birkita_global_var_declare('birkita_option');
        
        wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css'); 

        wp_enqueue_script('jquery-owlcarousel', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'),false,true);

        wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css'); 

        wp_enqueue_style('default-owlcarousel', get_template_directory_uri() . '/css/owl.theme.default.min.css'); 
        
        wp_enqueue_style('justifiedgallery', get_template_directory_uri() . '/css/justifiedGallery.css');
        
        wp_enqueue_style('magnificpopup', get_template_directory_uri() . '/css/magnific-popup.css');
        
        wp_enqueue_style('birkita-style', get_template_directory_uri() . '/css/birkita_style.css');
        
        if ($birkita_option['birkita_responsive-switch']) {wp_enqueue_style('birkita-responsive', get_template_directory_uri() . '/css/birkita_responsive.css');};  
        
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/fonts/awesome-fonts/css/font-awesome.min.css');
        
        if ( is_active_widget('','','birkita_googlebadge')) {
            wp_enqueue_script('jquery-plusone', get_template_directory_uri().'/js/plusone.js', array('jquery'),false,true);
        }  
        
        wp_enqueue_script('jquery-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'),'', true); 
        
        wp_enqueue_script( 'jquery-fitvids', get_template_directory_uri().'/js/jquery.fitvids.js', array( 'jquery' ), false, true );  
        
        wp_enqueue_script( 'jquery-justifiedgallery', get_template_directory_uri().'/js/justifiedGallery.js', array( 'jquery' ), false, true );
        
        wp_enqueue_script( 'jquery-magnificpopup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array( 'jquery' ), false, true );
        
        wp_enqueue_script('jquery-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'),false,true);
        
        wp_enqueue_script('jquery-ticker', get_template_directory_uri() . '/js/ticker.js', array('jquery'),false,true);
        
        wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'),false,true);

        wp_enqueue_script('jquery-min-owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'),false,true);
        
        wp_enqueue_script('birkita-module-loadpost', get_template_directory_uri() . '/js/module-load-post.js', array('jquery'),false,true); 
        
        wp_enqueue_script('birkita-classicblog-loadpost', get_template_directory_uri() . '/js/classic-blog-load-post.js', array('jquery'),false,true); 
        
        wp_enqueue_script('birkita-largeblog-loadpost', get_template_directory_uri() . '/js/large-blog-load-post.js', array('jquery'),false,true); 

        wp_enqueue_script('birkita-postgrid-loadpost', get_template_directory_uri() . '/js/post-grid-load-post.js', array('jquery'),false,true); 
        
        wp_enqueue_script( 'birkita-post-review', get_template_directory_uri().'/js/birkita-post-review.js', array( 'jquery' ), false, true );  
        
        wp_enqueue_script( 'birkita-customjs', get_template_directory_uri().'/js/customjs.js', array( 'jquery' ), false, true );  
        
        if ( is_singular() ) wp_enqueue_script('comment-reply');
        
    }
}
// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'birkita_scripts_method');

// enqueue admin scripts and styles    
if ( ! function_exists( 'birkita_post_admin_scripts_and_styles' ) ) {
    function birkita_post_admin_scripts_and_styles($hook) {
        wp_register_style( 'birkita_admin',  get_template_directory_uri(). '/css/admin.css', array(), '' );
        add_editor_style('css/editorstyle.css');
        wp_enqueue_style('birkita_admin'); // enqueue it	
        wp_enqueue_script( 'birkita-admin-js', get_template_directory_uri().'/js/admin.js', array('jquery-ui-sortable'), '', true );
    	// loading admin styles only on edit + posts + new posts
    	if( $hook == 'post.php' || $hook == 'post-new.php' ) {
    			wp_register_script( 'birkita_post-review-admin',  get_template_directory_uri() . '/js/post-review-admin.js', array(), '', true);
    			wp_enqueue_script( 'birkita_post-review-admin' ); // enqueue it
   		}
    }
}
add_action('admin_enqueue_scripts', 'birkita_post_admin_scripts_and_styles');

if ( ! function_exists( 'birkita_theme_setup' ) ){

    function birkita_theme_setup() {      
        add_image_size( 'birkita_330_220', 330, 220, true );          // main post thumb  ---------------- USED (Megamenu)
       	add_image_size( 'birkita_500_400', 500, 400, true );			//  ----------------------------------USED (Classic Blog)
        add_image_size( 'birkita_600_450', 600, 450, true );          // main grid----------------------------------USED
        add_image_size( 'birkita_300_225', 300, 225, true );          // main grid----------------------------------USED
        add_image_size( 'birkita_570_570', 570, 570, true );          // slider----------------------------------USED
        add_image_size( 'birkita_570_380', 570, 380, true );          // classic blog----------------------------------USED
        add_image_size( 'birkita_1000_500', 1000, 500, true );        // main slider  -----------------------USED (Main Slider)
        add_image_size( 'birkita_750_375', 750, 375, true );          // Single page =------------------------USED
        add_image_size( 'birkita_375_500', 375, 500, true );          // sidebar post list------------------------USED
        add_image_size( 'birkita_auto-size', 400, 99999, false );        // Masonry  -----------------------USED (Masonry)
    }
}
add_action( 'after_setup_theme', 'birkita_theme_setup' );
 
/**
 * Register sidebars and widgetized areas.
 *---------------------------------------------------
 */
 if ( ! function_exists( 'birkita_widgets_init' ) ) {
    function birkita_widgets_init() {
        register_sidebar( array(
    		'name' => esc_html__('Home Full-width Section Top', 'birkita'),
    		'id' => 'fullwidth_section_top',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => '</div>',
    		'before_title' => '<div class="birkita_header">',
    		'after_title' => '</div>',
            'description'   => esc_html__('Full-width section under main navigation of Homepage template. Drag [Full-width module] here like Module Grid etc.', 'birkita'),
    	) );
        
        register_sidebar( array(
    		'name' => esc_html__('Home Content Section', 'birkita'),
    		'id' => 'content_section',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => '</div>',
    		'before_title' => '<div class="birkita_header">',
    		'after_title' => '</div>',
            'description'   => esc_html__('Content section of Homepage template. Drag [Content module] here like Module Posts One etc.', 'birkita'),
    	) );
        
        register_sidebar( array(
    		'name' => esc_html__('Home Sidebar', 'birkita'),
    		'id' => 'home_sidebar',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget' => '</aside>',
    		'before_title' => '<div class="birkita_header"><div class="main-title"><h3>',
    		'after_title' => '</h3></div></div>',
            'description'   => esc_html__('Sidebar of Homepage template. Drag [Sidebar widget] here like Widget Tabs etc.', 'birkita'),
    	) );
            
        register_sidebar( array(
    		'name' => esc_html__('Home Full-width Section Bottom', 'birkita'),
    		'id' => 'fullwidth_section_bottom',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => '</div>',
    		'before_title' => '<div class="birkita_header">',
    		'after_title' => '</div>',
            'description'   => esc_html__('Full-width section above footer of Homepage template. Drag [Full-width module] here like Module Grid etc.', 'birkita'),
    	) );        
        
        register_sidebar( array(
    		'name' => esc_html__('Page Sidebar', 'birkita'),
    		'id' => 'page_sidebar',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget' => '</aside>',
    		'before_title' => '<div class="birkita_header"><div class="main-title"><h3>',
    		'after_title' => '</h3></div></div>',
            'description'   => esc_html__('Sidebar of all other pages excluding Homepage template.', 'birkita'),
    	) );
    
        register_sidebar( array(
    		'name' => esc_html__('Footer Sidebar 1', 'birkita'),
    		'id' => 'footer_sidebar_1',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget' => '</aside>',
    		'before_title' => '<div class="birkita_header"><div class="main-title"><h3>',
    		'after_title' => '</h3></div></div>',
            'description'   => esc_html__('Footer template.', 'birkita'),
    	) );

        register_sidebar( array(
            'name' => esc_html__('Footer Sidebar 2', 'birkita'),
            'id' => 'footer_sidebar_2',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="birkita_header"><div class="main-title"><h3>',
            'after_title' => '</h3></div></div>',
            'description'   => esc_html__('Footer template.', 'birkita'),
        ) );

        register_sidebar( array(
            'name' => esc_html__('Footer Sidebar 3', 'birkita'),
            'id' => 'footer_sidebar_3',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<div class="birkita_header"><div class="main-title"><h3>',
            'after_title' => '</h3></div></div>',
            'description'   => esc_html__('Footer template.', 'birkita'),
        ) );
        
    }
}
add_action( 'widgets_init', 'birkita_widgets_init' );

require_once(get_template_directory()."/widgets/module_carousel.php");
require_once(get_template_directory()."/widgets/module_large_blog.php");
require_once(get_template_directory()."/widgets/module_classic_blog.php");
require_once(get_template_directory()."/widgets/module_grid.php");
require_once(get_template_directory()."/widgets/module_large_blog_2_col.php");
require_once(get_template_directory()."/widgets/module_main_slider.php");
require_once(get_template_directory()."/widgets/module_masonry.php");
require_once(get_template_directory()."/widgets/module_post_grid.php");
require_once(get_template_directory()."/widgets/module_post_four.php");
require_once(get_template_directory()."/widgets/module_post_four_col.php");
require_once(get_template_directory()."/widgets/module_post_four_row.php");



require_once(get_template_directory()."/widgets/widget_slider.php");
require_once(get_template_directory()."/widgets/widget_posts_list.php");
require_once(get_template_directory()."/widgets/widget_social.php");
require_once(get_template_directory()."/widgets/widget_social_counter.php");
require_once(get_template_directory()."/widgets/widget_audio.php");
require_once(get_template_directory()."/widgets/widget_video.php");
require_once(get_template_directory()."/widgets/widget_ads.php");

require_once(get_template_directory()."/library/mega_menu.php");
require_once(get_template_directory()."/library/core.php");
require_once(get_template_directory()."/library/load_post.php");
require_once(get_template_directory()."/library/custom_css.php");
require_once(get_template_directory()."/library/translation.php");

/** Init WP file system **/
birkita_initWpFilesystem();

/**
 * Meta box
 */
require_once(get_template_directory().'/library/meta_box_config.php');
require_once(get_template_directory().'/library/taxonomy-meta-config.php');

add_theme_support('title-tag');

/**
 * Register menu locations
 *---------------------------------------------------
 */
if ( ! function_exists( 'birkita_register_menu' ) ) {
    function birkita_register_menu() {
        
        register_nav_menu('menu-main',esc_html__( 'Main Menu', 'birkita'));
        register_nav_menu('menu-top',esc_html__( 'Top Menu', 'birkita'));
        register_nav_menu('menu-footer',esc_html__( 'Footer Menu', 'birkita'));
        
    }
}
add_action( 'init', 'birkita_register_menu' );


/**
 * Add support for the featured images (also known as post thumbnails).
 */
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
}

if ( !function_exists( 'birkita_add_theme_format' ) ) { 
    function birkita_add_theme_format() {
        if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-formats', array( 'gallery', 'video', 'image', 'audio' ) );
        }
    }
}
add_action('after_setup_theme', 'birkita_add_theme_format');

/**
 * ReduxFramework - Theme Options
 */
if ( !isset( $birkita_option ) && file_exists( get_template_directory() . '/library/theme-option.php' ) ) {
    require_once( get_template_directory() . '/library/theme-option.php' );
}
/**
 * Tag cloud
 */
//Register tag cloud filter callback
add_filter('widget_tag_cloud_args', 'birkita_tag_widget_limit');

//Limit number of tags inside widget
function birkita_tag_widget_limit($args){

    //Check if taxonomy option inside widget is set to tags
    if(isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag'){
        $args['number'] = 16; //Limit number of tags
        $args['orderby'] = 'count'; //Order by counts
        $args['order'] = 'DESC';
    }
    
    return $args;
}

function birkita_custom_excerpt_length( $length ) {
	return 999;
}
add_filter( 'excerpt_length', 'birkita_custom_excerpt_length', 999 );

$birkita_option = birkita_global_var_declare('birkita_option');
if(($birkita_option != null) && ($birkita_option['birkita_search-result'] == 'yes')) {
        
    function birkita_remove_pages_from_search() {
        global $wp_post_types;
        $wp_post_types['page']->exclude_from_search = true;
        $wp_post_types['attachment']->exclude_from_search = true;
    }
    add_action('init', 'birkita_remove_pages_from_search');
}

// Display 24 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );


// Change display sale off % on woocommerce shop

add_filter('woocommerce_sale_flash', 'birkita_my_custom_sale_flash', 10, 3);
function birkita_my_custom_sale_flash($text, $post, $_product) {
    $from = $_product->get_regular_price();
    $to = $_product->get_price();
    if($from==$to || !$to) return '';
    $percent=round(($from-$to)/$from*100);
    $text=$from>$to? '-':'+';
    return '<span class="discount-label">'.$text.' '.$percent.' %</span>';  
}
// Change number or products per row to 3
add_filter('loop_shop_columns', 'birkita_loop_columns');
    if (!function_exists('birkita_loop_columns')) {
        function birkita_loop_columns($num) {
        return 3; // 3 products per row
    }
}

// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

//Remove WooCommerce's annoying update message
remove_action( 'admin_notices', 'woothemes_updater_notice' );

// Declare Woocommerce support
add_action( 'after_setup_theme', 'birkita_woocommerce_support' );
function birkita_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
