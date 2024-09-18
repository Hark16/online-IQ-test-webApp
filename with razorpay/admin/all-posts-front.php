<?php
include '3011bought2009/herohondapassionpro.php';
if(isset($_SESSION['user'])){
$permalink1 = mysqli_real_escape_string($conn, $_GET['permalink']);
$permalink= filter_var($permalink1, FILTER_SANITIZE_STRING);

$table= 'mera_blog';

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

Front part 

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

<a href='logout.php'>logout</a><br/>
<a href='all-posts-entry.php?permalink=<?php echo$permalink; ?>'>back</a><br/>

<?php

$select = "SELECT * FROM $table WHERE permalink = '$permalink'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

?>

<form method='POST'>

<textarea rows='2' name='introduction' placeholder='introduction'><?php echo $row['introduction']; ?></textarea>
<br/>

<textarea rows='2' name='conclusion' placeholder='conclusion' ><?php echo $row['conclusion']; ?></textarea>
<br/>

<textarea rows='2' name='title' placeholder='title'><?php echo $row['title']; ?></textarea>
<br/>

<textarea rows='2' name='description' placeholder='description'><?php echo $row['description']; ?></textarea>
<br/>

<input type='text' name='image' placeholder= 'image' value='<?php echo $row['image']; ?>'/>
<br/>
<input type='text' name='image_alt' placeholder= 'image alt text' value='<?php echo $row['image_alt']; ?>'/>
<br/>

<input type='text' name='tag1' placeholder= 'tag 1' value='<?php echo $row['tag1']; ?>'/>
<br/>
<input type='text' name='tag2' placeholder= 'tag 2' value='<?php echo $row['tag2']; ?>'/>
<br/>
<input type='text' name='tag3' placeholder= 'tag 3' value='<?php echo $row['tag3']; ?>'/>
<br/>

<input type='text' name='category' placeholder= 'category' value='<?php echo $row['category']; ?>'/>
<br/>

<input type='text' name= 'date' placeholder= 'date' value='<?php echo $row['added_on']; ?>'/>
<br/>

<input type='submit' name='submit' value='submit' />

</form>

<?php
if(isset($_POST['submit'])){

$introduction1 = mysqli_real_escape_string($conn, $_POST['introduction']);
$introduction= filter_var($introduction1, FILTER_SANITIZE_STRING);
$conclusion1 = mysqli_real_escape_string($conn, $_POST['conclusion']);
$conclusion= filter_var($conclusion1, FILTER_SANITIZE_STRING);
$title1 = mysqli_real_escape_string($conn, $_POST['title']);
$title= filter_var($title1, FILTER_SANITIZE_STRING);
$description1 = mysqli_real_escape_string($conn, $_POST['description']);
$description= filter_var($description1, FILTER_SANITIZE_STRING);
$image1 = mysqli_real_escape_string($conn, $_POST['image']);
$image= filter_var($image1, FILTER_SANITIZE_STRING);
$image_alt1 = mysqli_real_escape_string($conn, $_POST['image_alt']);
$image_alt = filter_var($image_alt1, FILTER_SANITIZE_STRING);
$tag11 = mysqli_real_escape_string($conn, $_POST['tag1']);
$tag1 = filter_var($tag11, FILTER_SANITIZE_STRING);
$tag21 = mysqli_real_escape_string($conn, $_POST['tag2']);
$tag2 = filter_var($tag21, FILTER_SANITIZE_STRING);
$tag31 = mysqli_real_escape_string($conn, $_POST['tag3']);
$tag3 = filter_var($tag31, FILTER_SANITIZE_STRING);
$category1 = mysqli_real_escape_string($conn, $_POST['category']);
$category = filter_var($category1, FILTER_SANITIZE_STRING);
$date1 = mysqli_real_escape_string($conn, $_POST['date']);
$date = filter_var($date1, FILTER_SANITIZE_STRING);

$_SESSION['introduction'] = $introduction;
$_SESSION['conclusion'] = $conclusion;
$_SESSION['title'] = $title;
$_SESSION['description'] = $description;
$_SESSION['image'] = $image;
$_SESSION['image_alt'] = $image_alt;
$_SESSION['tag1'] = $tag1;
$_SESSION['tag2'] = $tag2;
$_SESSION['tag3'] = $tag3;
$_SESSION['category'] = $category;
$_SESSION['date'] = $date;

$_SESSION['table'] = $table;
$_SESSION['permalink'] = $permalink;

header("Location: all-posts-front-insert.php");
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

