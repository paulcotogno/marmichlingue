<?php
/*
 * Template Name: Page recette
 * Template Post Type : page
 *
 */
?>

<?php

$args      = array('post_type' => 'recipe', 'posts_per_page' => -1);
$the_query = new WP_Query($args);
?>
<?php get_header(); ?>
<div id="wp_container">
    <main id="wp_main" class="row">
        <div id="wp_content">
            <div class="cards">
                <div class="cards-gallery">
                    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="card">
                            <img class="post_img" src="<?php the_post_thumbnail_url()?>" alt="">
                            <div class="card-body">
                                <p class="card-title"><?php the_title(); ?></p>
                                <div class="card-content">
                                    <a href="<?php the_permalink(); ?>">Voir plus</a>
                                    <p>Posté le <?php the_time('F jS, Y') ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else : ?>
                        <p><?php _e('Désolé, aucun article ne correspond à vos critères.'); ?></p>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <?php get_sidebar(); ?>
    </main>
</div>
<?php get_footer(); ?>
