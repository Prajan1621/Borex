<?php
$header_search = borex_option('enable_header_search', false);
?>

<div class="main-menu-area" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-sm-3 col-6 logo-column">
				<?php get_template_part( 'template-parts/header/header-logo' ); ?>
            </div>

            <div class="col-lg-10 col-sm-9 col-6 text-right">
                <div class="d-flex align-items-center justify-content-end header-nav-and-buttons">
                    <div class="header-navigation-area">
						<?php get_template_part( 'template-parts/header/header-menu' );?>
                    </div>

                    <div class="header-buttons-area text-right">
                        <div class="header-buttons-wrapper">
                            <ul class="td-list-style td-list-inline d-flex justify-content-end align-items-center">
	                            <?php if($header_search == true ) : ?>
                                    <li class="header-search"><i class="fas fa-search"></i></li>
	                            <?php endif; ?>
                                <li class="mobile-menu-trigger"><span></span><span></span><span></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>