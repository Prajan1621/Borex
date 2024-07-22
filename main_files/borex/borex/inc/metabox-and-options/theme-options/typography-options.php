<?php
// Create typography section
CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'Typography', 'borex' ),
	'id'     => 'typography_options',
	'icon'   => 'fa fa-text-width',
	'fields' => array(

		array(
			'id'             => 'body_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Body', 'borex' ),
			'desc'           => esc_html__( 'Select body typography.', 'borex' ),
			'output'         => 'body',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'default'        => array(
				'font-family'  => 'Rubik',
				'type'         => 'google',
				'unit'         => 'px',
				'font-weight'  => '400',
				'extra-styles' => array('500','700'),
			),

		),

		array(
			'id'             => 'heading_typo',
			'type'           => 'typography',
			'title'          => esc_html__( 'Heading Font', 'borex' ),
			'desc'           => esc_html__( 'Select heading typography.', 'borex' ),
			'output'         => 'h1,h2,h3,h4,h5,h6',
			'text_align'     => false,
			'text_transform' => false,
			'color'          => false,
			'extra_styles'   => true,
			'default'        => array(
				'font-family'  => 'Poppins',
				'type'         => 'google',
				'unit'         => 'px',
				'font-weight'  => '700',
				'extra-styles' => array('500','600'),
			),
		),
	)
) );