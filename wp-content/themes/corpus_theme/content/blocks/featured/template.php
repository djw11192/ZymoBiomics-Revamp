<?php
/**
 * Displays featured section (slideshow)
 */
$slides = array();
$slides['enabled'] = corpus_get_option('enable_featured_section');

for ($i = 1; $i <= 10; $i++) {
    $slides[$i]['img'] = corpus_get_option('featured_slide_img_' . $i);
    $slides[$i]['head'] = corpus_get_option('featured_slide_head_' . $i);
    $slides[$i]['text'] = corpus_get_option('featured_slide_text_' . $i);
    $slides[$i]['button'] = corpus_get_option('featured_slide_button_' . $i);
    $slides[$i]['button_url'] = corpus_get_option('featured_slide_button_url_' . $i);
}

?>
<div id="featured-container" class="featured-container">
    <div class="slider">
        <ul class="slides header-section"><?php
            if (is_array($slides)):

                $slides_output = '';

                foreach ($slides as $slide):
                    if (!empty($slide['img'])):
                        $slides_output .= '<li>';
                            $slides_output .= '<a href="'.esc_url($slide['button_url']).'">';
							$slides_output .= '<img src="'.esc_url($slide['img']) .'" />';
							$slides_output .= '</a>';
                            /*$slides_output .= '<div class="flex-caption">';
                                if ($slide['head']):
                                    $slides_output .= '<div class="featured-heading">';
                                        $slides_output .= '<span>'.esc_html($slide['head']).'</span>';
                                    $slides_output .= '</div>';
                                endif;
                                if ($slide['text']):
                                    $slides_output .= '<div class="featured-content">';
                                        $slides_output .= '<span>'.esc_html($slide['text']).'</span>';
                                    $slides_output .= '</div>';
                                endif;
                                if ($slide['button'] && $slide['button_url']):
                                    $slides_output .= '<div class="featured-button">';
                                        $slides_output .= '<span><a href="'.esc_url($slide['button_url']).'" title="'.esc_html($slide['button']).'">'.esc_html($slide['button']).'</a></span>';
                                    $slides_output .= '</div>';
                                endif;
                            $slides_output .= '</div>';*/
                        $slides_output .= '</li>';
                    endif;
                endforeach;
                
                echo $slides_output;

            endif;
        ?></ul>
    </div>
</div>
