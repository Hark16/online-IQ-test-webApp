<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

question adding 
<?php
include '3011bought2009/herohondapassionpro.php';
if(isset($_SESSION['user'])){

?>

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

<form method='POST'>

<div class="container">


  <div class='container'>

question <br/>

<input type='text' name='question' placeholder='question' required > </input><br/>

</div>

  <div class='container'>

description  <br/>

<textarea rows='4' name='description' placeholder='discription of question '>
</textarea></br>

</div>

  <div class='container'>

option 1
<br/>

<input type='text' name='a' placeholder='option A ' required /> </input><br/>

</div>


<div>

option 2
<br/>
<input type='taxt' name='b' placeholder='option B ' required />

</div>

<div>

option 3
<br/>

<input type='taxt' name='c' placeholder= 'option C ' required />

</div>

<div>
<center>
<input type='submit' name='submit' value='submit'></input>
</center>

</div>

</form>
</div>

<?php

if(isset($_POST['submit'])){

$question1 = mysqli_real_escape_string($conn, $_POST['question']);
$question= filter_var($question1, FILTER_SANITIZE_STRING);
$description1 = mysqli_real_escape_string($conn, $_POST['description']);
$description= filter_var($description1, FILTER_SANITIZE_STRING);

$a1 = mysqli_real_escape_string($conn, $_POST['a']);
$a= filter_var($a1, FILTER_SANITIZE_STRING);
$b1 = mysqli_real_escape_string($conn, $_POST['b']);
$b= filter_var($b1, FILTER_SANITIZE_STRING);
$c1 = mysqli_real_escape_string($conn, $_POST['c']);
$c= filter_var($c1, FILTER_SANITIZE_STRING);

$_SESSION['question'] = $question;
$_SESSION['description'] = $description;

$_SESSION['a'] = $a;
$_SESSION['b'] = $b;
$_SESSION['c'] = $c;

   header("Location: input1.php");

}

$table = 'prashna_patra';

$select = "SELECT * FROM $table ";
if($result = mysqli_query($conn, $select)){
if(mysqli_num_rows($result) > 0){
echo '<hr/>';
while($row = mysqli_fetch_array($result)){

echo '<p>'.$row["id"].'</p>';
echo '<h3>'.$row["title"].'</h3>';
echo '<h5>'.$row["description"].'</h5>';
echo '<p>'.$row["option_1"].'</p>';
echo '<p>'.$row["option_2"].'</p>';
echo '<p>'.$row["option_3"].'</p>';

echo '<hr/>';
}
}else{echo'<h1> not data <h1>';}

}else{echo "ERROR: Could not able to execute $select. " . mysqli_error($conn);}

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
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Quizz Admin</h1>
			 <a target="blank" href="">&copy; Admin</a>
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
<?php

}else{   header("Location: logout.php");
}
?>

</html>
