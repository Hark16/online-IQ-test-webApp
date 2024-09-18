
<?php
include 'znmd2010/katrina.php';

$t1 = 'vidyarthi';
$t2 = 'vidyarthi_pariksha';
$username = $_SESSION['u_name'];

$opt1 = mysqli_real_escape_string($conn, $_GET['opt']);
$opt= filter_var($opt1, FILTER_SANITIZE_STRING);

$update = "UPDATE $t2 SET answer5='$opt' WHERE username='$username'";
mysqli_query($conn, $update);

$select = "SELECT * FROM prashna_patra WHERE id = '6'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row2 = mysqli_fetch_array($result);

?>

<h3> Question 6 </h3>
<h1><?php echo $row2['title']; ?></h1>

<p><b><?php echo $row2['description']; ?></b></p>

<div id='options'>

<hr/>
<button onclick='fun6("A")'> <?php echo $row2['option_1']; ?> </button>
<hr/>

<hr/>
<button onclick='fun6("B")'> <?php echo $row2['option_2']; ?> </button>
<hr/>

<hr/>
<button onclick='fun6("C")'> <?php echo $row2['option_3']; ?> </button>
<hr/>

</div>
