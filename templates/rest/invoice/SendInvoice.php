<?php
require_once('../../../autoload.php');
require_once('../../../includes/config.php');
$configArray = array(
    'ClientID' => $rest_client_id,
    'ClientSecret' => $rest_client_secret
);
$PayPal = new \angelleye\PayPal\rest\invoice\InvoiceAPI($configArray);


$InvoiceID = '';    // The ID of the invoice to send.



$returnArray = $PayPal->send_invoice($InvoiceID);
echo "<pre>";
var_dump($returnArray);
?>