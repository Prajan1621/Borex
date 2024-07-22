<?php
if(is_archive()){
	$post_item_layout = borex_option('archive_layout', 'right-sidebar');
}else if(is_search()){
	$post_item_layout = borex_option('search_layout', 'right-sidebar');
}else{
	$post_item_layout = borex_option('blog_layout', 'right-sidebar');
}

if($post_item_layout == 'grid-ls' || $post_item_layout == 'grid-rs' || $post_item_layout == 'grid'){
	$word_count = 20;
}else{
	$word_count = 50;
}

$show_author_name = borex_option('post_author', true);
$show_post_date = borex_option('post_date', true);
$show_comment_number = borex_option('cmnt_number', true);
$show_category = borex_option('show_category', true);
$show_read_more = borex_option('read_more_button', true);
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-post-wrapper">
		<?php
            if(get_post_format() === 'gallery'){
	            get_template_part( 'template-parts/post/post-format-gallery');
            }else if(get_post_format() === 'video'){
	            get_template_part( 'template-parts/post/post-format-video');
            }else if(get_post_format() === 'audio'){
	            get_template_part( 'template-parts/post/post-format-audio');
            }else{
	            get_template_part( 'template-parts/post/post-format-others');
            }
        ?>

		<div class="post-content-wrapper">

			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="post-meta td-list-style td-list-inline">
					<ul>
                        <?php if($show_author_name == true):?>
						<li><?php borex_posted_by(); ?></li>
                        <?php endif; ?>

						<?php if($show_post_date == true):?>
						<li><?php borex_posted_on(); ?></li>
						<?php endif; ?>

						<?php if($post_item_layout == 'left-sidebar' || $post_item_layout == 'right-sidebar' ) : ?>
                            <?php if ( get_comments_number() != 0 && $show_comment_number == true ) : ?>
                                <li class="comment-number"><?php borex_comment_count(); ?></li>
                            <?php endif; ?>

						    <?php if($show_category == true):?>
                            <li><?php borex_post_first_category(); ?></li>
                            <?php endif;?>
                        <?php endif;?>
					</ul>
				</div>
			<?php endif; ?>

			<?php the_title( '<h3 class="post-title"><a href="' . esc_url( get_the_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

			<div class="post-excerpt">
				<p><?php echo borex_words_limit( get_the_excerpt(), $word_count ); ?><?php if ( ! empty( get_the_content() ) ) {
						echo ' [...]';
					} ?></p>
			</div>

			<?php if($show_read_more == true):?>
			<div class="post-read-more">
                <?php if($post_item_layout == 'left-sidebar' || $post_item_layout == 'right-sidebar') : ?>
                    <a class="td-button" href="<?php echo esc_url( get_the_permalink() ) ?>">
		                <?php echo esc_html__( 'Read More', 'borex' ); ?><i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                <?php else : ?>
                    <a class="td-text-button" href="<?php echo esc_url( get_the_permalink() ) ?>">
		                <?php echo esc_html__( 'Read More', 'borex' ); ?><i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                <?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</article>