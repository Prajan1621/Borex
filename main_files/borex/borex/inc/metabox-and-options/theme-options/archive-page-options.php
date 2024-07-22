<?php
//Archive Options

CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'Archive Page', 'borex' ),
	'id'     => 'archive_page_options',
	'icon'   => 'fa fa-file-archive-o',
	'fields' => array(
		array(
			'id'      => 'archive_layout',
			'type'    => 'select',
			'title'   => esc_html__( 'Archive Layout', 'borex' ),
			'options' => array(
				'grid'          => esc_html__( 'Grid Full', 'borex' ),
				'grid-ls'       => esc_html__( 'Grid With Left Sidebar', 'borex' ),
				'grid-rs'       => esc_html__( 'Grid With Right Sidebar', 'borex' ),
				'left-sidebar'  => esc_html__( 'Left Sidebar', 'borex' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'borex' ),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__( 'Select archive page layout.', 'borex' ),
		),

		array(
			'id'       => 'archive_banner',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Archive Banner', 'borex' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'borex' ),
			'text_off' => esc_html__( 'No', 'borex' ),
			'desc'     => esc_html__( 'Enable or disable archive page banner.', 'borex' ),
		),

		array(
			'id'                    => 'archive_banner_background_options',
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
			'dependency'            => array( 'archive_banner', '==', true ),
			'output'                => '.banner-area.archive-banner',
			'desc'                  => esc_html__( 'If you want different banner background settings for archive page then select archive page banner background Options from here.', 'borex' ),
		),
	)
) );