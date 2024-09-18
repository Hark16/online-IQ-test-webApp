
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

<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br>

       <span style="font-size:30px"><b> <?php echo$row['first_name']." ".$row['last_name']; ?> </b></span> <br/>

       <span style="font-size:25px"><i>has completed the course</i></span> <br/>

       <span style="font-size:30px"> IQ Tesst</span> <br/><br/>

       <span style="font-size:20px"> score <b><?php echo $score; ?></b></span> <br/>
       <span style="font-size:25px"><i>dated</i></span><br>
      <span style="font-size:30px"><?php echo$date; ?></span>
</div>
</div>

<h4>Share into <a href='whatsapp://send?text= <?php echo $row["first_name"];?> Share With You <?php if($gender == 'male'){echo "his";}else{echo "her";} ?> IQ Tesst Score, Please Have A Look Here... https://www.iqtesst.com/share.php?id=<?php echo $code; ?>' data-action='share/whatsapp/share' > whatsapp </a></h4>

