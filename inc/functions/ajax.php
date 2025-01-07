<?php
function submitLoginFormCallback()
{
    check_ajax_referer('wbs_security', 'security', true);
    $phone = WbsUtility::convertFaNum2EN(WbsUtility::inputClean($_POST['phone']));
    

    if (!WbsUtility::wbsCheckPhone($phone)) {
        wp_die(json_encode(['status' => 'error', 'message' => 'شماره موبایل وارد شده صحیح نمی باشد!']));
    }

    $wbsVerification = new WbsVerification();
    $verification_code = rand(10000, 99999);
    $data = [
        'phone' => $phone,
        'code' => $verification_code
    ];

    if ($wbsVerification->check($phone)) {
        wp_die(json_encode(['status' => 'error', 'message' => 'شماره موبایل وارد شده قبلا ثبت شده است!']));
    }else{

    $wbsVerification->create($data);

    // Send SMS with verification code
    $message = "کد ورود به سیبانه
        *محتوای این پیامک را در اختیار دیگران قرار ندهید*
        code: " . $verification_code;
    send_sms_to_user($phone, $message);

    ob_start();
    require THEME_TEMPLATE . "login/template/verfiyForm.php";

    wp_die(json_encode(['status' => 'success', 'content' => ob_get_clean()]));
    }
   
}
add_action('wp_ajax_nopriv_submitLoginForm', 'submitLoginFormCallback');
/*
function verifyCodeCallback() {
    check_ajax_referer('wbs_security', 'security', true);
    
    $phone = WbsUtility::convertFaNum2EN(WbsUtility::inputClean($_POST['phone']));
    $entered_code = WbsUtility::convertFaNum2EN(WbsUtility::inputClean($_POST['code']));
    
    $wbsVerification = new WbsVerification();
    $stored_data = $wbsVerification->get($phone);
    
    if (!$stored_data) {
        wp_die(json_encode(['status' => 'error', 'message' => 'شماره موبایل یافت نشد']));
    }
    
    if ($stored_data['code'] === $entered_code) {
        // Code matches - create user session or login token here
        $wbsVerification->delete($phone); // Clean up verification data
        wp_die(json_encode(['status' => 'success', 'message' => 'کد تایید صحیح است']));
    } else {
        wp_die(json_encode(['status' => 'error', 'message' => 'کد تایید اشتباه است']));
    }
}

add_action('wp_ajax_nopriv_verifyCode', 'verifyCodeCallback');
*/