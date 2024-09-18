
<!DOCTYPE html> 
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<title> Payment</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://js.stripe.com/v3/"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GD9EMZCDFZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GD9EMZCDFZ');
</script>


<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
<link rel="manifest" href="/site.webmanifest">

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

<?php
include 'znmd2010/katrina.php';

require_once('vendor/autoload.php');

$select = "SELECT * FROM admin_payment_details WHERE id='1'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

\Stripe\Stripe::setApiKey($row['sk']);


$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => $row['cur'],
            'product_data' => [
                'name' => 'iQtesst pro(file)',
            ],
            'unit_amount' => $row['amt1'],
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'https://iqtesst.com/success.php?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => 'https://iqtesst.com/cancel.php?session_id={CHECKOUT_SESSION_ID}',

]);


$amt = $row['amt1'];
$username = $_SESSION['u_name'];
    $payment_status="you are going to add balance";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"insert into payment(username, amount, payment_status, added_on) values('$username', '$amt', '$payment_status', '$added_on')");
$oid = mysqli_insert_id($conn);
    $_SESSION['OID'] = $oid;


?>

    <button id="checkout-button">Buy now</button>
    <script>
        var stripe = Stripe("<?php echo $row['pk']; ?>");
        const btn = document.getElementById("checkout-button")
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            stripe.redirectToCheckout({
                sessionId: "<?php echo $session->id; ?>"
            });
        });
    </script>


		<script src='js/jquery.js'></script>
		<script src='js/plugins.js'></script>
		<script src='js/scripts.js'></script>
		<script src='js/masonry.pkgd.min.js'></script>
	</body>
</html>