<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Borex Admin Pages
 *
 */
if ( ! class_exists( 'Borex_Admin' ) ) {

	class Borex_Admin{
		private static $instance = null;

		public static function init() {
			if( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		public function __construct() {

			add_action( 'init', array( $this, 'borex_create_tgmpa_page' ), 1 );
			add_action( 'admin_menu', array( $this, 'borex_create_admin_page' ), 1 );
			add_action( 'admin_enqueue_scripts', array( $this, 'borex_admin_page_enqueue_scripts' ) );

			add_filter( 'ocdi/plugin_page_setup', array( $this, 'borex_pt_ocdi_page_setup' ) );

		}

		public function borex_create_admin_page() {
			add_menu_page( esc_html__( 'Borex', 'borex' ), esc_html__( 'Borex', 'borex' ), 'manage_options', 'borex', array( $this, 'borex_admin_page_dashboard' ), 'dashicons-screenoptions', 2 );
			add_submenu_page( 'borex', esc_html__( 'Welcome', 'borex' ), esc_html__( 'Welcome & Support', 'borex' ), 'manage_options', 'borex', array( $this, 'borex_admin_page_dashboard' ) );
		}

		public function borex_admin_page_dashboard() {
			require_once BOREX_INC_DIR .'admin/page-dashboard.php';
		}

		public function borex_create_tgmpa_page() {
			require_once BOREX_INC_DIR .'admin/class-tgm-plugin-activation.php';
			require_once BOREX_INC_DIR .'admin/page-tgmpa.php';
		}

		public function borex_admin_page_enqueue_scripts() {
			wp_enqueue_style( 'borex-admin', get_theme_file_uri( 'inc/admin/assets/css/admin.css' ), array(), BOREX_VERSION, 'all' );
		}

		public function borex_pt_ocdi_page_setup( $args ) {

			$args['parent_slug'] = 'borex';
			$args['menu_slug']   = 'borex-import-demo';
			$args['menu_title']  = esc_html__( 'Import Demo', 'borex' );
			$args['capability']  = 'manage_options';

			return $args;

		}

	}

	Borex_Admin::init();
}