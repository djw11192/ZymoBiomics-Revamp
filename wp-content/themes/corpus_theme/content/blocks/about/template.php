<?php
/**
 * Displays About us (Section)
 */
$aboutus = array();
$aboutus['enabled'] = corpus_get_option('enable_abus_section');
$aboutus['bg_image'] = corpus_get_option('abus_bg_image');
$aboutus['title'] = corpus_get_option('abus_title');
$aboutus['content'] = corpus_get_option('abus_content');
$aboutus['button_text'] = corpus_get_option('abus_button_text');
$aboutus['button_url'] = corpus_get_option('abus_button_url');

?>
<div class="about-us-section grid-col-16" <?php if($aboutus['bg_image']) {echo 'style="background-image:url('.$aboutus['bg_image'].');"';} ?>>
    <div class="abus-overlay">
        <div class="abus-title block-headline font-secondary"><span><?php echo $aboutus['title'] ?></span></div>
        <div class="abus-content block-description"><span><?php echo $aboutus['content'] ?></span></div>
        <!-- <div class="abus-button"><a href="<?php echo $aboutus['button_url'] ?>"><?php echo $aboutus['button_text'] ?></a></div> -->
    </div>
</div>
