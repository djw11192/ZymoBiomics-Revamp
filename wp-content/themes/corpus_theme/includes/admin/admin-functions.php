<?php
/**
 * Admin related functions
 */

add_action( 'cmb2_admin_init', 'corpus_cmb2_metaboxes' );

function corpus_cmb2_metaboxes(){
    $prefix = corpus_cmb2_get_prefix();
    
    $cmb = new_cmb2_box( array(
        'id'            => 'corpus_options_metabox',
        'title'         => __( 'Corpus Options', 'corpus' ),
        'object_types'  => array( 'page', 'post' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'cmb_styles' => true, // false to disable the CMB stylesheet
        'closed'     => false, // Keep the metabox closed by default
    ) );
    
    $cmb->add_field( array(
    'name'    => __('Content Sections','corpus'),
    'desc'    => __('All the above selected content sections will be shown on this post type.','corpus'),
    'id'      => $prefix . '_content_sections',
    'type'    => 'multicheck',
    'select_all_button' => false,
    'options' => array(
        'slideshow' => __('Slideshow', 'corpus'),
        'headboxes' => __('Headboxes', 'corpus'),
        'aboutus' => __('About us', 'corpus'),
        'service' => __('Services', 'corpus'),
        'projects' => __('Projects', 'corpus'),
        'testimonials' => __('Testimonials', 'corpus'),
        'quote' => __('Quotes', 'corpus'),
        )
    ) );

    $cmb->add_field( array(
    'name' => __('Custom CSS', 'corpus'),
    'desc' => 'This CSS will be applied to this page/post only.',
    'default' => '',
    'id' => $prefix . '_custom_css',
    'type' => 'textarea_code'
    ) );
}

function corpus_cmb2_get_prefix(){
    return '_corpus_cmb_meta';
}

function corpus_get_post_meta($option){
    return get_post_meta( get_the_ID(), corpus_cmb2_get_prefix() . $option, true );
}