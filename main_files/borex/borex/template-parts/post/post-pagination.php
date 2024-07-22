<div class="row post-pagination">
	<div class="col-lg-12 text-center td-list-style">
		<?php
		the_posts_pagination(array(
			'next_text' => '<i class="fas fa-arrow-right"></i>',
			'prev_text' => '<i class="fas fa-arrow-left"></i>',
			'screen_reader_text' => ' ',
			'type'                => 'list'
		));
		?>
	</div>
</div>