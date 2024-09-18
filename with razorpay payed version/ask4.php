
<?php
include 'znmd2010/katrina.php';
$id1 = mysqli_real_escape_string($conn, $_GET['id']);
$id= filter_var($id1, FILTER_SANITIZE_STRING);

$username = $_SESSION['username'];

$select = "SELECT * FROM vidyarthi WHERE username = '$username'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$credits1 = $row['question_credits'];

if($credits1 == 0){
echo 'You do not have credits, go to profile and buy credits to View Answer...';

}
else{

$credits = $credits1 - 1;
mysqli_query($conn, "UPDATE vidyarthi SET question_credits = '$credits' WHERE username = '$username'");
mysqli_query($conn, "UPDATE ask_expert SET status = 'answered' WHERE id = '$id'");

$msg = "You have been charged 1 from your Question credits, because you viewed Answer of your Question.";
$date=date("d/m/Y");

$inswork1 = "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg', '$date')";
mysqli_query($conn, $inswork1);
mysqli_query($conn, "UPDATE vidyarthi SET notification = '1' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET question_asked = '0' WHERE username = '$username'");

echo 'you charged 1 credit for your answer.';
}

?>
