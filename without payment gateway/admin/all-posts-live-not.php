
<?php
include '3011bought2009/herohondapassionpro.php';

$permalink1 = mysqli_real_escape_string($conn, $_GET['permalink']);
$permalink= filter_var($permalink1, FILTER_SANITIZE_STRING);
$table = 'mera_blog';

$update = "UPDATE $table SET live = 'not' WHERE permalink = '$permalink'";
mysqli_query($conn, $update);

header("Location: all-posts.php");

?>
