<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
    
<?php 
    $pageID = get_the_ID();
    $page = get_post($pageID);
?>

<div class="page-container" data-node-type="page" id="page-container-<?php echo $page->post_name; ?>">

    <div class="page-content-title">
        <div class="container">

            <h1 class="page-title"><?php echo $page->post_title; ?></h1>

        </div>
    </div>

    <div class="page-content page-content-page">

        <div class="container">

            <div class="page-content-col col-sm-12">
                <?php echo wpautop($page->post_content); ?>
            </div>

        </div>

    </div>

</div>


<?php get_footer(); ?>
