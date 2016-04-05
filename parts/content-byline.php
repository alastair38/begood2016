<p class="byline">
	Published <time
    datetime="<?php the_time('Y-m-d') ?>"
    title="<?php the_time('F j, Y') ?>">
    <?=time_ago(get_the_time( 'U' ))?>
	</time> by <?php the_author_posts_link(); ?>
	<?php if (is_post_type_archive('news') || is_singular('news') || is_tax('content_type')){
	 the_terms( $id, 'content_type', ' in ', $sep, $after );
 } else if (is_post_type_archive('resources') || is_singular('resources') || is_tax('resource_cat')){
	the_terms( $id, 'resource_cat', ' in ', $sep, $after );} ?>

</p>
