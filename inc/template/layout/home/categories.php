<?php
if (THEME_OPTIONS['software-page-categories-status'] === "enable") {
?>
  <div class="row panel-title has-border justify-content-between">
    <div class="title col-9">
      <h3><?php echo THEME_OPTIONS['software-page-categories-title']; ?></h3>
    </div>
    <div class="side link col-3 align-self-center">
      <a href="<?php echo THEME_OPTIONS['software-page-categories-more-btn-link']; ?>"><?php echo THEME_OPTIONS['software-page-categories-more-btn-title']; ?></a>
    </div>
  </div>
  <div class="container category-panel">
    <div class="col-12">
      <?php
      $categoriesItems = THEME_OPTIONS['software-page-categories-items'];
      if (!empty($categoriesItems)) {
        foreach ($categoriesItems as $categoryItem) {
       
          $getTerm = get_term($categoryItem, 'product_cat');
      
          if (!$getTerm || is_wp_error($getTerm)) {
            continue;
          }
      ?>

          <div class="row category-row">

            <a href="<?php echo esc_url(get_term_link($getTerm->term_id, 'product_cat')); ?>">
              <div class="image col-2">
                <?php
                $getThumbnailID = get_term_meta($getTerm->term_id, 'thumbnail_id', true);
                echo wp_get_attachment_image($getThumbnailID, 'thumbnail', ['class' => 'img-fluid', 'alt' => $getTerm->name]);
                ?>
              </div>
              <div class="title col-10">
                <strong><?php echo $getTerm->name; ?></strong>
              </div>
            </a>
          </div>

      <?php
        }
      }
      ?>
    </div>
  </div>
<?php
}
?>
