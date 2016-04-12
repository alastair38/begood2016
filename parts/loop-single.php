<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<?php edit_post_link('Edit Post', '<span class="edit_link waves-effect waves-light">', '</span>'); ?>
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
		<?php if(is_singular('post')) {
			the_post_thumbnail('full');
		}
		the_content(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>

	</footer> <!-- end article footer -->
		<?php get_template_part( 'parts/content', 'share' ); ?>
	<?php
	if (is_singular( 'post' )) {
			comments_template();
	}
	//only show comments template on single posts NOT custom post types
	 ?>

</article> <!-- end article -->
