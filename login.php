<?php
/* template name: login */
get_header();
?>
<main id="site-main" class="container">
    <div class="row">
        <div class="sibaneh-form col-12">
            <form id="loginForm" method="post">
                <fieldset>
                    <label for="mobile">شماره موبایل خود را وارد نمایید:</label>
                    <span class="input-icon"><i class="icon-mobile"></i></span><input class="input" type="number" id="mobile"
                        name="mobile" />
                </fieldset>
                <fieldset>
                    <button type="submit">ورود به سیبانه</button>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="row links-panel">
        <div class="col-12">
            <a href="#">ارتباط با پشتیبانی</a>
        </div>
    </div>
</main>
<?php get_footer(); ?>