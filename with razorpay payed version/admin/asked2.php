<?php
include '3011bought2009/herohondapassionpro.php';
if(isset($_SESSION['user'])){
$idnum1 = mysqli_real_escape_string($conn, $_GET['id']);
$idnum= filter_var($idnum1, FILTER_SANITIZE_STRING);

$select = "SELECT * FROM ask_expert WHERE id = '$idnum'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$question = $row['question'];
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

<?php echo $question; ?>
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
<h1><?php echo $question; ?></h1>

<form method='POST'>
<textarea rows='2' name='answer' placeholder='answer'><?php echo $row['answer']; ?> </textarea>
<br/>

<input type='submit' value='submit' name='submit' />
</form>

<?php

if(isset($_POST['submit'])){

$answer1 = mysqli_real_escape_string($conn, $_POST['answer']);
$answer= filter_var($answer1, FILTER_SANITIZE_STRING);

$_SESSION['answer'] = $answer;
$_SESSION['id'] = $idnum;

   header("Location: asked_insert.php");

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
</html>

<?php

}else{   header("Location: logout.php");
}
?>


