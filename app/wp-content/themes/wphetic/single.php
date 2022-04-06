<?php
/*
* Template Name: Login
* Template Post Type : page
*/
?>

<?php if(have_posts());
 while (have_posts()): the_post();
?>

<div class="post_container">
    <h2 class="post_title"><?= the_title() ?></h2>
    <div class="post_info">
        <span class="post_grade"></span>
        <span class="post_date"><?php the_time('F jS, Y') ?></span>
    </div>
    <img class="post_img" src="<?php the_post_thumbnail_url()?>" alt="">
    <div class="post_content">
        <span class="post_price_category"><?php the_category() ?></span>
        <p class="post_description"><?php the_content(__('(more...)')); ?></p>
        <div class="post_comments">
            <span class="post_count_comments"><?= get_comments_number() ?></span>
            <?php comments_template(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
