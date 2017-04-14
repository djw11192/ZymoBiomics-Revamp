<?php
/*
 * Template for displaying single posts.
 * 
 * @package Corpus
 */
?>
<?php get_header() ?>
<div id="main-section" class="main-section grid-col-16 clearfix">
    <?php if( have_posts() ) : while( have_posts() ): the_post() ?>
    <?php corpus_breadcrumbs() ?>
    <div id="content-section" class="content-section grid-col-16 clearfix">
        <article id="post-<?php the_ID() ?>" <?php post_class('inner-content-section') ?>>

            <div class="post-title">
                <?php if ( is_front_page() ): ?>
                    <h1 class="front-page font-secondary"><?php the_title() ?></h1>
                <?php else: ?>
                    <h1 class="inner-page font-secondary"><?php the_title() ?></h1>
                <?php endif ?>

                <?php if(!corpus_get_option('disable_post_meta')): ?>

                    <div class="post-meta">
                        <?php 
                        printf( __( '%1$s<span class="meta-author-url">, By %2$s </span>', 'corpus' ),
                            sprintf( '<span class="entry-date">%1$s</span>',
                            get_the_date()
                        ),
                        sprintf( '<span class="author vcard">%1$s</span>',
                            get_the_author()
                        )) ?>
                        <?php if(comments_open()) {
                            echo '<span class="post-meta-comments">';                                    
                            comments_number( ' | <a href='.get_comments_link().'>Leave a reply</a>', ' | 1 comment', ' | % comments' );
                            echo '</span>';
                            } ?>
                    </div>
                <?php endif ?>
            </div>

            <div class="post-content">
                <?php the_content() ?>
                <?php wp_link_pages(array('before' => '<div class="post-nav-link"><span>' . __('Pages:', 'corpus') . '</span>', 'after' => '</div>')) ?>
            </div>

            <div class="post-below-content">
                <?php edit_post_link( __( 'Edit', 'corpus' ), '<section class="edit-link">', '</section>' ) ?>
                <section><p class="tags-below-content"><?php the_tags( __( 'Tags: ', 'corpus' ) , ', ', '') ?></p></section>
            </div>

            <?php corpus_post_nav() ?>

            <?php comments_template( '', true ) ?>

        </article><!-- inner-content-section ends -->
    <?php corpus_get_sidebar('single') ?>
    </div><!-- Content-section ends here -->
</div> <!-- main section ends -->
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>