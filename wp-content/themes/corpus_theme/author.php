<?php
/**
 * Template for displaying author archive page.
 * 
 * @package Corpus
 */
?>
<?php get_header() ?>
<div id="main-section" class="main-section grid-col-16 clearfix">
<div class="archive-meta-container">
    <div class="archive-head"><h1 class="page-title author"><?php _e('Author Archives', 'corpus') ?></h1></div>
    <div class="archive-description">
        <?php
        if (get_the_author_meta('description')) :
            printf('%s', "<p>" . get_the_author_meta('description') . "</p>");
        else :
            printf(__('Archive of the posts written by author : %s.', 'corpus'), get_the_author());
        endif;
        ?>
    </div>
</div>

<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section">
        <?php if ( have_posts() ) : the_post() ?>
            <div class="loop-container-section clearfix">
                <?php
                    // Calling the loop
                    rewind_posts();
                    get_template_part('loop');
                ?>
            </div><!-- loop-container-section ends -->
            <?php corpus_archive_nav() ?>
        <?php else : ?>
            <?php corpus_404_show() ?>
        <?php endif ?>
    </div><!-- inner-content-section ends -->
    <?php corpus_get_sidebar('archive') ?>
</div><!-- Content-section ends here -->
</div> <!-- main section ends -->
<?php get_footer() ?>