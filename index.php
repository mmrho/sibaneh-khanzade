<?php get_header(); ?>
<main id="site-main" class="container">
<?php
    require_once THEME_TEMPLATE . "layout/home/top-slider.php";
    require_once THEME_TEMPLATE . "layout/home/new-products.php";
    require_once THEME_TEMPLATE . "layout/home/iran-apps.php";
    require_once THEME_TEMPLATE . "layout/home/important-apps.php";
    require_once THEME_TEMPLATE . "layout/home/categories.php";
    require_once THEME_TEMPLATE . "layout/home/bottom-banners.php";
    ?>
</main>
<?php get_footer(); ?>