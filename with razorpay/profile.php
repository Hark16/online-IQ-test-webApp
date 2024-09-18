
<?php
include 'znmd2010/katrina.php';

$username=$_SESSION['username'];
$table = 'vidyarthi';

$sql = "SELECT * FROM $table WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$lines =mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

?>

<h1> Profile details </h1>

<table>

<tr>
<th><h1> Title </h1></th>
<th><h1> Description </h1></th>
<th><h1> EDIT </h1></th>

</tr>

<tr>
<td><h1> Name </h1></td>
<td><h1> <?php echo$row['first_name']; ?> <?php echo $row['last_name']; ?></h1></td>
</tr>

<tr>
<td><h1> Username </h1></td>
<td><h1> <?php echo$row['username']; ?> </h1></td>

</tr>
<tr>
<td><h1> E-mail </h1></td>
<td><h1> <?php echo$row['email']; ?> </h1></td>

</tr>

<tr>
<td><h1> Blog Credits </h1></td>
<td><h1> <?php echo$row['blog_credits']; ?> </h1></td>
<td><button onclick='blog_credits()'>Buy Now</button></td>

</tr>

<tr>
<td><h1> Questions Credits </h1></td>
<td><h1> <?php echo$row['question_credits']; ?> </h1></td>
<td><button onclick='question_credits()'>Buy Now</button></td>

</tr>

</table>


<br/>
<p><b>Refresh to Go Back </b></p>
