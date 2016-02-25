<div class="top-bar" id="top-bar-menu">

	<div class="top-bar-left float-left">
		<ul class="menu">
			<li class="site-text show-for-medium">
				<?php
					if ( is_front_page() ) {?>
				<h1 style="background:url(<?php echo get_theme_mod( 'tcx_logo_image' )?>) no-repeat; background-size: 250px";><a href="<?php bloginfo('url');?>"><?php bloginfo('description');?></a></h1>
				<?php } else {?>
					<h1 style="background:url(<?php echo get_theme_mod( 'tcx_logo_image' )?>) no-repeat; background-size: 70px";><a href="<?php bloginfo('url');?>"><?php bloginfo('description');?></a></h1>

			<?php	}?>


			</li>



			<li class="site-text show-for-small-only">
			<h1 style="background:url(<?php echo get_theme_mod( 'tcx_logo_image' )?>) no-repeat; background-size: 30px";><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>
		</li>
		</ul>
	</div>
	<div class="top-bar-right show-for-large">

		<?php joints_footer_links(); ?>
	</div>
	<div class="top-bar main-menu columns show-for-large">
		<?php joints_top_nav(); ?>
	</div>

	<?php get_template_part( 'parts/content', 'edit' ); ?>

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
