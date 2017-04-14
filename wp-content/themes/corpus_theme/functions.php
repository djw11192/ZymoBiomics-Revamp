<?php
/**
 * Corpus Theme functions and definitions
 * 
 * @package Corpus
 * @since 1.0
 */


/**
 * Corpus Theme Constants
 * 
 * @since 1.0
 */
define('CORPUS_PRO', TRUE );
define('CORPUS_ASSETS_URL', get_template_directory_uri() . '/assets/');
define('CORPUS_GLOBAL_URL', CORPUS_ASSETS_URL . 'global/');
define('CORPUS_GLOBAL_JS_URL', CORPUS_ASSETS_URL . 'global/js/');
define('CORPUS_GLOBAL_IMAGES_URL', CORPUS_ASSETS_URL . 'global/images/');
define('CORPUS_GLOBAL_CSS_URL', CORPUS_ASSETS_URL . 'global/css/');
define('CORPUS_ADMIN_URL', CORPUS_ASSETS_URL . 'admin/');
define('CORPUS_ADMIN_JS_URL', CORPUS_ASSETS_URL . 'admin/js/');
define('CORPUS_ADMIN_IMAGES_URL', CORPUS_ASSETS_URL . 'admin/images/');
define('CORPUS_ADMIN_CSS_URL', CORPUS_ASSETS_URL . 'admin/css/');
define('CORPUS_INCLUDES_DIR' , get_template_directory() . '/includes/' );



/**
 * Preload call
 */
require_once CORPUS_INCLUDES_DIR . 'preload.php';



/**
 * Admin call
 */
require_once CORPUS_INCLUDES_DIR . 'admin/init.php';



/**
 * Modules call
 */
require_once CORPUS_INCLUDES_DIR . 'modules/init.php';



/**
 * Sets up theme defaults and registers support for various theme features
 * 
 * @since 1.0
 */
function corpus_setup() {
    
    global $content_width;
    
    /**
     * Primary content width according to the design and stylesheet.
     */
    if ( ! isset( $content_width ) ) {
        $content_width = corpus_get_option('viewport') == 'theme-stretched' ? 750 :  700;
    }
    
    /**
     * Makes corpus Theme ready for translation.
     * Translations can be filed in the /languages/ directory
     */
    load_theme_textdomain('corpus', get_template_directory() . '/languages');

    /**
     * Add default posts and comments RSS feed links to head.
     */
    add_theme_support('automatic-feed-links');
    
    /**
     * Add custom background.
     * @todo Put E7E7E7 in a variable and then change it according to the skin
     */
    add_theme_support('custom-background', array('default-color' => 'E7E7E7'));
    
    /**
     * Adds supports for Theme menu.
     */
    register_nav_menu('primary', __('Primary Menu', 'corpus'));
    register_nav_menu('mobile', __('Mobile Menu (Alternative)', 'corpus'));

    /**
     * Add support for Post Thumbnails.
     * Defines a custom name and size for Thumbnails to be used in the theme.
     *
     * Note: In order to use the default theme thumbnail, add_image_size() must be removed
     * and 'corpusThumb' value must be removed from the_post_thumbnail in the loop file.
     */
    add_theme_support('post-thumbnails');
    add_image_size('corpusThumb', 190, 130, true);
}
add_action( 'after_setup_theme', 'corpus_setup' );



/**
 * Defines menu values and call the menu itself.
 * The menu is registered using register_nav_menu function in the theme setup.
 * 
 * @since 1.0
 */
function corpus_nav($menu = '') {
    switch($menu){
        case 'primary':
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container_id' => 'menu',
                'menu_class' => 'sf-menu corpus_menu',
                'menu_id' => 'corpus_menu',
                'fallback_cb' => 'corpus_primary_menu_fallback' // Fallback function in case no menu item is defined.
            ));
            break;
        
        case 'mobile':
            wp_nav_menu(array(
                'theme_location' => 'mobile',
                'container_id' => 'sidr-menu',
                'menu_class' => '',
                'menu_id' => '',
                'fallback_cb' => 'corpus_mobile_menu_fallback' // Fallback function in case no menu item is defined.
            ));
            break;
    }
}



/**
 * Displays a custom menu in case either no menu is selected or
 * menu does not contains any items or wp_nav_menu() is unavailable.
 * 
 * @since 1.0
 */
function corpus_primary_menu_fallback() {
?>
<div id="menu">
    <ul>
        <?php wp_list_pages( 'title_li=&sort_column=menu_order&depth=3') ?>
    </ul>
</div>
<?php
}



/**
 * Displays a custom menu in case either no menu is selected or
 * menu does not contains any items or wp_nav_menu() is unavailable
 * only for Mobile Menu
 * 
 * @since 1.0
 */
function corpus_mobile_menu_fallback() {
    if(has_nav_menu('primary')){
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container_id' => 'sidr-menu',
            'menu_class' => '',
            'menu_id' => '',
        ));        
    }else { ?>
        <div id="sidr-menu">
            <ul>
                <?php wp_list_pages( 'title_li=&sort_column=menu_order&depth=3') ?>
            </ul>
        </div>
    <?php }
}



/**
 * Register sidebars one at right and three footer sidebars in a box.
 * 
 * @since 1.0
 */
function corpus_sidebars() {

    // Primary Sidebar
    register_sidebar(array(
        'name' => __('Right Sidebar', 'corpus'),
        'id' => 'right_sidebar',
        'description' => __('Right Sidebar', 'corpus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title font-secondary">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #1
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #1', 'corpus'),
        'id' => 'footerbox_sidebar_1',
        'description' => __('Footerbox Sidebar #1', 'corpus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title font-secondary">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #2
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #2', 'corpus'),
        'id' => 'footerbox_sidebar_2',
        'description' => __('Footerbox Sidebar #2', 'corpus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title font-secondary">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #3
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #3', 'corpus'),
        'id' => 'footerbox_sidebar_3',
        'description' => __('Footerbox Sidebar #3', 'corpus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title font-secondary">',
        'after_title' => '</h4>',
    ));
    
    // Footerbox Sidebar #4
    register_sidebar(array(
        'name' => __('Footerbox Sidebar #4', 'corpus'),
        'id' => 'footerbox_sidebar_4',
        'description' => __('Footerbox Sidebar #4', 'corpus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title font-secondary">',
        'after_title' => '</h4>',
    ));
    
    // Top Sidebar
    /*
    register_sidebar(array(
        'name' => __('Top Sidebar', 'corpus'),
        'id' => 'top_sidebar',
        'description' => __('Top Sidebar', 'corpus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
     */
    
}
add_action( 'widgets_init', 'corpus_sidebars' );



/**
 * Enqueue CSS and JS files
 * 
 * @since 1.0
 */
function corpus_enqueue() {
    
    corpus_enqueue_font();
    //wp_enqueue_style('corpus-roboto', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300italic,300,400italic,500,500italic,700,700italic,900,900italic');
    //wp_enqueue_style('corpus-lato', '//fonts.googleapis.com/css?family=Lato:400,100italic,100,300,300italic,700,700italic,900,900italic');
    wp_enqueue_style('corpus-font-awesome', CORPUS_ASSETS_URL .'admin/css/font-awesome.'. corpus_get_scripts_info('font_awesome', 'version') .'.css', array(), corpus_get_scripts_info('font_awesome', 'version'));
    wp_enqueue_style('corpus-flexslider', CORPUS_GLOBAL_CSS_URL . 'flexslider/flexslider.css', false, '2.5.0', 'all' );
    wp_enqueue_style('corpus-owlcarousel', CORPUS_GLOBAL_CSS_URL . 'owlcarousel/owl.carousel.css', false, '2.0.0.3', 'all' );
    wp_enqueue_style('corpus-stylesheet', get_stylesheet_uri(), false, corpus_get_theme_info('version'), 'all' );
    
    // Enqueue (comment-reply )Javascript in case of threaded comments.
    if (is_singular() && comments_open() && get_option('thread_comments')) :
        wp_enqueue_script('comment-reply');
    endif;

    wp_enqueue_script('corpus-flexslider', CORPUS_GLOBAL_JS_URL . 'jquery.flexslider-min.js', array( 'jquery' ), '2.5.0');
    wp_enqueue_script('corpus-owlcarousel', CORPUS_GLOBAL_JS_URL . 'owl.carousel.min.js', array( 'jquery' ), '2.0.0.3');
    wp_enqueue_script('corpus-superfish', CORPUS_GLOBAL_JS_URL . 'superfish.min.js', array( 'jquery' ), '1.4.8', true);
    wp_enqueue_script('corpus-sidr', CORPUS_GLOBAL_JS_URL . 'jquery.sidr.js', array( 'jquery' ), '1.2.1', true);
    wp_enqueue_script('jquery-color');
    wp_enqueue_script('corpus-custom', CORPUS_GLOBAL_JS_URL . 'custom.js', array( 'jquery' ), '1.0.0', true);
    wp_localize_script('corpus-custom', 'corpus_slide_vars', array(
        'slideshowSpeed' => corpus_get_option('slide_speed'),
        'animationSpeed' => corpus_get_option('slide_ani_speed'),
        'directionNav' => (bool) corpus_get_option('disable_slide_nav') ? '' : 'true',
        'smoothHeight' => (bool) corpus_get_option('disable_smooth_height') ? '' : 'true',
        'animation' => corpus_get_option('slide_animation_type'),
        //'direction' => corpus_get_option('slide_dir'),
    ));

}
add_action( 'wp_enqueue_scripts', 'corpus_enqueue');



/**
 * Enqueues Google Font
 * To reuse: just make sure that $mdf_google_fonts array exist in the theme.
 * 
 * @global type $mdf_google_fonts
 */
function corpus_enqueue_font() {
    
    global $mdf_google_fonts;

    foreach ($mdf_google_fonts as $fonts) {

        if ($fonts['type'] != 'open') {
            $name = '';
            $variant = '';

            switch ($fonts['shortname']):

                case corpus_get_option('font_primary'):
                case corpus_get_option('font_secondary'):
                case corpus_get_option('font_site_title'):
                case corpus_get_option('font_menu'):
                case corpus_get_option('font_footer'):
                /*
                case corpus_get_option('font_body'):
                case corpus_get_option('font_featured'):
                case corpus_get_option('font_menu'):
                case corpus_get_option('font_blog_p_title'):
                case corpus_get_option('font_blog_p_meta'):
                case corpus_get_option('font_blog_p_content'):
                case corpus_get_option('font_readmore'):
                case corpus_get_option('font_bc'):
                case corpus_get_option('font_p_title'):
                case corpus_get_option('font_p_meta'):
                case corpus_get_option('font_p_content'):
                case corpus_get_option('font_sidebar_p_title'):
                case corpus_get_option('font_sidebar_p_body'):
                case corpus_get_option('font_sidebar_f_title'):
                case corpus_get_option('font_sidebar_f_body'):
                case corpus_get_option('font_footer'):
                 * 
                 */

                    $name = str_replace(' ', '+', $fonts['name']);
                    $variant = (!empty($fonts['variant']) ? ':' . $fonts['variant'] : '');
                    $subset = (!empty($fonts['subsets']) ? '&subset=' . $fonts['subsets'] : '&subset=latin');
                    
                    break;

                default:
                    break;

            endswitch;

            if ($name) {
                wp_enqueue_style('google-fonts-' . $name, 'http://fonts.googleapis.com/css?family=' . $name . $variant . $subset, false, null, 'all');
            }
            //wp_enqueue_style('google-fonts-Lato', 'http://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic', false, null, 'all');
        }
    }
}




/**
 * Hooks respond.js for IE in the wp_head hook.
 * 
 * @since 1.0
 */
function corpus_enqueue_ie_script() {
    echo "\n";
    ?><!--[if lt IE 9]><script type='text/javascript' src='<?php echo CORPUS_GLOBAL_JS_URL ?>respond.js'></script><![endif]--><?php
    echo "\n";
    ?><!--[if lt IE 9]><script type='text/javascript' src='<?php echo CORPUS_GLOBAL_JS_URL ?>html5shiv.min.js'></script><![endif]--><?php
    echo "\n";
}
add_action('wp_head', 'corpus_enqueue_ie_script');



function corpus_content_sections(){
    if(is_page() || is_single()){
        $post_meta_content_sections_list = get_post_meta( get_the_ID(), corpus_cmb2_get_prefix(). '_content_sections', true );
        
        if(is_array($post_meta_content_sections_list)){
            foreach($post_meta_content_sections_list as $post_meta_content_section){
                switch($post_meta_content_section):
                    case 'slideshow':
                        get_template_part('content/blocks/featured/template');
                        break;
                    case 'headboxes':
                        get_template_part('content/blocks/headbox/template');
                        break;
                    case 'aboutus':
                        get_template_part('content/blocks/about/template');
                        break;
                    case 'service':
                        get_template_part('content/blocks/services/template');
                        break;
                    case 'projects':
                        get_template_part('content/blocks/projects/template4');
                        break;
                    case 'testimonials':
                        get_template_part('content/blocks/testimonials/template');
                        break;
                    case 'quote':
                        get_template_part('content/blocks/quote/template');
                        break;
                endswitch;
            }
        }
    }elseif(is_front_page()){
        $homepage_content_sections_db = corpus_get_option('homepage_content_sections');

        // Sorting Starts
        //$sortable_defaults = explode(',', corpus_get_option('homepage_priority'));
        $sortable_defaults = corpus_get_option('homepage_priority') ? explode(',', corpus_get_option('homepage_priority')) : explode(',','featured,headboxes,about,services,projects,testimonials,quote,blog');
        $sortable_i = 0;
        $sortables = array();
        foreach ($sortable_defaults as $sortable_default) {
            $sortables[$sortable_i] = $sortable_default;
            $sortable_i++;
        }
        
        ksort($sortables);
        $homepage_content_sections = array();
        foreach($sortables as $sortable){
            $homepage_content_sections[$sortable] = $homepage_content_sections_db[$sortable];
        }
        // Sorting Snds

        if(is_array($homepage_content_sections)){
            foreach($homepage_content_sections as $homepage_content_section_key => $homepage_content_section_value):
                switch($homepage_content_section_key):
                    case 'featured':
                        if($homepage_content_section_value == TRUE){
                            get_template_part('content/blocks/featured/template');
                        }
                        break;
                    case 'headboxes':
                        if($homepage_content_section_value == TRUE){
                            get_template_part('content/blocks/headbox/template');
                        }
                        break;
                    case 'about':
                        if($homepage_content_section_value == TRUE){
                            get_template_part('content/blocks/about/template');
                        }
                        break;
                    case 'services':
                        if($homepage_content_section_value == TRUE){
                            get_template_part('content/blocks/services/template');
                        }
                        break;
                    case 'projects':
                        if($homepage_content_section_value == TRUE){
                            get_template_part('content/blocks/projects/template4');
                        }
                        break;
                    case 'testimonials':
                        if($homepage_content_section_value == TRUE){
                            get_template_part('content/blocks/testimonials/template');
                        }
                        break;
                    case 'quote':
                        if($homepage_content_section_value == TRUE){
                            get_template_part('content/blocks/quote/template');
                        }
                        break;
                    case 'blog':
                        if($homepage_content_section_value == TRUE){
                            get_template_part('content/blocks/blog/template');
                        }
                        break;
                endswitch;
            endforeach;
        }
    }elseif(is_home() && (get_option( 'show_on_front' ) == 'page')){
        $blog_content_sections = corpus_get_option('blog_content_sections');
        if(is_array($blog_content_sections)){
            foreach($blog_content_sections as $blog_content_section_key => $blog_content_section_value):
                switch($blog_content_section_key):
                    case 'featured':
                        if($blog_content_section_value == TRUE){
                            get_template_part('content/blocks/featured/template');
                        }
                        break;
                    case 'headboxes':
                        if($blog_content_section_value == TRUE){
                            get_template_part('content/blocks/headbox/template');
                        }
                        break;
                    case 'about':
                        if($blog_content_section_value == TRUE){
                            get_template_part('content/blocks/about/template');
                        }
                        break;
                    case 'services':
                        if($blog_content_section_value == TRUE){
                            get_template_part('content/blocks/services/template');
                        }
                        break;
                    case 'projects':
                        if($blog_content_section_value == TRUE){
                            get_template_part('content/blocks/projects/template4');
                        }
                        break;
                    case 'testimonials':
                        if($blog_content_section_value == TRUE){
                            get_template_part('content/blocks/testimonials/template');
                        }
                        break;
                    case 'quote':
                        if($blog_content_section_value == TRUE){
                            get_template_part('content/blocks/quote/template');
                        }
                        break;
                endswitch;
            endforeach;
        }
    }
}



function corpus_get_sidebar($where, $location = 'primary'){
    $display_sidebar = FALSE;
    
    switch($where):
        case 'archive':
            $display_sidebar = (corpus_get_option('site_layout') == 'no_sidebar') ? FALSE : (corpus_get_option('blog_layout') == 'blog_grid' ? FALSE : TRUE); //Check whether the site_layout allows page sidebar and whether blog_layout is grid or not
            break;

        case 'single':
            $display_sidebar = corpus_get_option('disable_post_sidebar') || (corpus_get_option('site_layout') == 'no_sidebar') ? FALSE : TRUE; //Check the option
            break;

        case 'page':
            $display_sidebar = corpus_get_option('disable_page_sidebar') || (corpus_get_option('site_layout') == 'no_sidebar') ? FALSE : TRUE; //Check the option
            break;

        case 'pagetemplate':
            $display_sidebar = TRUE; //Sidebar is always displayed in case of page template
            break;
    endswitch;
    
    if($display_sidebar == TRUE){
        get_sidebar();
    }
}



function corpus_is_blog_layout_grid(){
    if(corpus_get_option('blog_layout') == 'blog_grid'){
        return TRUE;
    } else {
        return FALSE;
    }
    
}
/**
 * Defines the number of characters for post excerpts
 * and is added to excerpt_length filter.
 * 
 * @since 1.0
 */
function corpus_excerpt_length( $length ) {
	return 43;
}
add_filter( 'excerpt_length', 'corpus_excerpt_length' );



/**
 * Defines the text for the (read more) link for post excerpts
 * and is added to excerpt_more filter.
 * 
 * @since 1.0
 */
function corpus_auto_excerpt_more( $more ) {
	return '&hellip;' ;
}
add_filter( 'excerpt_more', 'corpus_auto_excerpt_more' );



/**
 * Modifies the default title of the blog and is hooked to wp_title filter.
 * 
 * @since 1.0
 */
function corpus_modify_title( $title, $sep ) {
    
    global $page, $paged;

    if (is_feed())
        return $title;

    // Add the blog name
    $title .= get_bloginfo('name', 'display');

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() ))
        $title .= " $sep $site_description";

    // Add a page number if necessary:
    if ($paged >= 2 || $page >= 2)
        $title .= " $sep " . sprintf(__('Page %s', 'corpus'), max($paged, $page));

    return $title;
}
add_filter( 'wp_title', 'corpus_modify_title', 10, 2 );



/**
 * Used to return body classes
 * 
 * @param array $classes
 * @return array
 * @since 1.0
 */
function corpus_body_class($classes) {

    $classes[] = corpus_get_option('skin');
    $classes[] = corpus_get_option('viewport');
    //$classes[] = corpus_get_option('float_thumb');
    $classes[] = 'thumbnail-left';
    $classes[] = corpus_get_option('blog_layout');
    $classes[] = 'skin-social-icons-' . corpus_get_option('si_skin');
    $classes[] = 'font-primary';
        
    if(is_page_template()){
        switch(get_page_template_slug()) {

            case 'templates/page-sidebar-no.php':
                $classes[] = 'no_sidebar';
                break;

            case 'templates/page-sidebar-left.php':
                $classes[] = 'left_sidebar';
                break;

            case 'templates/page-sidebar-right.php':
                $classes[] = 'right_sidebar';
                break;

            default:
                $classes[] = corpus_get_option('site_layout');;
        }
    }
    elseif(is_page() && corpus_get_option('disable_page_sidebar')) { $classes[] = 'no_sidebar'; }
    elseif(is_single() && corpus_get_option('disable_post_sidebar')) { $classes[] = 'no_sidebar'; }
    else {
        $classes[] = corpus_get_option('site_layout');
    }

    return $classes;
}
add_filter('body_class', 'corpus_body_class');



/**
 * Checks whether the all the content sections are disabled or not.
 * 
 * @todo Remove this function
 * @since 1.0
 */
function corpus_is_home() {
    
    if(corpus_get_option('disable_featured_section') && (get_option('show_on_front') == 'posts')){
        add_filter('corpus_blog_template_heading_filter', 'corpus_is_blog_heading_text', 20);
        return TRUE;
    } else {
        return FALSE;
    }
}



/**
 * Adds text to corpus_blog_template_heading_filter used on home.php
 * 
 * @todo Remove this function
 * @return string
 */
function corpus_is_blog_heading_text(){
    return '';
}



/**
 * Returns social icons individually
 * 
 * @param string $option Name of option in DB
 * @param string $title
 * @param string $icon Name of icon as in mdf-[icon]
 * @return string
 * 
 * @since 1.0.0
 */
function corpus_get_social_section_individual_icon($option, $title, $icon) {
    $output = '';
    
    if(corpus_get_option($option)){
        $output .= '<a href="'.esc_url(corpus_get_option($option)).'" title="'.$title.'" target="_blank" class=icon-'.$icon.'><i class="mdf mdf-'.$icon.'"></i></a>';
    }else{
        $output = false;
    }
    return $output;
    
}



/**
 * Used to display social section
 * 
 * @since 1.0
 */
function corpus_social_section_show() {
    
    if(!corpus_get_option('disable_social_section')):

    $output = false;
    
    $output .= corpus_get_social_section_individual_icon('facebook', 'Facebook', 'facebook');
    $output .= corpus_get_social_section_individual_icon('twitter', 'Twitter', 'twitter');
    $output .= corpus_get_social_section_individual_icon('googleplus', 'Google+', 'google-plus');
    $output .= corpus_get_social_section_individual_icon('linkedin', 'Linkedin', 'linkedin');
    $output .= corpus_get_social_section_individual_icon('dribbble', 'Dribbble', 'dribbble');
    $output .= corpus_get_social_section_individual_icon('instagram', 'Instagram', 'instagram');
    $output .= corpus_get_social_section_individual_icon('pinterest', 'Pinterest', 'pinterest');
    $output .= corpus_get_social_section_individual_icon('tumblr', 'Tumblr', 'tumblr');
    $output .= corpus_get_social_section_individual_icon('youtubeplay', 'YouTube', 'youtube-play');
    $output .= corpus_get_social_section_individual_icon('youtube', 'YouTube', 'youtube');
    $output .= corpus_get_social_section_individual_icon('rss', 'RSS feed', 'rss');
    ?>            
                
                <?php if(!empty($output)): ?>
                <div id="social-section" class="social-section">
                    <?php echo $output ?>
                </div>
                <?php endif ?>
            
<?php
    endif;
}



/**
 * Displays the content in case of 404 page, empty search query
 * and any other query which does not output any result.
 * 
 * Both heading and content of the page will be displayed with a
 * search form. Any modification to this module will effect only
 * 404 error or related pages.
 * 
 * @since 1.0
 */
function corpus_404_show(){
?>
        <div class="archive-meta-container">
            <div class="archive-head">
                <?php if (is_404()) : ?>
                    <h1><?php _e('Ooops! Nothing Found', 'corpus'); ?></h1>
                <?php elseif (is_search()) : ?>
                    <h1><?php printf(__('Nothing found for: %s', 'corpus'), get_search_query()); ?></h1>
                <?php else : ?>
                    <h1><?php printf(__('Nothing found for: %s', 'corpus'), single_term_title('', false)); ?></h1>
                <?php endif; ?>
            </div>
        </div><!-- Archive Meta Container ends -->
        
        <div class="archive-loop-container archive-empty">
            <div class="archive-excerpt">
                <p><?php _e('Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'corpus'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </div>
<?php }



/**
 * Decides and returns the accurate 'text' to be displayed.
 * 
 * @return string
 * @since 1.0
 */
function corpus_date_text() {
    if (is_date()):
        if (is_day()):
            $date_text = __('Day', 'corpus');
        elseif (is_month()):
            $date_text = __('Month', 'corpus');
        elseif (is_year()):
            $date_text = __('Year', 'corpus');
        else:
            $date_text = __('Period', 'corpus');
        endif;

        return $date_text;

    endif;
}



/**
 * Displays the navigation links for the archive pages. Is only
 * applicable if the total number of pages is more than 'one'.
 * 
 * @since 1.0
 */
function corpus_archive_nav() {
    
    global $wp_query;

    if ($wp_query->max_num_pages > 1 && !corpus_get_option('disable_blog_nav')): ?>
        
        <div class="archive-nav grid-col-16 clearfix">
            <div class="nav-next"><?php previous_posts_link(__('<span class="meta-nav">&larr;</span> Newer posts', 'corpus')); ?></div>
            <div class="nav-previous"><?php next_posts_link(__('Older posts <span class="meta-nav">&rarr;</span>', 'corpus')); ?></div>
        </div>
        
<?php endif;
}



/**
 * Displays the navigation links for the posts and pages.
 * 
 * @since 1.0
 */
function corpus_post_nav() {
?>
    <section class="post-nav clearfix">
        <div class="nav-previous"><?php previous_post_link( '%link', '%title <span class="meta-nav"><i class="mdf mdf-caret-right"></i></span>' ) ?></div>
        <div class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav"><i class="mdf mdf-caret-left"></i></span> %title' ) ?></div>
    </section>
<?php
}



/**
 * Display a different site banner dependent on which site is visited
 *
 * Custom developed for ZymoBIOMICS
 * Developed by Dalton Kraatz
 *
 */
function corpus_get_logo() {
	echo "<div id=\"site-title\">";
    echo "<a href=\"", esc_url( home_url( '/' ) ) ,"\" title=\"",esc_attr( get_bloginfo( 'name', 'display' ) ), "\" rel=\"home\" class=\"font-secondary\">";
	if ( has_post_thumbnail() ){
		echo "<img src=\"",the_post_thumbnail_url(),"\" />"; 
	} else {
		echo "<img src=\"", corpus_get_option('logo_img') ,"\" />";
	}
	echo "</a>";
    echo "</div>";
}



/**
 * Display site title/description or logo
 * 
 * @since 1.0
 */
function corpus_logo() {
	corpus_get_logo();
	
	/*$logo = corpus_get_option('logo_img');
        if( empty($logo)): ?>
        
        <div id="site-title" class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) . ' | ' . esc_attr( get_bloginfo('description') ) ?>" rel="home" class="font-secondary"><?php echo esc_html(get_bloginfo( 'name', 'display' )) ?></a>
            </div>
            <?php if(!corpus_get_option('disable_site_desc')): ?>
                <div id="site-description" class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ) ?></div>
            <?php endif; ?>
        <?php else: ?>
        
            <div id="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ) ?>" rel="home" class="font-secondary"><img src="<?php echo esc_url( corpus_get_option('logo_img') ) ?>"/></a>
            </div>

        <?php endif;/*/
}


if(!function_exists('corpus_header_scripts')):
    function corpus_header_scripts(){
        corpus_favicon();
        corpus_custom_css();
        corpus_analytics();
    }
endif;



/**
 * Adds favicon icon link in the <head></head> section
 * of the theme.
 *
 * @since 1.0
 */
function corpus_favicon() {
    $favicon = corpus_get_option('favicon');
    if ( !empty($favicon) ):
        echo '<link rel="shortcut icon" href="' . esc_attr(corpus_get_option('favicon')) . '" type="image/x-icon" />';
    endif;
}



/**
 * Outputs the Custom CSS code into HEAD section of theme.
 * 
 * @since 1.0
 */
function corpus_custom_css() {
    $output = '';
    $options_css = corpus_get_option('custom_css');
    
    if(!empty($options_css)){
        $output .= '<style type="text/css">';
        $output .= sanitize_text_field($options_css);
        $output .= '</style>';
    }
    
    if(is_single() || is_page()){
        $page_css = get_post_meta( get_the_ID(), corpus_cmb2_get_prefix(). '_custom_css', true );
        if(!empty($page_css)){
            $output .= '<style type="text/css">';
            $output .= sanitize_text_field($page_css);
            $output .= '</style>';
        }
    }
    
    if($output){
        echo $output;
    }
}



/**
 * Outputs the Google Analytics JS code into HEAD section of theme.
 * 
 * @since 1.0
 */
function corpus_analytics() {
    
    $analytics_code = corpus_get_option('analytics_code');
    if(!empty($analytics_code)){
        $output = '';
        $output .= '<!-- Google Analytics Script -->';
        $output .= "\n" . '<script type="text/javascript">' . "\n";
        $output .= strip_tags($analytics_code);
        $output .= "\n" . '</script>' . "\n";
        
        echo $output;
    }
}



/**
 * Template for comments and pingbacks.
 * 
 * @since 1.0
 */
function corpus_comment_callback( $comment, $args, $depth ) {

  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ):

         case '' :
		 // Proceed with normal comments.
  ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <?php if ($comment->comment_approved == '0') : ?><div class="comment-awaiting"><em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'corpus'); ?></em></div><?php endif; ?>
        <?php $corpus_get_comment_ID = get_comment_ID() ?>
        <?php $corpus_is_comment_reply = get_comment($corpus_get_comment_ID)->comment_parent ?>
        <?php $corpus_the_comment_author = get_comment_author(get_comment($corpus_get_comment_ID)->comment_parent) ?>
        <?php // if($corpus_is_comment_reply != 0 ) printf('<div class="comment-parent-author"><span>Replied to %s</span></div>', $corpus_the_comment_author ) ?>
      <div id="comment-<?php comment_ID(); ?>" class="comment-block-container grid-float-left grid-col-16">
          
          
                     <div class="comment-info-container grid-col-4 grid-float-left">
                          <div class="comment-author vcard">
                              <div class="comment-author-avatar-container"><?php echo get_avatar($comment, 125); ?></div>
                              <div class="comment-author-info-container">
                                  <div class="comment-author-name"><?php printf(__('%s <span class="says"></span>', 'corpus'), sprintf('<cite class="fn">%s</cite>', get_comment_author_link())) ?></div>
                                  <div class="comment-meta comment-date"><a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">(<?php printf(__('%1$s ago', 'corpus'), human_time_diff(get_comment_time( 'U' ), current_time( 'timestamp' ))); ?>)</a></div>
                              </div>
                          </div><!-- .comment-author .vcard -->
                     </div>
          
                     <div class="comment-body-container grid-col-12 grid-float-left">
                        <div class="comment-body"><?php comment_text(); ?></div>
                        <div class="reply"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
                        <?php edit_comment_link(__('(Edit)', 'corpus'), '<div class="comment-edit">', '</div>');?>
                     </div>

      </div><!-- #comment-##  -->

<?php
         break;

         case 'pingback' :
         case 'trackback' :
		 // Display trackbacks differently than normal comments.
  ?>

  <li class="post pingback">
      <p><?php _e( 'Pingback:', 'corpus' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'corpus' ), ' ' ); ?></p>

  <?php
         break;

  endswitch;
}



/**
 * Adds text to corpus_blog_template_heading_filter used on home.php
 * 
 * @todo Remove this function
 * @return string
 * @since 1.0
 */
function corpus_blog_template_heading_text() {
    return '<h1>' . get_bloginfo('name') . ' ' . __('Blog', 'corpus') . '</h1>';
}
add_filter('corpus_blog_template_heading_filter', 'corpus_blog_template_heading_text', 10);



if(!function_exists('corpus_the_authorbox')) {
function corpus_the_authorbox($content){
    global $authordata;
    $output = '';
    
    $output .= '<div class="authorbox clearfix">';

        $output .= '<div class="ab-author-image clearfix">'.get_avatar(get_the_author_meta('ID'), 150);
        $output .= '</div>';
        
        $output .= '<div class="ab-author-info clearfix">';
            $output .= '<div class="ab-author-name grid-col-16">About Author: '.get_the_author().'</div>';
            $output .= '<div class="ab-author-bio">'.get_the_author_meta('description').'</div>';
            $output .= '<div class="ab-author-links">';
                if(get_the_author_meta('url')) {
                    $output .= '<div class="ab-author-site">';
                        $output .= sprintf('<a href="%1$s" title="%2$s">%3$s</a>', get_the_author_meta('url'), get_the_author().' Website', 'Visit Website');
                    $output .= '</div>';
                }
                
                //Replace true by theme option
                if(true) {
                $output .= '<div class="ab-author-social">';
                    if(get_the_author_meta('facebook_url')) {
                        $output .= sprintf('<a href="%1$s" title="Facebook Profile"><i class="mdf mdf-facebook"></i></a>',get_the_author_meta('facebook_url'));
                    }
                    if(get_the_author_meta('twitter_url')) {
                        $output .= sprintf('<a href="%1$s" title="Twitter Profile"><i class="mdf mdf-twitter"></i></a>',get_the_author_meta('twitter_url'));
                    }
                    if(get_the_author_meta('gplus_url')) {
                        $output .= sprintf('<a href="%1$s" title="Google+ Profile"><i class="mdf mdf-google-plus"></i></a>',get_the_author_meta('gplus_url'));
                    }
                    if(get_the_author_meta('linkedin_url')) {
                        $output .= sprintf('<a href="%1$s" title="Linkedin Profile"><i class="mdf mdf-linkedin"></i></a>',get_the_author_meta('linkedin_url'));
                    }
                    if(get_the_author_meta('dribbble_url')) {
                        $output .= sprintf('<a href="%1$s" title="Dribbble Profile"><i class="mdf mdf-dribbble"></i></a>',get_the_author_meta('dribbble_url'));
                    }
                    if(get_the_author_meta('instagram_url')) {
                        $output .= sprintf('<a href="%1$s" title="Instagram Profile"><i class="mdf mdf-instagram"></i></a>',get_the_author_meta('instagram_url'));
                    }
                    if(get_the_author_meta('pinterest_url')) {
                        $output .= sprintf('<a href="%1$s" title="Pinterest Profile"><i class="mdf mdf-pinterest"></i></a>',get_the_author_meta('pinterest_url'));
                    }
                    if(get_the_author_meta('tumblr_url')) {
                        $output .= sprintf('<a href="%1$s" title="Tumblr Profile"><i class="mdf mdf-tumblr"></i></a>',get_the_author_meta('tumblr_url'));
                    }
                    if(get_the_author_meta('youtube_url')) {
                        $output .= sprintf('<a href="%1$s" title="YouTube Channel"><i class="mdf mdf-youtube"></i></a>',get_the_author_meta('youtube_url'));
                    }
                $output .= '</div>';
                }
            $output .= '</div>';
        $output .= '</div>';

    $output .= '</div>';
	    
	if(is_single() && !corpus_get_option('disable_post_ab')) {
        return $content . $output;
    } else {
        return $content;
    }
}
//add_filter('the_content', 'corpus_the_authorbox', 100);
}

/**
 * Creates multiple selectors using an array of child selectors.
 * 
 * @param string $parent The parent selector
 * @param array $children The array of child selectors
 * @param boolean $prefix Whether to prefix the entire return value with a ',' or not
 * @return string
 * @since 1.0.0
 */
function corpus_multichild_selector_generator($parent, $children = array(), $prefix){
	if(is_array($children)){
		$selector = '';
		$count = 1;
		
		// Prefix comma if required
		if($prefix){
			$selector .= ',';
		}
		
		foreach($children as $child){
			
			$selector .= $parent . ' ' . $child;
			
			// Add comma to the end of every child if not the last
			if($count != count($children)){
				$selector .= ',';
			}
			$count++;
		}
		return $selector;
	}
	return;
}

function corpus_attach_options_style(){
    global $mdf_google_fonts;
    $output = ''; $style = '';
    $skin = '.' . corpus_get_option('skin');
    
    $elements_font = array(
        'font_primary' => '.font-primary',
        'font_secondary' => '.font-secondary',
        'font_site_title' => '.site-title a, .site-description',
        'font_menu' => '.sidrmenu-section, .nav-section',
        'font_footer' => '.copyright',
        /*
        'font_site_desc' => '.site-description',
        'font_body' => 'body',
        'font_menu' => '.primarymenu-section a',
        'font_blog_p_title' => '.loop-post-title h1',
        'font_blog_p_meta' => '.loop-post-meta',
        'font_blog_p_content' => '.loop-post-excerpt p',
        'font_readmore' => '.read-more',
        'font_bc' => '.breadcrumbs',
        'font_p_title' => '.post-template .post-title h1'.corpus_multichild_selector_generator('.post-template .post-content', array('h1','h2','h3','h4','h5','h6'), true) . corpus_multichild_selector_generator('.comments-section', array('.comments-title', '.comment-author-name a', '.comment-date a', '.reply a'), true),
        'font_p_meta' => '.post-template .post-meta',
        'font_p_content' => '.post-content',
        'font_sidebar_p_title' => '.sidebar-right-section h4.widget-title',
        'font_sidebar_p_body' => '.sidebar-right-section',
        'font_sidebar_f_title' => '.footerbox-section h4.widget-title',
        'font_sidebar_f_body' => '.footerbox-section',
        'font_footer' => '.copyright',
         * 
         */
    );
    
    $elements_color = array(
        'color_site_title' => $skin . ' ' . '.site-title a',
        'color_site_desc' => $skin . ' ' . '.site-description',
        'color_blog_p_title' => $skin . ' ' . '.loop-post-title h1 a',
        'color_blog_p_meta' => $skin . ' ' . '.loop-post-meta',
        'color_blog_p_content' => $skin . ' ' . '.loop-post-excerpt p',
        'color_p_title' => $skin . ' ' . '.post-title h1',
        'color_p_meta' => $skin . ' ' . '.post-meta',
        'color_p_content' => $skin . ' ' . '.post-content',
        /*
        'color_readmore' => $skin . ' ' . '.read-more a',
        'color_p_link' => $skin . '.post-template .post-content a:link, .comment-body a:link',
        'color_p_link_v' => $skin . '.post-template .post-content a:visited, .comment-body a:visited',
        'color_p_link_h' => $skin . '.post-template .post-content a:hover, .comment-body a:hover',
         * 
         */
    );
    
    $elements_bg_color = array(
        /*
        'color_bg_blog_style_date' => $skin . ' ' . '.loop-stylish-date .loop-stylish-date-month',
        'color_bg_readmore' => $skin . ' ' . '.read-more a',
         * 
         */
    );

    foreach ($elements_font as $key => $value) {
        if(corpus_get_option($key)) {
            $style .= $value . '{font-family:';
            
            foreach ($mdf_google_fonts as $global_fonts) {
                if($global_fonts['shortname'] == corpus_get_option($key)) {
                    $style .= $global_fonts['name'] .','.$global_fonts['family'];
                }
            }
            $style .= ' !important;}';
        }
    }
    
    $style .= "\n";

    foreach ($elements_color as $key => $value) {
        if(corpus_get_option($key)) {
            $style .= $value . '{color:'.corpus_get_option($key).'!important;}';
        }
    }


    $style .= "\n";

    foreach ($elements_bg_color as $key => $value) {
        if(corpus_get_option($key)) {
            $style .= $value . '{background-color:'.corpus_get_option($key).'!important;}';
        }
    }

    $style .= "\n";
    $style .= corpus_layout_css_gen();

    $output .= '<style type="text/css">'. "\n" . $style . "\n" . '</style>' . "\n";
    echo $output;
    
}
add_action('wp_head', 'corpus_attach_options_style');

/**
 * Generates custom css based on layout options
 * 
 * @return string
 */
function corpus_layout_css_gen() {
    $output = '';
    
    if(corpus_get_option('pri_sidebar_width')) {
        $sidebar_width_pct = (int)corpus_get_option('pri_sidebar_width');
        $content_width_pct = 100 - $sidebar_width_pct;
        $output .= '.inner-content-section {width:'.$content_width_pct.'%;}';
        $output .= '.sidebar-right-section {width:'.$sidebar_width_pct.'%;}';
    }
    
    return $output;
}


function corpus_wp_readmore_link($button, $text) {
	$post = get_post();

	return '<div class="read-more"><a href="' . get_permalink() . "#more-{$post->ID}\">Read more</a></div>";
}
add_filter('the_content_more_link', 'corpus_wp_readmore_link', 100, 2);

/**
 * @todo Delete this function
 */
/*
function corpus_js_generator(){
    ?>
        <script type='text/javascript'>
            function rgb2hex(rgb) {
                var returnColor = '';

                if(rgb == undefined) {
                    return undefined;
                } else {
                    rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
                    function hex(x) {
                        return ("0" + parseInt(x).toString(16)).slice(-2);
                    }
                    returnColor = hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]) 
                    return "#" + returnColor.toUpperCase();
                }
            }
            
            var colorObj = {};
            colorObj = {
                'site_title_c' : '.site-title a',
                'site_desc_c' : '.site-description',
                'blog_p_title_c' : '.loop-post-title h1 a',
                'blog_p_meta_c' : '.loop-post-meta',
                'blog_p_content_c' : '.loop-post-excerpt p',
                'readmore_c' : '.read-more a',
                'p_title_c' : '.post-template .post-title h1',
                'p_meta_c' : '.post-template .post-meta',
                'p_content_c' : '.post-template .post-content',
                'p_link_c' : '.post-template .post-content a:link',
                'p_link_v_c' : '.post-template .post-content a:visited',
                'p_link_h_c' : '.post-template .post-content a:hover',
            };
            
            var colorbgObj = {};
            colorbgObj = {
                'blog_style_date_c_bg' : '.loop-stylish-date .loop-stylish-date-month',
                'readmore_c_bg' : '.read-more a',
            }

            for (var prop in colorObj) {
                var myOutput = '';
                myOutput += '\'' + prop + '\'' + ' : ' + '\'' + rgb2hex(jQuery(colorObj[prop]).css('color')) + '\',';
                document.write(myOutput);
            }

            for (var prop in colorbgObj) {
                var myOutput = '';
                myOutput += '\'' + prop + '\'' + ' : ' + '\'' + rgb2hex(jQuery(colorbgObj[prop]).css('backgroundColor')) + '\',';
                document.write(myOutput);
            }

        </script>
    <?php
}
add_action('wp_footer','corpus_js_generator');
 * 
 */


