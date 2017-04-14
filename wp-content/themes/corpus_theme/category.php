<?php
/**
 * Template for displaying category archive posts.
 * 
 * @package Corpus
 */
?>
<?php get_header() ?>
<div id="main-section" class="main-section grid-col-16 clearfix">
<div class="archive-meta-container">
    <div class="archive-head"><h1><?php _e('Category Archives', 'corpus') ?></h1></div>
    <div class="archive-description">
        <?php
        $corpus_category_description = term_description();
        if (!empty($corpus_category_description)) {
            echo '<span>' . $corpus_category_description . '</span>';
        } else {
            printf(__('Archive of posts published in the category: %s', 'corpus'), single_cat_title('', false));
        }
        ?>
    </div>
</div>
<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section">
        <?php if( have_posts() ) : ?>
        <?php // corpus_breadcrumbs() ?>
            <div class="loop-container-section clearfix">
                <?php
                    //Calling the loop
                    get_template_part('loop');
                ?>
            </div><!-- loop-container-section ends -->		
            <?php corpus_archive_nav() ?>
        <?php else : ?>
            <?php corpus_404_show() ?>
        <?php endif;?>
    </div><!-- inner-content-section ends -->
    <?php corpus_get_sidebar('archive') ?>
</div><!-- Content-section ends here -->
</div> <!-- main section ends -->
<?php get_footer() ?>