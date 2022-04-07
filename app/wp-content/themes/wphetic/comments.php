<div id="comments" class="comments">
    <?php if (have_comments()) : ?>
        <div class="comments__meta">
            <h2 class="comments__title">
                <?= get_comments_number() == 1 ? 'Commentaire('. get_comments_number().')' : 'Commentaires('. get_comments_number().')' ?>
            </h2>
        </div>
        <ul class="comment__list">
            <?php
            // La fonction qui liste les commentaires
            wp_list_comments([
                'style' => 'div',
                'short_ping' => true,
                'reverse_top_level' => true,
                'callback' => 'better_comments'
            ]);
            ?>
        </ul>
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