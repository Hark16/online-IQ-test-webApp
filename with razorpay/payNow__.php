<?php

include 'znmd2010/katrina.php';

if(isset($_SESSION['username'])){

$username = $_SESSION['username'];
$table = 'vidyarthi';

$select = "SELECT * FROM $table WHERE username = '$username'";
$result = mysqli_query($conn, $select);
mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$_SESSION['email'] = $row['email'];
$_SESSION['first_name'] = $row['first_name'];
$_SESSION['last_name'] = $row['last_name'];

}

else{
header("Location: logout.php");
}


?>

<title>payNow</title>
<div id='profile'></div>

<div id='start'>
<h2>cost in $ </h2>
<input type='text' id='amt' value='5' disabled/>

<h2>Your Username </h2>
<input type='text' id='username' value="<?php echo $_SESSION['username']; ?>" disabled/>


<h2>Press Here </h2>
<button id="rzp-button1">Pay</button>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

var options = {
    "key": "<?php echo $_SESSION['api_key']; ?>",  // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $_SESSION['amount']; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "<?php echo $_SESSION['cur']; ?>",
    "name": "iQtesst",
    "description": "iQtesst askTheExpert Credit(1 credit)",
    "image": "https://iqtesst.com/logo.jpeg",
     "order_id": "<?php echo $_SESSION['order_id']; ?>", // Replace with the order_id generated by you in the backend.

    "handler": function (response){

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {



    }
  };

  xhttp.open("GET", "payment3.php?payment_id="+ response.razorpay_payment_id, true);

  xhttp.send();

document.getElementById('profile').innerHTML = '<a href="profile_main.php"><h1>click to Go to Profile</h1></a>';


    },
    "prefill": {
        "name": "<?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?>",

        "email": "<?php $_SESSION['email']; ?>",
        "contact": ""
    },
    "notes": {
        "address": ""
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();

document.getElementById('start').style.display = 'none';
document.getElementById('profile').innerHTML = '<h1>Please, give attention here. Do not press BACK. . .<>';
var amt = document.getElementById('amt').value;
var username = document.getElementById('username').value;


  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {



    }
  };

  xhttp.open("GET", "payment3.php?amt="+ amt +"&username="+ username, true);

  xhttp.send();


    
    }

</script>