<?php

$borex_theme_data = wp_get_theme();

/*
 * Define theme version
 */
define('BOREX_VERSION', (WP_DEBUG) ? time() : $borex_theme_data->get('Version'));

/*
 * Inc folder directory
 */
define('BOREX_INC_DIR', get_template_directory() . '/inc/');

/*
 * Admin Pages
 */
require_once BOREX_INC_DIR . 'admin/pages.php';

/*
 * After setup theme
 */
require_once BOREX_INC_DIR . 'theme-setup.php';

/*
 * Load default theme options
 */
require_once BOREX_INC_DIR . 'metabox-and-options/theme-options/theme-options-default.php';

/*
 * Load meta box and theme options if Codestar framework installed.
 */
if( class_exists( 'CSF' ) ) {
	require_once BOREX_INC_DIR . 'metabox-and-options/metabox-and-options.php';
}

/**
 * Template Functions
 */
require BOREX_INC_DIR . 'template-functions.php';

/*
 * Enqueue styles and scripts.
 */
require_once BOREX_INC_DIR . 'css-and-js.php';

/*
 * Register widget area
 */
require_once BOREX_INC_DIR . 'widget-area-init.php';

/*
 * Load inline style.
 */
require_once BOREX_INC_DIR . 'inline-style.php';

/**
 * Implement the Custom Header feature.
 */
require BOREX_INC_DIR . 'custom-header.php';

/**
 * Customizer additions.
 */
require BOREX_INC_DIR . '/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require BOREX_INC_DIR . '/jetpack.php';
}

/*
 * Comment Template
 */
require_once BOREX_INC_DIR . 'comment-template.php';

/*
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/*
 * Load Required Plugins
 */
require_once BOREX_INC_DIR . 'demo-content/import-demo-content.php';