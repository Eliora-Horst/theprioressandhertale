<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class();?>>
	<header class="top-header">
    <div class="container">
      <h1 class="site-title"><a href="<?php echo site_url()?>"><?php bloginfo('name'); ?></a></h1>
<!--       <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
<!--       <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i> -->
      <div class="header-menu">
        <nav class="main-navigation">
          <?php wp_nav_menu(array(
            'theme_location' => 'header_menu_location'
          )); ?>
        </nav>
<!--         <div class="site-header__util">
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div> -->
      </div>
    </div>
  </header>