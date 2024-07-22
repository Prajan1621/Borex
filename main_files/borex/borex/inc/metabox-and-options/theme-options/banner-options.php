<?php

// Create banner options
CSF::createSection($borex_theme_option, array(
	'title'  => esc_html__('Banner Options', 'borex'),
	'id'     => 'banner_default_options',
	'icon'   => 'fa fa-flag-o',
	'fields' => array(

		array(
			'id'                    => 'banner_default_background',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Banner Background', 'borex' ),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size' => false,
			'background_position' => false,
			'background_repeat' => false,
			'output'                => '.banner-area',
			'desc'                  => esc_html__( 'Select banner background color and image. You can change this settings on individual page / post.', 'borex' ),
		),

		array(
			'id'         => 'banner_default_text_align',
			'type'       => 'button_set',
			'title'      => esc_html__( 'Banner Text Align', 'borex' ),
			'options'    => array(
				'left'   => esc_html__( 'Left', 'borex' ),
				'center' => esc_html__( 'Center', 'borex' ),
				'right'  => esc_html__( 'Right', 'borex' ),
			),
			'default'    => 'left',
			'desc'       => esc_html__( 'Select banner text align. You can change this settings on individual page / post.', 'borex' ),
		),

		array(
			'id'          => 'banner_default_height',
			'type'        => 'slider',
			'title'       => esc_html__('Banner Height', 'borex'),
			'min'         => 100,
			'max'         => 800,
			'step'        => 1,
			'unit'        => 'px',
			'output'      => '.banner-area,.header-style-three .banner-area,.header-style-four .banner-area',
			'output_mode' => 'height',
			'desc'        => esc_html__('Select banner height. You can change this settings on individual page / post.', 'borex'),
		),
	)
));