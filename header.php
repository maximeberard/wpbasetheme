<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>

    <?php 
        $url = $wp->request;
        $pageTitle = get_the_title(get_the_ID());
        $title = get_bloginfo('name').' - '.get_bloginfo('description');

        // if(get_field('meta_title')){
        //     $title = get_field('meta_title');
        // }
    ?>
    <title><?php echo $title; ?></title>

    <?php 
        $metaDescription = 'WPBaseTheme - SiteDescription';
        // if(get_field('meta_description')){
        //     $metaDescription = get_field('meta_description');
        // }
    ?>

    <meta name="description" content="<?php echo $metaDescription; ?>">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/safari-pinned-tab.svg" color="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Facebook  -->
    <meta property="og:title" content="WPBaseTheme - SiteDescription" />
    <meta property="og:site_name" content="WPBaseTheme" />
    <meta property="og:description" content="WPBaseTheme - SiteDescription" />
    <meta property="og:url" content="http://www.url.com" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/share-image.jpg" />
    <meta property="og:type" content="website" />
    <!-- Google plus  -->
    <meta itemprop="name" content="WPBaseTheme - SiteDescription" />
    <meta itemprop="description" content="WPBaseTheme - SiteDescription" />
    <meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/img/share-image.jpg" />
    <!-- Twitter  -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="WPBaseTheme - SiteDescription" />
    <meta name="twitter:description" content="WPBaseTheme - SiteDescription" />
    <meta name="twitter:site" content="@twitteraccount" />
    <meta name="twitter:url" content="http://www.url.com" />
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/share-image.jpg" />

    <!--
     # Gulp injected styles
     # Using gulp-inject
     # @see gulp-tasks/inject.js
     -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor-ca20979732.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-ba992f61b0.css">
    <!-- endinject -->

    <script src="<?php echo get_template_directory_uri(); ?>/vendor/modernizr-custom.js"></script>
</head>

<body <?php body_class(); ?> id="<?php echo $postName; ?>">

<div id="svg-sprite" style="display:none;">
    <?php include('svg/sprite.php'); ?>
</div>

<div id="navbar" class="visible-xs">
    <div id="nav-btn">
        <div class="nav-btn-bar" id="nav-btn-bar-1"></div>
        <div class="nav-btn-bar" id="nav-btn-bar-2"></div>
        <div class="nav-btn-bar" id="nav-btn-bar-3"></div>
    </div>
    <div id="navbar-logo">
    </div>
</div>

<nav id="nav" data-node-type="nav">

    <div class="container" id="nav-container">
        <div class="row" id="nav-row">
            
            <div id="nav-list">
                <?php wp_nav_menu(); ?>
            </div>

            <!-- <div id="nav-lang">
                <?php do_action('wpml_add_language_selector'); ?>
            </div> -->

        </div>
    </div>

    <div id="nav-close" class="visible-xs"></div>
</nav>

<div id="nav-overlay"></div>

<div id="main-container">

