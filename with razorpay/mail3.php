
<?php
include 'znmd2010/katrina.php';
include('smtp/PHPMailerAutoload.php');

$send_mail_id = $_SESSION['email'];
$otp = RAND(111111,999999);
$pub= "UPDATE vidyarthi SET otp = '$otp' WHERE email = '$send_mail_id' ";
mysqli_query($conn, $pub);

$send_sub = 'Verify account for change Password ';
$html= '
<h1>Welcome User</h1>
<pre>
This mail come from iQtesst.com 
someOne use this Email to change account Password in our Website
if 
This is you then click below link and enter below OTP on web page to verify your account
<a href="change_password.php?email='.$send_mail_id.'"> Verify Account </a>
<b>'.$otp.'</b>
and change your password
...
else 
Please Ignore this mail
ThankYou

</pre>
';



echo smtp_mailer($send_mail_id, $send_sub,$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.hostinger.com";
	$mail->Port = 465; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "support@iqtesst.com";
	$mail->Password = "Shivlikebambambhole@redmi9i";
	$mail->SetFrom("support@iqtesst.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
		echo'<h1>error sending mail, please try after 6 hours </h1><h3> For instent Query please <a href="contact.html">Contact Us</a></h3>';
	}else{

?>
<script>
window.location.assign('logout.php');
</script>

<?php

		return 'Sent';
	}
}
?>