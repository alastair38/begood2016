<div class="latest_pubs columns">

	<?php
	if (is_front_page()) {
		$posts_per_page = 3;
	} else {
		$posts_per_page = 15;
	}
	$args = array(
		'posts_per_page' => $post_per_page,
		'post_type' => 'resources',
		'tax_query' => array(
				array(
					'taxonomy' => 'resource_cat',
					'field' => 'slug',
					'terms' => 'publications'
				)
	),
		'order' => DESC
	);

	$lastpublications = get_posts( $args );
	if($lastpublications){
		echo '<h5>Latest Publications</h5>';
	foreach ( $lastpublications as $post ) :
		setup_postdata( $post );
	// 	$eventDate = DateTime::createFromFormat('Ymd', get_field('event_date'));
	// 	$currentDate = new DateTime();
	// // this should only show an event if the event_date is either today or in the future
	// 	if ( $eventDate >= $currentDate ) : ?>

	<article>
		 <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
		 <span class="byline">
		 	Published <time
		     datetime="<?php the_time('Y-m-d') ?>"
		     title="<?php the_time('F j, Y') ?>">
		     <?=time_ago(get_the_time( 'U' ))?>
		     </time>
		 </span>
		 <?php  $content = get_the_content();
			echo wp_trim_words($content, 5);?>
	</article>
	<?php

	endforeach;
	wp_reset_postdata(); }
	else {
		echo '<h5 class="show-for-large">Latest Publications</h5><p class="show-for-large">
		Our latest publications will appear here soon
		</p>';
	} ?>

</div>
