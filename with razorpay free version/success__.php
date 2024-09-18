
<?php

include 'znmd2010/katrina.php';

$select = "SELECT * FROM admin_payment_details WHERE id='1'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

use Stripe\Stripe;
require 'vendor/autoload.php';

  \Stripe\Stripe::setApiKey($row['sk']);

  $session = \Stripe\Checkout\Session::retrieve($_REQUEST['session_id']);
  $customer = \Stripe\Customer::retrieve($session->customer);
$username = $_SESSION['username'];

if(isset($_GET['session_id']) && isset($_SESSION['OID'])){

$payment_id = $session->payment_intent;
$oid = $_SESSION['OID'];

    mysqli_query($conn, "update payment set payment_status='your payment is done',payment_id='$payment_id' where id='$oid'");

$sql2 = "SELECT * FROM vidyarthi where username= '$username'";
$result2 = mysqli_query($conn, $sql2);
mysqli_num_rows($result2) ;
$row2 = mysqli_fetch_array($result2);

$old_credits = $row2['question_credits'];
$new_credits = $old_credits + 1;
$_SESSION['username'] = $username;

$msg= "Congratulation your 1 Question credit added on your account";
$date=date("d/m/Y");

$inswork= "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg', '$date')";
mysqli_query($conn, $inswork);
$update1 = "UPDATE vidyarthi SET notification = '1' WHERE username = '$username' ";
mysqli_query($conn, $update1);

$update2 = "UPDATE vidyarthi SET question_credits = '$new_credits' WHERE username = '$username' ";
mysqli_query($conn, $update2);

header("Location: profile_main.php");

}

?>
