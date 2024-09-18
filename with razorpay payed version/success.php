

<!DOCTYPE html> 
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<title> Creat Details </title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://js.stripe.com/v3/"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GD9EMZCDFZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GD9EMZCDFZ');
</script>


<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
<link rel="manifest" href="/site.webmanifest">

		<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
		<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='style.css' type='text/css' media='all' />
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all' />
		<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all' />
		<link rel="canonical" href="https://iqtesst.com/" />

	</head>
	<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">


<h1>
Your Details
</h1>

<form method='POST'>
<table>
<tr>
<th>Title</th>
<th>Field</th>
</tr>

<tr>
<td> Password </td>
<td><input type='password' name= 'pass' placeholder='creat password'> </input></td>
</tr>

<tr>
<td>
Gender
</td>

<td>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>

        </select>

</td>
</tr>
</table>

<input type='submit' name='submit' value='submit' />
</form>
<br/>

<p>
while clicking submit button you agree to accept <a href='tnc.php'>Terms and Conditions</a> and <a href='privacy.php'>Privacy</a> and <a href='disclaimer.php'>Disclaimer</a> of this site... 

</p>


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
$username = $_SESSION['u_name'];

if(isset($_GET['session_id']) && isset($_SESSION['OID'])){


$fn = strtoupper($customer->name);
$email = $customer->email;
$code = md5($username);


$table = 'vidyarthi';

mysqli_query($conn, "UPDATE vidyarthi SET first_name = '$fn' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET last_name = '*' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET email = '$email' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET code = '$code' WHERE username = '$username'");


$payment_id = $session->payment_intent;
$oid = $_SESSION['OID'];

    mysqli_query($conn, "update payment set payment_status='your payment is done',payment_id='$payment_id' where id='$oid'");

$msg="Welcome ".$fn." in this site, please check your IQ score..";
$date=date("d/m/Y");

$inswork1 = "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg', '$date')";
mysqli_query($conn, $inswork1);


$msg1="Congratulation your IQ score is ready";

$inswork1= "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg1', '$date')";
mysqli_query($conn, $inswork1);

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

$_SESSION['username'] = $username;

if(isset($_POST['submit'])){

$gender1 = mysqli_real_escape_string($conn, $_POST['gender']);
$gender= filter_var($gender1, FILTER_SANITIZE_STRING);

$pass1 = mysqli_real_escape_string($conn, $_POST['pass']);
$pass= filter_var($pass1, FILTER_SANITIZE_STRING);

mysqli_query($conn, "UPDATE vidyarthi SET gender = '$gender' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET password = '$pass' WHERE username = '$username'");


header("Location: profile_main.php");

}
}


?>

		<script src='js/jquery.js'></script>
		<script src='js/plugins.js'></script>
		<script src='js/scripts.js'></script>
		<script src='js/masonry.pkgd.min.js'></script>
	</body>
</html>