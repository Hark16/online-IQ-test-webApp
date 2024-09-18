
<?php
include 'znmd2010/katrina.php';

$username = $_SESSION['u_name'];

$gender1 = mysqli_real_escape_string($conn, $_GET['gender']);
$gender= filter_var($gender1, FILTER_SANITIZE_STRING);
$email1 = mysqli_real_escape_string($conn, $_GET['email']);
$email= filter_var($email1, FILTER_SANITIZE_STRING);
$pass1 = mysqli_real_escape_string($conn, $_GET['pass']);
$pass= filter_var($pass1, FILTER_SANITIZE_STRING);
$fn1 = mysqli_real_escape_string($conn, $_GET['fn']);
$fn2= filter_var($fn1, FILTER_SANITIZE_STRING);
$ln1 = mysqli_real_escape_string($conn, $_GET['ln']);
$ln2= filter_var($ln1, FILTER_SANITIZE_STRING);
$fn = strtoupper($fn2);
$ln = strtoupper($ln2);

$code = md5($username);
$table = 'vidyarthi';

$select = "SELECT * FROM $table WHERE email = '$email'";
$result = mysqli_query($conn, $select);
$lines = mysqli_num_rows($result);

if(strpos("$email", "@gmail.com")){

if($lines == 0){
mysqli_query($conn, "UPDATE vidyarthi SET first_name = '$fn' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET last_name = '$ln' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET email = '$email' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET password = '$pass' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET code = '$code' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET gender = '$gender' WHERE username = '$username'");

$msg="Welcome ".$fn." in this site, please check your IQ score..";
$date=date("d/m/Y");

$inswork1 = "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg', '$date')";
mysqli_query($conn, $inswork1);

$_SESSION['email'] = $email;
$_SESSION['username'] = $username;

?>

<button onclick='pay_now()' style='background-color : orange; color : white;'>Offer Activated</button>


<?php


}else{
echo '<h1>this email id is already exist ...</h1>';
echo '<br/>';
echo '<button style="background-color:red; color:white;" onclick="buy()">Go BACK</button>';
echo '<hr/>';
echo '<img src="goBack.png" alt="please go back">';

}
}else{
echo '<h1>this email id is invalid we only accept Gmail Id ...</h1>';
echo '<br/>';
echo '<button style="background-color:red; color:white;" onclick="buy()">Go BACK</button>';
echo '<hr/>';
echo '<img src="goBack.png" alt="please go back">';

}

?>
