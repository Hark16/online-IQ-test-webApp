<!DOCTYPE html>
<?php
	include 'znmd2010/katrina.php';
	
	$table1 = 'mahavachan';
	$var = rand(1,50);
	
	$select11 = "SELECT * FROM $table1 WHERE id = '$var'";
	$result11 = mysqli_query($conn, $select11);
	mysqli_num_rows($result11);
	$row11 = mysqli_fetch_array($result11);
	
	?>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			Blog
		</title>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GD9EMZCDFZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GD9EMZCDFZ');
</script>

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
		<link rel="canonical" href="https://iqtesst.com/" />
		  
		<meta name="description" content="Want to know your IQ rating? Take our online IQ test to get your personal score. Find out what your IQ level is and what you need to know!">
	</head>
	<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
		<div id="page">
			<div class="container">
				<header id="masthead" class="site-header">
					<div class="site-branding">
						<h2 class="site-title"><a href="index.php" rel="home">IQ tesst</a></h2>
						<h2 class="site-description"><?php echo $row11['quotes']; ?></h2>
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
							<div class="grid bloggrid">
								<?php
									$table = 'mera_blog';
									
									// find out how many rows are in the table 
									$sql = "SELECT COUNT(*) FROM $table WHERE live='yes' ";
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
									$sql = "SELECT * FROM $table WHERE live = 'yes' ORDER BY id DESC LIMIT $offset, $rowsperpage ";
									$result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
									
									// while there are rows to be fetched...
									while ($row = mysqli_fetch_assoc($result)) {
									
									?>
								<article>
									<header class="entry-header">
										<h1 class="entry-title animate__animated animate__bounce animate__slow"><a href="art.php?icle=<?php echo $row['permalink'];?>" rel="bookmark"><?php echo $row['title'];?></a></h1>
										<div class="entry-meta">
											<span class="posted-on"><time class="entry-date published"><?php echo $row['added_on']; ?></time></span>						
										</div>
										<div class="entry-thumbnail">						
											<img src="<?php echo $row['image']; ?>" alt="<?php echo $row['image_alt']; ?>" class=" animate__animated animate__fadeIn animate__slow">
										</div>
									</header>
									<div class="entry-summary">
										<p class=" animate__animated animate__fadeIn animate__slow">
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
									} // end while
									//select query ended
									
									//echo '<h1>Coming Soon</h1>';
									
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
									   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
									   // get previous page num
									   $prevpage = $currentpage - 1;
									   // show < link to go back to 1 page
									   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
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
									         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
									      } // end else
									   } // end if 
									} // end for
									
									// if not on last page, show forward and last page links        
									if ($currentpage != $totalpages) {
									   // get next page
									   $nextpage = $currentpage + 1;
									    // echo forward link for next page 
									   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
									   // echo forward link for lastpage
									   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
									} // end if
									/****** end build pagination links ******/
									?>
							</nav>
						</main>
						<!-- #main -->
					</div>
					<!-- #primary -->
					<div id="secondary" class="column third">
						<div id="sidebar-1" class="widget-area" role="complementary">
							<aside id="text-5" class="widget widget_text">
								<h4 class="widget-title">About Blog</h4>
								<div class="textwidget">
									<p>
										<img src="https://i.postimg.cc/4s0DhXMM/blog.png" class="alignleft" style="width:80px;border-radius:50%;margin-bottom:0;"> 

All these articles have been written by us after a lot of research, in this you will get to see the impressions of our experts.
									</p>


								</div>
							</aside>
							<aside id="recent-posts-2" class="widget widget_recent_entries">
							<h4 class="widget-title">Other Posts</h4>
							<ul>
								<?php
									$select3 = "SELECT * FROM $table WHERE live = 'yes'";
									$result = mysqli_query($conn, $select3);
									$lines = mysqli_num_rows($result);
									
									$lim = rand(7, ($lines - 5));
									
									$select2 = "SELECT * FROM $table WHERE live = 'yes' LIMIT $lim,5 ";
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
						<!-- .widget-area -->
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