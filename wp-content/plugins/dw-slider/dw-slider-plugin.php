<?php
/*
    Plugin Name: Nivo Plugin
    Description: My first slider
    Author: David Weber
    Version: 1.0
*/
?>
<?php
function np_init() {
    $args = array(
        'public' => true,
        'label' => 'Nivo Images',
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('np_images', $args);
}
add_action('init', 'np_init');
?>