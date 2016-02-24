<p class="byline">
	Published <time
    datetime="<?php the_time('Y-m-d') ?>"
    title="<?php the_time('F j, Y') ?>">
    <?=time_ago(get_the_time( 'U' ))?>
	</time> by <?php the_author_posts_link(); ?>
	<?php edit_post_link('EDIT', '<span class="edit_link">', '</span>'); ?>
</p>
