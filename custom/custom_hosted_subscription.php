<?php

require("config.php");
// echo '<pre>';
// print_r($_POST);exit;
$nonce = $_POST["payment_method_nonce"];
// echo $nonce;exit;


$result = Braintree_Customer::create(array(
    'firstName' => 'Mike jordan',
    'lastName' => 'Jones',
    'company' => 'Jones Co.',
    'email' => 'mike.jones@example.com',
    'phone' => '281.330.8004',
    'fax' => '419.555.1235',
    'website' => 'http://example.com'
));



$cust_id  = $result->customer->id;

$nonce = $_POST['payment_method_nonce'];
$result_res = Braintree_PaymentMethod::create(array(
    'customerId' => $cust_id,
    'paymentMethodNonce' => $nonce
));
// echo '<pre>';
// print_r($result_res);exit;
echo 'Customer id successfully created==>'.$result_res->paymentMethod->customerId;
$cust_id =  $result_res->paymentMethod->customerId;
$token =  $result_res->paymentMethod->token;



// exit;


//create sub
$result = Braintree_Subscription::create(array(
  'paymentMethodToken' => $token,
  'planId' => 'pss6'
));

echo "<pre>";
print_r($result);
echo "</pre>";exit;


?>
