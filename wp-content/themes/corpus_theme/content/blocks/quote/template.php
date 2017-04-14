<?php
$quote = array();
$quote['enabled'] = corpus_get_option('enable_quote');
$quote['title'] = corpus_get_option('quote_title');
$quote['desc'] = corpus_get_option('quote_desc');
$quote['button_text'] = corpus_get_option('quote_button_text');
$quote['button_url'] = corpus_get_option('quote_button_url');

?>
<div class="quote-section-container clearfix grid-col-16">
    <div class="quote-section clearfix grid-col-16">
        <div class="quote-title block-headline font-secondary"><?php echo $quote['title'] ?></div>
        <div class="quote-desc block-description"><?php echo $quote['desc'] ?></div>
        <div class="quote-button"><a href="<?php echo $quote['button_url'] ?>" title="<?php echo $quote['button_text'] ?>"><?php echo $quote['button_text'] ?></a></div>
    </div>
</div>
