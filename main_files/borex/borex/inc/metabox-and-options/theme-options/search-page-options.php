<?php
//Search Options

CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'Search Page', 'borex' ),
	'id'     => 'search_page_options',
	'icon'   => 'fa fa-search',
	'fields' => array(

		array(
			'id'      => 'search_layout',
			'type'    => 'select',
			'title'   => esc_html__( 'Search Layout', 'borex' ),
			'options' => array(
				'grid'          => esc_html__( 'Grid Full', 'borex' ),
				'grid-ls'       => esc_html__( 'Grid With Left Sidebar', 'borex' ),
				'grid-rs'       => esc_html__( 'Grid With Right Sidebar', 'borex' ),
				'left-sidebar'  => esc_html__( 'Left Sidebar', 'borex' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'borex' ),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__( 'Select search page layout.', 'borex' ),
		),

		array(
			'id'       => 'search_banner',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Search Banner', 'borex' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'borex' ),
			'text_off' => esc_html__( 'No', 'borex' ),
			'desc'     => esc_html__( 'Enable or disable search page banner.', 'borex' ),
		),

		array(
			'id'                    => 'search_banner_background_options',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Banner Background', 'borex' ),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'dependency'            => array( 'search_banner', '==', true ),
			'output'                => '.banner-area.search-banner',
			'desc'                  => esc_html__( 'If you want different banner background settings for search page then select search page banner background options from here.', 'borex' ),
		),

	)
) );