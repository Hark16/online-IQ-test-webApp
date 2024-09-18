
<?php
include 'znmd2010/katrina.php';

$username=$_SESSION['username'];
$table = 'vidyarthi';

$sql = "SELECT * FROM $table WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$lines =mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

?>

<h4> Profile details </h4>

<h2> Name </h2>
<h3> <?php echo$row['first_name']; ?> </h3>

<h2> Username </h2>
<h3> <?php echo$row['username']; ?> </h3>

<h2> E-mail </h2>
<h3> <?php echo$row['email']; ?> </h3>

<h2> Blog Credits </h2>
<h3> <?php echo$row['blog_credits']; ?> </h3>
<button onclick='blog_credits()'>Buy Now</button>

<h2> Questions Credits </h2>
<h3> <?php echo$row['question_credits']; ?> </h3>
<button onclick='question_credits()'>Buy Now</button>

<br/>
<p><b>Refresh to Go Back </b></p>
