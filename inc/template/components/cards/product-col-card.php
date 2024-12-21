<div class="item">
 <div class="image"><img src=" <?php echo $product->get_image("woocommerce_thumbnail"); ?>" alt="<?php the_title(); ?>"/></div>
 <div class="title"><?php the_title(); ?></div>
 <div class="action">
     <a class="button small" href="<?php the_permalink(); ?>"><?php echo $product->get_price() ? number_format($product->get_price()). " " . get_woocommerce_currency_symbol() : "رایگان"; ?></a>
 </div>
</div>
