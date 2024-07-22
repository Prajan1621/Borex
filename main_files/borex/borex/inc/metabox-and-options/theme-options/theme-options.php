<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

/*
 *  Create theme options
 */

$borex_theme_option = 'borex_theme_options';

CSF::createOptions($borex_theme_option, array(
	'framework_title' => wp_kses(
		sprintf(__("Borex Options <small>V %s</small>", 'borex'), $borex_theme_data->get('Version')),
		array('small' => array())
	),
	'menu_title'      => esc_html__('Theme Options', 'borex'),
	'menu_slug'       => 'borex-options',
	'menu_type'       => 'submenu',
	'menu_parent'     => 'borex',
	'class'           => 'borex-theme-option-wrapper',
	'footer_credit'      => wp_kses(
		__( 'Developed by: <a target="_blank" href="https://themedraft.net">ThemeDraft</a>', 'borex' ),
		array(
			'a'      => array(
				'href'   => array(),
				'target' => array()
			),
		)
	),
	'async_webfont' => false,
	'defaults'        => borex_default_theme_options(),
));

/*
 * General options
 */
require_once 'general-options.php';

/*
 * Typography options
 */
require_once 'typography-options.php';

/*
 * Header options
 */
require_once 'header-options.php';

/*
 * Banner Options
 */
require_once 'banner-options.php';

/*
 * Page Options
 */
require_once 'page-options.php';

/*
 * Blog Page Options
 */
require_once 'blog-page-options.php';

/*
 * Single Post Options
 */
require_once 'single-post-options.php';

/*
 * Service Options
 */
require_once 'service-options.php';

/*
 * Team Options
 */
require_once 'team-options.php';

/*
 * Project Options
 */
require_once 'project-options.php';

/*
 * WooCommerce Options
 */
if ( class_exists( 'WooCommerce' ) ) {
	require_once 'woocommerce-options/woocommerce-options.php';
}

/*
 * Archive Page Options
 */
require_once 'archive-page-options.php';

/*
 * Search Page Options
 */
require_once 'search-page-options.php';


/*
 * Error 404 Page Options
 */
require_once 'error-page-options.php';

/*
 * Footer Options
 */
require_once 'footer-options.php';

// Custom Css section
CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'Custom Css', 'borex' ),
	'id'     => 'custom_css_options',
	'icon'   => 'fa fa-css3',
	'fields' => array(

		array(
			'id'       => 'borex_custom_css',
			'type'     => 'code_editor',
			'title'    => esc_html__( 'Custom Css', 'borex' ),
			'settings' => array(
				'theme'  => 'mbo',
				'mode'   => 'css',
			),
			'sanitize' => false,
		),
	)
) );


/*
 * Backup options
 */
CSF::createSection($borex_theme_option, array(
	'title'  => esc_html__('Backup', 'borex'),
	'id'     => 'backup_options',
	'icon'   => 'fa fa-window-restore',
	'fields' => array(
		array(
			'type' => 'backup',
		),
	)
));