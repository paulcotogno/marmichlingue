<?php
/*
 * Template Name: Page Inscription
 * Template Post Type : page
 *
 */

?>

<?php get_header(); ?>

<?php

if($_POST){
    wp_insert_user( array(
    'user_pass' => $_POST['password'],
    'user_login' => $_POST['login'],
    'user_email' => $_POST['email'],
    'role' => 'recipe_edit',
));
}

?>


<form class="form" action="" method="post">
    <div class="form__item">
        <label for="InputEmail" class="form-label">Email adress</label>
        <input class="input" type="text" class="form-control" id="InputEmail1" name="email">
    </div>
    <div class="form__item">
        <label for="InputLogin" class="form-label">Login</label>
        <input class="input" type="text" class="form-control" id="InputLogin1" name="login">
    </div>
    <div class="form__item">
        <label for="InputPassword" class="form-label">Password</label>
        <input class="input" type="password" class="form-control" id="InputPassword1" name="password">
    </div>
    <button type="submit"  name="wp-submit">S'inscrire</button>
    <input type="hidden" name="redirect_to" value="http://localhost:2345/">

</form>

<?php get_footer(); ?>
