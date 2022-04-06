<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>

        <?php add_styles_and_scripts("main") ?>
        <?php add_styles_and_scripts("bootstrap") ?>
        <?php add_styles_and_scripts("bootstrap-js") ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <header id="wp_header" class="header">
            <div class="wp_banner">
                <img src="<?= get_template_directory_uri() ?>/assets/img/magik.jpg" alt="hero-banner">
                <h1>Cookringe Mama</h1>
            </div>
        </header>
