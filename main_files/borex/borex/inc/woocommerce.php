<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Borex
 */


/* After Setup Theme */

function borex_woocommerce_setup() {
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'borex_woocommerce_setup');


/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function borex_woocommerce_scripts() {
	wp_enqueue_style('borex-woocommerce-style', get_theme_file_uri('assets/css/woocommerce.css'), array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'borex_woocommerce_scripts');


/**
 * Add CSS class to the body tag.
 */
function borex_woocommerce_active_body_class($classes) {
	$classes[] = 'woocommerce-active';

	if( isset( $_COOKIE["td-shop-view"] ) && $_COOKIE["td-shop-view"] == 'list' ) {
		$classes[] = 'td-product-list-view';
	} else {
		$classes[] = 'td-product-grid-view';
	}

	return $classes;
}

add_filter('body_class', 'borex_woocommerce_active_body_class');


/*
 * Remove Before Content
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);

/*
 * Before Content New Markup
 */
if (!function_exists('borex_woocommerce_wrapper_before')) {

	function borex_woocommerce_wrapper_before() {
		?>

        <?php
        global $post;
		if ( get_post_meta( $post->ID, 'borex_product_meta', true ) ) {
			$product_meta = get_post_meta( $post->ID, 'borex_product_meta', true );
		} else {
			$product_meta = array();
		}

		if ( array_key_exists( 'enable_product_banner', $product_meta ) ) {
			$product_banner = $product_meta['enable_product_banner'];
		} else {
			$product_banner = true;
		}

		if ( array_key_exists( 'product_custom_title', $product_meta ) ) {
			$product_custom_title = $product_meta['product_custom_title'];
		} else {
			$product_custom_title = '';
		}

		if ( array_key_exists( 'product_banner_text_align_meta', $product_meta ) && $product_meta['product_banner_text_align_meta'] != 'default' ) {
			$product_banner_text_align = $product_meta['product_banner_text_align_meta'];
		} else {
			$product_banner_text_align = borex_option( 'banner_default_text_align', 'center' );
		}
		
        ?>

		<?php if($product_banner == true) : ?>
        <div class="banner-area page-banner td-woo-banner">
            <div class="banner-overlay"></div>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12 my-auto">
                        <div class="banner-content text-<?php echo esc_attr( $product_banner_text_align ); ?>">
                            <h2 class="banner-title">
	                            <?php
	                            if ( is_singular( 'product' ) ) {

		                            if ( ! empty( $product_custom_title ) ) {
			                            echo esc_html( $product_custom_title );
		                            } else {
			                            $product_banner_title = borex_option('product_banner_title');
			                            if(! empty( $product_banner_title )){
				                            echo esc_html( $product_banner_title );
			                            }else{
				                            the_title();
                                        }
		                            }
	                            } else {
	                                $shop_custom_title = borex_option('shop_custom_title');
	                                if (is_shop()){
                                        if(!empty($shop_custom_title)){
                                            echo esc_html($shop_custom_title);
                                        }else{
	                                        woocommerce_page_title();
                                        }
                                    }else{
		                            woocommerce_page_title();
                                    }
	                            }
	                            ?>
                            </h2>
							<?php if (function_exists('bcn_display')) : ?>
                                <div class="breadcrumb-container">
									<?php bcn_display(); ?>
                                </div>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

		<?php
		if (is_shop()) {
		    $shop_class = 'td-shop-page';
			$layout           = borex_option('shop_page_layout', 'full-width');
			$selected_sidebar = 'shop-sidebar';
		} else {
			$layout           = borex_option('product_page_layout', 'right-sidebar');
			$selected_sidebar = borex_option('product_default_sidebar', 'shop-sidebar');
			$shop_class = '';
		}

		if ($layout == 'left-sidebar' && is_active_sidebar($selected_sidebar) || $layout == 'right-sidebar' && is_active_sidebar($selected_sidebar)) {
			$page_column_class = 'col-lg-9';
		} else {
			$page_column_class = 'col-lg-12';
		}

		?>

        <div id="primary" class="content-area <?php echo esc_attr($shop_class); ?> td-woo-content layout-<?php echo esc_attr($layout); ?>">
        <div class="container">
        <div class="row">
		<?php if ($layout == 'left-sidebar' && is_active_sidebar($selected_sidebar)) : ?>
            <div class="col-lg-3 td-shop-sidebar">
				<?php get_sidebar(); ?>
            </div>
		<?php endif ?>

        <div class="<?php echo esc_attr($page_column_class); ?>">
		<?php
	}
}

/*
 * Add before content
 */

add_action('woocommerce_before_main_content', 'borex_woocommerce_wrapper_before');


/*
 * Remove After Content
 */
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


/**
 * After Content New Markup
 */

if (!function_exists('borex_woocommerce_wrapper_after')) {
	function borex_woocommerce_wrapper_after() {
		?>
        </div><!-- #Column -->

		<?php
		if (is_shop()) {
			$layout           = borex_option('shop_page_layout', 'right-sidebar');
			$selected_sidebar = 'shop-sidebar';
		} else {
			$layout           = borex_option('product_page_layout', 'right-sidebar');
			$selected_sidebar = borex_option('product_default_sidebar', 'shop-sidebar');
		}
		?>

		<?php if ($layout == 'right-sidebar' && is_active_sidebar($selected_sidebar)) : ?>
            <div class="col-lg-3 td-shop-sidebar">
				<?php get_sidebar(); ?>
            </div>
		<?php endif ?>
        </div><!-- #Row -->
        </div><!-- #Container -->
        </div><!-- #primary -->
		<?php
	}
}

/*
 * Add after content
 */
add_action('woocommerce_after_main_content', 'borex_woocommerce_wrapper_after');

/*
 * Remove WooCommerce Default Sidebar
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/*
 * Remove Breadcrumb
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

/**
 * Hide Page Title.
 */
function borex_woocommerce_hide_page_title() {
	return false;
}

add_filter('woocommerce_show_page_title', 'borex_woocommerce_hide_page_title');


/**
 * Remove Before Shop Loop
 */
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);


/**
 *  New Before Shop Loop Markup
 */

function borex_woocommerce_shop_topbar() { ?>
    <div class="td-woo-shop-topbar">
        <div class="row">
            <div class="col-lg-8 col-md-8 switcher-and-result">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div id="td-shop-view-mode">
                            <ul class="td-ul-style td-list-inline">
                                <li class="td-shop-grid"><i class="fas fa-th-large"></i></li>
                                <li class="td-shop-list"><i class="fas fa-list-ul"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="td-woo-result-count-wrapper">
                            <?php woocommerce_result_count(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="td-woo-sort-list">
					<?php woocommerce_catalog_ordering(); ?>
                </div>
            </div>
        </div>
    </div>

	<?php
}

/*
 * Add New before Shop Loop
 */
add_action('woocommerce_before_shop_loop', 'borex_woocommerce_shop_topbar', 20);

/**
 * Products per page.
 */
function borex_woocommerce_products_per_page() {
	$product_per_page = borex_option('product_per_page', 9);
	return $product_per_page;
}

add_filter('loop_shop_per_page', 'borex_woocommerce_products_per_page');


/**
 * Product per column.
 */
function borex_woocommerce_loop_columns() {
	$product_column = borex_option('product_column', 3);
	return $product_column;
}

add_filter('loop_shop_columns', 'borex_woocommerce_loop_columns');

/**
 * Before Product columns wrapper before.
 *
 * woocommerce_before_shop_loop
 */
if (!function_exists('borex_woocommerce_product_columns_wrapper')) {

	function borex_woocommerce_product_columns_wrapper() {
		$columns = borex_woocommerce_loop_columns();
		echo '<div class="columns-' . absint($columns) . '">';
	}
}
add_action('woocommerce_before_shop_loop', 'borex_woocommerce_product_columns_wrapper', 40);

/**
 * Before Product columns wrapper after.
 *
 * woocommerce_after_shop_loop
 */
if (!function_exists('borex_woocommerce_product_columns_wrapper_close')) {

	function borex_woocommerce_product_columns_wrapper_close() {
		echo '</div>';

	}
}
add_action('woocommerce_after_shop_loop', 'borex_woocommerce_product_columns_wrapper_close', 40);


/**
 * Related Products Args.
 */
function borex_woocommerce_related_products_args($args) {
	$defaults = array(
		'posts_per_page' => 100,
		'columns'        => 1,
	);

	$args = wp_parse_args($defaults, $args);

	return $args;
}

add_filter('woocommerce_output_related_products_args', 'borex_woocommerce_related_products_args');


/**
 * Product gallery thumnbail columns.
 */
function borex_woocommerce_thumbnail_columns() {
	return 4;
}

add_filter('woocommerce_product_thumbnails_columns', 'borex_woocommerce_thumbnail_columns');


/**
 * Header Mini Cart
 */



function borex_header_cart_count_number( $fragments ) {
	global $woocommerce;
	ob_start();?>
    <span class="cart-product-count"><?php echo WC()->cart->get_cart_contents_count();?></span>
	<?php
	$fragments['span.cart-product-count'] = ob_get_clean();
	return $fragments;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'borex_header_cart_count_number' );

/**
 * Use excerpt when description doesn't exist
 */

if (!function_exists('woocommerce_template_single_excerpt')) {
	function woocommerce_template_single_excerpt() {
		global $post;
		if (!$post->post_excerpt) {
			return false;
		}

		echo '<div class="short-description">';
		if (!$post->post_excerpt) {
			echo wp_trim_words(get_the_excerpt() , '30', '...' );
		} else {
			wc_get_template('single-product/short-description.php');
		}
		echo '</div>';
	}
}

/**
 * Add Short Description on shop page product
 */

function borex_woocommerce_shop_add_description() {
	if (is_shop() || is_product_category() || is_product_tag()) {
		global $post;
		echo '<div class="td-product-excerpt"><div class="td-short-description">';
		echo wp_trim_words(get_the_excerpt() , '30', '...' );
		echo '</div></div>';
	}
}

add_action('woocommerce_after_shop_loop_item_title', 'borex_woocommerce_shop_add_description', 12);

/*
 * Remove Before shop loop item
 */
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);

/*
 * Remove ssfter shop loop item
 */

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

/*
 * Remove shop loop item title
 */

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

/*
 * Shop loop item title new markup
 */
function borex_woocommerce_loop_product_title() {
	echo '<h3><a href="' . get_the_permalink() . '" class="woocommerce-LoopProduct-link">' . get_the_title() . '</a></h3>';
}

/*
 * Add new shop loop item title
 */

add_action('woocommerce_shop_loop_item_title', 'borex_woocommerce_loop_product_title', 10);

/*
 * Remove thumbnail
 */
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

/*
 * New thumbnail markup
 */

function borex_woocommerce_shop_thumbnail_area() {
	get_template_part('template-parts/wc-template-parts/content', 'shop-thumb');
}

/*
 * Add new thumbnail
 */

add_action('woocommerce_before_shop_loop_item_title', 'borex_woocommerce_shop_thumbnail_area', 11);


/*
 * Product Info Wrapper Start
 */
function borex_woocommerce_product_info_wrap_start() {
	echo '<div class="td-product-info-wrapper">';
}

add_action('woocommerce_before_shop_loop_item_title', 'borex_woocommerce_product_info_wrap_start', 12);


/*
 * Product info wrapper end
 */
function borex_woocommerce_product_info_wrap_end() {
	echo '</div><div class="clear"></div>';
}

add_action('woocommerce_after_shop_loop_item', 'borex_woocommerce_product_info_wrap_end', 12);


/*
 * Pagination
 */

function borex_woocommerce_pagination($args) {
	$args['prev_text'] = '<i class="fas fa-arrow-left"></i>';
	$args['next_text'] = '<i class="fas fa-arrow-right"></i>';
	return $args;
}

add_filter('woocommerce_pagination_args', 'borex_woocommerce_pagination');


/*
 * Break points
 */

function borex_woocommerce_smallscreen_breakpoint(){
	return '767px';
}

add_filter( 'woocommerce_style_smallscreen_breakpoint', 'borex_woocommerce_smallscreen_breakpoint' );


/*
 * Remove sale flash
 */

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );

/*
 * Remove Default Product Meta
 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


/*
 * Product Meta New Markup
 */
function borex_woocommerce_product_meta(){
	get_template_part( 'template-parts/wc-template-parts/content', 'product-meta' );
}

/*
 * Add Product Meta
 */

add_action( 'woocommerce_single_product_summary', 'borex_woocommerce_product_meta', 40 );


/*
 * Related Products
 */

$show_related_products = borex_option('show_related_products', true);

if($show_related_products == false){
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
}

// YITH Quickview
if ( function_exists( 'YITH_WCQV_Frontend' ) ) {
	remove_action( 'woocommerce_after_shop_loop_item', array( YITH_WCQV_Frontend(), 'yith_add_quick_view_button' ), 15 );
	remove_action( 'yith_wcwl_table_after_product_name', array( YITH_WCQV_Frontend(), 'yith_add_quick_view_button' ), 15 );
}