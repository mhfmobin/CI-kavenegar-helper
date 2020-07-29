<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__ . '/vendor/autoload.php';

if (!function_exists('sendsms')) {
    function sendsms($api_key, $receptor, $message, $sender = "10008663") {
        $api = new \Kavenegar \KavenegarApi($api_key);
        return $api->Send($sender, $receptor, $message);
    }
}

if (!function_exists('sendotp')) {
    function sendotp($api_key, $receptor, $otp_template, $token, $token2 = null, $token3 =null) {
        $api = new \Kavenegar \KavenegarApi($api_key);
        return $api->VerifyLookup($receptor, $token, $token2, $token3, $otp_template);
    }
}

