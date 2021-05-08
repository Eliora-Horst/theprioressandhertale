<!-- For all individual pages -->
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
  	<?php
  		$theParentID = wp_get_post_parent_id(get_the_ID());
  		if($theParentID){ ?>
  			<div class="metabox metabox--position-up metabox--with-home-link">
      			<p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParentID);?>"><i class="fas fa-long-arrow-alt-left" aria-hidden="true"></i> Back to <?php echo get_the_title($theParentID); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
   			</div>
  		<?php }
  	?>
    
    <?php 
    $hasParentArray = get_pages(array(
    	'child_of' => get_the_ID()
    ));

    if($theParentID or $hasParentArray){ ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParentID); ?>"><?php echo get_the_title($theParentID);?></a></h2>
      <ul class="min-list">
        <?php
        	if($theParentID){
        		$findChildrenOf = $theParentID;
        	}
        	else{
        		$findChildrenOf = get_the_ID();
        	}
	        wp_list_pages(array(
	        	'title_li' => NULL,
	        	'child_of' => $findChildrenOf
	        ));
        ?>
      </ul>
    </div>
	<?php } ?>
    <div class="main-content">
      <?php the_content(); ?>
    </div>

  </div>
		
<?php 
	}
	get_footer();
?>
 