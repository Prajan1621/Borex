<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

function borex_inline_style() {

	wp_enqueue_style('borex-inline-style', get_theme_file_uri('assets/css/inline-style.css'), array(), BOREX_VERSION, 'all');

	$borex_inline_css = '
        .elementor-inner {margin-left: -10px;margin-right: -10px;}.elementor-inner .elementor-section-wrap > section:first-of-type .elementor-editor-element-settings {display: block !important;}.elementor-inner .elementor-section-wrap > section:first-of-type .elementor-editor-element-settings li {display: inline-block !important;}.elementor-editor-active .elementor-editor-element-setting{height: 25px;line-height: 25px;text-align: center;}.elementor-section.elementor-section-boxed>.elementor-container {max-width: 1170px !important;}.elementor-section-stretched.elementor-section-boxed .elementor-row{padding-left: 5px;padding-right: 5px;}.elementor-section-boxed .elementor-container.elementor-column-gap-extended {margin-left: -5px;margin-right: -5px;}.elementor-section-stretched.elementor-section-boxed .elementor-container.elementor-column-gap-extended {margin-left: auto;margin-right: auto;}  
    ';

	$primary_color = borex_option('theme_primary_color', '');
	$secondary_color = borex_option('theme_secondary_background_color', '');

	if(!empty($primary_color)){
		$borex_inline_css .= '
			@media only screen and (min-width: 1200px) {
			    .header-style-four.home-banner-three .header-top-area li.top-social-item a:hover {
			        border-color: '.esc_attr($primary_color).';
			    }
			
			    .header-style-four.home-banner-three .header-cta-button a,
			    .header-style-four.home-banner-three .main-menu-area.uk-sticky.uk-active{
			        background-color: '.esc_attr($primary_color).';
			    }
			}
			
			body .woocommerce a.remove {
		        color: '.esc_attr($primary_color).' !important;
		    }
		';
	}

	if(!empty($secondary_color)){
		$borex_inline_css .= '
		
			@media only screen and (max-width: 1024px) {
			    .header-style-three .main-menu-area {
			        background-color: '.esc_attr($secondary_color["background-color"]).';
			    }
			}
		';
	}

	$custom_css = borex_option('borex_custom_css');

	$borex_inline_css .= ''.$custom_css.'';

	wp_add_inline_style('borex-inline-style', $borex_inline_css);
}

add_action('wp_enqueue_scripts', 'borex_inline_style');