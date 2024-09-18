<?php
include 'znmd2010/katrina.php';

$slag1 = mysqli_real_escape_string($conn, $_GET['slag']);
$slag= filter_var($slag1, FILTER_SANITIZE_STRING);

$select = "SELECT * FROM mera_blog WHERE permalink = '$slag'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

echo $row['likes'] + 124;
?>
