
<button onclick= 'faq1()'> Back </button>

<?php
include 'znmd2010/katrina.php';
$topic1 = mysqli_real_escape_string($conn, $_GET['topic']);
$topic= filter_var($topic1, FILTER_SANITIZE_STRING);

?>

<h1> FAQs </h1>

<?php

$table1 = 'f_a_q';

$select1 = "SELECT * FROM $table1 WHERE topic = '$topic'";
$result1 = mysqli_query($conn, $select1);
if(mysqli_num_rows($result1) > 0 ){
while($row1 = mysqli_fetch_array($result1)){
?>

<h3> <?php echo $row1['question']; ?> </h3>
<h4> <?php echo $row1['answer']; ?> </h4>

<hr/>

<?php
}}
else{echo 'no data in '.$topic;}

?>
