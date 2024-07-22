<?php
//Single Post

CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'Single Post / Post Details', 'borex' ),
	'id'     => 'single_post_options',
	'icon'   => 'fa fa-pencil',
	'fields' => array(

		array(
			'id'      => 'single_post_default_layout',
			'type'    => 'select',
			'title'   => esc_html__( 'Layout', 'borex' ),
			'options' => array(
				'left-sidebar'  => esc_html__( 'Left Sidebar', 'borex' ),
				'full-width'    => esc_html__( 'Full Width', 'borex' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'borex' ),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__( 'Select single post layout', 'borex' ),
		),


		array(
			'id'         => 'single_post_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'borex' ),
			'options'    => 'borex_sidebars',
			'default' => 'sidebar',
			'dependency' => array( 'single_post_default_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select default sidebar for all posts. You can override this settings on individual post.', 'borex' ),
		),

		array(
			'id'       => 'show_default_title',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Post Title On Banner?', 'borex'),
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Show post title on single post banner area. Default title is "Blog" for all single post.', 'borex'),
			'default'  => false,
		),


		array(
			'id'         => 'single_post_banner_title',
			'type'       => 'text',
			'title'      => esc_html__('Banner Default Title', 'borex'),
			'desc'       => esc_html__('Default banner title for all single post.', 'borex'),
			'default'       => esc_html__('Blog', 'borex'),
			'dependency' => array( 'show_default_title', '==', 'false' ),
		),

		array(
			'id'       => 'single_post_breadcrumb',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Breadcrumb', 'borex'),
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Hide or show banner breadcrumb on single post.', 'borex'),
			'default'  => false,
		),

		array(
			'id'       => 'single_post_author',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Author Name', 'borex'),
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Hide or show author name on post details page.', 'borex'),
			'default'  => true
		),

		array(
			'id'       => 'single_post_date',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Date', 'borex'),
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Hide or show date on post details page.', 'borex'),
			'default'  => true
		),

		array(
			'id'       => 'single_post_cmnt',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Comments Number', 'borex'),
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Hide or show comments number on post details page.', 'borex'),
			'default'  => true,
		),

		array(
			'id'       => 'single_post_cat',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Categories', 'borex'),
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Hide or show categories on post details page.', 'borex'),
			'default'  => true
		),

		array(
			'id'       => 'single_post_tag',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Tags', 'borex'),
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Hide or show tags on post details page.', 'borex'),
			'default'  => true
		),

		array(
			'id'       => 'post_share',
			'type'     => 'switcher',
			'title'    => esc_html__('Post Share icons', 'borex'),
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Hide or show social share icons on post details page.', 'borex'),
			'default'  => true
		),

		array(
			'id'         => 'share_button_title',
			'type'       => 'text',
			'title'      => esc_html__('Share Button Title', 'borex'),
			'desc'       => esc_html__('Type Share buttons title here.', 'borex'),
			'default'       => esc_html__('You can share this post!', 'borex'),
			'dependency' => array( 'post_share', '==', 'true' ),
		),

		array(
			'id'       => 'prev_next_post',
			'type'     => 'switcher',
			'title'    => esc_html__('Previous / Next Post Thumbnail', 'borex'),
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Hide or show previous / next Post thumbnail on post details page.', 'borex'),
			'default'  => true
		),
	)
) );