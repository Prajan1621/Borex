<?php
$top_info_text = borex_option('header_top_info_text');
$top_social = borex_option('header_top_socials');
$enable_header_cart = borex_option('enable_header_cart', true);

if($enable_header_cart == true){
	$cart_visibility = 'show-cart-icon';
}else{
	$cart_visibility = 'hide-cart-icon';
}
$header_search = borex_option('enable_header_search', false);
?>

<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 logo-column">
				<?php get_template_part( 'template-parts/header/header-logo' ); ?>
            </div>

            <div class="col-lg-9 top-info-column">
                <div class="td-table">
                    <div class="td-table-cell">
						<?php if(is_array($top_info_text)) : ?>
                            <ul class="td-list-style td-list-inline">
								<?php foreach ($top_info_text as $top_info) : ?>
                                    <li class="top-info-item">
                                        <i class="<?php echo esc_attr($top_info['info_icon']);?>"></i>
										<?php echo wp_kses_post($top_info['info_text']);?>
                                    </li>
								<?php endforeach;?>

								<?php get_template_part( 'template-parts/header/header-cta-button');?>
                            </ul>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-menu-area" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-right">

                <div class="header-navigation-area d-flex align-items-center justify-content-end ">
					<?php get_template_part( 'template-parts/header/header-menu' );?>

                    <div class="header-buttons-area text-right <?php echo esc_attr($cart_visibility);?>">
                        <div class="header-buttons-wrapper">
                            <ul class="td-list-style td-list-inline d-flex justify-content-end align-items-center">
	                            <?php if($header_search == true ) : ?>
                                    <li class="header-search"><i class="fas fa-search"></i></li>
	                            <?php endif; ?>
								<?php if(class_exists( 'WooCommerce' ) && $enable_header_cart == true): ?>
                                    <li class="header-mini-cart">
                                        <a class="td-header-cart-url" href="<?php echo esc_url( wc_get_cart_url() );?>">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="cart-product-count"><?php echo WC()->cart->get_cart_contents_count();?></span>
                                        </a>
                                        <div class="td-header-cart-products">
											<?php the_widget( 'WC_Widget_Cart' ); ?>
                                        </div>
                                    </li>
								<?php endif; ?>

								<?php get_template_part( 'template-parts/header/header-cta-button');?>

                                <li class="mobile-menu-trigger"><span></span><span></span><span></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>