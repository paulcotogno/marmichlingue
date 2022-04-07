<form role="search" method="get" class="form-inline search-form my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform">
    <?php wp_dropdown_categories('show_option_none=Select category'); ?>
    <span class="screen-reader-text"><?php echo _x( 'Recherche:', 'label', 'wphetic' ); ?></span>
    <input class="form-control mr-sm-2" type="search" placeholder="<?php echo esc_attr_x( 'Recherche', 'placeholder', 'wphetic' ); ?>" value="<?php the_search_query(); ?>" aria-label="Search" name="s">
    <input type="hidden" name="post_type" value="recipe" />
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo esc_attr_x( 'Recherche', 'submit button', 'wphetic' ); ?></button>
</form>
