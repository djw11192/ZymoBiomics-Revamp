<?php
/**
 * Footer Template
 * 
 * @package Corpus
 */
if(corpus_get_option('disable_footer')) {
    return;
} ?>
<footer class="footer-bg-section grid-col-16 clearfix">
    <div id="footer-section" class="footer-section clearfix grid-col-16">
        <?php
        if(corpus_get_option('show_footer_copyright') || corpus_get_option('show_footer_attribution')){
            echo '<div id="copyright" class="copyright">';
        }

        if(corpus_get_option('footer_alt_text')) {
            echo corpus_get_option('footer_alt_text'); // Print alternate text from options
        } else {
            if(corpus_get_option('show_footer_copyright')) {
                    echo '&#169;'. ' '. date( 'Y' ) . ' ';
                    echo corpus_get_option('footer_name') ? corpus_get_option('footer_name') : get_bloginfo('name', 'display');
            }
            if(corpus_get_option('show_footer_copyright') && corpus_get_option('show_footer_attribution')){
                    echo ' - ';
            }
            if(corpus_get_option('show_footer_attribution')){
                    echo apply_filters('corpus_footer_attribution_text_filter',__('WordPress Theme by ', 'corpus').'<a href="http://www.mudthemes.com/" target="_blank">mudThemes.com</a>');
            }
        }

        if(corpus_get_option('show_footer_copyright') || corpus_get_option('show_footer_attribution')){
            echo '</div>';
        }

        corpus_social_section_show();
        ?>
    </div>
</footer>
