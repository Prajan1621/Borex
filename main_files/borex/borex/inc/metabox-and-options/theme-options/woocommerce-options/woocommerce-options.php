<?php
// Create WooCommerce options section
CSF::createSection($borex_theme_option, array(
	'title' => esc_html__('WooCommerce', 'borex'),
	'id'    => 'td_woo_options',
	'icon'  => 'fa fa-shopping-cart',
));

CSF::createSection($borex_theme_option, array(
	'parent' => 'td_woo_options',
	'title'  => esc_html__('Shop Page', 'borex'),
	'icon'   => 'fa fa-shopping-bag',
	'fields' => array(

		array(
			'id'      => 'shop_page_layout',
			'type'    => 'select',
			'title'   => esc_html__('Shop Layout', 'borex'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'borex'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'borex'),
				'right-sidebar' => esc_html__('Right Sidebar', 'borex'),
			),
			'default' => 'full-width',
			'desc'    => esc_html__('Select shop page layout.', 'borex'),
		),

		array(
			'id'         => 'shop_custom_title',
			'type'       => 'text',
			'title'      => esc_html__('Shop Title', 'borex'),
			'desc'       => esc_html__('If you want to use custom title write title here.If you don\'t, leave it empty.', 'borex')
		),

		array(
			'id'    => 'product_per_page',
			'type'  => 'text',
			'title' => esc_html__( 'Product Per Page', 'borex' ),
			'default' => 9,
			'desc'  => esc_html__( 'Type how many product you want to show per page. Number only.', 'borex' ),
		),

		array(
			'id'    => 'product_column',
			'type'  => 'text',
			'title' => esc_html__( 'Product Column Per Row', 'borex' ),
			'default' => 3,
			'desc'  => esc_html__( 'How many product you want to show per row. Number only.', 'borex' ),
		),

		array(
			'id'       => 'product_quick_view',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Quick View Icon', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Enable or disable product quick view icon.', 'borex'),
		),

		array(
			'id'       => 'product_wish_list',
			'type'     => 'switcher',
			'title'    => esc_html__('Enable Wish list Icon', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Enable or disable product wish list icon.', 'borex'),
		),
	)
));

CSF::createSection($borex_theme_option, array(
	'parent' => 'td_woo_options',
	'title'  => esc_html__('Single Product', 'borex'),
	'icon'   => 'fa fa-product-hunt',
	'fields' => array(

		array(
			'id'      => 'product_page_layout',
			'type'    => 'select',
			'title'   => esc_html__('Product Layout', 'borex'),
			'options' => array(
				'full-width'  => esc_html__('Full Width', 'borex'),
				'left-sidebar'  => esc_html__('Left Sidebar', 'borex'),
				'right-sidebar' => esc_html__('Right Sidebar', 'borex'),
			),
			'default' => 'right-sidebar',
			'desc'    => esc_html__('Select product layout.', 'borex'),
		),

		array(
			'id'         => 'product_default_sidebar',
			'type'       => 'select',
			'title'      => esc_html__( 'Sidebar', 'borex' ),
			'options'    => 'borex_sidebars',
			'default' => 'shop-sidebar',
			'dependency' => array( 'product_page_layout', '!=', 'full-width' ),
			'desc'       => esc_html__( 'Select product sidebar.', 'borex' ),
		),

		array(
			'id'         => 'product_banner_title',
			'type'       => 'text',
			'title'      => esc_html__('Product Banner Title', 'borex'),
			'default' => esc_html__('Shop', 'borex'),
			'desc'       => esc_html__('If not empty, this title will show for all single product\'s banner title. You can overwrite it on the individual product page.', 'borex')
		),

		array(
			'id'       => 'product_sku',
			'type'     => 'switcher',
			'title'    => esc_html__('Show SKU', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Show / Hide product SKU.', 'borex'),
		),

		array(
			'id'       => 'product_cat',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Category', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Show / Hide product category.', 'borex'),
		),

		array(
			'id'       => 'product_tag',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Tags', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Show / Hide product tags.', 'borex'),
		),

		array(
			'id'       => 'show_related_products',
			'type'     => 'switcher',
			'title'    => esc_html__('Show Related Products', 'borex'),
			'default'  => true,
			'text_on'  => esc_html__('Yes', 'borex'),
			'text_off' => esc_html__('No', 'borex'),
			'desc'     => esc_html__('Show / Hide related products.', 'borex'),
		),
	)
));