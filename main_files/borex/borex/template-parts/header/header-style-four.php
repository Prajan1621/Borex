<?php
$top_info_text = borex_option('header_top_info_text');
$top_social = borex_option('header_top_socials');
?>
<div class="header-style-two">
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 top-info-column">
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
                            </ul>
						<?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 top-social-icon-column">
                <ul class="td-list-style td-list-inline">
					<?php if(is_array($top_social)) :
						foreach ($top_social as $socialSite) : ?>
                            <li class="top-social-item">
                                <a href="<?php echo esc_url($socialSite['profile_url']);?>">
                                    <i class="<?php echo esc_attr($socialSite['icon']);?>"></i>
                                </a>
                            </li>
						<?php endforeach;
					endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-menu-area" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-four-menu-wrapper">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-5 logo-column">
		                    <?php get_template_part( 'template-parts/header/header-logo' ); ?>
                        </div>

                        <div class="col-lg-10 col-sm-8 col-7">
                            <div class="header-navigation-area">
			                    <?php get_template_part( 'template-parts/header/header-menu' );?>

                                <div class="header-buttons-area text-right">
                                    <div class="header-buttons-wrapper">
                                        <ul class="td-list-style td-list-inline">
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

        </div>
    </div>
</div>
</div>