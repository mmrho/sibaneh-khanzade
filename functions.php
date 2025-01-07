<?php
global $wpdb;
define('WPDBPREFIX', $wpdb->prefix);
define('THEME_ASSETS', get_template_directory_uri() . '/assets/');
define('THEME_NODE', get_template_directory_uri() . '/node_modules/');
define("THEME_IMG", get_template_directory_uri() . '/images/');
define('THEME_TEMPLATE', get_template_directory() . '/inc/template/');
define('THEME_OPTIONS', get_option('themeOptions'));
const THEME_JS = THEME_ASSETS . 'js/',
THEME_CSS = THEME_ASSETS . 'css/',
THEME_COMPONENTS = THEME_TEMPLATE . 'components/',
THEME_VERSION = '1.1';

require_once "vendor/autoload.php";