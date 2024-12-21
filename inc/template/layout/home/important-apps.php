<?php
if (THEME_OPTIONS['software-page-important-status'] === "enable") {
    ?>
    <div class="row panel-title has-border justify-content-between">
        <div class="title col-9">
            <h3><?php echo THEME_OPTIONS['software-page-important-title']; ?></h3>
        </div>
        <div class="side link col-3 align-self-center">
          <a href="<?php echo THEME_OPTIONS['software-page-important-more-btn-link']; ?>"><?php echo THEME_OPTIONS['software-page-important-more-btn-title']; ?></a>
        </div>
    </div>
    <div class="row product-panel large-thumb-slider-panel">
        <div class="col-12">
        <div dir="ltr" class="large-thumb-slider owl-carousel">
        <?php
            $args = [
                'post_type' => 'product',
                'post_status' => 'publish',
                'posts_per_page' => THEME_OPTIONS['software-page-important-itemsInPage'],
            ];
            switch (THEME_OPTIONS['software-page-important-type']) {
                case '1':
                    $args['orderby'] = 'rand';
                    break;
                case '2':
                    $args['tax_query'] = [
                        [
                            'taxonomy' => 'product_cat',
                            'field' => 'term_id',
                            'terms' => THEME_OPTIONS['software-page-important-categories'],
                        ]
                    ];
                    break;
                case '3':
                    $args['tax_query'] = [
                        [
                            'taxonomy' => 'product_tag',
                            'field' => 'term_id',
                            'terms' => THEME_OPTIONS['software-page-important-tags'],
                        ]
                    ];
                    break;
                case '4':
                    $args['post__in'] = THEME_OPTIONS['software-page-important-products'];
                    break;
                case '5': // پرفروش‌ترین‌ها
                    $args['meta_key'] = 'total_sales';
                    $args['orderby'] = 'meta_value_num';
                    $args['order'] = 'DESC';
                    break;
                case '6': // محبوب‌ترین‌ها
                    $args['meta_key'] = 'popularity';
                    $args['orderby'] = 'meta_value_num';
                    $args['order'] = 'DESC';
                    break;
            }
            $query = new WP_Query($args);
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                global $product;
                require THEME_COMPONENTS . "cards/product-col-card.php";
            endwhile; endif;
            wp_reset_postdata(); ?>
 </div>
        </div>
    </div>

    <?php
}
?>