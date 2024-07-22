<?php

// Create general section
CSF::createSection( $borex_theme_option, array(
	'title'  => esc_html__( 'General Options', 'borex' ),
	'id'     => 'general_options',
	'icon'   => 'fa fa-google',
	'fields' => array(
		array(
			'id'     => 'theme_primary_color',
			'type'   => 'color',
			'title'  => esc_html__( 'Primary Color', 'borex' ),
			'desc'   => esc_html__( 'Only works with the elements which is not related with elementor widget. You can change other colors from individual Elemenotr widget\'settings.', 'borex' ),
			'output' => array(

				'color' => 'a:hover,.post-meta li,.post-meta li a,.sticky .post-content-wrapper:before,.slicknav_nav a:hover,.slicknav_item.slicknav_row:hover a,.slicknav_item.slicknav_row:hover .slicknav_arrow,.slicknav_menu .current-menu-item > a,.slicknav_menu .current-menu-item .slicknav_row > a,.slicknav_menu .current-menu-ancestor > a,.slicknav_menu .current-menu-ancestor > .slicknav_row > a,.current-menu-ancestor > .slicknav_row .slicknav_arrow,.current-menu-item .slicknav_row .slicknav_arrow,.main-navigation ul li a:hover,.main-navigation ul li.current-menu-item > a,.main-navigation ul li.current_page_item > a,.main-navigation ul li.current-menu-ancestor > a,.main-navigation ul li.current_page_ancestor > a,.header-style-two .main-navigation ul li ul li a:hover,.header-style-two .main-navigation ul li ul li.current-menu-item > a,.header-style-two .main-navigation ul li ul li.current_page_item > a,.header-style-two .main-navigation ul li ul li.current-menu-ancestor > a,.header-style-two .main-navigation ul li ul li.current_page_ancestor > a,.header-top-area li a:hover,.widget.widget_rss .rss-date,.comments-area .reply a,.comment-metadata time,.bypostauthor .comment-author.vcard .fn:after,.comment-author.vcard .fn a:hover,.comments-area .reply a:hover,#cancel-comment-reply-link,.post-details-wrapper article .entry-content .is-style-outline .wp-block-button__link,blockquote.wp-block-quote:before,blockquote:before,.td-product-thumb-buttons i,.td-product-thumb-buttons .tinvwl_add_to_wishlist_button,.td-product-thumb-buttons .tinvwl_add_to_wishlist_button:hover,.td-product-grid-view #td-shop-view-mode .td-shop-grid,.td-product-list-view #td-shop-view-mode .td-shop-list,#td-shop-view-mode li:hover,.tinvwl-table-manage-list .product-stock i,.comment-form-rating a,.woocommerce .star-rating::before,.woocommerce .star-rating span::before,.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,.woocommerce div.product div.images .woocommerce-product-gallery__trigger,.woocommerce div.product form.cart .reset_variations,.woocommerce ul.cart_list li a:hover,.woocommerce ul.product_list_widget li a:hover,.sidebar-widget-area li.woocommerce-mini-cart-item.mini_cart_item .quantity,.woocommerce .widget_layered_nav_filters ul li a::before,.woocommerce .woocommerce-widget-layered-nav-list .woocommerce-widget-layered-nav-list__item--chosen a::before,.woocommerce-message::before,.cart_totals .cart-subtotal .woocommerce-Price-amount.amount,.woocommerce-shipping-methods .woocommerce-Price-amount.amount,.cart_totals .woocommerce-shipping-calculator a,.cart_totals .order-total td .woocommerce-Price-amount.amount,.woocommerce-info::before,.woocommerce-info a,.text-404 h2,#yith-quick-view-close,.woocommerce-checkout-review-order-table tfoot .order-total td .woocommerce-Price-amount.amount,.td-icon-list-item:hover .td-icon-list-icon,.td-icon-list-icon,a.cta-widget-button,.td-recent-widget-date i,.td-recent-widget-date a,.woocommerce-MyAccount-content a:hover,.woocommerce.widget_products ul.product_list_widget li .woocommerce-Price-amount,.woocommerce.widget_top_rated_products ul.product_list_widget li .woocommerce-Price-amount,.woocommerce .widget_rating_filter ul li.chosen a::before,.woocommerce.widget_products ul.product_list_widget li del,.woocommerce.widget_top_rated_products ul.product_list_widget li del,.header-style-three .header-cta-button a,.header-style-three a.td-header-cart-url .cart-product-count,.header-style-three .main-navigation ul li ul li a:hover,.header-style-three .main-navigation ul li li.current-menu-item > a,.header-style-three .main-navigation ul li li.current_page_item > a,.header-style-three .main-navigation ul li li.current-menu-ancestor > a,.header-style-three .main-navigation ul li li.current_page_ancestor > a,.header-style-three .header-top-area li.top-info-item a:hover,.header-style-three .woocommerce ul.cart_list li a:hover,.header-style-three .woocommerce ul.product_list_widget li a:hover',

				'border-color' => 'input[type=text]:focus,input[type=email]:focus,input[type=password]:focus,input[type=url]:focus,input[type=search]:focus,input[type=tel]:focus,input[type=number]:focus,input[type=date]:focus,textarea:focus,.comment-form input:focus,.comment-form textarea:focus,blockquote.wp-block-quote,blockquote,.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.has-text-align-right,.woocommerce div.product form.cart div.quantity input[type="number"]:focus,.woocommerce .widget_shopping_cart .cart_list li a.remove,.woocommerce.widget_shopping_cart .cart_list li a.remove,.widget_product_search form.woocommerce-product-search .search-field',
			)
		),

		array(
			'id'                    => 'theme_primary_background_color',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Primary Background', 'borex' ),
			'background_image'      => false,
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'output'                => '.preloader-wrapper,.td-button,input[type="submit"],button[type="submit"],.sidebar-widget-area .widget-title,.sidebar-widget-area .widget.widget_archive li:hover a,.sidebar-widget-area .widget.widget_archive li a:hover,.sidebar-widget-area .widget.widget_categories li a:hover,.sidebar-widget-area .widget.widget_pages li a:hover,.sidebar-widget-area .widget.widget_meta li a:hover,.sidebar-widget-area .widget.widget_nav_menu li a:hover,.sidebar-widget-area .widget.widget_tag_cloud a,.post-tags a,.no-thumb .blog-next-prev-img,.post-pagination ul li span.current,.post-pagination ul li a:hover,.post-details-wrapper article .entry-content .wp-block-button__link,.post-details-wrapper article .entry-content .wp-block-file .wp-block-file__button,.page-links a:hover,.page-links .current,.post-thumbnail-wrapper .slick-arrow,.slick-dots button,.td-video-button:before,.td-video-button:after,.audio-iframe-wrapper:before,.blog-next-prev-img:before,.td-gallery-photo-overlay,.widget_themedraft_about_company_widget .widget-social-icons li a:hover,.scroll-to-top,.footer-widget-area .widget.widget_tag_cloud a:hover,.td-product-thumb-overlay,.woocommerce span.onsale,.mfp-iframe-holder .mfp-close,.mfp-image-holder .mfp-close,.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,div#review_form_wrapper .form-submit button[type="submit"],.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover,.woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover,div#review_form_wrapper .form-submit button[type="submit"]:hover,.woocommerce .woocommerce-cart-form__contents button.button:disabled:hover,.woocommerce .woocommerce-cart-form__contents button.button:disabled[disabled]:hover,.woocommerce nav.woocommerce-pagination ul li a:hover,.woocommerce nav.woocommerce-pagination ul li span.current,.woocommerce nav.woocommerce-pagination ul li span:hover,.woocommerce div.product div.images .woocommerce-product-gallery__trigger,.woocommerce .widget_shopping_cart .cart_list li a.remove,.woocommerce.widget_shopping_cart .cart_list li a.remove,.woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.widget_product_tag_cloud a,.woocommerce a.remove,.woocommerce a.remove:hover,.content-area button[type="submit"].search-submit,.widget.widget_search button[type="submit"],.sidebar-widget-area .widget.widget_themedraft_nav_menu ul li a:hover,.sidebar-widget-area .widget.widget_themedraft_nav_menu ul li.current-menu-item a,.td-member-details-info-wrapper .td-member-image-shape,.td-member-details-info-wrapper .td-member-social-info a:hover,.widget_product_search button[type=submit],.woocommerce-MyAccount-navigation ul li.is-active a,.woocommerce-MyAccount-navigation ul li a:hover,.woocommerce div.product div.images .woocommerce-product-gallery__trigger,.woocommerce.td-product-list-view .td-shop-page a.added_to_cart,.header-search-wrapper',
			'desc'                  => esc_html__( 'Only works with the elements which is not related with elementor widget. You can change other colors from individual Elemenotr widget\'settings.', 'borex' ),
		),

		array(
			'id'                    => 'theme_secondary_background_color',
			'type'                  => 'background',
			'title'                 => esc_html__( 'Secondary Background', 'borex' ),
			'background_image'      => false,
			'background_gradient'   => true,
			'background_origin'     => false,
			'background_clip'       => false,
			'background_blend-mode' => false,
			'background_attachment' => false,
			'background_size'       => false,
			'background_position'   => false,
			'background_repeat'     => false,
			'output'                => '.header-style-three .header-navigation-area,.header-style-three .uk-sticky.uk-active,
.header-style-three .header-cta-button a.td-button:hover,.header-style-three .woocommerce.widget_shopping_cart .cart_list li a.remove,.header-style-three .header-mini-cart .woocommerce a.button',
			'desc'                  => esc_html__( 'Only works with the elements which is not related with elementor widget. You can change other colors from individual Elemenotr widget\'settings.', 'borex' ),
		),

		array(
			'id'       => 'enable_preloader',
			'type'     => 'switcher',
			'title'    => esc_html__( 'Enable Pre Loader', 'borex' ),
			'text_on'  => esc_html__( 'Yes', 'borex' ),
			'text_off' => esc_html__( 'No', 'borex' ),
			'desc'     => esc_html__( 'Enable or disable Site Preloader.', 'borex' ),
			'default'  => true
		),

		array(
			'id'           => 'preloader_image',
			'type'         => 'media',
			'title'        => esc_html__( 'Preloader Image', 'borex' ),
			'library'      => 'image',
			'url'          => false,
			'button_title' => esc_html__( 'Upload Image', 'borex' ),
			'desc'         => esc_html__( 'Upload Preloader image', 'borex' ),
			'dependency'   => array( 'enable_preloader', '==', 'true' ),

		),
	)
) );