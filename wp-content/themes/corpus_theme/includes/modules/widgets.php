<?php
/**
 * Contain Custom Widgets
 * 
 * @since 1.0
 * @package Corpus
 */

class Corpus_RecentPosts extends WP_Widget{
    
    function __construct() {
        parent::__construct('corpus_recentposts', __('Corpus Recent Posts', 'corpus'), array('description' => __('This widget displays your recent posts with thumbnail', 'corpus')) );
    }
    
    private function corpus_new_query($count, $commented) {
        
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => $count,
            'ignore_sticky_posts' => true,
            );

        if($commented) {$args['orderby'] = 'comment_count'; }

        $new_query = new WP_Query($args);
        
        if($new_query->have_posts()):
            
            $output = '';
            $output .= '<ul class="clearfix">';

            while($new_query->have_posts()): $new_query->the_post();
                
                $output .= '<li class="clearfix">';
                    $output .= '<div class="rp_block clearfix">';
                        if(has_post_thumbnail()) {
                            $output .= '<div class="rp_thumbnail">'.get_the_post_thumbnail(get_the_ID(), 'corpusThumb').'</div>';
                        }
                            $output.= '<div class="rp_content">';
                                $output .= '<div class="rp_title"><a href="'.get_permalink().'" title="'.the_title_attribute(array('before'=>'','after'=>'','echo'=>false)).'">'.get_the_title().'</a></div>';
                                $output .= '<div class="rp_date"><span>Dated: '.get_the_time('M, d, Y').'</span></div>';
                            $output .= '</div>';
                    $output .= '</div>';
                $output .= '</li>';

            endwhile;
            
            $output .= '</ul>';
            
            echo $output;

        endif;
        
        wp_reset_postdata();
    }
    
    public function form($instance) {
        $title = !empty( $instance['title'] ) ? $instance['title'] : __( 'Recent Posts', 'corpus' );
        $count = !empty( $instance['count'] ) ? (int)$instance['count'] : 5;
        $commented = !empty( $instance['commented'] ) ? 'checked="checked"' : '';

        $output = '';
        
        // Widget Title
        $output .= '<p>';
            $output .= '<label for="'.$this->get_field_id( 'title' ).'">'.__( 'Title:', 'corpus' ).'</label>';
            $output .= '<input class="widefat" id="'.$this->get_field_id( 'title' ).'" name="'.$this->get_field_name( 'title' ).'" type="text" value="'.esc_attr( $title ).'" />';
        $output .= '</p>';
        
        // Widget Numbers (Select/Options)
        $output .= '<p>';
            $output .= '<label for="'.$this->get_field_id( 'count' ).'">'.__( 'Number of posts to show:', 'corpus' ).'</label>';
            $output .= ' ';
            $output .= '<input id="'.$this->get_field_id( 'count' ).'" name="'.$this->get_field_name( 'count' ).'" type="text" value="'.esc_attr( $count ).'" size="3" />';
        $output .= '</p>';
        
        // Widget as per most comments
        $output .= '<p>';
            $output .= '<label for="'.$this->get_field_id('commented').'">'.__('Most commented', 'corpus').'</label>';
            $output .= ' ';
            $output .= '<input class="checkbox" type="checkbox" '.$commented.' id="'.$this->get_field_id('commented').'" name="'.$this->get_field_name('commented').'" />';

        $output .= '</p>';
        
        echo $output;

    }

    public function update($new_instance, $old_instance) {
        $instance = array();

        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['count'] = ( !empty( $new_instance['count'] ) ) ? (int)strip_tags( $new_instance['count'] ) : '';
        $instance['commented'] = ( !empty( $new_instance['commented'] ) ) ? 1 : 0;

        return $instance;
    }
    
    public function widget($args, $instance){
        
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts', 'corpus' );
        $count = ( ! empty( $instance['count'] ) ) ? absint( $instance['count'] ) : 5;
        $commented = $instance['commented'] ? true : false;

        if (!$count) { $count = 5; }

        echo $args['before_widget'];

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $title) . $args['after_title'];
        }

        $this->corpus_new_query($count, $commented);

        echo $args['after_widget'];

    }
    
}

function corpus_custom_widgets(){
    register_widget('Corpus_RecentPosts');
}
//add_action( 'widgets_init', 'corpus_custom_widgets' );