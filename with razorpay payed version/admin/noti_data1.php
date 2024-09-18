
<?php
include '3011bought2009/herohondapassionpro.php';

if(isset($_SESSION['user'])){

?>


<!DOCTYPE html> 
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
Notification
</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" type="image/x-icon" href="award.png">
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


<a href='notification_user.php'>back</a>
<br/>

<form method='POST'>
<input type='text' placeholder='your Msg' name='msg'/>

<input type='submit' name='submit' value='submit'/>
</form>


<?php

//include '3011bought2009/herohondapassionpro.php';

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

$update = "UPDATE vidyarthi SET notification = '1' WHERE username = '$username' ";
mysqli_query($conn, $update);

}

$sql1 = "SELECT * FROM notification WHERE username= '$username' ORDER BY id DESC";
if($result1 = mysqli_query($conn, $sql1)){
if(mysqli_num_rows($result1) > 0){ 
while($row1 = mysqli_fetch_array($result1)){

echo $row1['msg']."	";
echo $row1['date']."	";
echo "<a href='noti_del1.php?id=".$row1['id']."&username=".$username."'>delete</a><br/>";

}}}

?>


    <script src='js/jquery.js'></script>
    <script src='js/plugins.js'></script>
    <script src='js/scripts.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
  </body>
</html>

<?php
}else{
?>
<script>
window.location.assign('logout.php');
</script>
<?php
}
?>