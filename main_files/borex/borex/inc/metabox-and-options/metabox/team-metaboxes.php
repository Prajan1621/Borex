<?php

$borex_team_meta = 'borex_team_meta';

// Create a metabox
CSF::createMetabox( $borex_team_meta, array(
	'title'     => esc_html__( 'Social Profiles Options', 'borex' ),
	'post_type' => 'borex_team',
	'data_type' => 'serialize',
) );


CSF::createSection( $borex_team_meta, array(
	'fields' => array(
		array(
			'id'           => 'member_social_profile',
			'type'         => 'group',
			'title'        => esc_html__( 'Member Social Profile', 'borex' ),
			'desc'         => esc_html__( 'Add member social profile icons here.', 'borex' ),
			'button_title' => esc_html__( 'Add Social Profile', 'borex' ),
			'fields'       => array(
				array(
					'id'    => 'site_name',
					'type'  => 'text',
					'title' => esc_html__( 'Site Name', 'borex' ),
					'desc'  => esc_html__( 'Type social site name here.', 'borex' ),
				),

				array(
					'id'    => 'site_icon',
					'type'  => 'icon',
					'title' => esc_html__( 'Icon', 'borex' ),
					'desc'  => esc_html__( 'Select icon', 'borex' ),
				),

				array(
					'id'    => 'site_url',
					'type'  => 'text',
					'title' => esc_html__( 'Profile Link', 'borex' ),
					'desc'  => esc_html__( 'Type social site url here.', 'borex' ),
				),
			),

			'default' => array(
				array(
					'site_name' => esc_html__( 'Facebook', 'borex' ),
					'site_icon' => 'fab fa-facebook',
					'site_url'  => '#',
				),
			),
		),

	)
) );