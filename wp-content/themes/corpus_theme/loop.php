<?php
/*
 * Template for displaying the loop
 * 
 * @package Corpus
 */

if(corpus_get_option('blog_layout')=='blog_grid'){
    $loop_count = 1;
}

while( have_posts() ): the_post();
    get_template_part('content/general/loop');

    if(corpus_get_option('blog_layout')=='blog_grid'){
        if(($loop_count % 2) == 0){echo '<div class="clearfix"></div>';} // For clearing after every 2 posts
        $loop_count++;
    }
endwhile;

