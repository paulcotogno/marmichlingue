<?php

$args      = array('post_type' => 'recipe', 'posts_per_page' => 3);
$the_query = new WP_Query($args);
?>
<?php get_header(); ?>
<div id="wp_container">
    <main id="wp_main" class="row">
        <div id="wp_content">
            <div class="cards">
                <p class="cards-title">Les 3 dernières recettes</p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col">
                        <div class="card">
                            <img src="https://picsum.photos/200" class="card-img-top" alt="https://picsum.photos/200">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <div class="card-content">
                                    <a href="<?php the_permalink(); ?>">Voir plus</a>
                                    <p>Posté le <?php the_time('F jS, Y') ?></p>
                                </div>
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