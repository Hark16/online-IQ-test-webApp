
<?php
include 'znmd2010/katrina.php';

$num = 1;
$t2 = 'vidyarthi_pariksha';
$username = $_SESSION['username'];

while($num <= 10){

$select = "SELECT * FROM prashna_patra WHERE id = '$num'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row2 = mysqli_fetch_array($result);

$select1 = "SELECT * FROM $t2 WHERE username = '$username'";
$result1 = mysqli_query($conn, $select1);
mysqli_num_rows($result1);
$row = mysqli_fetch_array($result1);

?>

<h3> Question <?php echo $num; ?>  </h3>
<h1><?php echo $row2['title']; ?></h1>

<p><b><?php echo $row2['description']; ?></b></p>

<h2>Your Answer</h2>

<p><?php 

if($row['answer'.$num] == 'A'){
echo $row2['option_1']; 
}
if($row['answer'.$num] == 'B'){
echo $row2['option_2']; 
}
if($row['answer'.$num] == 'C'){
echo $row2['option_3']; 
}

?></p>

<?php

$num++;
}
?>
