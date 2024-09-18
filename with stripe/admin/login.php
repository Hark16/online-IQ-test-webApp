
<?php
include '3011bought2009/herohondapassionpro.php';
if(isset($_SESSION['user'])){
   header("Location: logout.php");
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

Login
</title>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>

</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
<?php
if(isset($_SESSION['verify'])){
echo'<a href="logout.php"><h1> we sent you a mail please click verify account link on that mail </h1></a>';

}
else{
?>

<div id="page">
	<div class="container">


		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<div class="grid portfoliogrid">
				

<form method='POST'>

<input type='text' name='code1' placeholder='code1' />
</br>

<input type='text' name='code2' placeholder='code2' />
</br>

<input type='text' name='code3' placeholder='code3' />
</br>

<input type='text' name='code4' placeholder='code4' />
</br>

<input type='text' name='code5' placeholder='code5' />
</br>

<input type='submit' name='submit' value='submit'/>

</form>

<div>


<?php


if (isset($_POST['submit']))
{

$code11 = mysqli_real_escape_string($conn, $_POST['code1']);
$code1= filter_var($code11, FILTER_SANITIZE_STRING);
$code22 = mysqli_real_escape_string($conn, $_POST['code2']);
$code2= filter_var($code22, FILTER_SANITIZE_STRING);
$code33 = mysqli_real_escape_string($conn, $_POST['code3']);
$code3= filter_var($code33, FILTER_SANITIZE_STRING);
$code44 = mysqli_real_escape_string($conn, $_POST['code4']);
$code4= filter_var($code44, FILTER_SANITIZE_STRING);
$code55 = mysqli_real_escape_string($conn, $_POST['code5']);
$code5= filter_var($code55, FILTER_SANITIZE_STRING);

$sql= "SELECT * FROM babajikibuti WHERE head1 = '$code1' and eye1 = '$code2' and eye2 = '$code3' and head2 = '$code4' and mind = '$code5'";

if($result = mysqli_query($conn,$sql)){
$total=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

 if ($total===1){

$_SESSION['user'] = $row['head1'];

   header("Location: index.php");

}else{
?>
<script>alert("login unsuccessfull, try again")
</script>
<?php

}
}else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}
}
?>
</div>
<div>
<a href='https://google.com/'>
Click Here if Forget Password
</a>

</div>

</div>
<div>
<a href='https://facebook.com/'>
Click Here For Create New Account
</a>

</div>

				</div>
				<!-- .grid -->
				

				<br/>
				
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Quizz </h1>
			 <a target="blank" href="">&copy; Quizz</a>
		</div>
	</div>	
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>

<!-- #page -->

<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>

</body>
</html>

<?php

}
?>
