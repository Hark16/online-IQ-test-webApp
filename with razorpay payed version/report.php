
<?php

include 'znmd2010/katrina.php';
$username = $_SESSION['username'];
$table = 'vidyarthi';

$select = "SELECT * FROM $table WHERE username = '$username'";
$result = mysqli_query($conn, $select);
$lines = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$code = $row['code'];
$score = $row['i_q'];
$date = $row['added_on'];
$gender = $row['gender'];

?>


<h2>Certificate Of Complition </h2>
<br/>
<h3>This is Certify that </h3>
<br/>

<h4><?php echo $row['first_name']; ?></h4>
<br/>

<h3>Has completed the Test of... </h3>
<br/>

<h2>iQtesst.COM</h2>
<br/>

<h4>SCORE : <?php echo $score; ?></h4>
<br/>
<h4>Date : <?php echo $date; ?></h4>
<br/>
<br/>


<h4>Share into <a href='whatsapp://send?text= <?php echo $row["first_name"];?> Share With You <?php if($gender == 'male'){echo "his";}else{echo "her";} ?> IQ Tesst Score, Please Have A Look Here... https://www.iqtesst.com/share?id=<?php echo $code; ?>' data-action='share/whatsapp/share' > whatsapp </a></h4>
