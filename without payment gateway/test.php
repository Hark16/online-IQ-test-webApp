﻿
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
				<li><a href="test.php">TEST</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="contact.html">Contact us</a></li>

				<li><a href="#sub">Pages</a>
				<ul id="sub" class="sub-menu">
					<li><a href="privacy.html">privacy</a></li>
					<li><a href="tnc.html">terms&conditions</a></li>
					<li><a href="disclaimer.html">disclaimer</a></li>

				</ul>
				</li>

			</ul>
		</div>
		</nav>
		</header>
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main" role="main">

<h1>
Mock test are coming soon
</h1>

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