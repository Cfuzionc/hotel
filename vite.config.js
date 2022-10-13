import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins:     [
        laravel({
            input: [
                // CSS
                'resources/css/app.css',
                'resources/css/bundle.min.css',
                'resources/css/jquery.fancybox.min.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/swiper.min.css',
                'resources/css/cubeportfolio.min.css',
                'resources/css/navigation.css',
                'resources/css/settings.css',
                'resources/css/slick.css',
                'resources/css/slick-theme.css',
                'resources/css/select2.min.css',
                'resources/css/style.css',
                'resources/css/custom.css',

                //SCSS
                'resources/sass/styles.scss',
                'resources/sass/app.scss',

                // SCRIPTS
                'resources/js/app.js',
                'resources/js/bundle.min.js',
                'resources/js/jquery.fancybox.min.js',
                'resources/js/owl.carousel.min.js',
                'resources/js/swiper.min.js',
                'resources/js/jquery.appear.js',
                'resources/js/jquery.cubeportfolio.min.js',
                'resources/js/parallaxie.min.js',
                'resources/js/wow.min.js',
                'resources/js/select2.min.js',
                'resources/js/slick.min.js',
                'resources/js/jquery.themepunch.tools.min.js',
                'resources/js/jquery.themepunch.revolution.min.js',
                'resources/js/extensions/revolution.extension.actions.min.js',
                'resources/js/extensions/revolution.extension.carousel.min.js',
                'resources/js/extensions/revolution.extension.kenburn.min.js',
                'resources/js/extensions/revolution.extension.layeranimation.min.js',
                'resources/js/extensions/revolution.extension.migration.min.js',
                'resources/js/extensions/revolution.extension.navigation.min.js',
                'resources/js/extensions/revolution.extension.parallax.min.js',
                'resources/js/extensions/revolution.extension.slideanims.min.js',
                'resources/js/extensions/revolution.extension.video.min.js',
                'resources/js/script.js'
            ],
            refresh: true,
        }),
    ],
});
