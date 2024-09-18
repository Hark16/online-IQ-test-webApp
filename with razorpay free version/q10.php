
<?php
include 'znmd2010/katrina.php';

$t1 = 'vidyarthi';
$t2 = 'vidyarthi_pariksha';
$username = $_SESSION['u_name'];

$opt1 = mysqli_real_escape_string($conn, $_GET['opt']);
$opt= filter_var($opt1, FILTER_SANITIZE_STRING);

$update = "UPDATE $t2 SET answer10='$opt' WHERE username='$username'";
mysqli_query($conn, $update);

?>

<h1>Test Finished</h1>

<input type='number' placeholder='Your Age' id='age' />
<br/>

<p><i>Please enter your age soThat we can create your IQ Report.</i></p><br/>

<button onclick='age()' style='background-color:blue; color:white;'>Submit</button>

<hr/>
