
<?php
include '3011bought2009/herohondapassionpro.php';

$id = $_SESSION['id'];
$answer = $_SESSION['answer'];
mysqli_query($conn, "UPDATE ask_expert SET answer = '$answer' WHERE id = '$id'");
mysqli_query($conn, "UPDATE ask_expert SET status = 'locked' WHERE id = '$id'");

   header("Location: asked1.php");

?>
