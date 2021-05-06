<?php
	get_header();
	while(have_posts()) {
    	the_post(); ?>
   	<div class="page-banner">
	    <div class="page-banner__bg-image" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_image'); echo $pageBannerImage['sizes']['pageBanner']?>)"></div>
	    <div class="page-banner__content container">
	    	<h1 class="page-banner__title"><?php the_title() ?></h1>
	    	<div class="page-banner__intro">
	        	<p><?php the_field('page_banner_subtitle'); ?></p>
	    	</div>
	    </div>  
 	</div>

 	<div class="container page-section">
 		<div class="metabox metabox--position-up metabox--with-home-link">
      		<p><a class="metabox__blog-home-link" href="<?php echo site_url('/digital_pages');?>"><i class="fa fa-home" aria-hidden="true"></i> Digital Pages Home</a> <span class="metabox__main"><?php the_title() ?></span></p>
   		</div>

 		<div class='main-content'>
 			<?php the_content(); ?>
 		</div>
 	</div>

<?php }
	get_footer();
?>
