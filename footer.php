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
