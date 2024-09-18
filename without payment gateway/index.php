<!DOCTYPE html> 
<?php
	include 'znmd2010/katrina.php';
	$table1='mahavachan';
	$var=rand(1,50);
	
	$select11="SELECT * FROM $table1 WHERE id='$var'";
	$result11=mysqli_query($conn, $select11);
	
	mysqli_num_rows($result11);
	$row11=mysqli_fetch_array($result11);

$table = 'admin_payment_details';

$select = "SELECT * FROM $table ";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

	?> 
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:title" content="You should choose iQtesst(the IQ test Online)" />
		<meta property="og:site_name" content="iQ tesst" />
		<meta property="og:url" content="https://iqtesst.com" />
		<meta property="og:description" content="Want to know your IQ rating? Take our online IQ test to get your personal score. Find out what your IQ level is and what you need to know!" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="https://iqtesst.com/logo.jpeg" />

		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@iQtesst" />
		<meta name="twitter:description" content="Want to know your IQ rating? Take our online IQ test to get your personal score. Find out what your IQ level is and what you need to know!" />
		<meta name="twitter:app:name:iphone" content="iQ tesst" />
		<meta name="twitter:app:id:iphone" content="" />
		<meta name="twitter:app:name:ipad" content="iQ tesst" />
		<meta name="twitter:app:id:ipad" content="" />
		<meta name="twitter:app:name:googleplay" content="iQ tesst" />
		<meta name="twitter:app:id:googleplay" content="" />
		<meta name="twitter:app:country" content="India" />
		<title> You should choose iQtesst(the IQ test Online).</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GD9EMZCDFZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GD9EMZCDFZ');
</script>


<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
<link rel="manifest" href="/site.webmanifest">

		<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
		<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='style.css' type='text/css' media='all' />
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all' />
		<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all' />
		<link rel="canonical" href="https://iqtesst.com/" />
		<meta name="description" content="Want to know your IQ rating? Take our online IQ test to get your personal score. Find out what your IQ level is and what you need to know!">
		  
		<meta name="keywords" content="iq test, iq test online, iq scale, average iq score, adult iq, genius people, smart people">
		  
		<meta name="author" content="Harish Verma">
		<style>
			a.meraMenu{
			border-style: ridge;
			border-width: 2px;
			border-color: black;
			border-radius: 5px;
			margin: auto;
			padding: 15px;
			}
		</style>
	</head>
	<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
		<div id="page">
			<div class="container">
				<header id="masthead" class="site-header">
					<div class="site-branding">
						<h2 class="site-title"><a style='border-width:0;' href="index.php" rel="home">IQ tesst</a></h2>
						<h2 class="site-description"> <?php echo $row11['quotes']; ?> </h2>
					</div>
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle">Menu</button>
						<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
						<div class="menu-menu-1-container">
							<ul id="menu-menu-1" class="menu">

								<li>
									<a class='meraMenu' href="index.php">Home</a>
								</li>
								<li>
									<a class='meraMenu' href="test.php">Test</a>
								</li>
								<li>
									<a class='meraMenu' href="about.html">About us</a>
								</li>
								<li>
									<a class='meraMenu' href="contact.html">Contact us</a>
								</li>

				<li><a class="meraMenu" href="#sub">Pages</a>
				<ul id="sub" class="sub-menu">
					<li><a class='meraMenu' href="privacy.html">privacy</a></li>
					<li><a class='meraMenu' href="tnc.html">Terms&conditions</a></li>
					<li><a class='meraMenu' href="disclaimer.html">Disclaimer</a></li>

				</ul>
				</li>



								
							</ul>
						</div>
					</nav>
				</header>
				<div id="content" class="site-content">
					<div id="primary" class="content-area column full">
						<main id="main" class="site-main">

<?php include 'index_main.php'; ?>



						</main>
					</div>
				</div>
			</div>
			<footer id="colophon" class="site-footer">
				<div class="container">
					<div class="site-info">
						<h2 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;"></h2>
						IQtesst.Com </h2>
						<a target="blank" href="https://www.iqtesst.com/">&copy; IQ tesst <?php echo date('Y'); ?> </a>
					</div>
				</div>
			</footer>
			<a href="#top" class="smoothup" title="Back to top">
			<span class="genericon genericon-collapse">Top</span>
			</a>
		</div>

<script>

function mocktest(){
    window.location.assign('test.php');
    
}
</script>

		<script type="application/ld+json">
			{
			  "@context": "https://schema.org",
			  "@type": "Article",
			  "mainEntityOfPage": {
			    "@type": "WebPage",
			    "@id": "https://iqtesst.com"
			  },
			  "headline": "why you should take our IQ test?",
			  "description": "Online IQ tests have become very popular in recent years. This is because they provide a fast, convenient way to find out your true potential. If you are trying to find out your true potential in terms of IQ, this test is a great place to start. Online IQ tests can be found easily and will provide you with a variety of information. This includes your IQ score, as well as your Verbal, Math and Memory scores. Additionally, online IQ tests will provide you with an insight into your personality. This is helpful because it provides you with information about your strengths and weaknesses.",
			  "image": "https://iqtesst.com/logo.jpeg",  
			  "author": {
			    "@type": "Person",
			    "name": ""
			  },  
			  "publisher": {
			    "@type": "Organization",
			    "name": "",
			    "logo": {
			      "@type": "ImageObject",
			      "url": ""
			    }
			  },
			  "datePublished": "2022-08-01"
			}
		</script>
		<script src='js/jquery.js'></script>
		<script src='js/plugins.js'></script>
		<script src='js/scripts.js'></script>
		<script src='js/masonry.pkgd.min.js'></script>
	</body>
</html>