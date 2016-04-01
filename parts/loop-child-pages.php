<?php
     // if outside the loop


		// This is a parent so we'll loop through the child pages

$args = array(
		'post_type'      => 'page',
		'posts_per_page' => -1,
		'post_parent'    => $post->ID,
		'order'          => 'ASC',
		'orderby'        => 'menu_order'
 );

$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

		<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
				<div id="parent-<?php the_ID(); ?>" class="home-links">

						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<?php
							the_post_thumbnail(array(100, 100), array( 'class' => 'small-4 columns' ));

						?>
						<p class="small-8 columns">
							<?php
							the_field('project_description');
							?>
							</p>

				</div>

		<?php endwhile; ?>

<?php endif; wp_reset_query();
?>
