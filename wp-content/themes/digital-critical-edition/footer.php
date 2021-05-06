	<footer class="site-footer">
	      <div class="footer-container">
	        <div class="group">
	          <div class="footer-col-1">
	            <h1 class="footer-title">
	              <a href="<?php echo site_url()?>"><?php bloginfo('name'); ?></a>
	            </h1>
	          </div>

	          <div class="footer-inner-cols">
	            <div class="footer-col-inner">
	              <h3 class="footer-headline">Explore</h3>
	              <nav class="footer-nav">
	                <?php wp_nav_menu(array('theme_location' => 'footer_menu_location1'));?>
	              </nav>
	            </div>

	            <div class="footer-col-inner">
	              <h3 class="footer-headline">About</h3>
	              <nav class="footer-nav">
	                <?php wp_nav_menu(array('theme_location' => 'footer_menu_location2'));?>
	              </nav>
	            </div>
	          </div>
	        </div>
	      </div>
	    </footer>
	<?php wp_footer(); ?>
	</body>
</html>