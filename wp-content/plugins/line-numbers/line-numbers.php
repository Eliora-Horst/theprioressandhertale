<?php
/**
 * Plugin Name: Line Number Generator
 * Author: E Horst 
 * Version: 2.0
**/

function loadMyBlockFiles() {
  wp_enqueue_script(
    'my-super-unique-handle',
    plugin_dir_url(__FILE__) . 'my-block.js',
    array('wp-blocks', 'wp-i18n', 'wp-editor'),
    true
  );
}
add_action('enqueue_block_editor_assets', 'loadMyBlockFiles');
?>