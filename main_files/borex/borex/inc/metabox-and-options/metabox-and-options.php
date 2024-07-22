<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_filter( 'csf_welcome_page', '__return_false' );
/*
 * Theme options
 */
require_once 'theme-options/theme-options.php';

/*
 * Post format metabox
 */
require_once 'metabox/post-format-metaboxes.php';

/*
 * Team metabox
 */
//require_once 'metabox/team-metaboxes.php';

/*
 * Common metabox
 */
require_once 'metabox/common-metaboxes.php';


/*
 * Product metabox
 */

if(class_exists('WooCommerce')){
	require_once 'metabox/product-metabox.php';
}