
<?php
include '3011bought2009/herohondapassionpro.php';

if(isset($_SESSION['user'])){

?>

<title>
notification
</title>

<a href='notification_user.php'>back</a>
<br/>

<form method='POST'>
<input type='text' placeholder='your Msg' name='msg'/>

<input type='submit' name='submit' value='submit'/>
</form>


<?php

include '3011bought2009/herohondapassionpro.php';

$username1 = mysqli_real_escape_string($conn, $_GET['username']);
$username= filter_var($username1, FILTER_SANITIZE_STRING);

//$username= $_GET['username'];
$date = date("d/m/Y");

if(isset($_POST['submit'])){

$msg1 = mysqli_real_escape_string($conn, $_POST['msg']);
$msg= filter_var($msg1, FILTER_SANITIZE_STRING);

//$msg=$_POST['msg'];

$inswork= "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg', '$date')";
mysqli_query($conn, $inswork);

$update = "UPDATE users SET notification = '1' WHERE username = '$username' ";
mysqli_query($conn, $update);

}

$sql1 = "SELECT * FROM notification WHERE username= '$username'";
if($result1 = mysqli_query($conn, $sql1)){
if(mysqli_num_rows($result1) > 0){ 
while($row1 = mysqli_fetch_array($result1)){

echo $row1['msg']."	";
echo $row1['date']."	";
echo "<a href='noti_del1.php?id=".$row1['id']."&username=".$username."'>delete</a><br/>";

}}}

?>


<?php
}

else{
?>
<script>
window.location.assign('logout.php');
</script>
<?php
}
?>