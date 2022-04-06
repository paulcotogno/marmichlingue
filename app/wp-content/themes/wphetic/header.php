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
    <section class="ftco-section">
		<div class="container-fluid px-md-5">
			<div class="row justify-content-between pt-3">
				<div class="col-md-12 order-md-last">
					<div class="row">
						<div class="col-md-6">
							<a class="navbar-brand brand-name font-weight-bold" href="#">Marmichlingue</a>
						</div>
						<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
							<form action="#" class="searchform order-lg-last">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control pl-3" placeholder="Tarte aux framboises...">
                                    <button type="submit" placeholder="" class="form-control search">Rechercher</button>
                                </div>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item"><a href="#" class="nav-link">Accueil</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Recettes</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Mon compte</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</section>
</header>
