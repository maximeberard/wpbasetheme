<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


<div class="page-container" data-node-type="page" id="page-container-404">

    <div class="page-content-title">
        <div class="container">

            <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>

        </div>
    </div>

    <div class="page-content">
        <div class="container">

            <div class="col-sm-12">
                <div class="page-content-col-inner">
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>
                </div>
            </div>
            
        </div>
    </div>

</div>

<?php get_footer(); ?>
