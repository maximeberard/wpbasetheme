<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<?php 
    $pageID = get_the_ID();
    $page = get_post($pageID);
?>
    <div class="page-container page-container-single" data-node-type="single" id="page-container-single-<?php echo $page->post_name; ?>" data-node-name="<?php echo $page->post_name; ?>" data-is-home="0" data-meta-title="<?php wp_title(); ?>">
        
        <div class="page-content single-content" id="<?php echo $page->post_name; ?>-content">

        	<div class="container-fluid single-header-image">
        		<?php the_post_thumbnail('large', array('class' => 'img-responsive single-header-img')); ?>
        	</div>
            
            <div class="container">
        		<h1 class="page-title single-title"><?php the_title(); ?></h1>
			</div>
			
			<div class="container">
                <div class="text single-content-text" id="<?php echo $page->post_name; ?>-content-text">
                    <?php the_content(); //echo wpautop($page->post_content); // the_content(); // ?>
                </div>
            </div>

        </div>

    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
