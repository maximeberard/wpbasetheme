requirejs.config({
    baseUrl: '/wp-content/themes/wpbasetheme/dist',
    paths: {
        /*
         * CDN dependencies
         * TweenLite should not be loaded if TweenMax is used
         * except for optional libs like Draggable.
         */
        jquery: '//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min',
        TweenMax: "//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min",
        TweenLite: "//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenLite.min",
        // Internal dep
        Lazyload: '/wp-content/themes/wpbasetheme/bower_components/vanilla-lazyload/dist/lazyload',
        waitForImages: '/wp-content/themes/wpbasetheme/bower_components/waitForImages/dist/jquery.waitforimages.min',
        scrollTo: "/wp-content/themes/wpbasetheme/bower_components/gsap/src/minified/plugins/ScrollToPlugin.min",
        isMobile: "/wp-content/themes/wpbasetheme/bower_components/isMobile/isMobile.min",
        actual: "/wp-content/themes/wpbasetheme/bower_components/jquery.actual/jquery.actual.min",
        Hammer: "/wp-content/themes/wpbasetheme/bower_components/hammerjs/hammer.min",
        loglevel: "/wp-content/themes/wpbasetheme/bower_components/loglevel/dist/loglevel.min",
        // Utils functions and classes
        "utils/utils": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/utils/utils",
        "utils/polyfills": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/utils/polyfills",
        "utils/debounce": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/utils/debounce",
        "utils/scroll": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/utils/scroll",
        "utils/gaTrackErrors": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/utils/gaTrackErrors",
        "utils/bootstrapMedia": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/utils/bootstrapMedia",
        // Include current page-block sources from their location in bower_components
        // if you are using bower to fetch this lib.
        "state": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/state",
        "router": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/router",
        "graphicLoader": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/graphicLoader",
        "abstract-nav": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/abstract-nav",
        "abstract-page": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/abstract-page",
        "abstract-block": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/abstract-block",
        "cache-provider": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/cache-provider",
        // If you want to use example Page and Home classes in your project
        // "pages/page": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/pages/page",
        // "pages/home": "/wp-content/themes/wpbasetheme/bower_components/starting-blocks/dist/pages/home"
    }
});

require(['main']);
