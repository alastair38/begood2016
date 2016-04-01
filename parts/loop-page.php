<article id="post-<?php the_ID(); ?>" class="" role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-headercolumns">
		<?php edit_post_link('Edit Page', '<span class="edit_link wave-effect waves-light">', '</span>'); ?>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php $description = get_field('project_description');
		if($description){
			echo '<h4>' . $description . '</h4>';
		}?>
		<?php
		if ( is_front_page() ) {?>
		<span class="front label"><?php bloginfo('description');?></span>
	<?php } else {}?>
	</header> <!-- end article header -->


    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">

	</footer> <!-- end article footer -->

</article> <!-- end article -->
