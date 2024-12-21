<?php
function persian_to_english_numbers($string) {
    $persian_numbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $english_numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    
    return str_replace($persian_numbers, $english_numbers, $string);
}

// Hook the function to a filter
add_filter('the_content', 'convert_persian_numbers_in_content');

function convert_persian_numbers_in_content($content) {
    return persian_to_english_numbers($content);
}