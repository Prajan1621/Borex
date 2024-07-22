<?php

// Create Page Options
CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'Page Options', 'borex' ),
	'id'     => 'page_options',
	'icon'   => 'fa fa-file-text-o',
	'fields' => array(
		array(
			'id'      => 'page_default_layout',
			'type'    => 'select',
			'title'   => esc_html__('Page Layout', 'borex'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'borex'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'borex'),
				'right-sidebar' => esc_html__('Right Sidebar', 'borex'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select page layout.', 'borex'),
		),

		array(
			'id'         => 'page_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'borex' ),
			'options'    => 'borex_sidebars',
			'default' => 'sidebar',
			'dependency' => array( 'page_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all pages. You can override this settings on individual page.', 'borex' ),
		),
	)
) );