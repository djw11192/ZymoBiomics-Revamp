<?php
/**
 * Display Head box
 */
$headbox = array();
$headbox['enabled'] = corpus_get_option('enable_headboxes');


for($i = 1; $i <= 6; $i++):
	$headbox['head_box_img_'.$i] = corpus_get_option('head_box_img_'.$i);
    $headbox['head_box_title_'.$i] = corpus_get_option('head_box_title_'.$i);
    $headbox['head_box_content_'.$i] = corpus_get_option('head_box_content_'.$i);
    $headbox['head_box_button_text_'.$i] = corpus_get_option('head_box_button_text_'.$i);
    $headbox['head_box_button_url_'.$i] = corpus_get_option('head_box_button_url_'.$i);
    $headbox['head_box_button_enabled_'.$i] = corpus_get_option('head_box_button_enabled_'.$i);
endfor;
?>
<div id="headboxes-section" class="headboxes-section grid-col-16 clearfix">
    <div id="hb-style-one" class="hb-style-one grid-col-16 clearfix">
        <div class="hb-columns clearfix">
            
			<div class="hb-couple-columns grid-col-16 clearfix" style="padding-bottom: 87px">
				<div class="videoFrame">
					<script src="//fast.wistia.com/embed/medias/quhvwx7a0o.jsonp" async></script>
					<script src="//fast.wistia.com/assets/external/E-v1.js" async></script>
					<div class="wistia_responsive_padding" style="padding:56.25% 0 28px 0;position:relative;">
						<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
							<span class="wistia_embed wistia_async_quhvwx7a0o popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span>
						</div>
					</div>
					
					<div class="hb-description" style="font-size: 17px;">
						Learn more about ZymoBIOMICS™ and how it can help remove bias from your microbiomics workflows.
					</div>
				</div>
			</div>
			
			<div class="hb-couple-columns grid-col-16 clearfix" >
			
                <div class="hb-column grid-col-4 grid-float-left hb-segment-spacing hb-tri-spacing" >
					<div class="project-box-container grid-col-12 hb-img-formatting" >
						<a href="<?php echo esc_url($headbox['head_box_button_url_1']) ?>"><div class="project-box-img" style="background-image: url('<?php echo $headbox['head_box_img_1'] ?>')"></div></a>
					</div>
					<div style="clear: left;"> 
						<div class="hb-title font-secondary"><span><?php echo $headbox['head_box_title_1'] ?></span></div>
						<div class="hb-description"><span><?php echo $headbox['head_box_content_1'] ?></span></div>
						<?php if ($headbox['head_box_button_enabled_1']): ?>
							<div><table border="0" cellpadding="0" cellspacing="0" class="roundButtonContainer"><tbody><tr>
								<td class="roundButtonContent" valign="middle"><a class="roundButton" href="<?php echo esc_url($headbox['head_box_button_url_1']) ?>" target="_blank" ><?php echo $headbox['head_box_button_text_1'] ?></a></td>
							</tr></tbody></table></div>
						<?php endif ?>
						<!--<?php if ($headbox['head_box_button_enabled_1']): ?><div class="hb-button"><a href="<?php echo esc_url($headbox['head_box_button_url_1']) ?>"><?php echo $headbox['head_box_button_text_1'] ?></a></div><?php endif ?>-->
					</div>
                </div>
            
				<div class="hb-column grid-col-4 grid-float-left hb-segment-spacing hb-tri-spacing" >
					<div class="project-box-container grid-col-12 hb-img-formatting" >
						<a href="<?php echo esc_url($headbox['head_box_button_url_2']) ?>"><div class="project-box-img" style="background-image: url('<?php echo $headbox['head_box_img_2'] ?>')"></div></a>
					</div>
					<div style="clear: left;"> 
						<div class="hb-title font-secondary"><span><?php echo $headbox['head_box_title_2'] ?></span></div>
						<div class="hb-description bottom-extend"><span><?php echo $headbox['head_box_content_2'] ?></span></div>
						<?php if ($headbox['head_box_button_enabled_2']): ?>
							<div><table border="0" cellpadding="0" cellspacing="0" class="roundButtonContainer"><tbody><tr>
								<td class="roundButtonContent" valign="middle"><a class="roundButton" href="<?php echo esc_url($headbox['head_box_button_url_2']) ?>" target="_blank" ><?php echo $headbox['head_box_button_text_2'] ?></a></td>
							</tr></tbody></table></div>
						<?php endif ?>
						<!--<?php if ($headbox['head_box_button_enabled_2']): ?><div class="hb-button"><a href="<?php echo esc_url($headbox['head_box_button_url_2']) ?>"><?php echo $headbox['head_box_button_text_2'] ?></a></div><?php endif ?>-->
					</div>
                </div>
				
				<div class="hb-column grid-col-4 grid-float-left hb-segment-spacing hb-tri-spacing" >
					<div class="project-box-container grid-col-12 hb-img-formatting" >
						<a href="<?php echo esc_url($headbox['head_box_button_url_3']) ?>"><div class="project-box-img" style="background-image: url('<?php echo $headbox['head_box_img_3'] ?>')"></div></a>
					</div>
					<div style="clear: left;"> 
						<div class="hb-title font-secondary title-three"><span><?php echo $headbox['head_box_title_3'] ?></span></div>
						<div class="hb-description bottom-extend"><span><?php echo $headbox['head_box_content_3'] ?></span></div>
						<?php if ($headbox['head_box_button_enabled_3']): ?>
							<div><table border="0" cellpadding="0" cellspacing="0" class="roundButtonContainer"><tbody><tr>
								<td class="roundButtonContent" valign="middle"><a class="roundButton" href="<?php echo esc_url($headbox['head_box_button_url_3']) ?>" target="_blank" ><?php echo $headbox['head_box_button_text_3'] ?></a></td>
							</tr></tbody></table></div>
						<?php endif ?>
						<!--<?php if ($headbox['head_box_button_enabled_3']): ?><div class="hb-button"><a href="<?php echo esc_url($headbox['head_box_button_url_3']) ?>"><?php echo $headbox['head_box_button_text_3'] ?></a></div><?php endif ?>-->
					</div>
                </div>
				
            </div>
            <div class="hb-couple-columns grid-col-16 clearfix">
                
				<div class="hb-column grid-col-4 grid-float-left hb-segment-spacing hb-tri-spacing" >
					<div class="project-box-container grid-col-12 hb-img-formatting" >
						<a href="<?php echo esc_url($headbox['head_box_button_url_4']) ?>"><div class="project-box-img" style="background-image: url('<?php echo $headbox['head_box_img_4'] ?>')"></div></a>
					</div>
					<div style="clear: left;"> 
						<div class="hb-title font-secondary title-two"><span><?php echo $headbox['head_box_title_4'] ?></span></div>
						<div class="hb-description bottom-extend-big"><span><?php echo $headbox['head_box_content_4'] ?></span></div>
						<?php if ($headbox['head_box_button_enabled_4']): ?>
							<div><table border="0" cellpadding="0" cellspacing="0" class="roundButtonContainer"><tbody><tr>
								<td class="roundButtonContent" valign="middle"><a class="roundButton" href="<?php echo esc_url($headbox['head_box_button_url_4']) ?>" target="_blank" ><?php echo $headbox['head_box_button_text_4'] ?></a></td>
							</tr></tbody></table></div>
						<?php endif ?>
						<!--<?php if ($headbox['head_box_button_enabled_4']): ?><div class="hb-button"><a href="<?php echo esc_url($headbox['head_box_button_url_4']) ?>"><?php echo $headbox['head_box_button_text_4'] ?></a></div><?php endif ?>-->
					</div>
                </div>
            
				<div class="hb-column grid-col-4 grid-float-left hb-segment-spacing hb-tri-spacing" >
					<div class="project-box-container grid-col-12 hb-img-formatting" >
						<a href="<?php echo esc_url($headbox['head_box_button_url_5']) ?>"><div class="project-box-img" style="background-image: url('<?php echo $headbox['head_box_img_5'] ?>')"></div></a>
					</div>
					<div style="clear: left;"> 
						<div class="hb-title font-secondary"><span><?php echo $headbox['head_box_title_5'] ?></span></div>
						<div class="hb-description"><span><?php echo $headbox['head_box_content_5'] ?></span></div>
						<?php if ($headbox['head_box_button_enabled_5']): ?>
							<div><table border="0" cellpadding="0" cellspacing="0" class="roundButtonContainer"><tbody><tr>
								<td class="roundButtonContent" valign="middle"><a class="roundButton" href="<?php echo esc_url($headbox['head_box_button_url_5']) ?>" target="_blank" ><?php echo $headbox['head_box_button_text_5'] ?></a></td>
							</tr></tbody></table></div>
						<?php endif ?>
						<!--<?php if ($headbox['head_box_button_enabled_5']): ?><div class="hb-button"><a href="<?php echo esc_url($headbox['head_box_button_url_5']) ?>"><?php echo $headbox['head_box_button_text_5'] ?></a></div><?php endif ?>-->
					</div>
                </div>
				
				<div class="hb-column grid-col-4 grid-float-left hb-segment-spacing hb-tri-spacing" >
					<div class="project-box-container grid-col-12 hb-img-formatting" >
						<a href="<?php echo esc_url($headbox['head_box_button_url_6']) ?>"><div class="project-box-img" style="background-image: url('<?php echo $headbox['head_box_img_6'] ?>')"></div></a>
					</div>
					<div style="clear: left;"> 
						<div class="hb-title font-secondary title-three"><span><?php echo $headbox['head_box_title_6'] ?></span></div>
						<div class="hb-description bottom-extend-big"><span><?php echo $headbox['head_box_content_6'] ?></span></div>
						<?php if ($headbox['head_box_button_enabled_6']): ?>
							<div><table border="0" cellpadding="0" cellspacing="0" class="roundButtonContainer"><tbody><tr>
								<td class="roundButtonContent" valign="middle"><a class="roundButton" href="<?php echo esc_url($headbox['head_box_button_url_6']) ?>" target="_blank" ><?php echo $headbox['head_box_button_text_6'] ?></a></td>
							</tr></tbody></table></div>
						<?php endif ?>
						<!--<?php if ($headbox['head_box_button_enabled_6']): ?><div class="hb-button"><a href="<?php echo esc_url($headbox['head_box_button_url_6']) ?>"><?php echo $headbox['head_box_button_text_6'] ?></a></div><?php endif ?>-->
					</div>
                </div>
				
            </div>
        </div>
    </div>
</div>