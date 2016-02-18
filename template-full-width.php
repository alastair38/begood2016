<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>

	<div id="content" tabindex="0">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'parts/loop', 'page-home' ); ?>


		<div id="inner-content" class="row">



		    <main id="main" class="large-12 medium-12 columns" role="main">

					<section class="entry-content large-12 columns" itemprop="articleBody">
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
						<img class="large-4 columns" src="<?php echo get_template_directory_uri() . '/assets/images/University_of_Oxford.png';?>">

						<img class="large-4 columns" src="<?php echo get_template_directory_uri() . '/assets/images/wellcome_trust.jpg';?>">
				</section> <!-- end article section -->

			<?php endwhile; endif; ?>


				<aside class="large-6 medium-6 columns" role="complementary">

				<?php get_template_part( 'parts/loop', 'posts' );

				?>
				</aside>

				<aside class="large-6 medium-6 columns" role="complementary">

				<?php get_template_part( 'parts/loop', 'publications' ); ?>
				</aside>

			</main> <!-- end #main -->


		<aside class="large-12 medium-12 columns" role="complementary">
		<?php get_template_part( 'parts/loop', 'main-pages' ); ?>

	</aside>


	<div class="twitter_wrap large-12 columns">

									<?php 	if ( is_front_page() ) {
										get_template_part( 'parts/content', 'twitter' );
									}?>

		</div>



		</div> <!-- end #inner-content -->



	</div> <!-- end #content -->

<?php get_footer(); ?>
