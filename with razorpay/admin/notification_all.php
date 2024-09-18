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

notification
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

<a href='notification.php'>back</a>
<br/>

<form method='POST'>
<input type='text' placeholder='your Msg' name='msg'/>

<input type='submit' name='submit' value='submit'/>
</form>

<?php

if(isset($_POST['submit'])){

$msg1 = mysqli_real_escape_string($conn, $_POST['msg']);
$msg= filter_var($msg1, FILTER_SANITIZE_STRING);

//$msg=$_POST['msg'];
$date=date("d/m/Y");
$username= 'all';

$inswork= "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg', '$date')";
mysqli_query($conn, $inswork);

$update = "UPDATE users SET notification = '1' ";
mysqli_query($conn, $update);

}

$sql = "SELECT * FROM notification WHERE username= 'all'";
if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){ 
while($row = mysqli_fetch_array($result)){

echo $row['msg']."	";
echo $row['date']."	";
echo "<a href='noti_del.php?id=".$row['id']."'>delete</a><br/>";

}}}
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