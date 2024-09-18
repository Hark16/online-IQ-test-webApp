
<?php
include '3011bought2009/herohondapassionpro.php';

$pk = $_SESSION['pk'];
$sk = $_SESSION['sk'];

$cur = $_SESSION['cur'];
$amt1 = $_SESSION['amt1']*100;
$amt2 = $_SESSION['amt2']*100;
$amt3 = $_SESSION['amt3']*100;

$fb_link = $_SESSION['fb_link'];
$ig_link = $_SESSION['ig_link'];
$twt_link = $_SESSION['twt_link'];

$table = 'admin_payment_details';

$update1 = "UPDATE $table SET pk = '$pk' WHERE id = '1'";
mysqli_query($conn, $update1);

$update2 = "UPDATE $table SET sk = '$sk' WHERE id = '1'";
mysqli_query($conn, $update2);

$update3 = "UPDATE $table SET cur = '$cur' WHERE id = '1'";
mysqli_query($conn, $update3);

$update4 = "UPDATE $table SET amt1 = '$amt1' WHERE id = '1'";
mysqli_query($conn, $update4);

$update5 = "UPDATE $table SET amt2 = '$amt2' WHERE id = '1'";
mysqli_query($conn, $update5);

$update6 = "UPDATE $table SET amt3 = '$amt3' WHERE id = '1'";
mysqli_query($conn, $update6);
$update7 = "UPDATE $table SET fb_link='$fb_link' WHERE id = '1'";
mysqli_query($conn, $update7);
$update8 = "UPDATE $table SET ig_link='$ig_link' WHERE id = '1'";
mysqli_query($conn, $update8);
$update9 = "UPDATE $table SET twt_link='$twt_link' WHERE id = '1'";
mysqli_query($conn, $update9);


header("Location: payment_details.php");
?>
