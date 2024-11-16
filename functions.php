<?php
define('THEME_ASSETS', get_template_directory_uri() . '/assets/');
define('THEME_NODE', get_template_directory_uri() . '/node_modules/');
const THEME_JS = THEME_ASSETS . 'js/',
THEME_CSS = THEME_ASSETS . 'css/',
THEME_VERSION = '1.0';
define("THEME_IMG", get_template_directory_uri() . '/images/');
define('THEME_TEMPLATE', get_template_directory() . '/inc/template/');
define('THEME_OPTIONS', get_option('themeOptions'));
require_once "vendor/autoload.php";