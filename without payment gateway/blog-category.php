
<?php
include 'znmd2010/katrina.php';

$table1 = 'mahavachan';
$var = rand(1,50);

$select11 = "SELECT * FROM $table1 WHERE id = '$var'";
$result11 = mysqli_query($conn, $select11);
mysqli_num_rows($result11);
$row11 = mysqli_fetch_array($result11);

$tag1 = mysqli_real_escape_string($conn, $_GET['tag']);
$tag= filter_var($tag1, FILTER_SANITIZE_STRING);
$id1 = mysqli_real_escape_string($conn, $_GET['id']);
$id= filter_var($id1, FILTER_SANITIZE_STRING);

$table = 'mera_blog';

?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

<?php echo $tag; ?> Blog
</title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
<link rel="manifest" href="/site.webmanifest">


<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
</head>
<body class="blog">


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
				<li><a href="https://iqtesst.com/indian/test.php">IQ TEST</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="disclaimer.html">Disclaimer</a></li>
				<li><a href="privacy.html">Privacy</a></li>

			</ul>
		</div>
		</nav>
		</header>
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column two-thirds">
				<main id="main" class="site-main" role="main">
				<div class="grid bloggrid">
				

<?php
//$ftag = 'tag'.$id;

// find out how many rows are in the table 
$sql = "SELECT COUNT(*) FROM $table WHERE live='yes' and tag1='$tag' or tag2='$tag' or tag3='$tag' ";
$result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
$r = mysqli_fetch_row($result);
$numrows = $r[0];

// number of rows to show per page
$rowsperpage = 7;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

// get the info from the db 
$sql = "SELECT * FROM $table WHERE live='yes' and tag1='$tag' or tag2='$tag' or tag3='$tag' ORDER BY id DESC LIMIT $offset, $rowsperpage ";
$result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);

// while there are rows to be fetched...
while ($row = mysqli_fetch_assoc($result)) {

?>

					<article>
					<header class="entry-header">
					<h1 class="entry-title animate__animated animate__bounce animate__slow"><a href="art.php?icle=<?php echo $row['permalink'];?>" rel="bookmark"> <?php echo $row['title']; ?>:<?php echo$row['all_reads'] + 1231; ?>Reads </a></h1>
					<div class="entry-meta">
						<span class="posted-on"><time class="entry-date published"><?php echo $row['added_on']; ?></time></span>						
					</div>
					<div class="entry-thumbnail">						
						<img src="<?php echo $row['image']; ?>" alt="<?php echo $row['image_alt']; ?>" class="animate__animated animate__fadeIn animate__slow">
					</div>
					</header>

					<div class="entry-summary">
						<p class="animate__animated animate__fadeIn animate__slow">
							<?php echo $row['description']; ?><a class="more-link" href="art.php?icle=<?php echo $row['permalink']; ?>">Read more</a>
						</p>
					</div>
					<footer class="entry-footer">
					<span class="cat-links">
					Posted in <a href="blog-category.php?id=1&tag=<?php echo $row['tag1']; ?>" rel="category tag"><?php echo $row['tag1']; ?></a>, <a href="blog-category.php?id=2&tag=<?php echo $row['tag2']; ?>" rel="category tag"><?php echo $row['tag2']; ?></a>, <a href="blog-category.php?id=3&tag=<?php echo $row['tag3']; ?>" rel="category tag"><?php echo $row['tag3']; ?></a>
					</span>
					</footer>
					</article>

<?php
}// end while
//select query ended

?>

				</div>

<nav class='pagination'>
<?php

/******  build the pagination links ******/
// range of num links to show
$range = 3;

// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1&id=$id&tag=$tag'><<</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage&id=$id&tag=$tag'><</a> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link

         echo " [<b>$x</b>] ";
      // if not current page...
      } else {
         // make it a link
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x&id=$id&tag=$tag'>$x</a> ";
      } // end else
   } // end if 
} // end for

// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage&id=$id&tag=$tag'>></a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages&id=$id&tag=$tag'>>></a> ";
} // end if
/****** end build pagination links ******/
?>
</nav>


				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
			


					<div id="secondary" class="column third">
							<h4 class="widget-title"> Popular </h4>
							<ul>
								<?php


									$select2 = "SELECT * FROM $table WHERE live = 'yes' and category = 'popular'";
									if($result = mysqli_query($conn, $select2)){
									if(mysqli_num_rows($result) > 0){
									while($row = mysqli_fetch_array($result)){
									
									?>
								<li>
									<a href="art.php?icle=<?php echo $row['permalink']; ?>"><?php echo $row['title']; ?></a>
								</li>
								<?php 
									}}}
									// select query ended
									
									?>
							</ul>

					</div>
					<!-- #secondary -->
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
<!!!---page end here ---!!!>

<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
</body>
</html>
