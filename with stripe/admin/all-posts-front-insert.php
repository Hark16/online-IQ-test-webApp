
<?php
include '3011bought2009/herohondapassionpro.php';

$introduction = $_SESSION['introduction'] ;
$conclusion = $_SESSION['conclusion'] ;
$title = $_SESSION['title'] ;
$description = $_SESSION['description'] ;
$image = $_SESSION['image'] ;
$image_alt = $_SESSION['image_alt'] ;
$tag1 = $_SESSION['tag1'] ;
$tag2 = $_SESSION['tag2'] ;
$tag3 = $_SESSION['tag3'] ;
$category = $_SESSION['category'] ;
$date = $_SESSION['date'] ;

$ext_link1 = $_SESSION['ext_link1'];
$ext_link1_style = $_SESSION['ext_link1_style'];
$ext_link1_name = $_SESSION['ext_link1_name'];

$ext_link2 = $_SESSION['ext_link2'];
$ext_link2_style = $_SESSION['ext_link2_style'];
$ext_link2_name = $_SESSION['ext_link2_name'];

$ext_link3 = $_SESSION['ext_link3'];
$ext_link3_style = $_SESSION['ext_link3_style'];
$ext_link3_name = $_SESSION['ext_link3_name'];

$ext_link4 = $_SESSION['ext_link4'];
$ext_link4_style = $_SESSION['ext_link4_style'];
$ext_link4_name = $_SESSION['ext_link4_name'];

$ext_link5 = $_SESSION['ext_link5'];
$ext_link5_style = $_SESSION['ext_link5_style'];
$ext_link5_name = $_SESSION['ext_link5_name'];

$table = $_SESSION['table'] ;
$permalink = $_SESSION['permalink'] ;

mysqli_query($conn, "UPDATE $table SET introduction = '$introduction' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET conclusion = '$conclusion' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET title = '$title' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET description = '$description' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET image = '$image' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET image_alt = '$image_alt' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET tag1 = '$tag1' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET tag2 = '$tag2' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET tag3 = '$tag3' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET category = '$category' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET added_on = '$date' WHERE permalink = '$permalink'");

mysqli_query($conn, "UPDATE $table SET ext_link1 = '$ext_link1' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET ext_link1_style = '$ext_link1_style' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET ext_link1_name = '$ext_link1_name' WHERE permalink = '$permalink'");

mysqli_query($conn, "UPDATE $table SET ext_link2 = '$ext_link2' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET ext_link2_style = '$ext_link2_style' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET ext_link2_name = '$ext_link2_name' WHERE permalink = '$permalink'");

mysqli_query($conn, "UPDATE $table SET ext_link3 = '$ext_link3' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET ext_link3_style = '$ext_link3_style' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET ext_link3_name = '$ext_link3_name' WHERE permalink = '$permalink'");

mysqli_query($conn, "UPDATE $table SET ext_link4 = '$ext_link4' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET ext_link4_style = '$ext_link4_style' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET ext_link4_name = '$ext_link4_name' WHERE permalink = '$permalink'");

mysqli_query($conn, "UPDATE $table SET ext_link5 = '$ext_link5' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET ext_link5_style = '$ext_link5_style' WHERE permalink = '$permalink'");
mysqli_query($conn, "UPDATE $table SET ext_link5_name = '$ext_link5_name' WHERE permalink = '$permalink'");


header("Location: all-posts-entry.php?permalink=$permalink");

?>
