<?php
/**
 * Plugin Name: Birkita: Social Counter Widget
 * Plugin URI: http://demo.monotheme.info/birkita
 * Description: Displays social counters.
 * Version: 1.0
 * Author: Birkita
 * Author URI: http://demo.monotheme.info/birkita/author/birkita
 *
 */
 
/**
 * Include required files
 */

 /**
 * Add function to widgets_init that'll load our widget.
 */
add_action('widgets_init','birkita_register_social_counters_widget');

function birkita_register_social_counters_widget() {
	register_widget('birkita_social_counter');
}

/**
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 */
class birkita_social_counter extends WP_Widget {
    private $connection;

	private $consumer_key;
	private $consumer_secret;
	private $access_token;
	private $access_token_secret;	
	/**
	 * Widget setup.
	 */
	function __construct() {
		
		/* Widget settings. */
		$widget_ops = array('classname' => 'widget-social-counter','description' => esc_html__('Displays social counters', 'birkita'));
		
		/* Create the widget. */
		parent::__construct('birkita_social_counter',esc_html__('*birkita: Widget Social Counters', 'birkita'),$widget_ops);

	}
	
	/**
	 * display the widget on the screen.
	 */	
	function widget( $args, $instance ) {
		extract( $args );
		//user settings	
        $title = apply_filters('widget_title', $instance['title'] );
		$birkita_youtube_username = esc_attr($instance['birkita_youtube_username']);
        $birkita_youtube_api_key = esc_attr($instance['birkita_youtube_api_key']);
        $birkita_pinterest_id = esc_attr($instance['birkita_pinterest_id']);
        $birkita_rss_url = esc_url($instance['birkita_rss_url']);
		$birkita_facebook_username = esc_attr($instance['birkita_facebook_username']);
        $birkita_facebook_accesstoken = $instance['birkita_facebook_accesstoken'];
		$birkita_twitter_id = esc_attr($instance['birkita_twitter_id']);
        
        $birkita_soundcloud_user = esc_attr($instance['birkita_soundcloud_user']);
        $birkita_soundcloud_api = esc_attr($instance['birkita_soundcloud_api']);
        $birkita_instagram_api = esc_attr($instance['birkita_instagram_api']);		  

		echo ($before_widget);
		if ( $title ) {
            echo ($before_title .esc_html($title). $after_title);
        }

		//twitter
		if (isset($birkita_twitter_id)&&(strlen($birkita_twitter_id) != 0)){

			$followers = birkita_count_twitter($birkita_twitter_id);
			if ( ! empty( $followers ) ) {
				update_option('birkita_twitter_followers', $followers);
			}
            
		}
		//Soundcloud
		if ((isset($birkita_soundcloud_user)&&(strlen($birkita_soundcloud_user) != 0)) && (isset($birkita_soundcloud_api)&&(strlen($birkita_soundcloud_api) != 0))){
		  	$interval = 600;
			$soundcloud_count = 0;
            $soundcloud_url = '';
            //if(time() > get_option('birkita_soundcloud_cache_time')) {
            $url = 'http://api.soundcloud.com/users/'.$birkita_soundcloud_user.'.json?consumer_key='.$birkita_soundcloud_api;
            $api = wp_remote_get( $url ) ;
            $request = json_decode(wp_remote_retrieve_body ($api), true);
            $soundcloud_count = $request['followers_count']; 
            $soundcloud_url =  $request['permalink_url']; 
            if ($soundcloud_count >= 0 ) {
				update_option('birkita_soundcloud_cache_time', time() + $interval);
				update_option('birkita_soundcloud_followers', $soundcloud_count);
				update_option('birkita_soundcloud_link', $soundcloud_url);
			}
            //}        
        }
        //Instagram
		if (isset($birkita_instagram_api)&&(strlen($birkita_instagram_api) != 0)){
		  	$interval = 600;
			$instagram_count = 0;
            $instagram_username = '';
            //if(time() > get_option('birkita_instagram_cache_time')) {
            $instagram_userid = explode(".", $birkita_instagram_api);
            $url = 'https://api.instagram.com/v1/users/'.$instagram_userid[0].'/?access_token='.$birkita_instagram_api;
            $api = wp_remote_get( $url ) ;
            $request = json_decode(wp_remote_retrieve_body ($api), true);
            $instagram_count = $request['data']['counts']['followed_by'];   
            $instagram_username =  $request['data']['username'];
            $instagram_url = 'http://instagram.com/'.$instagram_username;
            if ($instagram_count >= 0 ) {
				update_option('birkita_instagram_cache_time', time() + $interval);
				update_option('birkita_instagram_followers', $instagram_count);
				update_option('birkita_instagram_link', $instagram_url);
			}
            //}            
        }
		//facebook
		if (isset($birkita_facebook_username)&&(strlen($birkita_facebook_username) != 0)){
			$interval = 600;
			$fb_likes = 0;
			
			//if(time() > get_option('birkita_facebook_cache_time')) {
				$api = wp_remote_get( 'https://graph.facebook.com/v2.2/' . $birkita_facebook_username . '?access_token='.$birkita_facebook_accesstoken);
				if (!is_wp_error($api)) {
					
					$json = json_decode($api['body']);
                    //if ($json != null) {
    					$fb_likes = $json->likes;
    					if ($fb_likes > 0 ) {
    						update_option('birkita_facebook_cache_time', time() + $interval);
    						update_option('birkita_facebook_followers', $fb_likes);
    						update_option('birkita_facebook_link', $json->link);
    					}
                    //}
				
				}				
				
			//}
		}
        
        if(isset($birkita_youtube_username)&&(strlen($birkita_youtube_username) != 0)){
            $interval = 600;
            $url = "https://www.googleapis.com/youtube/v3/channels?part=statistics&forUsername=".$birkita_youtube_username."&key=".$birkita_youtube_api_key; //AIzaSyB9OPUPAtVh3_XqrByTwBTSDrNzuPZe8fo
            $json = wp_remote_get($url);
            //if (is_array($json) && ($json != null)) {
                $json_data = json_decode($json['body'], false);
                //if(time() > get_option('birkita_youtube_cache_time')) {               
                    if($json_data != null){
                        $subscriberCount = $json_data->items[0]->statistics->subscriberCount;
                    }
                    if (isset($subscriberCount) && ($subscriberCount > 0) ){
                        update_option('birkita_youtube_cache_time', time() + $interval);
                        update_option('birkita_youtube_subscribers', $subscriberCount );
                    }
                //}
            //}
                      
        } 
        if(isset($birkita_pinterest_id)&&(strlen($birkita_pinterest_id) != 0)){
            $interval = 600;
			$circledByCount = 0;
			
			//if(time() > get_option('birkita_google_cache_time')) {
				$pinterest_data = wp_remote_get( 'http://api.pinterest.com/v3/pidgets/users/' . $birkita_pinterest_id .'/pins');
                if((!is_wp_error( $pinterest_data ))&&isset($pinterest_data['body'])) {
                $json_data = json_decode($pinterest_data['body']);  
                //if (is_array($json) && ($json != null)) {
                    if ( $json_data != null ) {
                        $followerCount = (int) $json_data->data->pins[0]->pinner->follower_count ;
        				update_option('birkita_pinterest_cache_time', time() + $interval);
    					update_option('birkita_pinterest_followers', $followerCount);
    					update_option('birkita_pinterest_link', $json_data->data->pins[0]->pinner->profile_url);
                    }
                //}
                
			}
        }        
		?>
		<div class="wrap clear-fix">
			<ul class="clear-fix">
											
				<?php if (isset($birkita_twitter_id)&&(strlen($birkita_twitter_id) != 0)){ ?>
					<li class="twitter clear-fix">
                        <a target="_blank" href="http://twitter.com/<?php echo esc_attr($birkita_twitter_id); ?>">
    						<div class="social-icon"><i class="fa fa-twitter"></i></div>
							<div class="counter"><?php echo get_option('birkita_twitter_followers'); ?></div>
							<div class="text"><?php esc_html_e( 'Followers', 'birkita');?></div>
                        </a>
					</li> <!-- /twitter -->
				<?php } ?>
				
				<?php if (isset($birkita_facebook_username) && (strlen($birkita_facebook_username) != 0)){ ?>
					<li class="facebook clear-fix">
                        <a target="_blank" href="<?php echo get_option('birkita_facebook_link'); ?>">
    						<div class="social-icon"><i class="fa fa-facebook"></i></div>			
    						<div class="counter"><?php echo get_option('birkita_facebook_followers'); ?></div>
                            <div class="text"><?php esc_html_e( 'Likes', 'birkita');?></div>
                        </a>
					</li><!-- /facebook -->
				<?php } ?>
				
				<?php if (isset($birkita_youtube_username)&&(strlen($birkita_youtube_username) != 0)){ ?>
					<li class="youtube clear-fix">
                        <a target="_blank" href="http://www.youtube.com/user/<?php echo esc_attr($birkita_youtube_username) ;?>">
					    	<div class="social-icon"><i class="fa fa-youtube"></i></div>
							<div class="counter"><?php echo get_option('birkita_youtube_subscribers'); ?></div>
							<div class="text"><?php esc_html_e( 'Subscribers', 'birkita'); ?></div>
                        </a>				
					</li>
				<?php } ?>
                
                <?php if (isset($birkita_pinterest_id)&&(strlen($birkita_pinterest_id) != 0)){ ?>
					<li class="pinterest clear-fix">
                        <a target="_blank" href="<?php echo get_option('birkita_pinterest_link'); ?>">
					    	<div class="social-icon"><i class="fa fa-pinterest"></i></div>
							<div class="counter"><?php echo get_option('birkita_pinterest_followers'); ?></div>
							<div class="text"><?php esc_html_e( 'Followers', 'birkita'); ?></div>
                        </a>				
					</li>
				<?php } ?>
                
                 <?php if ((isset($birkita_soundcloud_user)&&(strlen($birkita_soundcloud_user) != 0)) && (isset($birkita_soundcloud_api)&&(strlen($birkita_soundcloud_api) != 0))){ ?>
					<li class="soundcloud clear-fix">
                        <a target="_blank" href="<?php echo get_option('birkita_soundcloud_link'); ?>">
    						<div class="social-icon"><i class="fa fa-soundcloud"></i></div>
							<div class="counter"><?php echo get_option('birkita_soundcloud_followers'); ?></div>
							<div class="text"><?php esc_html_e( 'Followers', 'birkita'); ?></div>	
                        </a>			
					</li>
				<?php } ?>
                <?php if (isset($birkita_instagram_api)&&(strlen($birkita_instagram_api) != 0)){ ?>
					<li class="instagram clear-fix">
                        <a target="_blank" href="<?php echo get_option('birkita_instagram_link'); ?>">
    						<div class="social-icon"><i class="fa fa-instagram"></i></div>
							<div class="counter"><?php echo get_option('birkita_instagram_followers'); ?></div>
							<div class="text"><?php esc_html_e( 'Followers', 'birkita'); ?></div>	
                        </a>			
					</li>
				<?php } ?>
                <?php if (isset($birkita_rss_url)&&(strlen($birkita_rss_url) != 0)){ ?>
					<li class="rss clear-fix">
                        <a target="_blank" href="<?php echo esc_url($birkita_rss_url); ?>">
					    	<div class="social-icon"><i class="fa fa-rss"></i></div>
							<div class="subscribe"><?php esc_html_e( 'Subscribe', 'birkita'); ?></div>
							<div class="text"><?php esc_html_e( 'RSS Feeds', 'birkita'); ?></div>
                        </a>			
					</li>
				<?php } ?>
				
			</ul>
				
		</div><!-- /wrap -->			
		<?php 
		echo ($after_widget);
	}
	
	/**
	 * update widget settings
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']); 
		$instance['birkita_youtube_username'] = $new_instance['birkita_youtube_username'];
        $instance['birkita_youtube_api_key'] = $new_instance['birkita_youtube_api_key'];
        $instance['birkita_pinterest_id'] = $new_instance['birkita_pinterest_id'];
		$instance['birkita_facebook_username'] = $new_instance['birkita_facebook_username'];
        $instance['birkita_facebook_accesstoken'] = $new_instance['birkita_facebook_accesstoken'];
        $instance['birkita_rss_url'] = $new_instance['birkita_rss_url'];
        $instance['birkita_soundcloud_user'] = $new_instance['birkita_soundcloud_user'];
        $instance['birkita_soundcloud_api'] = $new_instance['birkita_soundcloud_api'];
        $instance['birkita_instagram_api'] = $new_instance['birkita_instagram_api'];
        $instance['birkita_twitter_id'] = $new_instance['birkita_twitter_id'];
		return $instance;
	}
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	 
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array(
        	'title' => '',		
			'birkita_youtube_username' => '',
            'birkita_youtube_api_key' => 'AIzaSyDvMH-8GyKF5ZWulQbduI0wmMwOOnmyWXU',
            'birkita_pinterest_id' => '',
			'birkita_twitter_id' => '',
			'birkita_facebook_username' => '',
            'birkita_facebook_accesstoken' => '420136554757149|68q0UtG1q5AmWfR9v2Wh5zTUjGc',
            'birkita_rss_url' => '',
            'birkita_soundcloud_user' => '',
            'birkita_soundcloud_api' => 'fc20fec35eb62030a9051ff68e6e6614',
            'birkita_instagram_api' => '5363755139.1677ed0.4880e90ae09f4f10b5b85251e1d969f7',
 		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<!-- Title: Text Input -->     
		<p>
			<label for="<?php echo ($this->get_field_id( 'title' )); ?>"><strong><?php esc_html_e( 'Title:', 'birkita');?></strong></label>
            <input type="text" id="<?php echo ($this->get_field_id( 'title' )); ?>" name="<?php echo ($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" class="widefat widget-option" />
		</p>
                
		<p>
			<label for="<?php echo ($this->get_field_id( 'birkita_facebook_username' )); ?>"><strong><?php esc_html_e( 'Facebook Username:', 'birkita');?></strong></label>
			<input type="text" id="<?php echo ($this->get_field_id( 'birkita_facebook_username' )); ?>" name="<?php echo ($this->get_field_name( 'birkita_facebook_username' )); ?>" value="<?php echo esc_attr($instance['birkita_facebook_username']); ?>" class="widefat widget-option" />
		</p>
        
        <p>
			<label for="<?php echo ($this->get_field_id( 'birkita_facebook_accesstoken' )); ?>"><strong><?php esc_html_e( 'Facebook Access token:', 'birkita');?></strong></label>
			<input type="text" id="<?php echo ($this->get_field_id( 'birkita_facebook_accesstoken' )); ?>" name="<?php echo ($this->get_field_name( 'birkita_facebook_accesstoken' )); ?>" value="<?php echo esc_attr($instance['birkita_facebook_accesstoken']); ?>" class="widefat widget-option" />
            <i>Instruction to Get Facebook Access Token <a target="_blank" href="https://smashballoon.com/custom-facebook-feed/access-token/">here</a></i>
        </p>
        
        <p>
			<label for="<?php echo ($this->get_field_id( 'birkita_youtube_username' )); ?>"><strong><?php esc_html_e( 'Youtube username', 'birkita');?></strong></label>
			<input type="text" id="<?php echo ($this->get_field_id( 'birkita_youtube_username' )); ?>" name="<?php echo ($this->get_field_name( 'birkita_youtube_username' )); ?>" value="<?php echo esc_attr($instance['birkita_youtube_username']); ?>" class="widefat widget-option" />
		</p>
        
        <p>
			<label for="<?php echo ($this->get_field_id( 'birkita_youtube_api_key' )); ?>"><strong><?php esc_html_e( 'Youtube API Key', 'birkita');?></strong></label>
			<input type="text" id="<?php echo ($this->get_field_id( 'birkita_youtube_api_key' )); ?>" name="<?php echo ($this->get_field_name( 'birkita_youtube_api_key' )); ?>" value="<?php echo esc_attr($instance['birkita_youtube_api_key']); ?>" class="widefat widget-option" />
		</p>
        
        <p>
			<label for="<?php echo ($this->get_field_id( 'birkita_pinterest_id' )); ?>"><strong><?php esc_html_e( 'Pinterest ID', 'birkita');?></strong></label>
			<input type="text" id="<?php echo ($this->get_field_id( 'birkita_pinterest_id' )); ?>" name="<?php echo ($this->get_field_name( 'birkita_pinterest_id' )); ?>" value="<?php echo esc_attr($instance['birkita_pinterest_id']); ?>" class="widefat widget-option" />
		</p>
        
        <p>
			<label for="<?php echo ($this->get_field_id( 'birkita_soundcloud_user' )); ?>"><strong><?php esc_html_e( 'SoundCloud Username','birkita');?></strong> </label>
			<input type="text" class="widefat widget-option" id="<?php echo ($this->get_field_id( 'birkita_soundcloud_user' )); ?>" name="<?php echo ($this->get_field_name( 'birkita_soundcloud_user' )); ?>" value="<?php echo esc_attr($instance['birkita_soundcloud_user']); ?>"/>
			
			<label for="<?php echo ($this->get_field_id( 'birkita_soundcloud_api' )); ?>">Soundcloud API Key : </label>
			<input type="text" class="widefat widget-option" id="<?php echo ($this->get_field_id( 'birkita_soundcloud_api' )); ?>" name="<?php echo ($this->get_field_name( 'birkita_soundcloud_api' )); ?>" value="<?php echo esc_attr($instance['birkita_soundcloud_api']); ?>" />
		</p>
        
		<p>
			<label for="<?php echo ($this->get_field_id( 'birkita_instagram_api' )); ?>"><strong>Instagram Access Token Key :</strong> </label>
			<input type="text" class="widefat widget-option" id="<?php echo ($this->get_field_id( 'birkita_instagram_api' )); ?>" name="<?php echo ($this->get_field_name( 'birkita_instagram_api' )); ?>" value="<?php echo esc_attr($instance['birkita_instagram_api']); ?>" />
            <i>Get Instagram Access Token <a target="_blank" href="http://jelled.com/instagram/access-token">here</a></i>
        </p>
        
        <p>
			<label for="<?php echo ($this->get_field_id( 'birkita_rss_url' )); ?>"><strong><?php esc_html_e( 'RSS URL', 'birkita');?></strong></label>
			<input type="text" id="<?php echo ($this->get_field_id( 'birkita_rss_url' )); ?>" name="<?php echo ($this->get_field_name( 'birkita_rss_url' )); ?>" value="<?php echo esc_url($instance['birkita_rss_url']); ?>" class="widefat widget-option" />
		</p>
        
        <p>
			<label for="<?php echo ($this->get_field_id( 'birkita_twitter_id' )); ?>"><strong><?php esc_html_e( 'Twitter Name', 'birkita');?></strong></label>
			<input type="text" id="<?php echo ($this->get_field_id( 'birkita_twitter_id' )); ?>" name="<?php echo ($this->get_field_name( 'birkita_twitter_id' )); ?>" value="<?php echo esc_attr($instance['birkita_twitter_id']); ?>" class="widefat widget-option" />
        </p>

	<?php 
	}
    	function pre_validate_keys() {
    	if ( ! $this->consumer_key        ) return false;
    	if ( ! $this->consumer_secret     ) return false;
    	if ( ! $this->access_token        ) return false;
    	if ( ! $this->access_token_secret ) return false;
    
    	return true;
	}
} //end class