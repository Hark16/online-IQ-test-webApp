
<?php
	include 'znmd2010/katrina.php';
$table = 'admin_payment_details';

$select = "SELECT * FROM $table ";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);


	?> 

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

Pricing Page
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
			<h2 id='heading123' class="site-description"> </h2>

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
				
<h1>Pricing of all services of Website</h1>

<h2>IQ tesst Pro(file)</h2>

<p>for this service which is <br/>IQ tesst profile which include 
<br/>iq tesst report, 
<br/>advance eBook and 
<br/>many more thing 
<br/>you will be charge- 
<br/>INR<?php echo $row['amt1']/100; ?> ...</p>


<h2>Blog credits</h2>

<p>You will able to read Blog Articles<br/>
You will get 20 Blog credits<br/>
1 credit will use for reading 1 Blog article<br/>
for 20 Blog credits You will be charge-<br/>
INR<?php echo $row['amt2']/100; ?> ...
</p>


<h2>Question credits</h2>

<p>
You Can ask Questions to our Experts<br/>
In 1 Question credit <br/>
You can ask 1 Question of Limited words<br/>
for 1 Question credit you will be charge-<br/>
INR<?php echo $row['amt3']/100; ?> ...

</p>


				
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
			 <a target="blank" href="https://www.iqtesst.com/">&copy; IQ tesst 2022</a>
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

function fun(){
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("heading123").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "heading.php", true);

  xhttp.send();

}
fun();

</script>

</body>
</html>
