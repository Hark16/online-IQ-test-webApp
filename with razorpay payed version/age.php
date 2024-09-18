
<?php
include 'znmd2010/katrina.php';

$t1 = 'vidyarthi';
$t2 = 'vidyarthi_pariksha';
$username = $_SESSION['u_name'];

$age1 = mysqli_real_escape_string($conn, $_GET['age']);
$age= filter_var($age1, FILTER_SANITIZE_STRING);
$_SESSION['age'] = $age ;

$aa = $age * .16 ;
$bb = $age * .1 ;
$cc = $age * .07 ;

$select = "SELECT * FROM $t2 WHERE username = '$username'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

for($i = 1; $i <= 10 ; $i++){

$answer = 'points'.$i;
if($row['answer'.$i] == 'A'){

$update = "UPDATE $t2 SET $answer = '$aa' WHERE username = '$username'";
mysqli_query($conn, $update);

}

if($row['answer'.$i] == 'B'){

$update = "UPDATE $t2 SET $answer = '$bb' WHERE username = '$username'";
mysqli_query($conn, $update);

}
if($row['answer'.$i] == 'C'){

$update = "UPDATE $t2 SET $answer = '$cc' WHERE username = '$username'";
mysqli_query($conn, $update);

}


}
?>

<h1>Summary</h1>

<pre>
* UserName 
* Question 1
* Question 2
* Question 3
* Question 4
* Question 5
* Question 6
* Question 7
* Question 8
* Question 9
* Question 10
* Age
All Done
</pre>
<br/>

<button style='background-color:green; color:white;' onclick='report()'>Creat Report</button>