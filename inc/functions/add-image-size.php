<?php
add_action('after_setup_theme', 'custom_image_sizes');
function custom_image_sizes() {
    // add_image_size( name, width, height, crop )
    add_image_size('custom-crop', 120, 120, true);
}


add_filter('woocommerce_get_image_size_gallery_thumbnail', function($size) {
    return array(
        'width' => 70,
        'height' => 70,
        'crop' => true,
    );
});





/*
function display_custom_sizes($sizes) {
    return array_merge($sizes, array(
        'custom-crop' => __('Custom Crop')
    ));
}
add_filter('image_size_names_choose', 'display_custom_sizes');
*/
