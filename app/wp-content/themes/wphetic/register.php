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


<form action="" method="post">

    <div class="mb-3">
        <label for="InputEmail" class="form-label">Email adress</label>
        <input type="text" class="form-control" id="InputEmail1" name="email">
    </div>
    <div class="mb-3">
        <label for="InputLogin" class="form-label">Login</label>
        <input type="text" class="form-control" id="InputLogin1" name="login">
    </div>
    <div class="mb-3">
        <label for="InputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="InputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="wp-submit">Button</button>
    <input type="hidden" name="redirect_to" value="http://localhost:2345/">

</form>
<?php get_footer(); ?>
