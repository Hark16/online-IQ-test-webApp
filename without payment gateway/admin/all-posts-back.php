<?php
include '3011bought2009/herohondapassionpro.php';
if(isset($_SESSION['user'])){
$permalink1 = mysqli_real_escape_string($conn, $_GET['permalink']);
$permalink= filter_var($permalink1, FILTER_SANITIZE_STRING);

$table= 'mera_blog';

$_SESSION['table'] = $table;
$_SESSION['permalink'] = $permalink;

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

back part 

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

<a href='logout.php'>logout</a><br/>
<a href='all-posts-entry.php?permalink=<?php echo$permalink; ?>'>back</a><br/>

<?php

$select = "SELECT * FROM $table WHERE permalink = '$permalink'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

?>
<form method='POST'>

<table>

<tr> <td><input type='text' name='side_heading_style_1' placeholder='style'value='<?php echo $row ['side_heading_style_1']; ?>'/></td> <td><input type='text' name='side_heading_tag_1' placeholder='html tag' value='<?php echo $row ['side_heading_tag_1']; ?>'/></td> <td><textarea rows='2' name='side_heading_1' placeholder='heading' ><?php echo$row ['side_heading_1']; ?></textarea></td> </tr> <tr> <td><input type='text' name='detail_style1' placeholder='description style' value='<?php echo $row ['detail_style1']; ?>'/></td> <td><input type='text' name='detail_tag1' placeholder='description html tag' value='<?php echo $row ['detail_tag1']; ?>'/></td> <td><textarea name='detail1' placeholder='description' rows='2'><?php echo$row ['detail1']; ?></textarea></td> </tr> <tr> <td><input type='text' name='side_heading_style_2' placeholder='style'value='<?php echo $row ['side_heading_style_2']; ?>'/></td> <td><input type='text' name='side_heading_tag_2' placeholder='html tag' value='<?php echo $row ['side_heading_tag_2']; ?>'/></td> <td><textarea rows='2' name='side_heading_2' placeholder='heading' ><?php echo$row ['side_heading_2']; ?></textarea></td> </tr> <tr> <td><input type='text' name='detail_style2' placeholder='description style' value='<?php echo $row ['detail_style2']; ?>'/></td> <td><input type='text' name='detail_tag2' placeholder='description html tag' value='<?php echo $row ['detail_tag2']; ?>'/></td> <td><textarea name='detail2' placeholder='description' rows='2'><?php echo$row ['detail2']; ?></textarea></td> </tr> <tr> <td><input type='text' name='side_heading_style_3' placeholder='style'value='<?php echo $row ['side_heading_style_3']; ?>'/></td> <td><input type='text' name='side_heading_tag_3' placeholder='html tag' value='<?php echo $row ['side_heading_tag_3']; ?>'/></td> <td><textarea rows='2' name='side_heading_3' placeholder='heading' ><?php echo$row ['side_heading_3']; ?></textarea></td> </tr> <tr> <td><input type='text' name='detail_style3' placeholder='description style' value='<?php echo $row ['detail_style3']; ?>'/></td> <td><input type='text' name='detail_tag3' placeholder='description html tag' value='<?php echo $row ['detail_tag3']; ?>'/></td> <td><textarea name='detail3' placeholder='description' rows='2'><?php echo$row ['detail3']; ?></textarea></td> </tr> <tr> <td><input type='text' name='side_heading_style_4' placeholder='style'value='<?php echo $row ['side_heading_style_4']; ?>'/></td> <td><input type='text' name='side_heading_tag_4' placeholder='html tag' value='<?php echo $row ['side_heading_tag_4']; ?>'/></td> <td><textarea rows='2' name='side_heading_4' placeholder='heading' ><?php echo$row ['side_heading_4']; ?></textarea></td> </tr> <tr> <td><input type='text' name='detail_style4' placeholder='description style' value='<?php echo $row ['detail_style4']; ?>'/></td> <td><input type='text' name='detail_tag4' placeholder='description html tag' value='<?php echo $row ['detail_tag4']; ?>'/></td> <td><textarea name='detail4' placeholder='description' rows='2'><?php echo$row ['detail4']; ?></textarea></td> </tr> <tr> <td><input type='text' name='side_heading_style_5' placeholder='style'value='<?php echo $row ['side_heading_style_5']; ?>'/></td> <td><input type='text' name='side_heading_tag_5' placeholder='html tag' value='<?php echo $row ['side_heading_tag_5']; ?>'/></td> <td><textarea rows='2' name='side_heading_5' placeholder='heading' ><?php echo$row ['side_heading_5']; ?></textarea></td> </tr> <tr> <td><input type='text' name='detail_style5' placeholder='description style' value='<?php echo $row ['detail_style5']; ?>'/></td> <td><input type='text' name='detail_tag5' placeholder='description html tag' value='<?php echo $row ['detail_tag5']; ?>'/></td> <td><textarea name='detail5' placeholder='description' rows='2'><?php echo$row ['detail5']; ?></textarea></td> </tr> <tr> <td><input type='text' name='side_heading_style_6' placeholder='style'value='<?php echo $row ['side_heading_style_6']; ?>'/></td> <td><input type='text' name='side_heading_tag_6' placeholder='html tag' value='<?php echo $row ['side_heading_tag_6']; ?>'/></td> <td><textarea rows='2' name='side_heading_6' placeholder='heading' ><?php echo$row ['side_heading_6']; ?></textarea></td> </tr> <tr> <td><input type='text' name='detail_style6' placeholder='description style' value='<?php echo $row ['detail_style6']; ?>'/></td> <td><input type='text' name='detail_tag6' placeholder='description html tag' value='<?php echo $row ['detail_tag6']; ?>'/></td> <td><textarea name='detail6' placeholder='description' rows='2'><?php echo$row ['detail6']; ?></textarea></td> </tr> <tr> <td><input type='text' name='side_heading_style_7' placeholder='style'value='<?php echo $row ['side_heading_style_7']; ?>'/></td> <td><input type='text' name='side_heading_tag_7' placeholder='html tag' value='<?php echo $row ['side_heading_tag_7']; ?>'/></td> <td><textarea rows='2' name='side_heading_7' placeholder='heading' ><?php echo$row ['side_heading_7']; ?></textarea></td> </tr> <tr> <td><input type='text' name='detail_style7' placeholder='description style' value='<?php echo $row ['detail_style7']; ?>'/></td> <td><input type='text' name='detail_tag7' placeholder='description html tag' value='<?php echo $row ['detail_tag7']; ?>'/></td> <td><textarea name='detail7' placeholder='description' rows='2'><?php echo$row ['detail7']; ?></textarea></td> </tr> <tr> <td><input type='text' name='side_heading_style_8' placeholder='style'value='<?php echo $row ['side_heading_style_8']; ?>'/></td> <td><input type='text' name='side_heading_tag_8' placeholder='html tag' value='<?php echo $row ['side_heading_tag_8']; ?>'/></td> <td><textarea rows='2' name='side_heading_8' placeholder='heading' ><?php echo$row ['side_heading_8']; ?></textarea></td> </tr> <tr> <td><input type='text' name='detail_style8' placeholder='description style' value='<?php echo $row ['detail_style8']; ?>'/></td> <td><input type='text' name='detail_tag8' placeholder='description html tag' value='<?php echo $row ['detail_tag8']; ?>'/></td> <td><textarea name='detail8' placeholder='description' rows='2'><?php echo$row ['detail8']; ?></textarea></td> </tr> <tr> <td><input type='text' name='side_heading_style_9' placeholder='style'value='<?php echo $row ['side_heading_style_9']; ?>'/></td> <td><input type='text' name='side_heading_tag_9' placeholder='html tag' value='<?php echo $row ['side_heading_tag_9']; ?>'/></td> <td><textarea rows='2' name='side_heading_9' placeholder='heading' ><?php echo$row ['side_heading_9']; ?></textarea></td> </tr> <tr> <td><input type='text' name='detail_style9' placeholder='description style' value='<?php echo $row ['detail_style9']; ?>'/></td> <td><input type='text' name='detail_tag9' placeholder='description html tag' value='<?php echo $row ['detail_tag9']; ?>'/></td> <td><textarea name='detail9' placeholder='description' rows='2'><?php echo$row ['detail9']; ?></textarea></td> </tr> <tr> <td><input type='text' name='side_heading_style_10' placeholder='style'value='<?php echo $row ['side_heading_style_10']; ?>'/></td> <td><input type='text' name='side_heading_tag_10' placeholder='html tag' value='<?php echo $row ['side_heading_tag_10']; ?>'/></td> <td><textarea rows='2' name='side_heading_10' placeholder='heading' ><?php echo$row ['side_heading_10']; ?></textarea></td> </tr> <tr> <td><input type='text' name='detail_style10' placeholder='description style' value='<?php echo $row ['detail_style10']; ?>'/></td> <td><input type='text' name='detail_tag10' placeholder='description html tag' value='<?php echo $row ['detail_tag10']; ?>'/></td> <td><textarea name='detail10' placeholder='description' rows='2'><?php echo$row ['detail10']; ?></textarea></td> </tr>

</table>

<input type='submit' name='submit' value='submit'/>
</form>

<?php

if(isset($_POST['submit'])){

$side_heading_style_11 = mysqli_real_escape_string($conn, $_POST['side_heading_style_1']);
$side_heading_style_1 = filter_var($side_heading_style_11, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_style_1'] = $side_heading_style_1;

$side_heading_tag_11 = mysqli_real_escape_string($conn, $_POST['side_heading_tag_1']);
$side_heading_tag_1 = filter_var($side_heading_tag_11, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_tag_1'] = $side_heading_tag_1;

$side_heading_11 = mysqli_real_escape_string($conn, $_POST['side_heading_1']);
$side_heading_1 = filter_var($side_heading_11, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_1'] = $side_heading_1;

$detail11 = mysqli_real_escape_string($conn, $_POST['detail1']);
$detail1 = filter_var($detail11, FILTER_SANITIZE_STRING);
$_SESSION['detail1'] = $detail1;

$detail_tag11 = mysqli_real_escape_string($conn, $_POST['detail_tag1']);
$detail_tag1 = filter_var($detail_tag11, FILTER_SANITIZE_STRING);
$_SESSION['detail_tag1'] = $detail_tag1;

$detail_style11 = mysqli_real_escape_string($conn, $_POST['detail_style1']);
$detail_style1 = filter_var($detail_style11, FILTER_SANITIZE_STRING);
$_SESSION['detail_style1'] = $detail_style1;

$side_heading_style_21 = mysqli_real_escape_string($conn, $_POST['side_heading_style_2']);
$side_heading_style_2 = filter_var($side_heading_style_21, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_style_2'] = $side_heading_style_2;

$side_heading_tag_21 = mysqli_real_escape_string($conn, $_POST['side_heading_tag_2']);
$side_heading_tag_2 = filter_var($side_heading_tag_21, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_tag_2'] = $side_heading_tag_2;

$side_heading_21 = mysqli_real_escape_string($conn, $_POST['side_heading_2']);
$side_heading_2 = filter_var($side_heading_21, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_2'] = $side_heading_2;

$detail21 = mysqli_real_escape_string($conn, $_POST['detail2']);
$detail2 = filter_var($detail21, FILTER_SANITIZE_STRING);
$_SESSION['detail2'] = $detail2;

$detail_tag21 = mysqli_real_escape_string($conn, $_POST['detail_tag2']);
$detail_tag2 = filter_var($detail_tag21, FILTER_SANITIZE_STRING);
$_SESSION['detail_tag2'] = $detail_tag2;

$detail_style21 = mysqli_real_escape_string($conn, $_POST['detail_style2']);
$detail_style2 = filter_var($detail_style21, FILTER_SANITIZE_STRING);
$_SESSION['detail_style2'] = $detail_style2;

$side_heading_style_31 = mysqli_real_escape_string($conn, $_POST['side_heading_style_3']);
$side_heading_style_3 = filter_var($side_heading_style_31, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_style_3'] = $side_heading_style_3;

$side_heading_tag_31 = mysqli_real_escape_string($conn, $_POST['side_heading_tag_3']);
$side_heading_tag_3 = filter_var($side_heading_tag_31, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_tag_3'] = $side_heading_tag_3;

$side_heading_31 = mysqli_real_escape_string($conn, $_POST['side_heading_3']);
$side_heading_3 = filter_var($side_heading_31, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_3'] = $side_heading_3;

$detail31 = mysqli_real_escape_string($conn, $_POST['detail3']);
$detail3 = filter_var($detail31, FILTER_SANITIZE_STRING);
$_SESSION['detail3'] = $detail3;

$detail_tag31 = mysqli_real_escape_string($conn, $_POST['detail_tag3']);
$detail_tag3 = filter_var($detail_tag31, FILTER_SANITIZE_STRING);
$_SESSION['detail_tag3'] = $detail_tag3;

$detail_style31 = mysqli_real_escape_string($conn, $_POST['detail_style3']);
$detail_style3 = filter_var($detail_style31, FILTER_SANITIZE_STRING);
$_SESSION['detail_style3'] = $detail_style3;

$side_heading_style_41 = mysqli_real_escape_string($conn, $_POST['side_heading_style_4']);
$side_heading_style_4 = filter_var($side_heading_style_41, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_style_4'] = $side_heading_style_4;

$side_heading_tag_41 = mysqli_real_escape_string($conn, $_POST['side_heading_tag_4']);
$side_heading_tag_4 = filter_var($side_heading_tag_41, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_tag_4'] = $side_heading_tag_4;

$side_heading_41 = mysqli_real_escape_string($conn, $_POST['side_heading_4']);
$side_heading_4 = filter_var($side_heading_41, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_4'] = $side_heading_4;

$detail41 = mysqli_real_escape_string($conn, $_POST['detail4']);
$detail4 = filter_var($detail41, FILTER_SANITIZE_STRING);
$_SESSION['detail4'] = $detail4;

$detail_tag41 = mysqli_real_escape_string($conn, $_POST['detail_tag4']);
$detail_tag4 = filter_var($detail_tag41, FILTER_SANITIZE_STRING);
$_SESSION['detail_tag4'] = $detail_tag4;

$detail_style41 = mysqli_real_escape_string($conn, $_POST['detail_style4']);
$detail_style4 = filter_var($detail_style41, FILTER_SANITIZE_STRING);
$_SESSION['detail_style4'] = $detail_style4;

$side_heading_style_51 = mysqli_real_escape_string($conn, $_POST['side_heading_style_5']);
$side_heading_style_5 = filter_var($side_heading_style_51, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_style_5'] = $side_heading_style_5;

$side_heading_tag_51 = mysqli_real_escape_string($conn, $_POST['side_heading_tag_5']);
$side_heading_tag_5 = filter_var($side_heading_tag_51, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_tag_5'] = $side_heading_tag_5;

$side_heading_51 = mysqli_real_escape_string($conn, $_POST['side_heading_5']);
$side_heading_5 = filter_var($side_heading_51, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_5'] = $side_heading_5;

$detail51 = mysqli_real_escape_string($conn, $_POST['detail5']);
$detail5 = filter_var($detail51, FILTER_SANITIZE_STRING);
$_SESSION['detail5'] = $detail5;

$detail_tag51 = mysqli_real_escape_string($conn, $_POST['detail_tag5']);
$detail_tag5 = filter_var($detail_tag51, FILTER_SANITIZE_STRING);
$_SESSION['detail_tag5'] = $detail_tag5;

$detail_style51 = mysqli_real_escape_string($conn, $_POST['detail_style5']);
$detail_style5 = filter_var($detail_style51, FILTER_SANITIZE_STRING);
$_SESSION['detail_style5'] = $detail_style5;

$side_heading_style_61 = mysqli_real_escape_string($conn, $_POST['side_heading_style_6']);
$side_heading_style_6 = filter_var($side_heading_style_61, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_style_6'] = $side_heading_style_6;

$side_heading_tag_61 = mysqli_real_escape_string($conn, $_POST['side_heading_tag_6']);
$side_heading_tag_6 = filter_var($side_heading_tag_61, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_tag_6'] = $side_heading_tag_6;

$side_heading_61 = mysqli_real_escape_string($conn, $_POST['side_heading_6']);
$side_heading_6 = filter_var($side_heading_61, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_6'] = $side_heading_6;

$detail61 = mysqli_real_escape_string($conn, $_POST['detail6']);
$detail6 = filter_var($detail61, FILTER_SANITIZE_STRING);
$_SESSION['detail6'] = $detail6;

$detail_tag61 = mysqli_real_escape_string($conn, $_POST['detail_tag6']);
$detail_tag6 = filter_var($detail_tag61, FILTER_SANITIZE_STRING);
$_SESSION['detail_tag6'] = $detail_tag6;

$detail_style61 = mysqli_real_escape_string($conn, $_POST['detail_style6']);
$detail_style6 = filter_var($detail_style61, FILTER_SANITIZE_STRING);
$_SESSION['detail_style6'] = $detail_style6;

$side_heading_style_71 = mysqli_real_escape_string($conn, $_POST['side_heading_style_7']);
$side_heading_style_7 = filter_var($side_heading_style_71, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_style_7'] = $side_heading_style_7;

$side_heading_tag_71 = mysqli_real_escape_string($conn, $_POST['side_heading_tag_7']);
$side_heading_tag_7 = filter_var($side_heading_tag_71, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_tag_7'] = $side_heading_tag_7;

$side_heading_71 = mysqli_real_escape_string($conn, $_POST['side_heading_7']);
$side_heading_7 = filter_var($side_heading_71, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_7'] = $side_heading_7;

$detail71 = mysqli_real_escape_string($conn, $_POST['detail7']);
$detail7 = filter_var($detail71, FILTER_SANITIZE_STRING);
$_SESSION['detail7'] = $detail7;

$detail_tag71 = mysqli_real_escape_string($conn, $_POST['detail_tag7']);
$detail_tag7 = filter_var($detail_tag71, FILTER_SANITIZE_STRING);
$_SESSION['detail_tag7'] = $detail_tag7;

$detail_style71 = mysqli_real_escape_string($conn, $_POST['detail_style7']);
$detail_style7 = filter_var($detail_style71, FILTER_SANITIZE_STRING);
$_SESSION['detail_style7'] = $detail_style7;

$side_heading_style_81 = mysqli_real_escape_string($conn, $_POST['side_heading_style_8']);
$side_heading_style_8 = filter_var($side_heading_style_81, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_style_8'] = $side_heading_style_8;

$side_heading_tag_81 = mysqli_real_escape_string($conn, $_POST['side_heading_tag_8']);
$side_heading_tag_8 = filter_var($side_heading_tag_81, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_tag_8'] = $side_heading_tag_8;

$side_heading_81 = mysqli_real_escape_string($conn, $_POST['side_heading_8']);
$side_heading_8 = filter_var($side_heading_81, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_8'] = $side_heading_8;

$detail81 = mysqli_real_escape_string($conn, $_POST['detail8']);
$detail8 = filter_var($detail81, FILTER_SANITIZE_STRING);
$_SESSION['detail8'] = $detail8;

$detail_tag81 = mysqli_real_escape_string($conn, $_POST['detail_tag8']);
$detail_tag8 = filter_var($detail_tag81, FILTER_SANITIZE_STRING);
$_SESSION['detail_tag8'] = $detail_tag8;

$detail_style81 = mysqli_real_escape_string($conn, $_POST['detail_style8']);
$detail_style8 = filter_var($detail_style81, FILTER_SANITIZE_STRING);
$_SESSION['detail_style8'] = $detail_style8;

$side_heading_style_91 = mysqli_real_escape_string($conn, $_POST['side_heading_style_9']);
$side_heading_style_9 = filter_var($side_heading_style_91, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_style_9'] = $side_heading_style_9;

$side_heading_tag_91 = mysqli_real_escape_string($conn, $_POST['side_heading_tag_9']);
$side_heading_tag_9 = filter_var($side_heading_tag_91, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_tag_9'] = $side_heading_tag_9;

$side_heading_91 = mysqli_real_escape_string($conn, $_POST['side_heading_9']);
$side_heading_9 = filter_var($side_heading_91, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_9'] = $side_heading_9;

$detail91 = mysqli_real_escape_string($conn, $_POST['detail9']);
$detail9 = filter_var($detail91, FILTER_SANITIZE_STRING);
$_SESSION['detail9'] = $detail9;

$detail_tag91 = mysqli_real_escape_string($conn, $_POST['detail_tag9']);
$detail_tag9 = filter_var($detail_tag91, FILTER_SANITIZE_STRING);
$_SESSION['detail_tag9'] = $detail_tag9;

$detail_style91 = mysqli_real_escape_string($conn, $_POST['detail_style9']);
$detail_style9 = filter_var($detail_style91, FILTER_SANITIZE_STRING);
$_SESSION['detail_style9'] = $detail_style9;

$side_heading_style_101 = mysqli_real_escape_string($conn, $_POST['side_heading_style_10']);
$side_heading_style_10 = filter_var($side_heading_style_101, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_style_10'] = $side_heading_style_10;

$side_heading_tag_101 = mysqli_real_escape_string($conn, $_POST['side_heading_tag_10']);
$side_heading_tag_10 = filter_var($side_heading_tag_101, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_tag_10'] = $side_heading_tag_10;

$side_heading_101 = mysqli_real_escape_string($conn, $_POST['side_heading_10']);
$side_heading_10 = filter_var($side_heading_101, FILTER_SANITIZE_STRING);
$_SESSION['side_heading_10'] = $side_heading_10;

$detail101 = mysqli_real_escape_string($conn, $_POST['detail10']);
$detail10 = filter_var($detail101, FILTER_SANITIZE_STRING);
$_SESSION['detail10'] = $detail10;

$detail_tag101 = mysqli_real_escape_string($conn, $_POST['detail_tag10']);
$detail_tag10 = filter_var($detail_tag101, FILTER_SANITIZE_STRING);
$_SESSION['detail_tag10'] = $detail_tag10;

$detail_style101 = mysqli_real_escape_string($conn, $_POST['detail_style10']);
$detail_style10 = filter_var($detail_style101, FILTER_SANITIZE_STRING);
$_SESSION['detail_style10'] = $detail_style10;

?>
<script>

window.location.assign('all-posts-back-insert.php');
</script>
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

