
<?php

include 'znmd2010/katrina.php';
include 'znmd2010/chabi.php';

include 'razorpay-php/Razorpay.php'; //include library

$amount = $amt1 * 100;

use Razorpay\Api\Api;

$api= new Api($api_key, $api_secret);

$order  = $api->order->create([
    'receipt'         => $transaction_id, // generate your own transaction id
    'amount'          => $amount, // amount in the smallest currency unit
    'currency'        => $cur,
    'payment_capture' =>  '1' 
  ]);

$_SESSION['order_id'] = $order->id;
$_SESSION['api_key'] = $api_key;
$_SESSION['amount'] = $amount;
$_SESSION['cur'] = $cur;

header("Location: payNow.php");
?>
