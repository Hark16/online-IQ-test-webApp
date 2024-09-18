<?php
include '3011bought2009/herohondapassionpro.php';

$idnum1 = mysqli_real_escape_string($conn, $_GET['id']);
$idnum= filter_var($idnum1, FILTER_SANITIZE_STRING);
$username1 = mysqli_real_escape_string($conn, $_GET['username']);
$username= filter_var($username1, FILTER_SANITIZE_STRING);

//$idnum= $_GET['id'];
//$username= $_GET['username'];
$table= 'notification';

$sql = "DELETE FROM $table WHERE id=$idnum ";
if (mysqli_query($conn, $sql)) {

   header("Location: noti_data1.php?username=$username");
}


