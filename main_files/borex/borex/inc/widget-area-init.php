<?php

//Register widget area
function borex_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'borex'),
		'id'            => 'sidebar',
		'description'   => esc_html__('Add widgets here.', 'borex'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Service Sidebar', 'borex'),
		'id'            => 'service-sidebar',
		'description'   => esc_html__('Add service widgets here.', 'borex'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Team Sidebar', 'borex'),
		'id'            => 'team-sidebar',
		'description'   => esc_html__('Add team widgets here.', 'borex'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Project Sidebar', 'borex'),
		'id'            => 'project-sidebar',
		'description'   => esc_html__('Add Project widgets here.', 'borex'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	$footer_widget_column = borex_option('footer_widget_column', 'col-lg-3');
	register_sidebar(array(
		'name'          => esc_html__('Footer Widget', 'borex'),
		'id'            => 'footer-widget',
		'description'   => esc_html__('Add footer widgets here.', 'borex'),
		'before_widget' => '<div id="%1$s" class="widget '.esc_attr($footer_widget_column).' col-md-6 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	/**
	 * Load Shop Sidebar.
	 */
	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar(array(
			'name'          => esc_html__('Shop Sidebar', 'borex'),
			'id'            => 'shop-sidebar',
			'description'   => esc_html__('Add shop widgets here.', 'borex'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
	}
}

add_action('widgets_init', 'borex_widgets_init');