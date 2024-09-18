
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

header("Location: all-posts-entry.php?permalink=$permalink");

?>
