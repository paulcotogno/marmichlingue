<?php
add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
add_theme_support('title-page');
function prefix_disable_gutenberg($current_status, $post_type){}

function add_styles_and_scripts()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/src/style/main.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'add_styles_and_scripts');

?>
