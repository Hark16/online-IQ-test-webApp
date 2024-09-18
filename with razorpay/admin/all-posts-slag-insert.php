<?php

include '3011bought2009/herohondapassionpro.php';

$permalink = $_SESSION['permalink'];
$table = 'mera_blog';
$writer = 'Harish Verma';

$insert = "INSERT INTO $table (permalink, introduction, conclusion, side_heading_1, side_heading_2, side_heading_3, side_heading_4, side_heading_5, side_heading_6, side_heading_7, side_heading_8, side_heading_9, side_heading_10, side_heading_tag_1, side_heading_tag_2, side_heading_tag_3, side_heading_tag_4, side_heading_tag_5, side_heading_tag_6, side_heading_tag_7, side_heading_tag_8, side_heading_tag_9, side_heading_tag_10, side_heading_style_1, side_heading_style_2, side_heading_style_3, side_heading_style_4, side_heading_style_5, side_heading_style_6, side_heading_style_7, side_heading_style_8, side_heading_style_9, side_heading_style_10, detail1, detail2, detail3, detail4, detail5, detail6, detail7, detail8, detail9, detail10, detail_tag1, detail_tag2, detail_tag3, detail_tag4, detail_tag5, detail_tag6, detail_tag7, detail_tag8, detail_tag9, detail_tag10, detail_style1, detail_style2, detail_style3, detail_style4, detail_style5, detail_style6, detail_style7, detail_style8, detail_style9, detail_style10, title, description, image, image_alt, tag1, tag2, tag3, category, added_on, writer, live) VALUES('$permalink', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'h2', 'h2', 'h2', 'h2', 'h2', 'h2', 'h2', 'h2', 'h2', 'h2', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', 'not inserted', '$writer', 'not')";
mysqli_query($conn, $insert);
header("Location: all-posts.php");

?>
