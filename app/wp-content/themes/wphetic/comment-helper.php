<?php
if (!function_exists('better_comments')):
    function better_comments($comment, $args, $depth)
    {
        ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div class="comment">
            <div class="img-thumbnail d-none d-sm-block">
                <?= get_avatar($comment, $size = '50'); ?>
            </div>
            <div class="comment-block">
                <div class="comment-arrow"></div>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php esc_html_e('Your comment is awaiting moderation.', '5balloons_theme') ?></em><br/>
                <?php endif; ?>
                <span class="comment-by">
                    <strong><?php echo get_comment_author() ?></strong>
                    <span class="float-right">
                        <span> <a href="#"><i class="fa fa-reply"></i> <?php comment_reply_link(array_merge($args, ['depth' => $depth, 'max_depth' => $args['max_depth']])) ?></a></span>
                    </span>
                </span>
                <p> <?php comment_text() ?></p>
                <span class="date float-right"><?= wphetic_date_french('l d F Y', get_comment_time('U', true), 1);?></span>
            </div>
        </div>

        <?php
    }
endif;
