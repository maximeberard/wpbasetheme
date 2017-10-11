<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

</div>

<footer id="footer">
    <div class="container footer-container">
        <div class="row">

            <div class="col-sm-6 col-md-3 footer-col footer-desc">
                <h3 class="footer-title">WPBaseTheme</h3>
                <?php dynamic_sidebar('footer-description'); ?>
            </div>
            <div class="col-sm-6 col-md-3 footer-col footer-contact">
                <h3 class="footer-title">Contact</h3>
                <?php dynamic_sidebar('footer-contact'); ?>
            </div>
            <div class="col-sm-6 col-md-3 footer-col footer-newsletter">
                <h3 class="footer-title footer-title-newsletter">Newsletter</h3>
                
            </div>
            <div class="col-sm-6 col-md-3 footer-col footer-socials">
                <h3 class="footer-title footer-title-socials"><?php _e('Follow us','theme-text-domain'); ?></h3>
                <a class="social-link" href="http://www.instagram.com" target="_blank">
                    <svg class="social-icon">
                        <use xlink:href="#icon-instagram"></use>
                    </svg>
                </a>
                <a class="social-link" href="http://www.facebook.com" target="_blank">
                    <svg class="social-icon">
                        <use xlink:href="#icon-facebook"></use>
                    </svg>
                </a>
                <a class="social-link" href="http://www.twitter.com" target="_blank">
                    <svg class="social-icon">
                        <use xlink:href="#icon-twitter"></use>
                    </svg>
                </a>
            </div>
        </div>
        
    </div>

    <div class="footer-credits-cont">
        <div class="container">
            <div class="row">
                <div class="col-md-12 footer-credits">
                    © WPBaseTheme - <a href="#" class="footer-link"><?php _e('Legals','theme-text-domain') ?></a> - <?php _e('Development','theme-text-domain'); ?> : <a class="footer-link" href="http://www.url.com" target="_blank">Maxime Bérard</a>
                </div>
            </div>
        </div>
    </div>
    
</footer>


<?php // wp_footer(); ?>

    <?php $devMode = false; ?>
    
    <script>
        var temp = {
            baseUrl : 'http://vagrantpress.dev',
            // baseUrl : 'http://www.url.com',
            devMode : false
        };

        // Analytics
        // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        // })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        // ga('create', 'UA-XXXXX', 'auto');
        // ga('send', 'pageview');

    </script>


<!-- JS scripts inclusions -->
    <?php 
    if(!$devMode){ ?>
    <!-- inject:js -->
    <script data-main="<?php echo get_template_directory_uri(); ?>/build/app-2a69ad1c6c.min.js" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.22/require.min.js"></script>
    <!-- endinject -->
    <?php }else{ ?>
        <script data-main="<?php echo get_template_directory_uri(); ?>/bootstrap.js" src="<?php echo get_template_directory_uri(); ?>/bower_components/requirejs/require.js"></script>
    <?php } ?>
</body>
</html>
