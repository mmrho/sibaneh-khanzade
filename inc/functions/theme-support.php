<?php
function sibaneh_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
}
add_action( 'after_setup_theme', 'sibaneh_theme_support' );