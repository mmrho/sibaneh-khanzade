<?php
function register_meta_box(){
    add_meta_box( 
        "ProductMetaBox",
        "فیلدها",
        "ProductMetaBoxcallback",
        "product",
        "normal",
        "low",
        null
    );
}
add_action('add_meta_boxes', 'register_meta_box');
function ProductMetaBoxCallback($post)
{
    wp_nonce_field( 'wbs_product_nonce', 'wbs_product_nonce' );
?>
    <p class="form-field">
        <label for="app_title">عنوان اپ</label>
        <input class="regular-text" type="text" value="<?php echo get_post_meta($post->ID, 'app_title',true); ?>" name="app_title" id="app_title">
    </p>

<?php
}

function ProductMetaSave($post_id)
{
    $nonce = sanitize_text_field($_POST['wbs_product_nonce']);

    if ( ! wp_verify_nonce( $nonce, 'wbs_product_nonce' ) ) {
        return false;
    }

    if (isset($_POST['app_title'])) {
        update_post_meta($post_id, 'app_title', WbsUtility::inputClean($_POST['app_title']));
    }
}

add_action('save_post', 'wbsProductMetaSave');