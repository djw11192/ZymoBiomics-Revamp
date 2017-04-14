<article class="loop-section-col grid-col-16">
    <div class="loop-section">
        <div id="post-<?php the_ID() ?>" <?php post_class() ?>>
            <div class="loop-post-title">
                <h1><a href="<?php the_permalink() ?>" class="font-secondary" rel="bookmark" title="<?php echo __('Permalink to', 'corpus'). ' ' ?><?php the_title_attribute() ?>"><?php the_title() ?></a></h1>
                <?php if(!corpus_get_option('disable_blog_p_meta')): ?>
                <div class="loop-post-meta">
                    <span><?php _e('Written on', 'corpus') ?> </span><span class="loop-meta-date"><?php echo get_the_time('M, d, Y') ?></span>
                    <span><?php _e('by', 'corpus') ?> </span><span class="loop-meta-author"><?php the_author_posts_link() ?></span>
                    <?php if(!corpus_get_option('disable_blog_p_meta_comments')): ?>
                    <span class="loop-meta-comments"> | <?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'No Comments'); ?></span>
                    <?php endif ?>
                </div>
                <?php endif ?>
            </div>

            <div class="loop-post-excerpt clearfix">
                <div class="loop-post-text grid-col-16">
                    <div class="loop-thumbnail"><?php the_post_thumbnail( 'corpusThumb' ) ?></div>
                    <?php if(corpus_get_option('disable_full_posts') || corpus_is_blog_layout_grid()) { the_excerpt(); } else {the_content(); }
                    if(!corpus_get_option('disable_readmore')): ?><div class="read-more"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php _e('Read more', 'corpus') ?></a></div><?php endif ?>
                </div>
                <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'corpus') . '</span>', 'after' => '</div>'));
                ?>
            </div>
        </div>
    </div>
</article>