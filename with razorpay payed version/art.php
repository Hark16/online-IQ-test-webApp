<?php
	include 'znmd2010/katrina.php';
	
	$table1 = 'mahavachan';
	$var = rand(1,50);
	
	$select11 = "SELECT * FROM $table1 WHERE id = '$var'";
	$result11 = mysqli_query($conn, $select11);
	mysqli_num_rows($result11);
	$row11 = mysqli_fetch_array($result11);
	//
	
	$p_link1 = mysqli_real_escape_string($conn, $_GET['icle']);
	$p_link= filter_var($p_link1, FILTER_SANITIZE_STRING);
	
	$table = 'mera_blog';
	
	$select = "SELECT * FROM $table WHERE permalink = '$p_link'";
	$result = mysqli_query($conn, $select);
	mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	
	?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:title" content=<?php echo $row['title']; ?>>
		<meta property="og:site_name" content=iQ tesst>
		<meta property="og:url" content=https://iqtesst.com/art.php?icle=<?php echo $row['permalink']; ?>>
		<meta property="og:description" content=<?php echo $row['description']; ?>>
		<meta property="og:type" content=website>
		<meta property="og:image" content=<?php echo $row['image']; ?>>
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@iQtesst">
		<meta name="twitter:description" content="<?php echo $row['description']; ?>">
		<meta name="twitter:app:name:iphone" content="iQ tesst">
		<meta name="twitter:app:id:iphone" content="">
		<meta name="twitter:app:name:ipad" content="iQ tesst">
		<meta name="twitter:app:id:ipad" content="">
		<meta name="twitter:app:name:googleplay" content="iQ tesst">
		<meta name="twitter:app:id:googleplay" content="">
		<meta name="twitter:app:country" content="India">
		<title><?php echo $row['title']; ?></title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
<link rel="manifest" href="/site.webmanifest">


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
		<link rel="icon" type="image/x-icon" href="award.png">
		<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
		<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
		<meta name="description" content="<?php echo $row['description']; ?>">
		<meta name="keywords" content= "<?php echo $row['tag1']; ?>, <?php echo $row['tag2']; ?>, <?php echo $row['tag3']; ?>">
		  
		<meta name="author" content="<?php echo $row['writer']; ?>">
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
								<li><a href="test.php">IQ TEST</a></li>
								<li><a href="pages.php">All Pages</a></li>

							</ul>
						</div>
					</nav>
				</header>
				<!-- #masthead -->
				<div id="content" class="site-content">
					<div id="primary" class="content-area column two-thirds">
						<main id="main" class="site-main" role="main">
							<article>
								<header class="entry-header">
									<h1 class="entry-title animate__animated animate__bounce animate__slow"> <?php echo $row['title']; ?></h1>
									<div class="entry-meta">
										<span class="posted-on"><time class="entry-date published"><?php echo $row['added_on']; ?></time></span>						
									</div>
									<div class="entry-thumbnail">					
										<img src="<?php echo $row['image']; ?>" alt="<?php echo $row['image_alt']; ?>" class=" animate__animated animate__fadeIn animate__slow">
									</div>
								</header>
								<!-- .entry-header -->
								<div class="entry-content">
									<div id='full_article'>
										<button onclick='full_article("<?php echo $p_link; ?>")'>Read Article(Cost-1 credit)</button>
									</div>
								</div>
								<footer class="entry-footer">
									<span class="cat-links">
									Posted in <a href="blog-category.php?id=1&tag=<?php echo $row['tag1']; ?>" rel="category tag"><?php echo $row['tag1']; ?></a>, <a href="blog-category.php?id=2&tag=<?php echo $row['tag2']; ?>" rel="category tag"><?php echo $row['tag2']; ?></a>, <a href="blog-category.php?id=3&tag=<?php echo $row['tag3']; ?>" rel="category tag"><?php echo $row['tag3']; ?></a>
									</span>
								</footer>
								<!-- .entry-footer -->
							</article>
<h2>External Links</h2>

<?php

$num123 = 1;
while($num123 <= 5){

?>

<a href='<?php echo $row["ext_link".$num123]; ?>' style='display:<?php echo $row["ext_link".$num123."_style"]; ?>;'> <?php echo $row['ext_link'.$num123.'_name']; ?>   </a>

<?php

$num123++;
}

?>


							<!-- #post-## -->
						</main>
						<!-- #main -->
					</div>
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
									$select3 = "SELECT * FROM $table WHERE live = 'yes' ";
									$result = mysqli_query($conn, $select3);
									$lines = mysqli_num_rows($result);
									
									$lim = rand(7, ($lines - 5));
									
									$select2 = "SELECT * FROM $table WHERE live = 'yes' LIMIT $lim,5";
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
		<script>
			function full_article(slag){
			  var xhttp = new XMLHttpRequest();
			
			  xhttp.onreadystatechange = function() {
			
			    if (this.readyState == 4 && this.status == 200) {
			      document.getElementById("full_article").innerHTML =
			      this.responseText;
			
			    }
			  };
			
			  xhttp.open("GET", "full_article.php?slag="+ slag, true);
			
			  xhttp.send();
			}
			
		</script>
		<script type="application/ld+json">
			{
			  "@context": "https://schema.org",
			  "@type": "Article",
			  "mainEntityOfPage": {
			    "@type": "WebPage",
			    "@id": "https://iqtesst.com/art.php?icle=<?php echo $row['permalink']; ?>"
			  },
			  "headline": "<?php echo $row['title']; ?>",
			  "description": "<?php echo $row['description']; ?>",
			  "image": "<?php echo $row['image']; ?>",  
			  "author": {
			    "@type": "Person",
			    "name": "<?php echo $row['writer']; ?>"
			  },  
			  "publisher": {
			    "@type": "Organization",
			    "name": "iQ tesst",
			    "logo": {
			      "@type": "ImageObject",
			      "url": "https://iqtesst.com/logo.jpeg"
			    }
			  },
			  "datePublished": "<?php echo $row['added_on']; ?>"
			}
		</script>
		<script src='js/jquery.js'></script>
		<script src='js/plugins.js'></script>
		<script src='js/scripts.js'></script>
		<script src='js/masonry.pkgd.min.js'></script>
	</body>
</html>