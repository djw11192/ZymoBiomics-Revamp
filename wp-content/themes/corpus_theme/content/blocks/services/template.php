<?php
/**
 * Show the Sevices Section
 */
$services = array();
$services['enabled'] = corpus_get_option('enable_service_section');
$services['headline'] = corpus_get_option('ss_headline');
$services['desc'] = corpus_get_option('ss_desc');

for($i = 0; $i <= 3; $i++){
$services['img_'.$i] = corpus_get_option('ss_img_'.$i);
$services['title_'.$i] = corpus_get_option('ss_title_'.$i);
$services['content_'.$i] = corpus_get_option('ss_content_'.$i);
}

?>
<div class="service-section clearfix grid-col-16">
    <div class="ss-headlines grid-col-16">
        <div class="ss-title block-headline font-secondary"><span><?php echo $services['headline'] ?></span></div>
        <div class="ss-desc block-description"><span><?php echo $services['desc'] ?></span></div>
    </div>
    <div class="ss-boxes grid-col-16">
        <div class="ss-box grid-col-33">
            <div class="ss-box-img"><img src="<?php echo $services['img_1'] ?>" /></div>
            <div class="ss-box-title font-secondary"><?php echo $services['title_1'] ?></div>
            <div class="ss-box-content"><?php echo $services['content_1'] ?></div>
            <div class="ss-box-border"></div>
        </div>
        <div class="ss-box grid-col-33">
            <div class="ss-box-img"><img src="<?php echo $services['img_2'] ?>" /></div>
            <div class="ss-box-title font-secondary"><?php echo $services['title_2'] ?></div>
            <div class="ss-box-content"><?php echo $services['content_2'] ?></div>
            <div class="ss-box-border"></div>
        </div>
        <div class="ss-box grid-col-33">
            <div class="ss-box-img"><img src="<?php echo $services['img_3'] ?>" /></div>
            <div class="ss-box-title font-secondary"><?php echo $services['title_3'] ?></div>
            <div class="ss-box-content"><?php echo $services['content_3'] ?></div>
            <div class="ss-box-border"></div>
        </div>
    </div>
</div>
