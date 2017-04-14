<?php
/*
 * Template for displaying search queries.
 * 
 * @package Corpus
 */
?>
<?php get_header() ?>
<div id="main-section" class="main-section grid-col-16 clearfix">

<div class="archive-meta-container">
    <div class="archive-head"><h1><?php _e('Search Results', 'corpus') ?></h1></div>
    <div class="archive-description"><?php printf(__('We have found following content based on your search query: %s.', 'corpus'), get_search_query()) ?></div>
</div>

<div id="content-section" class="content-section grid-col-16">
    <div class="inner-content-section">        
        <?php if( have_posts() ) : ?>
            <div class="loop-container-section clearfix">
                <?php
                    //Calling the loop
                    get_template_part('loop');
                ?>
            </div><!-- loop-container-section ends -->
            <?php corpus_archive_nav() // Calls the 'Previous' and 'Next' Post Links. ?>
        <?php else : ?>
            <?php corpus_404_show() // Function dedicated for handling empty queries. ?>
        <?php endif;?>
    </div><!-- inner-content-section ends -->
    <?php corpus_get_sidebar('archive') ?>
</div><!-- Content-section ends here -->
</div> <!-- main section ends -->
<?php get_footer() ?>