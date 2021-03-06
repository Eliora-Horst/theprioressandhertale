<?php

get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/pages.jpg') ?>);"></div>
  <div class="page-banner__content container">
    <h1 class="page-banner__title">All Digital Pages</h1>
<!--     <div class="page-banner__intro">
      <p><?php the_archive_description(); ?></p>
    </div> -->
  </div>  
</div>

<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="event-summary">
                <div class="event-summary__content">
                  <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                  <p><?php if(has_excerpt()){
               echo get_the_excerpt();
              }
              else{
                echo wp_trim_words(get_the_content(), 18);
              }

              ?><a href="<?php the_permalink() ?>" class="nu gray">   Read more</a></p>
                </div>
              </div>
  <?php }
  echo paginate_links();
?>
</div>

<?php get_footer();

?>