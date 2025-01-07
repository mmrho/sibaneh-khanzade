<?php

class WbsVerification
{
    public $table;

    public function __construct()
    {
        $this->table = WPDBPREFIX . 'verifications';
    }

    public function create(array $data): bool
    {
        global $wpdb;
        return (bool)$wpdb->insert($this->table, $data);
    }

    public function check($phone)
    {
        global $wpdb;
        $result = $wpdb->get_var($wpdb->prepare("SELECT count(id) FROM $this->table WHERE phone = %s and status = 'pending'", $phone));
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
