<?php

/**
 * Enqueue styles and scripts.
 */
function borex_enqueue_css_and_js() {

	/*
	 * Load Google fonts.
	 * User can customized this default fonts from theme options
	 */
	if( !class_exists( 'CSF' ) ) {
		wp_enqueue_style( 'borex-default-fonts', '//fonts.googleapis.com/css?family=Poppins:500,600,700|Rubik:400,500,700', '', '1.0.0', 'screen' );
	}

	// Enqueue Style
	wp_enqueue_style( 'bootstrap', get_theme_file_uri( 'assets/css/bootstrap.min.css' ), array(), '4.4.1', 'all' );

	wp_enqueue_style( 'font-awesome-5', get_theme_file_uri( 'assets/css/fontawesome.min.css' ), array(), '5.13.0', 'all' );

	wp_enqueue_style( 'slick-slider', get_theme_file_uri( 'assets/css/slick-slider.css' ), array(), '1.0.0', 'all' );

	wp_enqueue_style( 'magnific-popup', get_theme_file_uri( 'assets/css/magnific-popup.css' ), array(), '1.1.0', 'all' );

	wp_enqueue_style( 'slicknav', get_theme_file_uri( 'assets/css/slicknav.min.css' ), array(), '1.0.10', 'all' );

	wp_enqueue_style( 'animate', get_theme_file_uri( 'assets/css/animate.min.css' ), array('e-animations'), '3.5.1', 'all' );

	wp_enqueue_style( 'uikit', get_theme_file_uri( 'assets/css/uikit.min.css' ), array(), '3.1.9', 'all' );

	wp_enqueue_style( 'borex-custom-el-widget', get_theme_file_uri( 'assets/css/custom-el-widget.css' ), array(), BOREX_VERSION, 'all' );

	wp_enqueue_style( 'borex-main', get_theme_file_uri( 'assets/css/main.css' ), array(), BOREX_VERSION, 'all' );

	wp_enqueue_style( 'borex-style', get_stylesheet_uri(), array(), BOREX_VERSION, 'all' );

	// Enqueue scripts
	wp_enqueue_script( 'popper', get_theme_file_uri( 'assets/js/popper.min.js' ), array( 'jquery' ), '1.12.9', true );

	wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'assets/js/bootstrap.min.js' ), array( 'jquery' ), '4.4.1', true );

	wp_enqueue_script( 'slick-slider', get_theme_file_uri( 'assets/js/slick-slider.min.js' ), array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'magnific-popup', get_theme_file_uri( 'assets/js/magnific-popup.min.js' ), array( 'jquery' ), '1.1.0', true );

	wp_enqueue_script( 'wow', get_theme_file_uri( 'assets/js/wow.min.js' ), array( 'jquery' ), '1.3.0', true );

	wp_enqueue_script( 'slicknav', get_theme_file_uri( 'assets/js/slicknav.min.js' ), array( 'jquery' ), '1.0.10', true );

	wp_enqueue_script( 'isotope', get_theme_file_uri( 'assets/js/isotope.min.js' ), array(
		'jquery',
		'imagesloaded'
	), '3.0.4', true );

	wp_enqueue_script( 'uikit', get_theme_file_uri( 'assets/js/uikit.min.js' ), array( 'jquery' ), '3.1.9', true );

	wp_enqueue_script( 'borex-main', get_theme_file_uri( 'assets/js/main.js' ), array( 'jquery' ), BOREX_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'borex_enqueue_css_and_js' );

/**
 * Enqueue Backend Styles And Scripts.
 **/

function borex_backend_css_js( $screen ) {

	if ( $screen == "widgets.php" ) {
		wp_enqueue_media();
		wp_enqueue_script( 'borex-media-upload', get_theme_file_uri( 'assets/js/media-upload.js' ), array( 'jquery' ), '1.0.0', true );
	}
}

add_action( 'admin_enqueue_scripts', 'borex_backend_css_js' );