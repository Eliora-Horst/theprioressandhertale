<?php get_header();?>

	<div class="front-page">
		<div class="front-page-image">
  			<img src="<?php echo get_theme_file_uri('/images/library-image.jpg'); ?>">
 		</div>
	  <div class="front-page-title">
	  	<div class="front-page-deco">
		  	<div class="main-title">
		  		<span><?php bloginfo('name'); ?></span>
		  	</div>
		  	<div class="main-sub-title">
		  		<span><?php echo get_bloginfo('description')?></span>
		  	</div>
		</div>
	  </div>
	</div>
<?php get_footer();?>