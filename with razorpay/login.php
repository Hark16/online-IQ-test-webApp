<?php
include 'znmd2010/katrina.php';

$table1 = 'mahavachan';
$var = rand(1,50);

$select11 = "SELECT * FROM $table1 WHERE id = '$var'";
$result11 = mysqli_query($conn, $select11);
mysqli_num_rows($result11);
$row11 = mysqli_fetch_array($result11);

?>

<?php

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

<style>

a{
        border-style: ridge;
        border-width: 2px;
        border-color: black;
        border-radius: 5px;
        margin: auto;
        padding: 15px;
}

</style>


</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php" >


<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="index.php" rel="home">IQ tesst</a></h1>
			<h2 class="site-description"><?php echo$row11['quotes']; ?></h2>

		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">

			<ul id="menu-menu-1" class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="test.php">IQ TEST</a></li>
				<li><a href="pages.php">All Pages</a></li>


			</ul>
		</div>
		</nav>
		</header>
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<div class="grid portfoliogrid">
				

<h1>Login Here</h1>

<form method='POST'>
<input type='email' name='email' placeholder='your email id' /><br/><br/>
<input type='password' name='password' placeholder='password' /><br/><br/>
<input type='submit' name='submit' value='submit'/>

<br/>
</form>

<div>


<?php


if (isset($_POST['submit']))
{

$password1 = mysqli_real_escape_string($conn, $_POST['password']);
$password= filter_var($password1, FILTER_SANITIZE_STRING);
$email1 = mysqli_real_escape_string($conn, $_POST['email']);
$email= filter_var($email1, FILTER_SANITIZE_STRING);
$table = 'vidyarthi';

$sql= "SELECT * FROM $table WHERE email = '$email' and password = '$password' ";

$result = mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
 
if ($total===1){
if($password === $row['password'] ){

$_SESSION['username']= $row['username'];

   header("Location: profile_main.php");

}else{
echo '<h1> Wrong Password </h1>';

}

}else{
?>
<script>alert("login unsuccessfull, try again")
</script>
<?php

}

}
?>
</div>
<br/>



<div>
<a href='forgetPassword.php' >
Click Here if Forget Password
</a>

</div>

<br/><br/>
<div>

<h2><b>Please Take our IQ test, if you do not have account</b></h2>
</div>

<br/><hr/>
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
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">IQtesst.Com</h1>
			 <a target="blank" href="https://www.iqtesst.com/">&copy; IQ tesst <?php echo date('Y'); ?></a>
		</div>
	</div>	
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse">Top</span></a>
</div>

<!-- #page -->

<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>

<script>

function forget(){
alert('We are working on this Function right now, please contact us for instent Query...');
}
</script>

</body>
</html>

