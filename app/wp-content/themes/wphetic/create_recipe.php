<?php
/*
 * Template Name: Page recette
 * Template Post Type : page
 *
 */

?>
<?php get_header(); ?>

<form action="<?= admin_url('admin-post.php'); ?>" enctype="multipart/form-data" id="featured_upload" method="post">
    <div class="mb-3">
        <label for="InputRecipeTitle" class="form-label">Titre</label>
        <textarea type="text" class="form-control" id="InputRecipeTitle" name="recipe_title"></textarea>
    </div>
    <div class="mb-3">
        <label for="InputContentRecipe" class="form-label">Descrpition</label>
        <textarea type="text" class="form-control" id="InputContentRecipe" name="recipe_content"></textarea>
    </div>


    <div class="mb-3">
        <label for="InputPrice" class="form-label">Prix estimé</label>
        <input type="number" class="form-control" id="InputPrice" name="price">
    </div>
    <div class="mb-3">
        <label for="Inputdifficulty" class="form-label">Difficulty (1 : facile; 2 : intermédiaire; 3 : Avancer)</label>
        <input type="number" class="form-control" id="Inputdifficulty" name="difficulty">
    </div>
    <div class="mb-3">
        <label for="Inputtime" class="form-label">Time</label>
        <input type="number" class="form-control" id="Inputtime" name="time">
    </div>

    <div class="mb-3">
        <input type="file" name="my_image_upload" id="my_image_upload" multiple="false"/>
        <input type="hidden" name="action" value="upload_demo">
        <?php wp_nonce_field('my_image_upload', 'my_image_upload_nonce'); ?>
        <?php wp_referer_field(); ?>
    </div>
    <input id="submit_my_image_upload" name="submit_my_image_upload" type="submit" value="Enregistrer"/>

</form>

<?php get_footer(); ?>
