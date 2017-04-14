<?php
/**
 * Template for displaying archive page.
 * 
 * @package Corpus
 */
?>
<?php get_header() ?>
<div id="main-section" class="main-section grid-col-16 clearfix">
<div class="archive-meta-container">
    <div class="archive-head">
        <h1><?php if (is_day()) : ?>
                <?php printf(__('Daily Archives: %s', 'corpus'), '<span>' . get_the_date() . '</span>'); ?>
            <?php elseif (is_month()) : ?>
                <?php printf(__('Monthly Archives: %s', 'corpus'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'corpus')) . '</span>'); ?>
            <?php elseif (is_year()) : ?>
                <?php printf(__('Yearly Archives: %s', 'corpus'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'corpus')) . '</span>'); ?>
            <?php else : ?>
                <?php _e('Blog Archives', 'corpus'); ?>
            <?php endif; ?></h1>
    </div>
    <div class="archive-description">
        <?php printf(__('<p>Archive of posts published in the specified %s </p>', 'corpus'), corpus_date_text()) ?>
    </div>
</div><!-- Archive Meta Container ends -->

<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section">
        
        <?php if (have_posts()) : ?>

            
            <div class="loop-container-section clearfix">

                <?php
                    //Calling the loop
                    get_template_part('loop');
                ?>                
                
            </div><!-- loop-container-section ends -->

            <?php corpus_archive_nav() // Calls the 'Previous' and 'Next' Post Links.  ?>

        <?php else : ?>

            <?php corpus_404_show() // Function dedicated for handling empty queries.  ?>

        <?php endif; ?>

    </div> <!-- inner-content-section ends here -->
    
    <?php corpus_get_sidebar('archive') ?>
    
</div><!-- Content-section ends here -->
</div> <!-- main section ends -->
<?php get_footer() ?>