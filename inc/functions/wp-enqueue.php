<?php
function wbs_enqueue_scripts() {
    wp_enqueue_style( 'bootstrap-grid', THEME_CSS . 'bootstrap-grid.rtl.min.css' );
    wp_enqueue_style( 'bootstrap-reboot', THEME_CSS .  'bootstrap-reboot.rtl.min.css' );
    wp_enqueue_style( 'owl-carousel', THEME_ASSETS .  'plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-theme-default', THEME_ASSETS .  'plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css' );
    wp_enqueue_style( 'icons', THEME_ASSETS .  'fonts/icons/css/icons.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri(),[], THEME_VERSION );


    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url() . 'js/jquery/jquery.js', array(), '3.7.1', true);
    wp_enqueue_script('jquery');
   
/* 
 if (!is_admin()) {
    if (wp_script_is('jquery', 'registered')) {
        wp_deregister_script('jquery');
     }

    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), array(), '3.7.1', true);
    wp_enqueue_script('jquery');
    }
*/

    wp_enqueue_script('owl-carousel',THEME_ASSETS .  'plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js',['jquery'],THEME_VERSION, true);
    wp_enqueue_script('script',THEME_JS .  'script.js',['jquery'],THEME_VERSION, true);

}
add_action( 'wp_enqueue_scripts', 'wbs_enqueue_scripts');
