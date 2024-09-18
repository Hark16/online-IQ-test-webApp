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

payment details insert
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
<div id="page">
	<div class="container">

		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<div class="grid portfoliogrid">
<a href='payment_details.php'>back</a>
<br/>

<h1>Insert New Details</h1>

<form method='POST'>

<input type='text' name='pk' placeholder='Publishable key' />
<br/>

<input type='text' name='sk' placeholder='secret key' />
<br/>

<input type='text' name='cur' placeholder='Currancy code which stripe support' />
<br/>

<input type='text' name='amt1' placeholder='profile amount' />
<br/>

<input type='text' name='amt2' placeholder='blog credits amount' />
<br/>

<input type='text' name='amt3' placeholder='question credits amount' />
<br/>

<input type='text' name='fb_link' placeholder='Facebook page link' />
<br/>

<input type='text' name='ig_link' placeholder='Instagram page link' />
<br/>

<input type='text' name='twt_link' placeholder='Twitter page link' />
<br/>

<input type='submit' name='submit' value='submit' />
</form>

<?php

if(isset($_POST['submit'])){
$pk1 = mysqli_real_escape_string($conn, $_POST['pk']);
$pk= filter_var($pk1, FILTER_SANITIZE_STRING);
$sk1 = mysqli_real_escape_string($conn, $_POST['sk']);
$sk= filter_var($sk1, FILTER_SANITIZE_STRING);

$cur1 = mysqli_real_escape_string($conn, $_POST['cur']);
$cur= filter_var($cur1, FILTER_SANITIZE_STRING);
$amt11 = mysqli_real_escape_string($conn, $_POST['amt1']);
$amt1= filter_var($amt11, FILTER_SANITIZE_STRING);

$amt21 = mysqli_real_escape_string($conn, $_POST['amt2']);
$amt2= filter_var($amt21, FILTER_SANITIZE_STRING);

$amt31 = mysqli_real_escape_string($conn, $_POST['amt3']);
$amt3= filter_var($amt31, FILTER_SANITIZE_STRING);

$fb_link1 = mysqli_real_escape_string($conn, $_POST['fb_link']);
$fb_link= filter_var($fb_link1, FILTER_SANITIZE_STRING);
$ig_link1 = mysqli_real_escape_string($conn, $_POST['ig_link']);
$ig_link= filter_var($ig_link1, FILTER_SANITIZE_STRING);
$twt_link1 = mysqli_real_escape_string($conn, $_POST['twt_link']);
$twt_link= filter_var($twt_link1, FILTER_SANITIZE_STRING);


$_SESSION['pk'] = $pk;
$_SESSION['sk'] = $sk;
$_SESSION['cur'] = $cur;
$_SESSION['amt1'] = $amt1;
$_SESSION['amt2'] = $amt2;
$_SESSION['amt3'] = $amt3;
$_SESSION['fb_link'] = $fb_link;
$_SESSION['ig_link'] = $ig_link;
$_SESSION['twt_link'] = $twt_link;

header("Location: payment_details_insert_data.php");
}

?>

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

else{
?>
<script>
window.location.assign('logout.php');

</script>
<?php
}
?>
