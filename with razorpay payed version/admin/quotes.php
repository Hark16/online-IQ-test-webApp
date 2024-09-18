
<!DOCTYPE html> 
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
Quotes
</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" type="image/x-icon" href="award.png">
    <link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all' />
    <link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all' />
    <link rel="canonical" href="https://iqtesst.com/" />

  </head>
  <body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">

<a href='index.php'>back</a>
<br/>


<h1>
quotes</h1>


<form method='POST'>
<input type='text' name='q' />
<input type='submit' name='s' value='s'/>
</form>

<?php
include '3011bought2009/herohondapassionpro.php';



if(isset($_POST['s'])){
$q1 = mysqli_real_escape_string($conn, $_POST['q']);
$q= filter_var($q1, FILTER_SANITIZE_STRING);
$sql = "INSERT INTO mahavachan (quotes) VALUES('$q')";
mysqli_query($conn, $sql);

echo mysqli_insert_id($conn);

}


?>

    <script src='js/jquery.js'></script>
    <script src='js/plugins.js'></script>
    <script src='js/scripts.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
  </body>
</html>
