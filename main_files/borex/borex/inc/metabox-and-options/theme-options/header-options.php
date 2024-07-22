<?php
// Create header Settings section
CSF::createSection( $borex_theme_option, array(
	'title' => esc_html__( 'Header Settings', 'borex' ),
	'id'    => 'header_options',
	'icon'  => 'fa fa-header',
) );


CSF::createSection( $borex_theme_option, array(
	'parent' => 'header_options',
	'title'  => esc_html__( 'Header Options', 'borex' ),
	'icon'   => 'fa fa-credit-card',
	'fields' => array(

		array(
			'id'       => 'site_default_header',
			'type'     => 'image_select',
			'title'    => esc_html__('Header Style', 'borex'),
			'options'  => array(
				'header-style-one' => get_theme_file_uri('assets/images/header-1.jpg'),
				'header-style-two' => get_theme_file_uri('assets/images/header-2.jpg'),
				'header-style-three' => get_theme_file_uri('assets/images/header-3.jpg'),
			),
			'default'  => 'header-style-one',
			'subtitle' => esc_html__('Select site default header style. You can override this settings on individual page / Posts.', 'borex'),
		),


		array(
			'id'           => 'header_default_logo',
			'type'         => 'media',
			'title'        => esc_html__( 'Header Logo', 'borex' ),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__( 'Upload Logo', 'borex' ),
			'desc'         => esc_html__( 'Upload logo image', 'borex' ),

		),

		array(
			'id'          => 'logo_maximum_width',
			'type'        => 'slider',
			'title'       => esc_html__( 'Logo Maximum Width', 'borex' ),
			'min'         => 50,
			'max'         => 500,
			'step'        => 1,
			'unit'        => 'px',
			'output'      => '.logo-wrap img,.about-info-img img',
			'output_mode' => 'max-width',
			'desc'        => esc_html__( 'Logo image maximum width', 'borex' ),
		),

		array(
			'id'         => 'header_cta_btn_text',
			'type'       => 'text',
			'title'      => esc_html__( 'Header CTA Button Text', 'borex' ),
			'default'    => esc_html__( 'Get a Quote', 'borex' ),
			'desc'       => esc_html__( 'Type header CTA button text here', 'borex' ),
			'dependency' => array( 'site_default_header', 'any', 'header-style-three,header-style-two' ),
		),

		array(
			'id'         => 'header_cta_btn_url',
			'type'       => 'text',
			'title'      => esc_html__( 'Header CTA Button Url', 'borex' ),
			'default'    => '#',
			'desc'       => esc_html__( 'Type header CTA button URL here', 'borex' ),
			'dependency' => array( 'site_default_header', 'any', 'header-style-three,header-style-two' ),
		),

		array(
			'id'       => 'enable_header_cart',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Header Cart', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Enable / Disable header cart icon.', 'borex'),
			'dependency' => array( 'site_default_header', 'any', 'header-style-three', 'all' ),
		),

		array(
			'id'       => 'enable_header_search',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Header Search', 'borex'),
			'default'  => false,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Enable / Disable header search icon.', 'borex'),
		),
	)
) );

CSF::createSection( $borex_theme_option, array(
	'parent' => 'header_options',
	'title'  => esc_html__( 'Header Top', 'borex' ),
	'icon'   => 'fas fa-level-up-alt',
	'fields' => array(
		array(
			'id'           => 'header_top_info_text',
			'type'         => 'group',
			'title'        => esc_html__( 'Top Info Text', 'borex' ),
			'subtitle'     => esc_html__( 'Add / edit header top info text from here.', 'borex' ),
			'desc'         => esc_html__( 'Click "Add Info" button to add new Information.', 'borex' ),
			'button_title' => esc_html__( 'Add Info', 'borex' ),
			'fields'       => array(
				array(
					'id'            => 'info_text',
					'type'          => 'wp_editor',
					'media_buttons' => false,
					'height'        => '80px',
					'title'         => esc_html__( 'Info Text', 'borex' ),
					'desc'          => esc_html__( 'Type top left text here.', 'borex' ),
				),

				array(
					'id'    => 'info_icon',
					'type'  => 'icon',
					'title' => esc_html__( 'Icon', 'borex' ),
					'desc'  => esc_html__( 'Select icon', 'borex' ),
				),


			),
			'default'      => array(
				array(
					'info_text' => esc_html__( 'We are serving since 1985 at New York', 'borex' ),
					'info_icon' => 'fas fa-map-marker-alt',
				),
			),
		),

		array(
			'id'           => 'header_top_socials',
			'type'         => 'group',
			'title'        => esc_html__( 'Top Social Icons', 'borex' ),
			'subtitle'     => esc_html__( 'Add / edit top social icons from here.', 'borex' ),
			'desc'         => esc_html__( 'Click "Add Social Icon" button to add new icons.', 'borex' ),
			'button_title' => esc_html__( 'Add Social Icon', 'borex' ),
			'fields'       => array(

				array(
					'id'    => 'icon',
					'type'  => 'icon',
					'title' => esc_html__( 'Site Icon', 'borex' ),
					'desc'  => esc_html__( 'Select icon', 'borex' ),
				),

				array(
					'id'    => 'profile_url',
					'type'  => 'text',
					'title' => esc_html__( 'Profile Link', 'borex' ),
					'desc'  => esc_html__( 'Type social profile link here.', 'borex' ),
				),


			),

			'default' => array(
				array(
					'icon'        => 'fab fa-twitter',
					'profile_url' => '#',
				),
			),
		),
	)
) );