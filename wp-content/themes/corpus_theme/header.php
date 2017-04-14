<?php
/*
 * Header Section of Corpus Theme.
 * 
 * @package Corpus
 */
?>
<!DOCTYPE html >
<!--[if IE 6]>
<html id="ie6" <?php language_attributes() ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes() ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes() ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes() ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head() ?>
<?php corpus_header_scripts() ?>
</head>

<body <?php body_class(); ?>>
    <div id="parent-wrapper" class="parent-wrapper grid-col-16">
        <div id="wrapper" class="wrapper grid-col-16">
            <?php if(!corpus_get_option('disable_header')): ?>
            <header class="header-bg-section clearfix">
                <div id="header-section" class="header-section grid-col-16 clearfix">
                    <div id="logo-section" class="logo-section grid-float-left"><?php corpus_logo() ?></div>
                        <?php if (!corpus_get_option('disable_menu_pri')): ?>
                        <div id="sidrmenu-section" class="sidrmenu-section"><?php corpus_nav('mobile') ?></div>
                        <div id="nav-section" class="nav-section grid-float-right">
                            <div id="primarymenu-resp" class="primarymenu-resp"><i class="mdf mdf-bars"></i><span>Menu</span></div>
                            <div id="primarymenu-section" class="primarymenu-section nav"><?php corpus_nav('primary') ?></div>
                        </div>
                        <?php endif; ?>
                </div><!-- header section ends -->
            </header><!-- header bg section ends -->
            <?php endif ?>
<?php corpus_content_sections() //Shows content sections ?>