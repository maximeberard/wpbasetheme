<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <?php 
        $lang = get_locale() == 'fr_FR' ? 'fr' : 'en';
        $homeId = 26;
        $homeIdLocale = $lang == 'fr' ? 26 : 80; ?>
    
    <div class="page-container" data-node-type="page" id="page-container-home">
        
        <!-- HEADER -->
        <div class="page-header" id="page-header-home" style="background-image:url(<?php echo get_the_post_thumbnail_url($homeId); ?>);">
                <img class="page-header-logo" src="<?php echo get_template_directory_uri(); ?>/img/GROOM_aniamtion_logo_static_white_fast59.png" alt="WPBaseTheme">
        </div>
        
        <!-- CONTENT -->
        <div class="page-content" id="home-content">

            <div class="container">
                <div class="row">
                    
                    <?php $home = get_post($homeIdLocale); ?>
                    <?php echo $home->post_content; ?>

                </div>
            </div>

        </div>

        <div class="home-images" id="home-images">
            <div class="container home-images-container">
                <div class="home-image-col col-sm-6" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/cocktail.jpg);"></div>
                <div class="home-image-col home-image-col-text col-sm-3">
                    <?php
                        $field = get_field('focus_text', $homeIdLocale);  
                        echo $field;
                    ?>
                    <!-- <strong>en mai, bois ce qu’il te plait</strong><br> cocktail : on the rhône again -->
                </div>
                <div class="home-image-col col-sm-3" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/cocktail.jpg);"></div>
            </div>
        </div>
        
        <!-- EVENTS -->
        <div class="home-events" id="home-events">
                
            <div class="container">
                <div class=" row">

                    <h2 class="page-title page-subtitle home-events-title"><?php _e('Events of the week','theme-text-domain'); ?></h2>
                    <!-- Les évènements de la semaine -->

                    <?php
                        $startDate = date('Y-m-d');
                        $endDate = date('Y-m-d', strtotime('+1 week'));
                        $events = tribe_get_events( array(
                            'posts_per_page' => 5,
                            'start_date' => $startDate
                            // 'end_date' => $endDate
                        ) );

                        // var_dump($events);

                        foreach ($events as $post) {
                            // var_dump($post);
                            $categories = wp_get_post_terms( $post->ID, Tribe__Events__Main::TAXONOMY );
                            echo '<div class="event home-event col-sm-6 col-md-3">'; // event-block
                                echo '<a class="event-link home-event-link" href="'.get_permalink($post->ID).'">';
                                    echo '<figure class="event-image home-event--image">';
                                        echo get_the_post_thumbnail($post->ID, 'medium');
                                    echo '</figure>';
                                    echo '<div class="event-date home-event-date">';
                                        echo tribe_get_start_date($post->ID, true, 'D').' <span>'.tribe_get_start_date($post->ID, true, 'd.m').'</span> ';
                                        if($categories) echo ' / '.$categories[0]->name;
                                    echo '</div>';
                                    echo '<h3 class="event-title home-event-title">'.$post->post_title.'</h3>';
                                echo '</a>';
                            echo '</div>';
                        }
                    ?>
                        
                    <?php $eventUrl = get_locale() == 'fr_FR' ? '/agenda' : '/en/agenda' ; ?>
                    <a class="col-sm-12" href="<?php echo $eventUrl; ?>"><?php _e('See full agenda','theme-text-domain'); ?></a>

                </div>
            </div>

        </div>
        
    </div>

<?php get_footer(); ?>
