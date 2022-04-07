<?php
/*
 * Template Name: Page nouvelle recette
 * Template Post Type : page
 *
 */

$categories = get_terms( [
    'taxonomy'   => 'category',
    'hide_empty' => false
] );

?>
<?php get_header(); ?>

    <form class="form" action="<?= admin_url('admin-post.php'); ?>" enctype="multipart/form-data" id="featured_upload" method="post">
        <div class="form__item">
            <label for="InputRecipeTitle" class="form-label">Titre</label>
            <textarea type="text" class="input form-control" id="InputRecipeTitle" name="recipe_title"></textarea>
        </div>
        <div class="form__item">
            <label for="InputContentRecipe" class="form-label">Descrpition</label>
            <textarea type="text" class="input form-control" id="InputContentRecipe" name="recipe_content"></textarea>
        </div>


        <div class="form__item">
            <label for="InputPrice" class="form-label">Prix estimé</label>
            <input type="number" class="input form-control" id="InputPrice" name="price">
        </div>
        <div class="form__item">
            <label for="Inputdifficulty" class="form-label">Difficulty (1 : facile; 2 : intermédiaire; 3 : Avancer)</label>
            <input type="number" class="input form-control" id="Inputdifficulty" name="difficulty">
        </div>
        <div class="form__item">
            <label for="Inputtime" class="form-label">Time</label>
            <input type="number" class="input form-control" id="Inputtime" name="time">
        </div>

        <div class="form__item">
            <input type="file" class="input" name="my_image_upload" id="my_image_upload" multiple="false"/>
            <input type="hidden" class="input" name="action" value="upload_demo">
            <?php wp_nonce_field('my_image_upload', 'my_image_upload_nonce'); ?>
            <?php wp_referer_field(); ?>
        </div>

        <div>
            <select name="recipe_category" id="recipe_category" class="input" required>
                <?php foreach ( $categories as $category ): ?>
                    <option value="<?= $category->term_id?>"><?=$category->name?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input class="postform" id="submit_my_image_upload" name="submit_my_image_upload" type="submit" value="Enregistrer"/>

    </form>

<?php get_footer(); ?>