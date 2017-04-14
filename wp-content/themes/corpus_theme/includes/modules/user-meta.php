<?php
/**
 * Adds meta options to user profile editing screen
 * 
 * @package Corpus
 * @since 1.0.0
 */

function corpus_set_usermeta_form_html($id, $title, $user) {
    $output = '';
    $value = get_the_author_meta($id, $user->ID ) ? get_the_author_meta($id, $user->ID ) : '';
    
    $output .= '<tr>';
        $output .= '<th>';
            $output .= '<label for="'.$id.'">'.$title.'</label>';
        $output .= '</th>';
        $output .= '<td>';
            $output .= '<input id="'.$id.'" class="regular-text ltr" type="text" value="'.esc_attr($value).'" name="'.$id.'">';
        $output .= '</td>';
    $output .= '</tr>';
    
    return $output;
}

function corpus_add_usermeta_social_links($user) {
    $output = '';
    
    
    $output .= '<h3>User Social Links (Corpus Theme)</h3>';
    $output .= '<table class="form-table">';
        $output .= '<tbody>';
            $output .= corpus_set_usermeta_form_html('facebook_url', 'Facebook Profile (URL)', $user);
            $output .= corpus_set_usermeta_form_html('twitter_url', 'Twitter Profile (URL)', $user);
            $output .= corpus_set_usermeta_form_html('gplus_url', 'Google+ Profile (URL)', $user);
            $output .= corpus_set_usermeta_form_html('linkedin_url', 'Linkedin Profile (URL)', $user);
            $output .= corpus_set_usermeta_form_html('dribbble_url', 'Dribbble Profile (URL)', $user);
            $output .= corpus_set_usermeta_form_html('instagram_url', 'Instagram Profile (URL)', $user);
            $output .= corpus_set_usermeta_form_html('pinterest_url', 'Pinterest Profile (URL)', $user);
            $output .= corpus_set_usermeta_form_html('tumblr_url', 'Tumblr Profile (URL)', $user);
            $output .= corpus_set_usermeta_form_html('youtube_url', 'YouTube Channel (URL)', $user);
        $output .= '</tbody>';
    $output .= '</table>';
    
    echo $output;
}
add_action( 'show_user_profile', 'corpus_add_usermeta_social_links' );
add_action( 'edit_user_profile', 'corpus_add_usermeta_social_links' );


function corpus_save_usermeta_social_links($user_id) {
    update_user_meta ($user_id, 'facebook_url', sanitize_text_field($_POST['facebook_url']));
    update_user_meta ($user_id, 'twitter_url', sanitize_text_field($_POST['twitter_url']));
    update_user_meta ($user_id, 'gplus_url', sanitize_text_field($_POST['gplus_url']));
    update_user_meta ($user_id, 'linkedin_url', sanitize_text_field($_POST['linkedin_url']));
    update_user_meta ($user_id, 'dribbble_url', sanitize_text_field($_POST['dribbble_url']));
    update_user_meta ($user_id, 'instagram_url', sanitize_text_field($_POST['instagram_url']));
    update_user_meta ($user_id, 'pinterest_url', sanitize_text_field($_POST['pinterest_url']));
    update_user_meta ($user_id, 'tumblr_url', sanitize_text_field($_POST['tumblr_url']));
    update_user_meta ($user_id, 'youtube_url', sanitize_text_field($_POST['youtube_url']));
}
add_action( 'personal_options_update', 'corpus_save_usermeta_social_links' );
add_action( 'edit_user_profile_update', 'corpus_save_usermeta_social_links' );