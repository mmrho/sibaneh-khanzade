<div class="row panel-title has-border justify-content-between">
    <div class="title col-9">
        <h3>اپلیکیشن های جدید</h3>
    </div>
    <div class="side link col-3 align-self-center">
        <a href="#">بیشتر</a>
    </div>
</div>
<div class="row product-panel">
    <div class="col-12">
        <?php
        $args = [
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => 5,
        ];
        $query = new WP_Query($args);
        if ($query->have_posts()){
            while ($query->have_posts()){
                $query->the_post();
                global $product;
                require THEME_COMPONENTS . "cards/product-row-card.php";
            }
            wp_reset_postdata(); 
        }
        ?>
    </div>
</div>