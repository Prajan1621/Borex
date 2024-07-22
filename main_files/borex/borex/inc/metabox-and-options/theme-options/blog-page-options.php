<?php

// Create blog page options
CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'Blog Page', 'borex' ),
	'id'     => 'blog_page_options',
	'icon'   => 'fa fa-pencil-square-o',
	'fields' => array(

		array(
			'id'      => 'blog_layout',
			'type'    => 'select',
			'title'   => esc_html__('Blog Layout', 'borex'),
			'options' => array(
				'grid'          => esc_html__('Grid Full', 'borex'),
				'grid-ls'       => esc_html__('Grid With Left Sidebar', 'borex'),
				'grid-rs'       => esc_html__('Grid With Right Sidebar', 'borex'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'borex'),
				'right-sidebar' => esc_html__('Right Sidebar', 'borex'),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__('Select blog page layout.', 'borex'),
		),

		array(
			'id'       => 'blog_banner',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Blog Banner', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Enable or disable blog page banner.', 'borex'),
		),

		array(
			'id'                    => 'blog_banner_background_options',
			'type'                  => 'background',
			'title'                 => esc_html__('Banner Background', 'borex'),
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size' => false,
			'background_position' => false,
			'background_repeat' => false,
			'dependency'            => array('blog_banner', '==', true),
			'output'                => '.banner-area.blog-banner',
			'desc'                  => esc_html__('If you want different banner background settings for blog page then select blog page banner background Options from here.', 'borex'),
		),

		array(
			'id'         => 'blog_title',
			'type'       => 'text',
			'title'      => esc_html__('Banner Title', 'borex'),
			'desc'       => esc_html__('Type blog banner title here.', 'borex'),
			'dependency' => array('blog_banner', '==', true),
		),

		array(
			'id'       => 'post_author',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Author Name', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Hide / Show post author name.', 'borex'),
		),

		array(
			'id'       => 'post_date',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Post Date', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Hide / Show post date.', 'borex'),
		),

		array(
			'id'         => 'cmnt_number',
			'type'       => 'switcher',
			'title'      => esc_html__('Show Comment Number', 'borex'),
			'default'    => true,
			'text_on'    => esc_html__('Yes', 'borex'),
			'text_off'   => esc_html__('No', 'borex'),
			'desc'       => esc_html__('Hide / Show post comment number.', 'borex'),
			'dependency' => array('blog_layout', 'any', 'right-sidebar,left-sidebar'),
		),

		array(
			'id'         => 'show_category',
			'type'       => 'switcher',
			'title'      => esc_html__('Show Category Name', 'borex'),
			'default'    => true,
			'text_on'    => esc_html__('Yes', 'borex'),
			'text_off'   => esc_html__('No', 'borex'),
			'desc'       => esc_html__('Hide / Show post category name.', 'borex'),
			'dependency' => array('blog_layout', 'any', 'right-sidebar,left-sidebar'),
		),

		array(
			'id'         => 'read_more_button',
			'type'       => 'switcher',
			'title'      => esc_html__('Show Read More Button', 'borex'),
			'default'    => true,
			'text_on'    => esc_html__('Yes', 'borex'),
			'text_off'   => esc_html__('No', 'borex'),
			'desc'       => esc_html__('Hide / Show post read more button.', 'borex'),
		),
	)
) );