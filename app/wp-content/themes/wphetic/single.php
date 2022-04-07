<?php
/*
* Template Name: Login
* Template Post Type : page
*/
?>
<?php

$args = ['post_type' => 'recipe', 'posts_per_page' => 3];
$the_query = new WP_Query($args);
?>
<?php get_header(); ?>

<?php if(have_posts());
 while (have_posts()): the_post();
?>

<div class="post_container">
    <h2 class="post_title"><?= the_title() ?></h2>
    <div class="post_info">
        <span class="post_date">Posté le <?php wphetic_date_french('l d F Y', get_post_time('U', true), 1) ?></span>
        <span class="post_price_category"><?php the_category() ?></span>

    </div>
    <img class="post_img" src="<?php the_post_thumbnail_url()?>" alt="">
    <div class="post_content">

        <span>Difficulté :  <?php
            $d  = get_post_meta(get_the_ID(), 'wphetic_difficulty', true);
           switch ($d) {
               case 1:
                   echo "Facile";
                   break;
               case 2:
                   echo "Moyen";
                   break;
               case 3:
                   echo "Difficile";
                   break;
           }
            ?></span>
        <span>Prix estimé : <?= get_post_meta(get_the_ID(), 'wphetic_price', true);?> €</span>
        <span>Temps de préparation : <?= get_post_meta(get_the_ID(), 'wphetic_time', true);?> min.</span>
        <p class="post_description"><?php the_content(); ?></p>
        <div class="post_comments">
<!--            <span class="post_count_comments">--><?//= get_comments_number() ?><!--</span>-->
            <?php comments_template(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
