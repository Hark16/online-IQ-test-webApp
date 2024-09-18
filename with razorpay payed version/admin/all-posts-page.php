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

view page 

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

<a href='all-posts-entry.php?permalink=<?php echo $permalink; ?>'>back</a><br/>

<?php

$select = "SELECT * FROM mera_blog WHERE permalink = '$permalink'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

?>

<h1><?php echo$row['title']; ?></h1>

<p><?php echo $row['description']; ?></p>

<img src='<?php echo $row['image']; ?>' alt='<?php echo $row['image_alt']; ?>' />

<pre style='white-space:pre-wrap;'><?php echo $row['introduction']; ?></pre>

<?php

$num = 1;
while($num <= 10){

?>

<<?php echo $row['side_heading_tag_'.$num];?> style="display: <?php echo $row['side_heading_style_'.$num];?>;">
<?php echo $row['side_heading_'.$num];?>
</<?php echo $row['side_heading_tag_'.$num]; ?>>

<<?php echo $row['detail_tag'.$num];?> style="display: <?php echo $row['detail_style'.$num];?>;">
<?php echo $row['detail'.$num];?>
</<?php echo $row['detail_tag'.$num]; ?>>

<?php

$num++;
}

?>

<pre style='white-space:pre-wrap;'><?php echo $row['conclusion']; ?></pre>

<pre>
Tags-
<?php echo $row['tag1']; ?>

<?php echo $row['tag2']; ?>

<?php echo $row['tag3']; ?>
</pre>
<h2>External Links</h2>

<?php

$num123 = 1;
while($num123 <= 5){

?>

<a href='<?php echo $row["ext_link".$num123]; ?>' style='display:<?php echo $row["ext_link".$num123."_style"]; ?>;'> <?php echo $row['ext_link'.$num123.'_name']; ?> </a>
<br/>

<?php

$num123++;
}

?>

<h6>Category - <?php echo $row['category']; ?></h6>
<h6>Date - <?php echo $row['added_on']; ?></h6>
<h6>Written by <?php echo $row['writer']; ?></h6>

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

