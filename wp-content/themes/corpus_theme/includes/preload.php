<?php
/**
 * This file is called prior to calling any other file in functions.php
 * 
 * 1. This file belongs only to the premium themes.
 * 2. Delete this file in all free theme.
 * 
 * @since 1.0.0
 */


if (!function_exists('corpus_get_theme_info')):
    /**
     * Returns information about theme.
     * 
     * @param string $type
     * @return string
     */
    function corpus_get_theme_info($type){
        $theme_obj = wp_get_theme();
        
        switch ($type):
            case 'name':
                return preg_replace( "/\W/", "_", strtolower( $theme_obj ) ) . '_theme';
                
            case 'version':
                return $theme_obj->get( 'Version' );
        endswitch;
    }
endif;


if (!function_exists('corpus_get_scripts_info')):
    /**
     * Returns information about all scripts included in theme.
     * 
     * @param string $name Name of the script ('respondjs' by default)
     * @param string $info What information you need ('version' by default)
     * @return mixed If information is found then return it OR return false in-case nothing is found.
     */
    function corpus_get_scripts_info($name = 'respondjs', $info = 'version'){
        $scripts = array(
            'respondjs' => array(
                'version' => '1.4.2'
            ),
            'html5shiv' => array(
                'version' => '3.7.3'
            ),
            'colorpicker' => array(
                'version' => '0.0.0.1'
            ),
            'smoothscroll' => array(
                'version' => '2.14'
            ),
            'font_awesome' => array(
                'version' => '4.5.0',
            ),
            'cmb2' => array(
                'version' => '2.1.2'
            ),
            'mudpanel' => array(
                'version' => '1.0.0'
            )
        );
        
        $r = '';

        foreach($scripts as $key => $val):
            if($key == $name && array_key_exists($info, $val)):
                $r = $val[$info];
            else:
                $r = (!empty($r)) ? $r : false;
            endif;
        endforeach;

        return $r;
    }
endif;


if (!function_exists('corpus_get_option')):

    /**
     * Returns the value of an option.
     * 
     * Will work only when corpus_get_option() function does not exist.
     * 
     * If customizer is included then this corpus_get_option() will not
     * be used and the customizer's corpus_get_option() will be used instead.
     * 
     * @param string $option Name of option
     * @param string $source Panel or Customizer
     * @return mixed Option Value
     */
    function corpus_get_option($option, $source = 'panel') {
        
        switch ($source):
            case 'panel':

                $panel_options = get_option(corpus_get_theme_info('name'));

                if (is_array($panel_options) && array_key_exists($option, $panel_options)) {
                    return $panel_options[$option];
                } else {
                    return FALSE;
                }

                break;
        endswitch;
    }
endif;