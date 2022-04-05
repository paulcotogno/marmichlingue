<?php
/*
 * Template Name: recette
 * Template Post Type : posts
 *
 */

?>

<?php get_header(); ?>

<form action="<?= admin_url('admin-post.php'); ?>" enctype="multipart/form-data" id="featured_upload" method="post">

    <input type="file" name="my_image_upload" id="my_image_upload" multiple="false" />
    <input type="hidden" name="action" value="upload_demo">
    <?php wp_nonce_field('my_image_upload', 'my_image_upload_nonce'); ?>
    <?php wp_referer_field(); ?>

    <input id="submit_my_image_upload" name="submit_my_image_upload" type="submit" value="Upload" />

</form>

<?php get_footer(); ?>
