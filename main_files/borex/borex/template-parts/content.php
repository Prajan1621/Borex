<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package borex
 */


$post_author = borex_option('single_post_author', true);
$post_date = borex_option('single_post_date', true);
$post_comment_number = borex_option('single_post_cmnt', true);
$post_cat_name = borex_option('single_post_cat', true);
$post_tag = borex_option('single_post_tag', true);
$post_share = borex_option('post_share', true);
$post_nav = borex_option('prev_next_post', true);
$author_details = borex_option('author_details', false);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( get_post_format() === 'gallery' ) {
		get_template_part( 'template-parts/post/post-format-gallery' );
	} else if ( get_post_format() === 'video' ) {
		get_template_part( 'template-parts/post/post-format-video' );
	} else if ( get_post_format() === 'audio' ) {
		get_template_part( 'template-parts/post/post-format-audio' );
	} else {
		get_template_part( 'template-parts/post/post-format-others' );
	}
	?>

	<?php if ( 'post' === get_post_type() ) : ?>
        <div class="post-meta post-details-meta">
            <ul class="td-list-style">
				<?php if ($post_author == true) :?>
                    <li><?php borex_posted_by(); ?></li>
				<?php endif; ?>

				<?php if ($post_date == true) :?>
                    <li><?php borex_posted_on(); ?></li>
				<?php endif; ?>

				<?php if ( get_comments_number() != 0 && $post_comment_number == true) : ?>
                    <li class="comment-number"><?php borex_comment_count(); ?></li>
				<?php endif; ?>

				<?php if ($post_cat_name == true) :?>
                    <li><?php borex_theme_post_categories(); ?></li>
				<?php endif; ?>
            </ul>
        </div>
	<?php endif; ?>


    <div class="entry-content">
		<?php

		the_title( '<h3 class="post-title single-blog-post-title">', '</h3>' );

		the_content( sprintf(
			wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'borex' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'borex' ),
			'after'  => '</div>',
		) );
		?>
    </div><!-- .entry-content -->

	<?php if (has_tag() && $post_tag == true) :?>
        <footer class="post-footer">
            <div class="post-tags">
				<?php borex_post_tags(); ?>
            </div>
        </footer><!-- .entry-footer -->
	<?php endif; ?>

	<?php if ( function_exists( 'themedraft_post_share' ) && $post_share == true) {
		themedraft_post_share();
	} ?>

	<?php

	$total_post = wp_count_posts('post')->publish;
	if($total_post > 1 && $post_nav == true) {
		borex_next_prev_post_link();
	}
	?>
</article><!-- #post-<?php the_ID(); ?> -->
