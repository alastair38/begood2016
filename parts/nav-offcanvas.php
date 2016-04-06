<div data-sticky-container>
<div class="top-bar sticky" data-sticky data-options="marginTop:0;" data-sticky-on="small" style="width:100%"  id="top-bar-menu">

	<div class="top-bar-left float-left">
		<ul class="menu">
			<li class="site-text">
				<?php
					if ( is_page_template( 'page-projects.php' ) && !is_page( 'other-projects-of-interest' ) ) {?>
				<a href="<?php bloginfo('url');?>"><h1 style="background:url(<?php the_post_thumbnail_url( 'medium' )?>) no-repeat; background-size: contain";><span class="screen-reader-text"><?php bloginfo('name');?></span></h1></a>
				<?php } else {?>
					<a href="<?php bloginfo('url');?>"><h1 style="background:url(<?php echo get_theme_mod( 'tcx_logo_image' )?>) no-repeat; background-size: contain";><span class="screen-reader-text"><?php bloginfo('name');?></span></h1></a>

			<?php	}?>


			</li>


		</ul>
	</div>
	<div class="top-bar-right show-for-large">
		<img class="" src="<?php echo get_template_directory_uri() . '/assets/images/wellcome_trust.jpg';?>">
		<img class="" src="<?php echo get_template_directory_uri() . '/assets/images/University_of_Oxford.png';?>">

		<?php //joints_footer_links(); ?>
	</div>
	<div class="top-bar main-menu columns show-for-large">
		<?php joints_top_nav(); ?>
	</div>

	<?php //get_template_part( 'parts/content', 'edit' ); ?>

	<!-- <span class="top-bar-right large-2 large-offset-10 funders show-for-large">

		<a href="https://twitter.com/<?php echo get_theme_mod( 'tcx_twitter_handle' );?>" class="twitter-follow-button" data-show-count="true" data-size="">Follow @DementiaMap</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</span> -->




	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li class="menu-button"><a data-toggle="off-canvas">MENU</a></li>
		</ul>
	</div>
	<div class="top-bar-right float-right show-for-medium-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li class="menu-button"><a data-toggle="off-canvas">MENU</a></li>
		</ul>
	</div>
</div>
</div>
