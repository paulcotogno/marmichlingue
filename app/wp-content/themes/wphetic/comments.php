<div id="comments" class="comments">
    <?php if (have_comments()) : ?>
    <div class="comments__meta">
        <h2 class="comments__title">
            Commentaire(s)
        </h2>
        <span class="dashicons dashicons-admin-comments"><?php echo get_comments_number(); ?> </span>
        <span class="dashicons dashicons-admin-comments"></span>
    </div>
        <ol class="comment__list">
            <?php
            // La fonction qui liste les commentaires
            wp_list_comments([
                'style' => 'ol',
                'short_ping' => true,
                'avatar_size' => 50,
            ]);
            ?>
        </ol>
    <?php
    // S'il n'y a pas de commentaires
    else :
        ?>
        <p class="comments__none">
            Il n'y a pas de commentaires pour le moment. Soyez le premier à participer !
        </p>
    <?php endif; ?>

    <?php comment_form(); // Le formulaire d'ajout de commentaire ?>
</div>
