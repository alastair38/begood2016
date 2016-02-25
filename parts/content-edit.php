<?php if ( is_user_logged_in())
{?>
<div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large red">
		<i class="fa fa-pencil"></i>
	</a>
	<ul>
      <?php echo '<li class="red waves-effect waves-light"><a href="' . admin_url() . 'post-new.php"><i class="fa fa-plus"></i> Add Blog Post</a></li>
			<li class="red waves-effect waves-light"><a href="' . admin_url() . 'post-new.php?post_type=resource"><i class="fa fa-plus"></i> Add Resource</a></li>
			<li class="red waves-effect waves-light"><a href="' . admin_url() . 'post-new.php?post_type=news"><i class="fa fa-plus"></i> Add News</a></li>';
			?>
  </ul>
</div>
<?php }?>
