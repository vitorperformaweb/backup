<?php
/**
 * Plugin Name: WP Subscribe
 * Plugin URI: http://mythemeshop.com/plugins/wp-subscribe/
 * Description: WP Subscribe is a simple but powerful subscription plugin which supports MailChimp, Aweber and Feedburner.
 * Version: 1.2.1
 * Author: MyThemeShop
 * Author URI: http://mythemeshop.com/
 * Text Domain: wp-subscribe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly.

/**
 * Include Base Class
 * From which all other classes are derived
 */
include_once 'includes/class-wps-base.php';

if( ! class_exists('MTS_WP_Subscribe') ) :

	final class MTS_WP_Subscribe extends WPS_Base {

		/**
		 * Plugin Version
		 * @var string
		 */
		private $version = '1.2.1';

		/**
		 * Hold an instance of MTS_WP_Subscribe class
		 * @var MTS_WP_Subscribe
		 */
		protected static $instance = null;

		/**
		 * Hold WPS_Settings instance.
		 * @var WPS_Settings
		 */
		public $settings;

		/**
		 *  Hold an instance of MTS_ContentLocker class.
		 * @return MTS_WP_Subscribe
		 */
		public static function get_instance() {

			if( is_null( self::$instance ) ) {
				self::$instance = new MTS_WP_Subscribe;
			}

			return self::$instance;
		}

		/**
		 * You cannot clone this class
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'wp-subscribe' ), $this->version );
		}

		/**
		 * You cannot unserialize instances of this class
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'wp-subscribe' ), $this->version );
		}

		/**
		 * The Constructor
		 */
		private function __construct() {

			// Include files
			include_once 'includes/wps-helpers.php';
			include_once 'includes/wps-functions-options.php';
			include_once 'includes/wps-widget.php';

			$this->autoloader();
			$this->hooks();
		}

		/**
		 * Register file autoloading mechanism
		 * @return void
		 */
		private function autoloader() {

			if ( function_exists( '__autoload' ) ) {
				spl_autoload_register( '__autoload' );
			}

			spl_autoload_register( array( $this, 'autoload' ) );
		}

		/**
		 * Add hooks
		 * @return void
		 */
		private function hooks() {

			$this->add_action( 'init', 'load_textdomain' );

			// AJAX
			$this->add_action( 'wp_ajax_wps_get_service_list', 'get_service_list' );
			$this->add_action( 'wp_ajax_validate_subscribe', 'validate_subscribe' );
			$this->add_action( 'wp_ajax_nopriv_validate_subscribe', 'validate_subscribe' );
		}

		/**
		 * Autoload strategy
		 *
		 * @param  string $class
		 * @return void
		 */
		public function autoload( $class ) {

			if( ! wps_str_start_with( 'WPS_', $class ) ) {
				return;
			}

			$path = '';
			$class = strtolower( $class );
			$file = 'class-' . str_replace( '_', '-', strtolower( $class ) ) . '.php';
			$path = $this->plugin_dir() . '/includes/';

			if( wps_str_start_with('wps_subscription', $class ) ) {
				$path .= 'subscription/';
				$file = str_replace( 'subscription-', '', $file );
			}

			// Load File
			$load = $path . $file;
			if ( $load && is_readable( $load ) ) {
				include_once $load;
			}
		}

		/**
		 * Load localization files
		 * @return void
		 */
		public function load_textdomain() {
			$locale = apply_filters( 'plugin_locale', get_locale(), 'wp-subscribe' );

			load_textdomain( 'wp-subscribe', WP_LANG_DIR . '/wp-subscribe/wp-subscribe-' . $locale . '.mo' );
			load_plugin_textdomain( 'wp-subscribe', false, $this->plugin_dir() . '/languages' );
		}

		/**
		 * Validate subscription
		 * @return void
		 */
		public function validate_subscribe() {

			// check for data
			$data = isset( $_POST['wps_data'] ) ? $_POST['wps_data'] : array();
			if( empty( $data ) ) {
				wp_send_json( array(
					'success' => false,
					'error' => esc_html__( 'No data found.', 'wp-subscribe' )
				) );
			}

			// check for valid data
			if( empty( $data['email'] ) ) {
				wp_send_json( array(
					'success' => false,
					'error' => esc_html__( 'No email address found.', 'wp-subscribe' )
				) );
			}

			if( !filter_var( $data['email'], FILTER_VALIDATE_EMAIL ) ) {
				wp_send_json( array(
					'success' => false,
					'error' => esc_html__( 'Not a valid email address.', 'wp-subscribe' )
				) );
			}

			// check for valid service
			$services = wps_get_mailing_services('options');
			if( !array_key_exists( $data['service'], $services ) ) {
				wp_send_json( array(
					'success' => false,
					'error' => esc_html__( 'Unknown mailing service called.', 'wp-subscribe' )
				) );
			}

			// Call service subscription method
			try {
				$service = wps_get_subscription_service( $data['service'] );
				$status = $service->subscribe( $data, $service->get_options( $data ) );

				wp_send_json(array(
					'success' => true,
					'status' => $status['status']
				));
			}
			catch( Exception $e ) {
				wp_send_json(array(
					'success' => false,
					'error' => $e->getMessage()
				));
			}
		}

		/**
		 * Get mailing lists according to service
		 *
		 * @return array
		 */
		public function get_service_list() {

			$name = $_REQUEST['service'];
			$args = $_REQUEST['args'];

			if( empty( $name ) || empty( $args ) ) {
				wp_send_json(array(
					'success' => false,
					'error' => esc_html__( 'Not permitted.', 'wp-subscribe' )
				));
			}

			$service = wps_get_subscription_service( $name );

			if( is_null( $service ) ) {
				wp_send_json(array(
					'success' => false,
					'error' => esc_html__( 'Service not defined.', 'wp-subscribe' )
				));
			}

			try {
				$lists = call_user_func_array( array( $service, 'get_lists' ), $args );
			}
			catch( Exception $e ) {
				wp_send_json(array(
					'success' => false,
					'error' => $e->getMessage()
				));
			}

			if( empty( $lists ) ) {
				wp_send_json(array(
					'success' => false,
					'error' => esc_html__( 'No lists found.', 'wp-subscribe' )
				));
			}

			// Save for letter use
			set_transient( 'mts_wps_'. $name . '_lists', $lists );

			wp_send_json(array(
				'success' => true,
				'lists' => $lists
			));
		}

		// Helper ------------------------------------------------------

		/**
		 * Get plugin directory
		 *
		 * @return string
		 */
		public function plugin_dir() {
			return untrailingslashit( plugin_dir_path( __FILE__ ) );
		}

		/**
		 * Get plugin uri
		 *
		 * @return string
		 */
		public function plugin_url() {
			return untrailingslashit( plugin_dir_url( __FILE__ ) );
		}

		/**
		 * Get plugin version
		 *
		 * @return string
		 */
		public function get_version() {
			return $this->version;
		}
	}

	/**
	 * Main instance of MTS_WP_Subscribe
	 *
	 * Return the main instance of MTS_WP_Subscribe to prevent the need to use globals.
	 *
	 * @return MTS_WP_Subscribe
	 */
	function wps() {
		return MTS_WP_Subscribe::get_instance();
	}
	wps(); // Init it

endif;
