<?php
function digital_edition_display(){
		register_post_type('digital_page', array(
			'show_in_rest' => true,
			'supports' => array(
				'title',
				'editor',
				'excerpt'
			),
			'rewrite' => array('slug' => 'digital_pages'),
			'public' => true,
			'menu_icon' => 'dashicons-media-text',
			'labels' => array(
				'name' => "Digital Pages",
				'add_new_item' => 'Add New Digital Page',
				'edit_item' => 'Edit Digital Page',
				'all_items' => 'All Digital Pages',
				'singular_name' => 'Digital Page'
			),
			'has_archive' => true,
		));
	}
	add_action('init', 'digital_edition_display');
?>