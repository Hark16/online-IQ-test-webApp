<?php
	include 'znmd2010/katrina.php';
	if(isset($_GET['icle'])){

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
	if(mysqli_num_rows($result) == 1){
	$row = mysqli_fetch_array($result);

$old_reads = $row['all_reads'];
$new_reads = $old_reads + 1;
mysqli_query($conn, "UPDATE mera_blog SET all_reads = '$new_reads' WHERE permalink = '$p_link'");


	?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:title" content="<?php echo $row['title']; ?>" />
		<meta property="og:site_name" content="iQ tesst" />
		<meta property="og:url" content="https://iqtesst.com/enter10/art.php?icle=<?php echo $p_link; ?>" />
		<meta property="og:description" content="<?php echo $row['description']; ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?php echo $row['image']; ?>" />

		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@iQtesst" />
		<meta name="twitter:description" content="<?php echo $row['description']; ?>" />
		<meta name="twitter:app:name:iphone" content="iQ tesst" />
		<meta name="twitter:app:id:iphone" content="" />
		<meta name="twitter:app:name:ipad" content="iQ tesst" />
		<meta name="twitter:app:id:ipad" content="" />
		<meta name="twitter:app:name:googleplay" content="iQ tesst" />
		<meta name="twitter:app:id:googleplay" content="" />
		<meta name="twitter:app:country" content="India" />

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

<input type='text' id='p_link' value='<?php echo $p_link; ?>' style='display:none;'/>
<p id='likes'></p>
<p id='all_reads'></p>

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

<pre style="white-space:pre-wrap;" class="animate__animated animate__fadeIn animate__slow"><?php echo $row['introduction']; ?></pre>

<?php

$num = 1;
while($num <= 10){

?>

<<?php echo $row['side_heading_tag_'.$num]; ?> style="display: <?php echo $row['side_heading_style_'.$num]; ?>;" class=" animate__animated animate__bounce animate__slow">
<?php echo $row['side_heading_'.$num];?>
</<?php echo $row['side_heading_tag_'.$num]; ?>>

<<?php echo $row['detail_tag'.$num];?> style="display: <?php echo $row['detail_style'.$num];?>;" class=" animate__animated animate__fadeIn animate__slow">
<?php echo $row['detail'.$num];?>
</<?php echo $row['detail_tag'.$num]; ?>>

<?php

$num++;
}

?>

<pre style="white-space:pre-wrap;" class=" animate__animated animate__fadeIn animate__slow"><?php echo $row['conclusion']; ?></pre>

<br/>
<button id='likeBtn' onclick= 'likeBtn("<?php echo $p_link; ?>")'> Like </button>
<br/>

									</div>
								</div>
								<footer class="entry-footer">
									<span class="cat-links">
									Posted in <a href="blog-category.php?id=1&tag=<?php echo $row['tag1']; ?>" rel="category tag"><?php echo $row['tag1']; ?></a>, <a href="blog-category.php?id=2&tag=<?php echo $row['tag2']; ?>" rel="category tag"><?php echo $row['tag2']; ?></a>, <a href="blog-category.php?id=3&tag=<?php echo $row['tag3']; ?>" rel="category tag"><?php echo $row['tag3']; ?></a>
									</span>
								</footer>
								<!-- .entry-footer -->
							</article>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<!-- share button code -->
<div class="fb-share-button" 
data-href="https://iqtesst.com/enter10/art.php?icle=<?php echo $p_link; ?>" 
data-layout="button_count">
</div>

<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>

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
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

		<script>


(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function likes(){

var p_link = document.getElementById('p_link').value;
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("likes").innerHTML =
      'Likes: '+ this.responseText;

    }
  };

  xhttp.open("GET", "likes.php?slag="+ p_link, true);

  xhttp.send();

  var xhttp1 = new XMLHttpRequest();

  xhttp1.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("all_reads").innerHTML =
      'Reads: '+ this.responseText;

    }
  };

  xhttp1.open("GET", "all_reads.php?slag="+ p_link, true);

  xhttp1.send();

}
setInterval(likes, 500);

function likeBtn(slag){
alert('Liked');
var likeBtn = document.getElementById('likeBtn');
likeBtn.disabled = 'true';
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {


    }
  };

  xhttp.open("GET", "likes_insert.php?slag="+ slag, true);

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

<?php
}else{
?>
<script>

window.location.assign('index.php');
</script>
<?php
}
?>

<?php
}else{
?>
<script>

window.location.assign('index.php');
</script>
<?php
}
?>
