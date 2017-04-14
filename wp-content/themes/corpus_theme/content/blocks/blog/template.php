<?php
/**
 * Blog template
 * 
 * @package Corpus
 */
?>
    <div id="main-section" class="main-section grid-col-16 clearfix">
        <div id="content-section" class="content-section grid-col-16 clearfix">
            <div class="inner-content-section">
                <?php if( have_posts() ) : ?>
                    <div class="loop-container-section clearfix">
                        <?php
                        //Calling the loop
                            get_template_part( 'loop');
                        ?>
                    </div>
                    <?php corpus_archive_nav();
                else :
                    corpus_404_show();
                endif; ?>
            </div><!-- inner-content-section ends -->
        <?php corpus_get_sidebar('archive') ?>
        </div><!-- Content-section ends here -->
    </div> <!-- main section ends -->
