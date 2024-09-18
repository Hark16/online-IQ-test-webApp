
<?php
include 'znmd2010/katrina.php';

$table1 = 'mahavachan';
$var = rand(1,50);

$select11 = "SELECT * FROM $table1 WHERE id = '$var'";
$result11 = mysqli_query($conn, $select11);
mysqli_num_rows($result11);
$row11 = mysqli_fetch_array($result11);

?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

Ask The Expert
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
<h1 class=" animate__animated animate__bounce animate__slow">AskTheExpert</h1>
<!!!--introduction--!!!>

<h2 class=" animate__animated animate__bounce animate__slow">What is askTheExpert?</h2>
<pre class=" animate__animated animate__fadeIn animate__slow">
Ask the expert is an initiative to fill happiness and peace in your life. There are small and big problems in our life, from which we want to get out, but sometimes we need the advice of an expert. But often we do not have anyone to advise us or understand our problems. Ask the expert fulfills this shortcoming.
No matter what the problem is, we are sitting with you, who will not only listen to your problem but will also solve it. According to a report, a person does not lack advice but correct advice, and we give you the right suggestion or advice.
</pre>

<h2 class=" animate__animated animate__bounce animate__slow">Why askTheExpert?</h2>
<pre class=" animate__animated animate__fadeIn animate__slow">
Don't you have any friends?
Is there no one to hear your troubles?
Is there no one to tell you the solution to your problem?
Do people not give or do not want to give you the right suggestions?

You can see by searching in the internet how many people get into troubles and take wrong steps or choose the wrong path. And later on thinking carefully or looking at those problems from a different perspective, it is known that if they had got the right suggestion at the right time, many situations would have changed.
That's why we have taken this step for you so that you have the right suggestions available at the right time.
There is also a side that some problems are such that most people cannot share. They want that someone should give suggestions to solve their problems but also take care of privacy, and here the ask the expert made by us helps you in a perfect way because whatever problem you put in front of us, it is only for us. And between you is absolutely safe. We guarantee that we will not share and will not share the question given by you with anyone, anywhere and anytime.
</pre>

<h2 class=" animate__animated animate__bounce animate__slow">How to use askTheExpert?</h2>
<pre class=" animate__animated animate__fadeIn animate__slow">
So by now you have come to know that what is this platform created by us and why this platform has been created. And after knowing all this, the question must be arising in your mind that how can you use this wonderful platform? so do not delay, take the steps given below in turn and have fun, because the right to a good and peaceful life It's everyone's.

1: Click on the link given below and go to the new page.
2: On the next page you have to enter your problem,
3: There you can ask your question,
4: After asking your question, you will have to wait for the answer from us.
5: There you will find the old questions asked by you and their answers.
6: And we'll give you a solution to your problem within about 24 hours.
7: This dialog is absolutely secure, it can only be read by you and the respondent.
* We will always take care of your privacy.

</pre>



<?php

if(isset($_SESSION['username'])){
$username = $_SESSION['username'];

$select = "SELECT * FROM vidyarthi WHERE username = '$username'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$credits = $row['question_credits'];

if($credits> 0){

echo '<h3><a href="ask1.php"> Ask The Expert </a></h3>';

}

else{
echo '<h4>Sorry but you do not have Credits for Asking Questions.</h4>';
echo '<h3>Please go to your profile and buy some credits for asking.</h3>';

}

}else{
?>

<h3>Please <a href='login.php'>Login</a> to use this service</h3>
<h4>If you do not have account? Please take our <a href='test.php'>iQ test</a></h4>

<?php
}
?>

<h2 class=" animate__animated animate__bounce animate__slow">Who is askTheExpert? </h2>
<pre class=" animate__animated animate__fadeIn animate__slow">
After knowing all this, a question must also arise in your mind that after all, who is giving you such good and right suggestions?
So we give you the answer here to this question, we have our experts to answer you. These experts have a very good understanding of many aspects of life, that's why they keep accurate suggestions for all your questions or problems in front of you within a few time.
We want to make one thing clear on this that whatever answer is being given by us or will be given by us, to the question asked by you or the problem put by you, all of them should be accepted, taken or ignored in your life It will be completely your decision and that you are not bound in any way to accept or not to accept the suggestion given by us, also we want to say that all the steps taken in your life are your responsibility and will be in future also. We or our experts or any part of our website or any of our suggestions or any forum linked to us will not be responsible for any decision you take. For more information, read our Disclaimer, Terms and Conditions and Privacy pages.Thank you

</pre>

<hr/>
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
			

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
<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
</body>
</html>
