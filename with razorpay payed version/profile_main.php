
<?php
include 'znmd2010/katrina.php';

$table1 = 'mahavachan';
$var = rand(1,50);

$select11 = "SELECT * FROM $table1 WHERE id = '$var'";
$result11 = mysqli_query($conn, $select11);
mysqli_num_rows($result11);
$row11 = mysqli_fetch_array($result11);


$username = $_SESSION['username'];
$table = 'vidyarthi';

$select = "SELECT * FROM $table WHERE username = '$username'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if(isset($username)){
if($row['account_created'] == 'yes'){
$_SESSION['account_created'] = 'yes';

?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

Profile
</title>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GD9EMZCDFZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GD9EMZCDFZ');
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
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
				
<?php 
echo '<h1>Welcome '.$row["first_name"].'</h1>';

?>

<div id='page1'>
<button onclick='report()'><h1> View your test Report </h1></button>
<br/>

<button onclick='profile()'><h2> View Profile details </h2></button>
<br/>

<button onclick='blog()'><h2> View Blog </h2></button>
<br/>

<button onclick='askTheExpert()'><h2> Ask The Expert </h2></button>
<br/>

<a href='IQ Power.zip' download ><button><h2> Get your Advanced Ebook </h2></button></a>
<br/>

<button onclick='full_report()'><h2> View your Detailed Report </h2></button>
<br/>

<?php
if($row['notification'] == '1'){
?>
<button onclick='notification()'><h2> *You Have Notification* </h2></button>
<br/>
<?php
    }else{
?>
<button onclick='notification()'><h2> View your Notifications </h2></button>
<br/>
<?php
}
?>

</div>

				
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

<script>

function profile(){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "profile.php", true);

  xhttp.send();

}


function full_report(){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "full_report.php", true);

  xhttp.send();

}

function report(){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "report.php", true);

  xhttp.send();

}

function blog(){window.location.assign('blog.php');}

function askTheExpert(){window.location.assign('ask.php');}

function blog_credits(){
window.location.assign('paying_.php');
}

function question_credits(){
window.location.assign('paying__.php');
}

function notification(){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "notification.php", true);

  xhttp.send();

}

</script>

<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
</body>
</html>

<?php

}else{ echo '<h1>Please give IQ test first</h1>';}

}else{
   header("Location: logout.php");
}

?>
