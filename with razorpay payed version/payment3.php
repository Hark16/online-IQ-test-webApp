
<?php

include 'znmd2010/katrina.php';
if(isset($_GET['amt']) && isset($_GET['username'])){

$amt1 = mysqli_real_escape_string($conn, $_GET['amt']);
$amt= filter_var($amt1, FILTER_SANITIZE_STRING);
$username1 = mysqli_real_escape_string($conn, $_GET['username']);
$username= filter_var($username1, FILTER_SANITIZE_STRING);

    $payment_status="you did not add balance for question credit";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"insert into payment(username, amount, payment_status, added_on) values('$username', '$amt', '$payment_status', '$added_on')");
    $_SESSION['OID'] = mysqli_insert_id($conn);
}


if(isset($_GET['payment_id']) && isset($_SESSION['OID'])){

$payment_id1 = mysqli_real_escape_string($conn, $_GET['payment_id']);
$payment_id= filter_var($payment_id1, FILTER_SANITIZE_STRING);

    mysqli_query($conn, "update payment set payment_status='your payment is done for 1 question credit',payment_id='$payment_id' where id='".$_SESSION['OID']."'");


$sql1 = "SELECT * FROM payment where id= '".$_SESSION['OID']."'";
$result1 = mysqli_query($conn, $sql1);
mysqli_num_rows($result1) ;
$row1 = mysqli_fetch_array($result1);

$username = $row1['username'];

$sql2 = "SELECT * FROM vidyarthi where username= '$username'";
$result2 = mysqli_query($conn, $sql2);
mysqli_num_rows($result2) ;
$row2 = mysqli_fetch_array($result2);

$old_credits = $row2['question_credits'];
$new_credits = $old_credits + 1;
$_SESSION['username'] = $username;

$msg= "Congratulation your 1 question credit added on your account";
$date=date("d/m/Y");

$inswork= "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg', '$date')";
mysqli_query($conn, $inswork);
$update1 = "UPDATE vidyarthi SET notification = '1' WHERE username = '$username' ";
mysqli_query($conn, $update1);

$update2 = "UPDATE vidyarthi SET question_credits = '$new_credits' WHERE username = '$username' ";
mysqli_query($conn, $update2);

}
?>
