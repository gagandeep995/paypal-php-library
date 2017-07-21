<?php
require_once('../../../autoload.php');
require_once('../../../includes/config.php');
$configArray = array(
    'ClientID' => $rest_client_id,
    'ClientSecret' => $rest_client_secret
);
$PayPal = new angelleye\PayPal\rest\payments\PaymentAPI($configArray);

$orderId = 'O-8BC98688LG524100U';               // OrderId From Return Object/Array When Created Payment With Paypal/ OrderGet.php

$returnArray = $PayPal->order_void($orderId);
echo "<pre>";
print_r($returnArray);
