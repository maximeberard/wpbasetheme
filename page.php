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
    $imageSide = get_field('image_side');
?>

<div class="page-container" data-node-type="page" id="page-container-<?php echo $page->post_name; ?>">

    <div class="page-content-title">
        <div class="container">

            <h1 class="page-title"><?php echo $page->post_title; ?></h1>
            <?php if(get_field('subtitle', $pageID)){ ?>
                <h2 class="page-subtitle"><?php echo get_field('subtitle'); ?></h2>
            <?php } ?> 

        </div>
    </div>

    <div class="page-content page-content-2-cols page-content-page">

        <div class="page-content-inner">
            <div class="container">

                <?php 
                    $page = get_post($pageID);
                    $images = get_field('images', $pageID); 
                    $imageIndex = 0;
                ?>
                
                <?php if($images){ ?>
                <div class="page-content-images-cont col-sm-12">

                    <div class="page-block page-content-images page-content-2-cols-images- page-content-images-page" data-node-type="images-carousel" id="images-carousel-<?php echo $page->post_name; ?>">

                    <?php 
                        
                        foreach ($images as $image) {
                            $imageClasses = 'page-content-2-cols-image';
                            if($imageIndex === 0) $imageClasses .= ' active';
                            echo '<figure class="'.$imageClasses.'">';
                                echo '<img class="page-content-2-cols-img" src="'.$image['url'].'">';
                            echo '</figure>';
                            $imageIndex++;
                        }                    ?>

                    <?php if (count($images) > 1) { ?>
                    <div class="carousel-nav">
                        <div class="carousel-nav-arrow left">
                            <svg class="carousel-nav-icon concept-members-nav-icon">
                                <use xlink:href="#icon-chevron-left"></use>
                            </svg>
                        </div>
                        <div class="carousel-nav-arrow right">
                            <svg class="carousel-nav-icon concept-members-nav-icon">
                                <use xlink:href="#icon-chevron-right"></use>
                            </svg>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <?php } ?>

                <div class="page-content-col col-sm-10 col-sm-offset-1">
                    <div class="page-content-col-inner page-content-col-inner-page">

                        <?php echo wpautop($page->post_content); ?>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>


<?php get_footer(); ?>
