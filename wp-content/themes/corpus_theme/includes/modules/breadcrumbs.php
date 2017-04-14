<?php
/**
 * Contain Breadcrumbs
 * 
 * @since 1.0
 * @package Corpus
 */

function corpus_breadcrumbs($class='') {
    $output = '';
    $class = !empty($class) ? 'breadcrumbs '. $class : 'breadcrumbs';

    $output .= '<div class="'.$class.'">'.apply_filters('corpus_breadcrumbs', '').'</div>';
    echo $output;
}


class Corpus_Breadcrumbs {
    
    private $sep = '<span class="breadcrumb-sep"><i class="mdf mdf-angle-right"></i></span>';

    function __construct() {
        add_filter('corpus_breadcrumbs', array($this, 'breadcrumbs'));
    }
    
    function breadcrumbs($title) {
        $output = '';
        
        if(is_category()) {
            $output .= sprintf('<a href="%1$s">Home</a> %2$s <span>Category</span> %2$s <span>%3$s</span>', home_url( '/' ), $this->sep, single_term_title('', false));
        } elseif(is_tag()) {
            $output .= sprintf('<a href="%1$s">Home</a> %2$s <span>Tag</span> %2$s <span>%3$s</span>', home_url( '/' ), $this->sep, single_term_title('', false));
        } elseif(is_page()) {
            $output .= sprintf('<a href="%1$s">Home</a> %2$s <span>%3$s</span>', home_url( '/' ), $this->sep, get_the_title());
        } else {
            $output .= sprintf('<a href="%1$s">Home</a> %2$s <span>%3$s</span> %2$s <span>%4$s</span>', home_url( '/' ), $this->sep, get_the_category_list(','), get_the_title());
        }
        
        return $output;
    }
}
if(!corpus_get_option('disable_bc')) {
$corpus_obj_breadcrumbs = new Corpus_Breadcrumbs;
}