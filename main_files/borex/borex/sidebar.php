<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package borex
 */


if ( is_page() || is_singular( 'post' ) || borex_custom_post_types() && get_post_meta( $post->ID, 'borex_common_meta', true ) ) {
	$common_meta = get_post_meta( $post->ID, 'borex_common_meta', true );
} else {
	$common_meta = array();
}

if ( is_array( $common_meta ) && array_key_exists( 'sidebar_meta', $common_meta ) && $common_meta['sidebar_meta'] != '0' ) {
	$selected_sidebar = $common_meta['sidebar_meta'];
} else if ( is_singular( 'post' ) ) {
	$selected_sidebar = borex_option( 'single_post_default_sidebar', 'sidebar' );
} else if ( is_singular( 'page' ) ) {
	$selected_sidebar = borex_option( 'page_default_sidebar', 'sidebar' );
}else if (is_singular('borex_service')) {
	$selected_sidebar = borex_option('service_default_sidebar', 'service-sidebar');
}else if (is_singular('borex_team')) {
	$selected_sidebar = borex_option('team_default_sidebar', 'team-sidebar');
}else if (is_singular('borex_project')) {
	$selected_sidebar = borex_option('project_default_sidebar', 'project-sidebar');
}else if (function_exists('is_shop') && is_shop()) {
	$selected_sidebar = 'shop-sidebar';
} else if (is_singular('product') || function_exists('is_product_category') && is_product_category()) {
	$selected_sidebar = borex_option('product_default_sidebar', 'shop-sidebar');
} else {
	$selected_sidebar = 'sidebar';
}

?>

<aside class="sidebar-widget-area">
	<?php
	if ( is_active_sidebar( $selected_sidebar ) ) {
		dynamic_sidebar( $selected_sidebar );
	}
	?>
</aside>
