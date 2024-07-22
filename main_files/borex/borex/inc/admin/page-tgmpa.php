<?php

function borex_install_required_plugins() {

	$plugins = array(

		array(
			'name'     => esc_html__('Breadcrumb NavXT', 'borex'),
			'slug'     => 'breadcrumb-navxt',
			'version'  => '7.2.0',
			'required' => false,
		),

		array(
			'name'     => esc_html__('Codestar Framework', 'onland'),
			'slug'     => 'codestar-framework',
			'source'   => get_template_directory(). '/inc/plugins/codestar-framework.zip',
			'version'  => '2.3.1',
			'required' => true
		),


		array(
			'name'     => esc_html__('Contact Form 7', 'borex'),
			'slug'     => 'contact-form-7',
			'version'  => '5.8.6',
			'required' => false
		),

		array(
			'name'     => esc_html__('Elementor Page Builder', 'borex'),
			'slug'     => 'elementor',
			'version'  => '3.18.3',
			'required' => true,
		),

		array(
			'name'     => esc_html__('Mailchimp for WordPress', 'borex'),
			'slug'     => 'mailchimp-for-wp',
			'version'  => '4.9.11',
			'required' => false,
		),

		array(
			'name'     => esc_html__('One Click Demo Import', 'borex'),
			'slug'     => 'one-click-demo-import',
			'version'  => '3.2.0',
			'required' => false,
		),


		array(
			'name'     => esc_html__('ThemeDraft Core', 'onland'),
			'slug'     => 'themedraft-core',
			'source'   => get_template_directory(). '/inc/plugins/themedraft-core.zip',
			'version'  => '1.1.3',
			'required' => true
		),

		array(
			'name'     => esc_html__('TI WooCommerce Wishlist', 'borex'),
			'slug'     => 'ti-woocommerce-wishlist',
			'version'  => '2.8.0',
			'required' => false,
		),

		array(
			'name'     => esc_html__('WooCommerce', 'borex'),
			'slug'     => 'woocommerce',
			'version'  => '8.5.1',
			'required' => false,
		),

		array(
			'name'     => esc_html__('YITH WooCommerce Quick View', 'borex'),
			'slug'     => 'yith-woocommerce-quick-view',
			'version'  => '1.34.0',
			'required' => false,
		),
	);

	$config = array(
		'id'           => 'borex',
		'parent_slug'  => 'borex',
		'menu'         => 'borex-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'is_automatic' => false,
		'dismiss_msg'  => '',
		'message'      => '',
		'default_path' => '',
	);

	tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'borex_install_required_plugins');