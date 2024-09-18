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

payment details
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
<a href='index.php'>back</a>
<br/>

<h1>Payment Page Details</h1>

<?php

$table = 'admin_payment_details';

$select = "SELECT * FROM $table ";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

echo '<h2>Publishable Key</h2>';
echo '<h3>'.$row["pk"].'</h3>';

echo '<h2>Secret Key</h2>';
echo '<h3>'.$row["sk"].'</h3>';

echo '<h2>Currancy</h2>';
echo '<h3>'.$row["cur"].'</h3>';

echo '<h2>Profile Amount</h2>';
echo $row["amt1"]/100;

echo '<h2>Blog credits Amount</h2>';
echo $row["amt2"]/100;

echo '<h2>Question credits Amount</h2>';
echo $row["amt3"]/100;

//echo '<p> All Charges are showing into multiplied to 100 form ... </p>';


echo '<h2>Facebook page link</h2>';
echo '<h3>'.$row["fb_link"].'</h3>';

echo '<h2>Instagram page link</h2>';
echo '<h3>'.$row["ig_link"].'</h3>';

echo '<h2>Twitter page link</h2>';
echo '<h3>'.$row["twt_link"].'</h3>';

?>

<h2><a href='payment_details_insert.php'>Change details</a></h2>

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
