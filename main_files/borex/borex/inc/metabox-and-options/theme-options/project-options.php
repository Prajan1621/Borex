<?php
//Project Option
CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'Project Options', 'borex' ),
	'id'     => 'project_options',
	'icon'   => 'fa fa-th',
	'fields' => array(
		array(
			'id'      => 'project_default_layout',
			'type'    => 'select',
			'title'   => esc_html__('Project Layout', 'borex'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'borex'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'borex'),
				'right-sidebar' => esc_html__('Right Sidebar', 'borex'),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__('Select project layout.', 'borex'),
		),

		array(
			'id'         => 'project_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'borex' ),
			'options'    => 'borex_sidebars',
			'default' => 'project-sidebar',
			'dependency' => array( 'project_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all projects. You can override this settings on individual project.', 'borex' ),
		),

	)
) );