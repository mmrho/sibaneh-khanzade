<?php
function wbs_create_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'verifications';
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id BIGINT NOT NULL AUTO_INCREMENT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        phone VARCHAR(11) NOT NULL,
        code VARCHAR(5) NOT NULL,
        status ENUM('pending', 'verified', 'rejected', 'expired', 'cancelled') DEFAULT 'pending',
        PRIMARY KEY (id)
    ) $charset_collate;";
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_switch_theme', 'wbs_create_table');
