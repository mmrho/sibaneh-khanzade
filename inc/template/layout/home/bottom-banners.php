<?php
if (THEME_OPTIONS['software-page-bottom-slider-status'] === "enable") {
    ?>
 <div class="row product-panel banner-box-panel" style=" margin-bottom: 30px;"  >
        <div class="col-12">
            <div dir="ltr" class="banner-box owl-carousel">
            <?php
                $slides = THEME_OPTIONS['software-page-bottom-slider-items'];
                foreach ($slides as $slide) {
                ?>
                <div class="item">
                    <a target="_blank" href="<?php echo $slide['url']; ?>">
                    <img class="img-fluid" src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title'] ?>"/>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
 </div>
 <?php
}
  ?>