<?php
/**
 * Shows Project Section
 */
$projects = array();

$projects['enabled'] = corpus_get_option('enable_project_section');
$projects['headline'] = corpus_get_option('project_headline');
$projects['desc'] = corpus_get_option('project_desc');
$projects['disable_brackets'] = corpus_get_option('project_disable_brackets') ? true : false;

for($i = 1; $i <= 8; $i++){
$projects['project_img_'.$i] = corpus_get_option('project_img_'.$i);
$projects['project_title_'.$i] = corpus_get_option('project_title_'.$i);
$projects['project_desc_'.$i] = corpus_get_option('project_desc_'.$i);
$projects['project_link_text_'.$i] = corpus_get_option('project_link_text_'.$i);
$projects['project_link_url_'.$i] = corpus_get_option('project_link_url_'.$i);
}

?>
<div class="projects-section clearfix grid-col-16" style="padding-bottom: 0px">
    <div class="projects-headlines grid-col-16">
        <div class="projects-title block-headline font-secondary"><span><?php echo $projects['disable_brackets'] ? '' : '{' ?> <?php echo $projects['headline'] ?> <?php echo $projects['disable_brackets'] ? '' : '}' ?></span></div>
        <div class="projects-desc block-description"><span><?php echo $projects['desc'] ?></span></div>
    </div>
    <!--<div class="projects-container grid-col-16 clearfix">
<?php for($i = 1; $i <= 8; $i++):
    if(!$projects['project_img_'.$i]){continue;}
?>
        <div class="project-box-container grid-col-4">
            <div class="project-box clearfix">
                <div class="project-box-img" style="background-image: url('<?php echo $projects['project_img_'.$i] ?>');">
                    <div class="project-image-overlay-container"></div>
                    <div class="project-text-overlay-container">
                        <div class="project-box-title"><?php echo $projects['project_title_'.$i] ?></div>
                        <div class="project-box-content">
                            <?php echo $projects['project_desc_'.$i] ?>
                            <div class="project-box-button"><a href="<?php echo $projects['project_link_url_'.$i] ?>"><?php echo $projects['project_link_text_'.$i] ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php if(($i % 4) == 0) { echo '<div class="clearfix"></div>';} ?>
<?php endfor ?>
        <div class="clearfix"></div>
    </div>-->
</div>
