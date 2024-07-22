<?php
// Create Footer section

CSF::createSection( $borex_theme_option, array(
	'title' => esc_html__( 'Footer Settings', 'borex' ),
	'id'    => 'footer_settings',
	'icon'  => 'fa fa-wordpress',
) );


CSF::createSection( $borex_theme_option, array(
	'parent' => 'footer_settings',
	'title'  => esc_html__( 'Footer Options', 'borex' ),
	'icon'   => 'fa fa-credit-card',
	'fields' => array(
		array(
			'id'      => 'footer_widget_column',
			'type'    => 'select',
			'title'   => esc_html__( 'Widget Column', 'borex' ),
			'desc'    => esc_html__( 'Select widget area column number.', 'borex' ),
			'options' => array(
				'col-lg-12' => esc_html__( '1 Column', 'borex' ),
				'col-lg-6'  => esc_html__( '2 Column', 'borex' ),
				'col-lg-4'  => esc_html__( '3 Column', 'borex' ),
				'col-lg-3'  => esc_html__( '4 Column', 'borex' ),
			),
			'default' => 'col-lg-3',
		),

		array(
			'id'            => 'footer_info_left_text',
			'type'          => 'wp_editor',
			'title'         => esc_html__( 'Footer Info Right Text', 'borex' ),
			'desc'          => esc_html__( 'Type footer info right text here.', 'borex' ),
			'tinymce'       => true,
			'quicktags'     => true,
			'media_buttons' => false,
			'height'        => '100px',
		),

		array(
			'id'            => 'copyright_text',
			'type'          => 'wp_editor',
			'title'         => esc_html__( 'Copyright Text', 'borex' ),
			'desc'          => esc_html__( 'Type site copyright text here.', 'borex' ),
			'tinymce'       => true,
			'quicktags'     => true,
			'media_buttons' => false,
			'height'        => '100px',
		),

		array(
			'id'                    => 'footer_bg_image',
			'type'                  => 'background',
			'title'                 => esc_html__('Background Image', 'borex'),
			'background_color'      => false,
			'background_gradient'   => false,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'output'                => '.footer-widget-area',
			'desc'                  => esc_html__('Select footer background color and image.', 'borex'),
		),

		array(
			'id'       => 'go_to_top_button',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Go Top Button', 'borex' ),
			'default'  => true,
			'text_on'  => esc_html__( 'Yes', 'borex' ),
			'text_off' => esc_html__( 'No', 'borex' ),
			'desc'     => esc_html__( 'Enable or disable go to top button.', 'borex' ),
		),

	)
) );

CSF::createSection( $borex_theme_option, array(
	'parent' => 'footer_settings',
	'title'  => esc_html__( 'Footer Colors', 'borex' ),
	'icon'   => 'fas fa-paint-brush',
	'fields' => array(

		array(
			'id'     => 'footer_background_color',
			'type'   => 'color',
			'title'  => esc_html__( 'Background Color', 'borex' ),
			'desc'  => esc_html__( 'This will change footer background colors.', 'borex' ),
			'output' => array(
				'background-color' => '.footer-widget-area,.footer-bottom-area',
			),
		),


		array(
			'id'     => 'footer_title_and_bold_text_color',
			'type'   => 'color',
			'title'  => esc_html__( 'Title & Bold Text Color', 'borex' ),
			'desc'  => esc_html__( 'This will change all title and bold text colors.', 'borex' ),
			'output' => array(
				'background-color' => '',
				'color' => '.footer-widget-area .widget-title,.footer-widget-area .widget.widget_calendar caption,.footer-widget-area table th,.footer-widget-area table td a,.footer-widget-area .widget-title a,.footer-widget-area .widget.widget_recent_comments li .comment-author-link, .footer-widget-area .widget.widget_recent_comments li .comment-author-link a,.footer-widget-area .widget.widget_rss li a,.footer-widget-area .widget.widget_rss cite,.footer-widget-area strong',
				'border-color' => ''
			),
		),

		array(
			'id'     => 'footer_text_color',
			'type'   => 'color',
			'title'  => esc_html__( 'Text Color', 'borex' ),
			'desc'  => esc_html__( 'This will change all text colors.', 'borex' ),
			'output' => array(
				'background-color' => '',
				'color' => '.footer-widget-area, .footer-widget-area a, .footer-bottom-area, .footer-bottom-area a, .footer-widget-area .widget.widget_archive li a, .footer-widget-area .widget.widget_categories li a, .footer-widget-area .widget.widget_meta li a, .footer-widget-area .widget.widget_nav_menu li a, .footer-widget-area .widget.widget_pages li a, .footer-widget-area .widget.widget_themedraft_nav_menu ul li a, .footer-widget-area .widget .post-count-number, .footer-widget-area table td, .footer-widget-area .widget.widget_rss .rss-date',
				'border-color' => ''
			),
		),

		array(
			'id'     => 'footer_text_hover_color',
			'type'   => 'color',
			'title'  => esc_html__( 'Text Hover Color', 'borex' ),
			'desc'  => esc_html__( 'This will change all linked text hover colors.', 'borex' ),
			'output' => array(
				'background-color' => '',
				'color' => '.footer-bottom-area a:hover, .footer-widget-area a:hover, .footer-widget-area .widget.widget_archive li a:hover, .footer-widget-area .widget.widget_categories li a:hover, .footer-widget-area .widget.widget_meta li a:hover, .footer-widget-area .widget.widget_nav_menu li a:hover, .footer-widget-area .widget.widget_pages li a:hover,.footer-widget-area .widget.widget_recent_comments li .comment-author-link a:hover, .footer-widget-area .widget.widget_rss li a:hover,.footer-widget-area table td a:hover',
				'border-color' => ''
			),
		),


		array(
			'id'     => 'footer_social_icon_color',
			'type'   => 'color',
			'title'  => esc_html__( 'Social Icon Color', 'borex' ),
			'desc'  => esc_html__( 'This will change social icons color.', 'borex' ),
			'output' => array(
				'background-color' => '',
				'color' => '.widget_themedraft_about_company_widget .widget-social-icons li a,.footer-widget-area .widget.widget_tag_cloud a,.footer-widget-area .widget.widget_tag_cloud a:hover',
				'border-color' => ''
			),
		),


		array(
			'id'     => 'footer_social_icon_bg_color',
			'type'   => 'color',
			'title'  => esc_html__( 'Social Icon Background Color', 'borex' ),
			'desc'  => esc_html__( 'This will change social icons background color.', 'borex' ),
			'output' => array(
				'background-color' => '.widget_themedraft_about_company_widget .widget-social-icons li a,.footer-widget-area .widget.widget_tag_cloud a,.footer-widget-area .widget.widget_tag_cloud a:hover',
				'border-color' => ''
			),
		),

		array(
			'id'     => 'bottom_border_color',
			'type'   => 'color',
			'title'  => esc_html__( 'Bottom Border Color', 'borex' ),
			'desc'  => esc_html__( 'This will change footer bottom border color.', 'borex' ),
			'output' => array(
				'border-color' => '.footer-widget-area,.footer-widget-area table, .footer-widget-area table th, .footer-widget-area table td'
			),
		),


		array(
			'id'                    => 'footer_gradient_background_color',
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
) );






























