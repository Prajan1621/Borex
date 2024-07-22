<?php
$borex_product_meta = 'borex_product_meta';

// Create a metabox
CSF::createMetabox($borex_product_meta, array(
	'title'     => esc_html__('Product Settings', 'borex'),
	'post_type' => array('product'),
	'data_type' => 'serialize',
));

// Create a section
CSF::createSection($borex_product_meta, array(
	'title'  => esc_html__('Banner Settings', 'borex'),
	'icon' => 'fa fa-flag-o',
	'fields' => array(
		array(
			'id'       => 'enable_product_banner',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Banner', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Enable or disable banner.', 'borex'),
		),

		array(
			'id'                    => 'product_banner_background_meta',
			'type'                  => 'background',
			'title'                 => esc_html__('Banner Background', 'borex'),
			'background_gradient'   => false,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'dependency'            => array('enable_product_banner', '==', true),
			'output'                => '.banner-area.page-banner.td-woo-banner',
			'desc'                  => esc_html__('Select banner background color and image', 'borex'),
		),

		array(
			'id'         => 'product_custom_title',
			'type'       => 'text',
			'title'      => esc_html__('Banner Custom Title', 'borex'),
			'dependency' => array('enable_product_banner', '==', true),
			'desc'       => esc_html__('If you want to use custom title write title here.If you don\'t, leave it empty.', 'borex')
		),

		array(
			'id'         => 'product_banner_text_align_meta',
			'type'       => 'select',
			'title'      => esc_html__('Banner Text Align', 'borex'),
			'options'    => array(
				'default' => esc_html__('Default', 'borex'),
				'left'    => esc_html__('Left', 'borex'),
				'center'  => esc_html__('Center', 'borex'),
				'right'   => esc_html__('Right', 'borex'),
			),
			'default'    => 'default',
			'dependency' => array('enable_product_banner', '==', true),
			'desc'       => esc_html__('Select page banner text align.', 'borex'),
		),

		array(
			'id'          => 'product_banner_height_meta',
			'type'        => 'slider',
			'title'       => esc_html__('Banner Height', 'borex'),
			'min'         => 100,
			'max'         => 800,
			'step'        => 1,
			'unit'        => 'px',
			'output'      => '.banner-area.page-banner.td-woo-banner',
			'output_mode' => 'height',
			'desc'        => esc_html__('Select banner height.', 'borex'),
			'dependency'  => array('enable_product_banner', '==', true),
		),
	)
));