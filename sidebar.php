<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php
	global $post;

if ( has_post_thumbnail()  &&  is_single() || is_page_template( 'page-researchers.php' ) || is_page('contact') && has_post_thumbnail() ) {
	the_post_thumbnail('large');
}
 	$children = get_pages( array( 'child_of' => $post->ID ) );
	if ( is_page_template( 'page-projects.php' ) && $post->post_parent ) {
		 get_template_part( 'parts/loop', 'child-pages' );

	} else if ( is_page()  && count( $children ) > 0 ) {
	get_template_part( 'parts/loop', 'child-pages' );

} else if ( is_page_template( 'page-projects.php' ) ) {

	$post_objects = get_field('project_staff');

	if( $post_objects ) {

	    		foreach( $post_objects as $post_object): ?>
	        	<div id="parent-<?php the_ID(); ?>" class="researcher-links">
	            <h3><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a></h3>
							<?php
								echo get_the_post_thumbnail($post_object->ID, array(100, 100), array( 'class' => 'large-4 show-for-large columns' ));

							?>
							<p class="large-8 columns">
								<?php
								the_field('project_description', $post_object->ID);
								?>
							</p>
	        </div>
	    <?php endforeach;
		} else {
				get_template_part( 'parts/loop', 'posts' );
			}

} else if ( is_home() || is_tag()) {

	$tags = get_tags();
$html = '<aside class="columns" role="complementary"><div class="latest_posts"><h5>Blog Categories</h5>';
foreach ( $tags as $tag ) {
$tag_link = get_tag_link( $tag->term_id );

$html .= "<h6><a href='{$tag_link}' title='View all content assigned to {$tag->name}' class='{$tag->slug}'>";
$html .= "{$tag->name}</a> <span>[{$tag->count}]</span></h6>";
}
$html .= '</div></aside>';
echo $html;

} else if ( is_post_type_archive('news') || is_singular('news') || is_tax('content_type') ) {

echo '<aside class="columns" role="complementary">';

	$terms = get_terms('content_type');
	$html = '<div class="latest_posts"><h5>Filter News/Events</h5>';
	foreach ( $terms as $term ) {
	$tag_link = get_tag_link( $term->term_id );

	$html .= "<h6><a href='{$tag_link}' title='View all content assigned to {$term->name}' class='{$term->slug}'>";
	$html .= "{$term->name}</a> <span>[{$term->count}]</span></h6>";
	}
	$html .= '</div>';
	echo $html;
	echo '</aside>';


}  else if ( is_post_type_archive('resources') || is_singular('resources') || is_tax('resource_cat')) {

	echo '<aside class="columns" role="complementary">';
	$terms = get_terms('resource_cat');
	$html = '<div class="latest_posts"><h5>Filter Resources</h5>';
	foreach ( $terms as $term ) {
	$tag_link = get_tag_link( $term->term_id );

	$html .= "<h6><a href='{$tag_link}' title='View all content assigned to {$term->name}' class='{$term->slug}'>";
	$html .= "{$term->name}</a> <span>[{$term->count}]</span></h6>";
	}
	$html .= '</div>';
	echo $html;
	echo '</aside>';
} else if (is_author()) {
	get_template_part( 'parts/loop', 'researcher-links' );
} else {
	// get_template_part( 'parts/loop', 'posts' );
}

?>

</div>
