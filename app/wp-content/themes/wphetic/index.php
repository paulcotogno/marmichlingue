<?php

$args      = array('post_type' => 'recipe', 'posts_per_page' => 3);
$the_query = new WP_Query($args);
?>
<?php get_header(); ?>
<div id="wp_container">
    <main id="wp_main" class="row">
        <div id="wp_content">
            <div class="row">
                <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div>
                        <a href="<?php the_permalink(); ?>">Voir plus</a>
                        <h1><?php the_title(); ?></h1>
                        <h4>Posté sur <?php the_time('F jS, Y') ?></h4>
                        <p><?php the_content(__('(more...)')); ?></p>
                    </div>
                <?php endwhile; else : ?>
                    <p><?php _e('Désolé, aucun article ne correspond à vos critères.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </main>
</div>
<?php get_footer(); ?>
