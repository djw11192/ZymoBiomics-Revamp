<?php
/**
 * Template Name: Page without sidebar
 */
?>
<?php get_header() ?>
<div id="main-section" class="main-section grid-col-16 clearfix">

                <?php corpus_breadcrumbs() ?>

<?php if( have_posts() ) : while( have_posts() ): the_post() ?>

<div id="content-section" class="content-section grid-col-16">
    <div id="post-<?php the_ID() ?>" <?php post_class('inner-content-section') ?>>

                    <div class="post-title">
                    <?php if ( is_front_page() ): ?>
                          <h1 class="front-page font-secondary"><?php the_title() ?></h1>
                    <?php else: ?>
                          <h1 class="inner-page font-secondary"><?php the_title() ?></h1>
                    <?php endif; ?>
                    </div>

                    <div class="post-content">
                         <?php the_content() ?>
                         <?php wp_link_pages(array('before' => '<div class="post-nav-link"><span>' . __('Pages:', 'corpus') . '</span>', 'after' => '</div>')) ?>
                    </div>

                    <div class="post-below-content">
                         <?php edit_post_link( __( 'Edit', 'corpus' ), '<div class="edit-link">', '</div>' ) ?>
                    </div>


              <?php endwhile ?>

              <?php comments_template( '', true ) ?>

              <?php endif?>
        
    </div><!-- inner-content-section ends -->
</div><!-- Content-section ends here -->
</div> <!-- main section ends -->
<?php get_footer() ?>