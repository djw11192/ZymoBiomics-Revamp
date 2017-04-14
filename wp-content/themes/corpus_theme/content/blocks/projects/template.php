<?php
/**
 * Shows Project Section
 */
$projects = array();

$projects['enabled'] = corpus_get_option('enable_project_section');
$projects['headline'] = corpus_get_option('project_headline');
$projects['desc'] = corpus_get_option('project_desc');

for($i = 1; $i <= 4; $i++){
$projects['project_img_'.$i] = corpus_get_option('project_img_'.$i);
$projects['project_title_'.$i] = corpus_get_option('project_title_'.$i);
$projects['project_desc_'.$i] = corpus_get_option('project_desc_'.$i);
}

?>
<div class="projects-section clearfix grid-col-16">
    <div class="projects-headlines grid-col-16">
        <div class="projects-title block-headline font-secondary"><span>{ <?php echo $projects['headline'] ?> }</span></div>
        <div class="projects-desc block-description"><span><?php echo $projects['desc'] ?></span></div>
    </div>
    <div class="projects-container grid-col-16 clearfix">
<?php for($i = 1; $i <= 4; $i++): ?>
        <div class="project-box-container grid-col-8">
            <div class="project-box clearfix">
                <div class="project-box-img"><img src="<?php echo $projects['project_img_'.$i] ?>" /></div>
                <div class="project-image-overlay-container">
                    <div class="project-box-title"><?php echo $projects['project_title_'.$i] ?></div>
                    <div class="project-box-content">
                        <?php echo $projects['project_desc_'.$i] ?>
                        <div class="project-box-button"><a href="http://www.mudthemes.com">Learn more..</a></div>
                    </div>
                </div>
            </div>
        </div>
<?php if($i == 2) { echo '<div class="clearfix"></div>';} ?>
<?php endfor ?>
    </div>
</div>
