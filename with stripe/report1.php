
<?php
include 'znmd2010/katrina.php';

$t1 = 'vidyarthi';
$t2 = 'vidyarthi_pariksha';
$username = $_SESSION['u_name'];

$select = "SELECT * FROM $t2 WHERE username = '$username'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$total = $row['points1'] + $row['points2'] + $row['points3'] + $row['points4'] + $row['points5'] + $row['points6'] + $row['points7'] + $row['points8'] + $row['points9'] + $row['points10'];
$age = $_SESSION['age'];

$update1 = "UPDATE $t2 SET total_points = '$total' WHERE username = '$username'";
mysqli_query($conn, $update1);

$update2 = "UPDATE $t2 SET m_age = '$total' WHERE username = '$username'";
mysqli_query($conn, $update2);
$update3 = "UPDATE $t2 SET c_age = '$age' WHERE username = '$username'";
mysqli_query($conn, $update3);

$update4 = "UPDATE $t1 SET m_age = '$total' WHERE username = '$username'";
mysqli_query($conn, $update4);
$update5 = "UPDATE $t1 SET c_age = '$age' WHERE username = '$username'";
mysqli_query($conn, $update5);

$iq1 = $total/$age;
$iq = $iq1 * 100 ;

$date = date('d/m/Y');

$update6 = "UPDATE $t1 SET i_q = '$iq' WHERE username = '$username'";
mysqli_query($conn, $update6);
$update7 = "UPDATE $t1 SET added_on = '$date' WHERE username = '$username'";
mysqli_query($conn, $update7);

?>

<h2>Congratulations!</h2>

<pre>
You've completed your IQ test.
WE'VE ACCURATELY DETERMINED YOUR IQ SCORE. SEE HOW TO RETRIEVE IT BELOW. The only way to accurately assess a person's IQ score is through sophisticated testing systems, developed by behavioral and data scientists. Normally these cost $400-500 and take over 24 hours to process. Our test offers accurate and instant results, for much less fees
only on $99
</pre>

<h1>Website Introductory OFFER</h1>
<p><b>
<i>Hurry Hurry Hurry</i><br/>
Here we announce That due to our website launching we are offering you very less Fees. yes no $99<br/>
yes yes<hr/>


cancelled fees $99
<br/>
Introductory fees $25
<hr/>
In this page you could find the fees as $99, but in our website launching we asure you that we will charge you only $25 right-now.
please hurry up this offer is limited and will be end SOON...
<h5>you will get everything in no cost </h5>

</b></p>

<h3>Premium Pack</h3>
<pre>
IQ Score Evaluation
Congratulations, we've successfully
determined your IQ score
IQ certificate
Personalized IQ Certification
which includes your name and score.
Include as part of your credentials.
Personalized Intelligence
Report
Review your custom score in
Our Test Questions and Your Answers
which were used to determine your IQ score.
And custom strategies you can
use to boost your IQ by up to 35%
Included into
100+ Questions Practice
Test Pdf
Our Unique study guide.
Blog credits
in this pack you will get some blog credits which worth $10 for 20 credits.
What is Blog credits?
in blog section you need 1 blog credit to read 1 blog post full.
AskTheExpert credits
like blog credits you will get some question credits also worth rs $5 for 35 words questions.
</pre>


<button style='background-color:yellow; color:black;' onclick='buy()'>Get Now on $25</button>

<pre>
WHY KNOW YOUR IQ SCORE
& WHY THIS CERTIFICATION?
The iqtesst.com full report Certification is the most accurate and well recognized IQ test available. It is also widely recognized in industry with studies showing that demonstrating your IQ directly improves life opportunities (jobs, relationships and VIP treatment). in this you will receive everything you need to prove your score as well as personalized instructions on how to boost your IQ by up to 35%, into detailed Practice EBook.
Well done, you're almost finished! Your performance so far has been excellent, finish and find out where you rank.
</pre>
