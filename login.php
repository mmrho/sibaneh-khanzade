<?php
/* template name: login */
get_header();
?>
<main id="site-main" class="container">
    <div class="row">
        <div class="sibaneh-form col-12">
            <?php require THEME_TEMPLATE . "login/template/loginForm.php"; ?>
        </div>
    </div>

    <div class="row links-panel">
        <div class="col-12">
            <a href="#">ارتباط با پشتیبانی</a>
        </div>
    </div>
</main>
<?php get_footer(); ?>