<div class="row">
        <div id="top-slider" class="col-12">
            <div class="top-slider owl-carousel">
                <?php
                $slides = THEME_OPTIONS['software-page-slider-items'];
                foreach ($slides as $slide) {
                ?>
                <div class="item">
                    <a  target="_blank" href="<?php echo $slide['url']; ?>">
                    <img class="img-fluid" src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title'] ?>"/>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>