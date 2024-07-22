<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Borex
 */

get_header();

$error_banner      = borex_option('error_banner', true);
$error_banner_title = borex_option('error_page_title');
$banner_text_align = borex_option('banner_default_text_align', 'left');
$not_found_text     = borex_option('not_found_text');
$go_back_home       = borex_option('go_back_home', true);

?>

    <?php if($error_banner == true) : ?>
        <div class="banner-area error-page-banner">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12 my-auto">
                        <div class="banner-content text-<?php echo esc_attr( $banner_text_align ); ?>">
                            <h2 class="banner-title">
	                            <?php echo esc_html($error_banner_title); ?>
                            </h2>

                            <?php if ( function_exists( 'bcn_display' ) ) :?>
                                <div class="breadcrumb-container">
                                    <?php bcn_display();?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <div id="primary" class="content-area">
        <div class="container not-found-content">
            <div class="row">
                <div class="col-lg-6 order-lg-0 order-last td-vertical-center">
                    <div class="not-found-text-wrapper">
						<?php
						echo wp_kses( $not_found_text, array(
							'a'      => array(
								'href'   => array(),
								'target' => array()
							),
							'strong' => array(),
							'small'  => array(),
							'span'   => array(),
							'p'   => array(),
							'h1'   => array(),
							'h2'   => array(),
							'h3'   => array(),
							'h4'   => array(),
							'h5'   => array(),
							'h6'   => array(),
						) );
						?>

						<?php if ($go_back_home == true) : ?>
                            <div class="error-page-button">
                                <a class="td-button" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Go Back Home', 'borex') ?><i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
						<?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-6 td-vertical-center">
                    <div class="text-404">
                        <h2><?php echo esc_html__('404', 'borex') ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #primary -->

<?php
get_footer();