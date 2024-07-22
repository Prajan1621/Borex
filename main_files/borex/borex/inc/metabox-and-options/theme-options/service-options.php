<?php
//Service Option
CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'Service Options', 'borex' ),
	'id'     => 'service_options',
	'icon'   => 'fa fa-th',
	'fields' => array(
		array(
			'id'      => 'service_default_layout',
			'type'    => 'select',
			'title'   => esc_html__('Service Layout', 'borex'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'borex'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'borex'),
				'right-sidebar' => esc_html__('Right Sidebar', 'borex'),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__('Select service layout.', 'borex'),
		),

		array(
			'id'         => 'service_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'borex' ),
			'options'    => 'borex_sidebars',
			'default' => 'service-sidebar',
			'dependency' => array( 'service_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all services. You can override this settings on individual service.', 'borex' ),
		),

	)
) );