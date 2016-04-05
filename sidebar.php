<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php
	global $post;

if ( has_post_thumbnail()  &&  is_single() || is_page_template( 'page-researchers.php' ) ) {
	the_post_thumbnail('large');
}
 	$children = get_pages( array( 'child_of' => $post->ID ) );
	if ( is_page_template( 'page-projects.php' ) && $post->post_parent ) {
		 get_template_part( 'parts/loop', 'child-pages' );

	} else if ( is_page()  && count( $children ) > 0 ) {
	get_template_part( 'parts/loop', 'child-pages' );
} else if ( is_page_template( 'page-projects.php' ) ) {
		 get_template_part( 'parts/loop', 'researcher-links' );

} else if ( is_home()) {

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
} else {
	//get_template_part( 'parts/loop', 'posts' );
}

?>

</div>
