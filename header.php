<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>سیبانه</title>
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.rtl.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="assets/fonts/icons/css/icons.css">
    <link rel="stylesheet" href="style.css">
    -->
    
    <?php wp_head(); ?>
</head>
<body <?php body_class()?>>

<header id="site-header" class="container">
    <div class="row panel-title justify-content-between">
      <?php 
      require_once THEME_TEMPLATE . "layout/header/title.php";
      require_once THEME_TEMPLATE . "layout/header/search-btn.php";
      ?>
        
    </div>
</header>