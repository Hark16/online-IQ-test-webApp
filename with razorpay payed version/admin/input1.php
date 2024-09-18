
<?php

include '3011bought2009/herohondapassionpro.php';

$question = $_SESSION['question'] ;
$description = $_SESSION['description'] ;

$a = $_SESSION['a'] ;
$b = $_SESSION['b'] ;
$c = $_SESSION['c'] ;

$inswork= "INSERT INTO prashna_patra (title, description, option_1, option_2, option_3) VALUES('$question', '$description', '$a', '$b', '$c')";
mysqli_query($conn, $inswork);

   header("Location: add_question.php");

?>
