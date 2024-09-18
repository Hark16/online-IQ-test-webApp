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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

IQ Test
</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

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


img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 75%;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}



</style>




</head>
<body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page">


<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a style="border-width:0;"    href="index.php" rel="home">IQ tesst</a></h1>
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

<div id='hide1'>
<h1>answer by putting yourself in the question</h1>
<p><b>
If a situation like a question comes in your life, which answer would you choose?
</b></p>
</div>

<?php

$t1 = 'vidyarthi';
$t2 = 'vidyarthi_pariksha';
$username = $_SESSION['u_name'];

if(isset($_SESSION['u_name'])){

?>

<div id='page1'>

<?php

$select = "SELECT * FROM prashna_patra WHERE id = '1'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row2 = mysqli_fetch_array($result);

?>

<h3> Question 1 </h3>
<h1><?php echo $row2['title']; ?></h1>

<p><b><?php echo $row2['description']; ?></b></p>

<div id='options'>

<hr/>
<button onclick='fun1("A")'> <?php echo $row2['option_1']; ?> </button>
<hr/>

<hr/>
<button onclick='fun1("B")'> <?php echo $row2['option_2']; ?> </button>
<hr/>

<hr/>
<button onclick='fun1("C")'> <?php echo $row2['option_3']; ?> </button>
<hr/>

</div>
</div>

<?php

}else{

   header("Location: test.php");
}
?>

<div id='hide2'>
<p>
Please select 1 of the 3 options as your answer.
</p>
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

function fun1(opt){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "q1.php?opt="+ opt, true);

  xhttp.send();

}

function fun2(opt){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "q2.php?opt="+opt, true);

  xhttp.send();

}


function fun3(opt){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "q3.php?opt="+opt, true);

  xhttp.send();

}


function fun4(opt){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "q4.php?opt="+opt, true);

  xhttp.send();

}


function fun5(opt){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "q5.php?opt="+opt, true);

  xhttp.send();

}


function fun6(opt){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "q6.php?opt="+opt, true);

  xhttp.send();

}


function fun7(opt){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "q7.php?opt="+opt, true);

  xhttp.send();

}


function fun8(opt){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "q8.php?opt="+opt, true);

  xhttp.send();

}


function fun9(opt){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "q9.php?opt="+opt, true);

  xhttp.send();

}


function fun10(opt){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "q10.php?opt="+opt, true);

  xhttp.send();

document.getElementById('hide1').style.display = 'none';
document.getElementById('hide2').style.display = 'none';

}

function age(){

var age = document.getElementById('age').value;

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page1").innerHTML =
      this.responseText;

    }
  };

  xhttp.open("GET", "age.php?age="+age, true);

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

  xhttp.open("GET", "report1.php", true);

  xhttp.send();

}

function buy(){

window.location.assign('paying.php');
}

</script>

<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
</body>
</html>
