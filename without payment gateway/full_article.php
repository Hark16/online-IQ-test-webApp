<?php
include 'znmd2010/katrina.php';

$slag1 = mysqli_real_escape_string($conn, $_GET['slag']);
$slag= filter_var($slag1, FILTER_SANITIZE_STRING);

$select = "SELECT * FROM mera_blog WHERE permalink = '$slag'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$a_code = $row['author_code'];

if(isset($_SESSION['username'])){
$username = $_SESSION['username'];

$select1 = "SELECT * FROM vidyarthi WHERE username = '$username'";
$result1 = mysqli_query($conn, $select1);
mysqli_num_rows($result1);
$row1 = mysqli_fetch_array($result1);

$credits = $row1['blog_credits'];

if($credits> 0){

$final_credits = $credits - 1;
mysqli_query($conn, "UPDATE vidyarthi SET blog_credits = '$final_credits' WHERE username = '$username'");

$msg = "You have been charged 1 from your blog credits, because you read a Blog Article.";
$date=date("d/m/Y");

$inswork1 = "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg', '$date')";
mysqli_query($conn, $inswork1);

mysqli_query($conn, "UPDATE vidyarthi SET notification = '1' WHERE username = '$username'");

?>

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
<button id='likeBtn' onclick= 'likeBtn("<?php echo $slag; ?>")'> Like </button>
<br/>

<?php

$old_reads = $row['all_reads'];
$new_reads = $old_reads + 1;
mysqli_query($conn, "UPDATE mera_blog SET all_reads = '$new_reads' WHERE permalink = '$slag'");

}

else{
echo '<h4>Sorry but you do not have Credits for view blog Article.</h4>';
echo '<h3>Please go to your profile and buy some credits for View the Article.</h3>';

}

}else{
?>

<h3>Please <a href='login.php'>Login</a> to use this service</h3>
<h4>If you do not have account? Please take our <a href='test.php'>iQ test</a></h4>

<?php
}
?>
