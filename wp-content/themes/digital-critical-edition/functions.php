<?php
	function DH_files(){
		wp_enqueue_style('main_font_choice','//fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700');
		wp_enqueue_style('secondary_font_choice','//fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700');
		wp_enqueue_style('font_awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
		if(strstr($_SERVER['SERVER_NAME'],'theprioressandhertale.local')){
			wp_enqueue_script('main-JS', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
		}
		else{
			wp_enqueue_script('vendors-JS', get_template_directory_uri('/bundled-assets/venders.js'), NULL, '1.0', true);
			wp_enqueue_script('main-JS', get_template_directory_uri('/bundled-assets/scripts.9c9cc02730db8dc70ee4.js'), NULL, '1.0', true);
			wp_enqueue_style('main-CSS', get_template_directory_uri('/bundled-assets/styles.9c9cc02730db8dc70ee4.css'));
			// wp_enqueue_script('vendors-JS', get_theme_file_uri('/bundled-assets/venders.js'), NULL, '1.0', true);
			// wp_enqueue_script('main-JS', get_theme_file_uri('/bundled-assets/scripts.9c9cc02730db8dc70ee4.js'), NULL, '1.0', true);
			// wp_enqueue_style('main-CSS', get_theme_file_uri('/bundled-assets/styles.9c9cc02730db8dc70ee4.css'));
		}
	}
	add_action('wp_enqueue_scripts', 'DH_files');

	function DH_features(){
		add_theme_support('title-tag');
		register_nav_menu('header_menu_location','Header Menu Location');
		register_nav_menu('footer_menu_location1','Explore Menu Location');
		register_nav_menu('footer_menu_location2','About Menu Location');
		add_image_size('pageBanner', 1500, 350, true);
	}

	add_action('after_setup_theme','DH_features');

	add_filter('ai1wm_exclude_content_from_export', 'ignoreFiles');

	function ignoreFiles($exclude_filters){
		$exclude_filters[]='themes/digital-critical-edition/node_modules';
		return $exclude_filters;
	}

	function DH_custom_logo_setup() {
    $defaults = array(
        'height'               => 200,
        'width'                => 200,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}

