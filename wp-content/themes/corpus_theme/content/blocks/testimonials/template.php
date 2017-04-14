<?php
$testimonials = array();
$testimonials['enabled'] = corpus_get_option('enable_testimonials');
$testimonials['headline'] = corpus_get_option('testimonials_headline');
$testimonials['desc'] = corpus_get_option('testimonials_desc');

for($i = 1; $i <= 10; $i++){
$testimonials['client_img_'.$i] = corpus_get_option('testimonial_client_img_'.$i);
$testimonials['client_name_'.$i] = corpus_get_option('testimonial_client_name_'.$i);
$testimonials['client_identity_'.$i] = corpus_get_option('testimonial_client_identity_'.$i);
$testimonials['client_says_'.$i] = corpus_get_option('testimonial_client_says_'.$i);
}

?>
<div class="testimonial-section clearfix grid-col-16">
    <div class="tm-headlines grid-col-16">
        <div class="tm-title block-headline font-secondary"><span><?php echo $testimonials['headline'] ?></span></div>
        <div class="tm-desc block-description"><span><?php echo $testimonials['desc'] ?></span></div>
    </div>
    <div class="owl-carousel owl-theme">
        <?php for($i = 1; $i <= 10; $i++): if(!$testimonials['client_says_'.$i]) {continue;} ?>
        <div class="testimonial-box">
            <div class="tm-client-says">"<?php echo $testimonials['client_says_'.$i] ?>"</div>
            <div class="tm-client-image"><img src="<?php echo $testimonials['client_img_'.$i] ?>"></div>
            <div class="tm-client-name"><?php echo $testimonials['client_name_'.$i] ?></div>
            <div class="tm-client-identity"><?php echo $testimonials['client_identity_'.$i] ?></div>
        </div>
        <?php endfor ?>
    </div>
</div>
