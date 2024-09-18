
<?php

include 'znmd2010/katrina.php';

if(isset($_GET['amt']) && isset($_GET['username'])){
$amt1 = mysqli_real_escape_string($conn, $_GET['amt']);
$amt= filter_var($amt1, FILTER_SANITIZE_STRING);
$username1 = mysqli_real_escape_string($conn, $_GET['username']);
$username= filter_var($username1, FILTER_SANITIZE_STRING);

    $payment_status="you did not add balance";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"insert into payment(username, amount, payment_status, added_on) values('$username', '$amt', '$payment_status', '$added_on')");
$oid = mysqli_insert_id($conn);
    $_SESSION['OID'] = $oid;

echo $oid;
echo "<br/>first part done <br/>";

}


if(isset($_GET['payment_id']) && isset($_SESSION['OID'])){

$payment_id1 = mysqli_real_escape_string($conn, $_GET['payment_id']);
$payment_id= filter_var($payment_id1, FILTER_SANITIZE_STRING);
$oid = $_SESSION['OID'];

    mysqli_query($conn, "update payment set payment_status='your payment is done',payment_id='$payment_id' where id='$oid'");

echo $oid;
echo "<br/>second part done <br/>";

$sql1 = "SELECT * FROM payment where id= '".$_SESSION['OID']."'";
$result1 = mysqli_query($conn, $sql1);
mysqli_num_rows($result1) ;
$row1 = mysqli_fetch_array($result1);

$username = $row1['username'];

$_SESSION['username'] = $username;

$msg="Congratulation your IQ score is ready";
$date=date("d/m/Y");

$inswork= "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg', '$date')";
mysqli_query($conn, $inswork);

$update1 = "UPDATE vidyarthi SET notification = '1' WHERE username = '$username' ";
mysqli_query($conn, $update1);
$update2 = "UPDATE vidyarthi SET blog_credits = '15' WHERE username = '$username' ";
mysqli_query($conn, $update2);
$update3 = "UPDATE vidyarthi SET question_credits = '2' WHERE username = '$username' ";
mysqli_query($conn, $update3);

$update4 = "UPDATE vidyarthi SET report = 'created' WHERE username = '$username' ";
mysqli_query($conn, $update4);
$update5 = "UPDATE vidyarthi SET full_report = 'not created' WHERE username = '$username' ";
mysqli_query($conn, $update5);

$update6 = "UPDATE vidyarthi SET account_created = 'yes' WHERE username = '$username' ";
mysqli_query($conn, $update6);

}
?>
