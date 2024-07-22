<?php
$borex_common_meta = 'borex_common_meta';

// Create a metabox
CSF::createMetabox($borex_common_meta, array(
	'title'     => esc_html__('Settings', 'borex'),
	'post_type' => array('page', 'post', 'borex_service', 'borex_team','borex_project'),
	'data_type' => 'serialize',
));

// Create layout section
CSF::createSection($borex_common_meta, array(
	'title'  => esc_html__('Layout Settings ', 'borex'),
	'icon'   => 'fa fa-calculator',
	'fields' => array(

		array(
			'id'      => 'layout_meta',
			'type'    => 'select',
			'title'   => esc_html__('Layout', 'borex'),
			'options' => array(
				'default'       => esc_html__('Default', 'borex'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'borex'),
				'full-width'    => esc_html__('Full Width', 'borex'),
				'right-sidebar' => esc_html__('Right Sidebar', 'borex'),
			),
			'default' => 'default',
			'desc'    => esc_html__('Select layout', 'borex'),
		),

		array(
			'id'         => 'sidebar_meta',
			'type'       => 'select',
			'title'      => esc_html__('Sidebar', 'borex'),
			'options'    => 'borex_sidebars',
			'dependency' => array('layout_meta', '!=', 'full-width'),
			'desc'       => esc_html__('Select sidebar you want to show with this page.', 'borex'),
		),
	)
));

// Create layout section
CSF::createSection($borex_common_meta, array(
	'title'  => esc_html__('Header Settings ', 'borex'),
	'icon'   => 'fa fa-header',
	'fields' => array(

		array(
			'id'      => 'header_meta',
			'type'    => 'select',
			'title'   => esc_html__('Header Style', 'borex'),
			'options' => array(
				'default'          => esc_html__('Default', 'borex'),
				'header-style-one' => esc_html__('Header Style One', 'borex'),
				'header-style-two' => esc_html__('Header Style Two', 'borex'),
				'header-style-three' => esc_html__('Header Style Three', 'borex'),
				'header-style-four' => esc_html__('Header Style Four', 'borex'),
			),
			'default' => 'default',
			'desc'    => esc_html__('Select header style', 'borex'),
		),

		array(
			'id'           => 'header_logo_meta',
			'type'         => 'media',
			'title'        => esc_html__('Header Logo', 'borex'),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__('Upload Logo', 'borex'),
			'desc'         => esc_html__('Upload logo image', 'borex'),

		),

		array(
			'id'          => 'main_menu_meta',
			'type'        => 'select',
			'title'       => esc_html__('Header Menu', 'borex'),
			'options'     => 'menus',
			'placeholder' => esc_html__('Default', 'borex'),
			'desc'        => esc_html__('You can select a different menu for this page from here.', 'borex'),
		),
	)
));

// Create a section
CSF::createSection($borex_common_meta, array(
	'title'  => esc_html__('Banner Settings', 'borex'),
	'icon' => 'fa fa-flag-o',
	'fields' => array(
		array(
			'id'       => 'enable_banner',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Banner', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Enable or disable banner.', 'borex'),
		),

		array(
			'id'                    => 'banner_background_meta',
			'type'                  => 'background',
			'title'                 => esc_html__('Banner Background', 'borex'),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'dependency'            => array('enable_banner', '==', true),
			'output'                => '.banner-area.post-banner,.banner-area.page-banner,.banner-area.service-banner,.banner-area.team-banner,.banner-area.project-banner',
			'desc'                  => esc_html__('Select banner background color and image', 'borex'),
		),

		array(
			'id'         => 'custom_title',
			'type'       => 'text',
			'title'      => esc_html__('Banner Custom Title', 'borex'),
			'dependency' => array('enable_banner', '==', true),
			'desc'       => esc_html__('If you want to use custom title write title here.If you don\'t, leave it empty.', 'borex')
		),

		array(
			'id'         => 'banner_text_align_meta',
			'type'       => 'select',
			'title'      => esc_html__('Banner Text Align', 'borex'),
			'options'    => array(
				'default' => esc_html__('Default', 'borex'),
				'left'    => esc_html__('Left', 'borex'),
				'center'  => esc_html__('Center', 'borex'),
				'right'   => esc_html__('Right', 'borex'),
			),
			'default'    => 'default',
			'dependency' => array('enable_banner', '==', true),
			'desc'       => esc_html__('Select page banner text align.', 'borex'),
		),

		array(
			'id'          => 'banner_height_meta',
			'type'        => 'slider',
			'title'       => esc_html__('Banner Height', 'borex'),
			'min'         => 100,
			'max'         => 800,
			'step'        => 1,
			'unit'        => 'px',
			'output'      => '.banner-area.post-banner,.banner-area.page-banner,.banner-area.service-banner,.banner-area.team-banner,.banner-area.project-banner,.header-style-three .banner-area,.header-style-four .banner-area',
			'output_mode' => 'height',
			'subtitle'    => esc_html__('Select banner height.', 'borex'),
			'desc'        => esc_html__('Select banner height.', 'borex'),
			'dependency'  => array('enable_banner', '==', true),
		),
	)
));


// Create Footer section
CSF::createSection($borex_common_meta, array(
	'title'  => esc_html__('Footer Options', 'borex'),
	'icon' => 'fa fa-wordpress',
	'fields' => array(
		array(
			'id'           => 'footer_logo_meta',
			'type'         => 'media',
			'title'        => esc_html__('Footer Logo', 'borex'),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__('Upload Logo', 'borex'),
			'desc'         => esc_html__('Upload logo image', 'borex'),

		),

		array(
			'id'     => 'footer_background_color_meta',
			'type'   => 'color',
			'title'  => esc_html__( 'Background Color', 'borex' ),
			'desc'  => esc_html__( 'This will change footer background colors.', 'borex' ),
			'output' => array(
				'background-color' => '.footer-widget-area,.footer-bottom-area',
			),
		),


		array(
			'id'     => 'footer_title_and_bold_text_color_meta',
			'type'   => 'color',
			'title'  => esc_html__( 'Title & Bold Text Color', 'borex' ),
			'desc'  => esc_html__( 'This will change all title and bold text colors.', 'borex' ),
			'output' => array(
				'color' => '.footer-widget-area .widget-title,.footer-widget-area .widget.widget_calendar caption,.footer-widget-area table th,.footer-widget-area table td a,.footer-widget-area .widget-title a,.footer-widget-area .widget.widget_recent_comments li .comment-author-link, .footer-widget-area .widget.widget_recent_comments li .comment-author-link a,.footer-widget-area .widget.widget_rss li a,.footer-widget-area .widget.widget_rss cite,.footer-widget-area strong',
			),
		),

		array(
			'id'     => 'footer_text_color_meta',
			'type'   => 'color',
			'title'  => esc_html__( 'Text Color', 'borex' ),
			'desc'  => esc_html__( 'This will change all text colors.', 'borex' ),
			'output' => array(
				'color' => '.footer-widget-area, .footer-widget-area a, .footer-bottom-area, .footer-bottom-area a, .footer-widget-area .widget.widget_archive li a, .footer-widget-area .widget.widget_categories li a, .footer-widget-area .widget.widget_meta li a, .footer-widget-area .widget.widget_nav_menu li a, .footer-widget-area .widget.widget_pages li a, .footer-widget-area .widget.widget_themedraft_nav_menu ul li a, .footer-widget-area .widget .post-count-number, .footer-widget-area table td, .footer-widget-area .widget.widget_rss .rss-date',
			),
		),

		array(
			'id'     => 'footer_text_hover_color_meta',
			'type'   => 'color',
			'title'  => esc_html__( 'Text Hover Color', 'borex' ),
			'desc'  => esc_html__( 'This will change all linked text hover colors.', 'borex' ),
			'output' => array(
				'color' => '.footer-bottom-area a:hover, .footer-widget-area a:hover, .footer-widget-area .widget.widget_archive li a:hover, .footer-widget-area .widget.widget_categories li a:hover, .footer-widget-area .widget.widget_meta li a:hover, .footer-widget-area .widget.widget_nav_menu li a:hover, .footer-widget-area .widget.widget_pages li a:hover,.footer-widget-area .widget.widget_recent_comments li .comment-author-link a:hover, .footer-widget-area .widget.widget_rss li a:hover,.footer-widget-area table td a:hover',
			),
		),


		array(
			'id'     => 'footer_social_icon_color_meta',
			'type'   => 'color',
			'title'  => esc_html__( 'Social Icon Color', 'borex' ),
			'desc'  => esc_html__( 'This will change social icons color.', 'borex' ),
			'output' => array(
				'color' => '.widget_themedraft_about_company_widget .widget-social-icons li a,.footer-widget-area .widget.widget_tag_cloud a,.footer-widget-area .widget.widget_tag_cloud a:hover',
			),
		),


		array(
			'id'     => 'footer_social_icon_bg_color_meta',
			'type'   => 'color',
			'title'  => esc_html__( 'Social Icon Background Color', 'borex' ),
			'desc'  => esc_html__( 'This will change social icons background color.', 'borex' ),
			'output' => array(
				'background-color' => '.widget_themedraft_about_company_widget .widget-social-icons li a,.footer-widget-area .widget.widget_tag_cloud a,.footer-widget-area .widget.widget_tag_cloud a:hover',
			),
		),

		array(
			'id'     => 'bottom_border_color_meta',
			'type'   => 'color',
			'title'  => esc_html__( 'Bottom Border Color', 'borex' ),
			'desc'  => esc_html__( 'This will change footer bottom border color.', 'borex' ),
			'output' => array(
				'border-color' => '.footer-widget-area,.footer-widget-area table, .footer-widget-area table th, .footer-widget-area table td'
			),
		),


		array(
			'id'                    => 'footer_gradient_background_color_meta',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Gradient Background Color', 'borex' ),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_image' => false,
			'background_attachment' => false,
			'background_size' => false,
			'background_position' => false,
			'background_repeat' => false,
			'output'                => '.scroll-to-top,.footer-widget-area .widget_themedraft_about_company_widget .widget-social-icons li a:hover,.footer-widget-area .td-insta-overlay,.widget.widget_search button[type="submit"],.footer-widget-area .widget.widget_tag_cloud a:hover,.td-gallery-photo-overlay',
			'desc'                  => esc_html__( 'This will change all gradient background color. Example: Social iccon hover background, Instagram image overlay', 'borex' ),
		),

	)
));