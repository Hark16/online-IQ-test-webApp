<title>quotes</title>

<h1>
https://thriveworks.com/blog/greatest-psychology-quotes-ever/
</h1>


<form method='POST'>
<input type='text' name='q'/>
<input type='submit' name='s' value='s'/>
</form>

<?php
include '3011bought2009/herohondapassionpro.php';

$q = $_POST['q'];

if(isset($_POST['s'])){

$sql = "INSERT INTO mahavachan (quotes) VALUES('$q')";
mysqli_query($conn, $sql);

echo mysqli_insert_id($conn);

}


?>
