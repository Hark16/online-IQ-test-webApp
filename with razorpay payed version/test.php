
<?php
include 'znmd2010/katrina.php';


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
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

IQ Test
</title>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GD9EMZCDFZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GD9EMZCDFZ');
</script>

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
<body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page">


<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="index.php" rel="home" style="border-width:0;    ">IQ tesst</a></h1>
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
				<main id="main" class="site-main" role="main">

<h1>Create Username</h1>

<form method='POST'>

<p><b>Please Create a Unique Username For Your Test</b></p>

<input type='text' name='u_name' value=' ' placeholder='unique Username' required/>
<br/>
                                <div class="g-recaptcha" data-sitekey="6LdnmfcgAAAAAPqkj_ZHPROL3WiTbAxqifuj7G0s"></div>
<p>note: Do not give SPACE in Username...</p><br/>

<button name='submit' style='background-color:blue; color:white;'>Submit</button>


</form>

<?php

if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
$u_name1 = mysqli_real_escape_string($conn, $_POST['u_name']);
$u_name= filter_var($u_name1, FILTER_SANITIZE_STRING);

    $secret = '6LdnmfcgAAAAANIRtW8mYt5kMDE83tdV8pU2Yo3A';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);

    if ($responseData->success) {

 if (strpos($u_name, ' ') !== false) {

echo "<h1>please do not use space or write something </h1>";

}

$_SESSION['u_name'] = $u_name ;

$t1 = 'vidyarthi';
$t2 = 'vidyarthi_pariksha';

$sel= "SELECT username FROM $t1 WHERE username='$u_name'";
$result = mysqli_query($conn,$sel);
$total=mysqli_num_rows($result);

if ($total===0){


mysqli_query($conn, "INSERT INTO $t1 (username) VALUES('$u_name')");
mysqli_query($conn, "INSERT INTO $t2 (username) VALUES('$u_name')");
?>
<script>
window.location.assign('questions.php');
</script>

<?php

}else{echo '<h3>This Username Is Taken Please Try Another One...</h3>';}

}else{echo '<h1>check I am not Robot </h1>';}

}
?>


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