<?php
/**
 * The main template file.
 * 
 * @package Corpus
 */
get_header() ?>
    <div id="content-section" class="content-section grid-col-16">
        <div class="inner-content-section grid-pct-65">
            <div class="loop-container-section clearfix">
            <?php
                if ( have_posts() ) :
                    
                    // Start the Loop.
                    while ( have_posts() ): the_post();
                
                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called loop-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'loop', get_post_format() );
                    
                    // End the Loop.
                    endwhile;
                    
                    corpus_archive_nav();
                    
                else :
                    
                corpus_404_show();
                
                endif;
            ?>
            </div><!-- loop-container-section ends -->        
        </div><!-- inner-content-section ends -->
        <?php get_sidebar() ?>
    </div><!-- Content-section ends here -->
<?php get_footer() ?>