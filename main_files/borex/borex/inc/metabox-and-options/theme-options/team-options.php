<?php
//Team Options
CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'Team Options', 'borex' ),
	'id'     => 'team_options',
	'icon'   => 'fa fa-users',
	'fields' => array(

		array(
			'id'      => 'team_default_layout',
			'type'    => 'select',
			'title'   => esc_html__( 'Team Layout', 'borex' ),
			'options' => array(
				'full-width'    => esc_html__( 'Full Width', 'borex' ),
				'left-sidebar'  => esc_html__( 'Left Sidebar', 'borex' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'borex' ),
			),
			'default' => 'full-width',
			'desc'    => esc_html__( 'Select team layout.', 'borex' ),
		),

		array(
			'id'         => 'team_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'borex' ),
			'options'    => 'borex_sidebars',
			'default'    => 'team-sidebar',
			'dependency' => array( 'team_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all team members. You can override this settings on individual team member.', 'borex' ),
		),

	)
) );