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
    <div id="ajax-container"></div>
</div>

<footer id="footer">
</footer>

<div id="cookiesconsent"></div>


<?php // wp_footer(); ?>

    <?php $devMode = (get_site_url() == 'http://localhost:8888/website'); // true - false ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.js"></script>
    <script>
        var temp = {
            baseUrl : '<?php echo get_site_url(); ?>'
        };

        // Cookie consent
        window.addEventListener('load', function () {
            window.cookieconsent.initialise({
                container: document.getElementById("cookiesconsent"),
                // location: true,
                // revokable: false,
                // law: {
                //     regionalLaw: false,
                // },
                content: {
                    message: "En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies à des fins de mesures d’audience.",
                    dismiss: "Fermer",
                    link: "En savoir plus",
                    href: "<?php echo get_permalink($legalsId); ?>"
                }
            })
        });

        // Browser update — www.browser-update.org/customize.html
        var $buoop = {
            vs: { i:9, f: 15, o: 12.1, s: 5.1, c: 2 },
            text:'Votre navigateur est périmé. Il contient des failles de sécurité et pourrait ne pas afficher certaines fonctionalités de ce site internet. <a href="http://browser-update.org/update-browser.html" target="_blank">Découvrez comment mettre votre navigateur à jour</a>'
        };

        function $buo_f(){
            var e = document.createElement("script");
            e.src = "https://browser-update.org/update.js";
            document.body.appendChild(e);
        }

        try {
            document.addEventListener("DOMContentLoaded", $buo_f,false)
        } catch (e){
            window.attachEvent("onload", $buo_f)
        }

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
