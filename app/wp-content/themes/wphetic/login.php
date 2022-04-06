<?php
/*
 * Template Name: Page connexion
 * Template Post Type : page
 *
 */

?>

<?php get_header(); ?>

<form action="<?= home_url('wp-login.php'); ?>" method="post">
    <div class="mb-3">
        <label for="InputEmail" class="form-label">Email adress</label>
        <input type="text" class="input form-control" id="InputEmail" aria-describedby="emailHelp" name="log">
        <div id="emailHelp" class="form-text">Yes siiir</div>
    </div>
    <div class="form__item">
        <label for="InputPassword" class="form-label">Password</label>
        <input type="password" class="input form-control" id="InputPassword" name="pwd">
    </div>
    <div class="form__item">
        <input type="checkbox" class="form-check-input" id="Check" name="rememberme">
        <label class="form-check-label" for="Check1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary" name="wp-submit">Se connecter</button>
    <input type="hidden" name="redirect_to" value="http://localhost:2345/">
</form>
<?php get_footer(); ?>
