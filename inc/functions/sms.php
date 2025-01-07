<?php
function send_sms_to_user($mobile, $message)
{
    $username = '9148900258';
    $api_key = 'jhQlhK32XavjtnvSyR1gmhCOtmnUYATalpc7jX0gQEFMUPqK';
    $line_number = '30004802149440';

    $url = 'https://api.sms.ir/v1/send';
    $args = array(
        'username' => $username,
        'password' => $api_key,
        'line' => $line_number,
        'mobile' => $mobile,
        'text' => $message
    );

    $response = wp_remote_get(add_query_arg($args, $url));

    if (is_wp_error($response)) {
        return false;
    }

    return true;
}