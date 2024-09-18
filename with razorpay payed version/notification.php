
<?php

include 'znmd2010/katrina.php';
$username=$_SESSION['username'];

$sql1 = "SELECT * FROM notification WHERE username= '$username' or username = 'all' ORDER BY id DESC";
if($result1 = mysqli_query($conn, $sql1)){
if(mysqli_num_rows($result1) > 0){ 
while($row1 = mysqli_fetch_array($result1)){

echo $row1['msg']."	";
echo $row1['date']."<br/>";

}}}

$update = "UPDATE vidyarthi SET notification = '0' WHERE username = '$username' ";
mysqli_query($conn, $update);

?>
<br/>
<p>refresh page to go back</p>

