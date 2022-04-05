<?php
add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type){}

wp_login_form( ['form_id' => 'wphetic_login_form'] )

?>
