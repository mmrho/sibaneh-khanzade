<div class="row product-row justify-content-between">
    <div class="image col-3">
        <?php echo $product->get_image("woocommerce_gallery_thumbnail"); ?>
    </div>
    <div class="title col-5">
        <strong><?php the_title(); ?></strong>
    </div>
    <div class="action col-4">
        <a class="button" href="<?php the_permalink(); ?>"><?php echo $product->get_price() ? number_format($product->get_price()). " " . get_woocommerce_currency_symbol() : "رایگان"; ?></a>
    </div>
</div>