
<?php

if(isset($_GET['id'])){
include 'znmd2010/katrina.php';

$code1 = mysqli_real_escape_string($conn, $_GET['id']);
$code= filter_var($code1, FILTER_SANITIZE_STRING);
$table = 'vidyarthi';

$select = "SELECT * FROM $table WHERE code = '$code'";
$result = mysqli_query($conn, $select);
$lines = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$gender = $row['gender'];
$score = $row['i_q'];
$date = $row['added_on'];
if($lines == 1){

$table1 = 'mahavachan';
$var = rand(1,50);

$select11 = "SELECT * FROM $table1 WHERE id = '$var'";
$result11 = mysqli_query($conn, $select11);
mysqli_num_rows($result11);
$row11 = mysqli_fetch_array($result11);

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

Are you Smarter than <?php echo $row['first_name']; ?>, check here...
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
				

<h2>Certificate Of Complition </h2>
<br/>
<h3>This is Certify that </h3>
<br/>

<h4><?php echo $row['first_name']; ?></h4>
<br/>

<h3>Has completed the Test of... </h3>
<br/>

<h2>iQtesst.COM</h2>
<br/>

<h4>SCORE : <?php echo $score; ?></h4>
<br/>
<h4>Date : <?php echo $date; ?></h4>
<br/>
<br/>


<h4>Check Your IQ Score, Let's see Do you have better IQ than <?php echo $row['first_name']; ?>, or you Fail in front of <?php if($gender == 'male'){echo "him";}else{echo "her";}  ?> <a href='test.php'>CHECK HERE</a></h4>


				
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

</body>
</html>

<?php

}else{

header("Location: index.php");
}

}else{

header("Location: index.php");
}

?>
