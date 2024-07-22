<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Borex
 */

get_header();

if ( get_post_meta( $post->ID, 'borex_common_meta', true ) ) {
	$common_meta = get_post_meta( $post->ID, 'borex_common_meta', true );
} else {
	$common_meta = array();
}

if ( array_key_exists( 'layout_meta', $common_meta ) && $common_meta['layout_meta'] != 'default' ) {
	$post_layout = $common_meta['layout_meta'];
} else {
	$post_layout = borex_option( 'single_post_default_layout', 'right-sidebar' );
}

if ( array_key_exists( 'sidebar_meta', $common_meta ) && $common_meta['sidebar_meta'] != '0' ) {
	$selected_sidebar = $common_meta['sidebar_meta'];
} else {
	$selected_sidebar = borex_option( 'single_post_default_sidebar', 'sidebar' );
}

if ( $post_layout == 'left-sidebar' && is_active_sidebar( $selected_sidebar ) || $post_layout == 'right-sidebar' && is_active_sidebar( $selected_sidebar ) ) {
	$post_column_class = 'col-lg-8';
} else {
	$post_column_class = 'col-lg-12';
}

if ( array_key_exists( 'enable_banner', $common_meta ) ) {
	$post_banner = $common_meta['enable_banner'];
} else {
	$post_banner = true;
}

if ( array_key_exists( 'custom_title', $common_meta ) ) {
	$custom_title = $common_meta['custom_title'];
} else {
	$custom_title = '';
}

if ( array_key_exists( 'banner_text_align_meta', $common_meta ) && $common_meta['banner_text_align_meta'] != 'default' ) {
	$banner_text_align = $common_meta['banner_text_align_meta'];
} else {
	$banner_text_align = borex_option( 'banner_default_text_align', 'left' );
}
?>

    <?php if($post_banner == true) : ?>
        <div class="banner-area post-banner">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12 my-auto">
                        <div class="banner-content text-<?php echo esc_attr( $banner_text_align ); ?>">
                            <h2 class="banner-title">
	                            <?php
	                            if ( ! empty( $custom_title ) ) {
		                            echo esc_html( $custom_title );
	                            } else {
		                            $default_title = borex_option('show_default_title', false);
		                            if($default_title == true){
			                            the_title();
		                            }else{
			                            $post_banner_title = borex_option('single_post_banner_title');
			                            echo esc_html( $post_banner_title );
		                            }
	                            }
	                            ?>
                            </h2>

	                        <?php
	                        $post_breadcrumb = borex_option('single_post_breadcrumb', false);
	                        if ( function_exists( 'bcn_display' ) && $post_breadcrumb == true) :?>
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

    <div id="primary" class="content-area layout-<?php echo esc_attr( $post_layout ); ?>">

        <div class="container post-details-wrapper">
            <div class="row">
				<?php if ( $post_layout == 'left-sidebar' && is_active_sidebar( $selected_sidebar ) ) : ?>
                    <div class="col-lg-4 order-lg-0 order-last">
						<?php get_sidebar(); ?>
                    </div>
				<?php endif ?>

                <div class="<?php echo esc_attr( $post_column_class ); ?>">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
                </div>

				<?php if ( $post_layout == 'right-sidebar' && is_active_sidebar( $selected_sidebar ) ) : ?>
                    <div class="col-lg-4 order-lg-0 order-last">
						<?php get_sidebar(); ?>
                    </div>
				<?php endif ?>
            </div>
        </div>
    </div><!-- #primary -->

<?php
get_footer();
