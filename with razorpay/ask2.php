
<?php
include 'znmd2010/katrina.php';

$username = $_SESSION['username'];

$select = "SELECT * FROM vidyarthi WHERE username = '$username'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$question1 = mysqli_real_escape_string($conn, $_GET['question']);
$question= filter_var($question1, FILTER_SANITIZE_STRING);
$words = str_word_count($question);

$answer = 'not answered';
$date = date("d/m/Y");

if($row['question_asked'] == '1'){
echo '<h2>You did not finished your last Answer, please wait for that or View that then Ask another question</h2>';

}
else if($words >= 36){

echo '<h3 style="color:red;">Warning</h3>';
echo '<h2>Please Edit your Question it is '.$words.' words long, but it should be within 35 words... </h2>';
echo '<p>'.$question.'</p>';
echo '<button onclick="clear_div();">hide warning</button><br/>';

}

else{

mysqli_query($conn, "INSERT INTO ask_expert (username, question, answer, added_on, status) VALUES('$username', '$question', '$answer', '$date', 'question')");

$msg = "You asked a question.";
$date=date("d/m/Y");

$inswork1 = "INSERT INTO notification (username, msg, date) VALUES('$username', '$msg', '$date')";
mysqli_query($conn, $inswork1);
mysqli_query($conn, "UPDATE vidyarthi SET notification = '1' WHERE username = '$username'");
mysqli_query($conn, "UPDATE vidyarthi SET question_asked = '1' WHERE username = '$username'");

echo '<h2>yay. Your Question is Taken...</h2>';
}

?>
