<html lang="en">
<head>
    <title>Indestructible uncanny</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head() ?>

    <?php add_styles_and_scripts("main") ?>
    <?php add_styles_and_scripts("bootstrap") ?>
    <?php add_styles_and_scripts("bootstrap-js") ?>

</head>
<body>
<header id="wp_header" class="header">
    <!-- <h1>HEADER</h1> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="" class="logo">
            </a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recettes">Recettes</a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="/compte">Mon compte</a>-->
<!--                    </li>-->
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>
</header>
