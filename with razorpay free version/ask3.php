<?php
include 'znmd2010/katrina.php';
$username = $_SESSION['username'];

$select = "SELECT * FROM ask_expert WHERE username = '$username' ORDER BY id DESC ";
if($result = mysqli_query($conn, $select)){
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_array($result)){

echo "<p>Question : ".$row['question']."?</p>";

if($row['status'] == 'question'){
echo '<p>Answer : Please wait, Our Expert is working on your issue, We will notify you when your <b>Answer</b> will be ready.</p>';
}

else if($row['status'] == 'locked'){
echo "<button onclick='unlock(".$row['id'].");'>your Answer is ready, please click here to view(cost 1Credit)</button>";
}

else{
echo "<p>Answer : ".$row['answer'].".</p>";
}
echo "<p>Asked on : ".$row['added_on']." </p>";
echo '<hr/>';

}
}else{echo '<h3>Did not ask any Questions </h3>';}

}

?>
