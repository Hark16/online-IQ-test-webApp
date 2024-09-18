<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

expert answers 
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

<a href='index.php'>back</a>

<form method='POST'>

<input type='submit' value='All questions' name='all_questions'/>
<input type='submit' value='not Answered questions' name='not_answered_questions'/>

</form>

<?php

if(isset($_POST['all_questions'])){

$table = 'ask_expert';

$select = "SELECT * FROM $table WHERE status <> 'question' ORDER BY id DESC";
if($result = mysqli_query($conn, $select)){
if(mysqli_num_rows($result) > 0){
echo '<hr/>';
while($row = mysqli_fetch_array($result)){


echo '<p>'.$row["username"].'</p><br/>';
echo '<p>'.$row["question"].'</p><br/>';
echo '<p>'.$row["answer"].'</p><br/>';
echo '<p>'.$row["status"].'</p><br/>';

echo '<p>'.$row["added_on"].'</p><br/>';

$id = $row['id'];
echo '<a href="asked2.php?id='.$id.'">edit</a>';

echo '<hr/>';
}
}else{echo'<h1> not data <h1>';}

}else{echo "ERROR: Could not able to execute $select. " . mysqli_error($conn);}
}
//not answered started

if(isset($_POST['not_answered_questions'])){

$table = 'ask_expert';

$select = "SELECT * FROM $table WHERE status = 'question' ORDER BY id DESC";
if($result = mysqli_query($conn, $select)){
if(mysqli_num_rows($result) > 0){
echo '<hr/>';
while($row = mysqli_fetch_array($result)){

echo '<p>'.$row["username"].'</p><br/>';
echo '<p>'.$row["question"].'</p><br/>';
echo '<p>'.$row["answer"].'</p><br/>';
echo '<p>'.$row["status"].'</p><br/>';

echo '<p>'.$row["added_on"].'</p><br/>';
$id = $row['id'];
echo '<a href="asked2.php?id='.$id.'">edit</a>';

echo '<hr/>';
}
}else{echo'<h1> not data <h1>';}

}else{echo "ERROR: Could not able to execute $select. " . mysqli_error($conn);}
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
<?php

}else{   header("Location: logout.php");
}
?>

</html>
