
<?php
include 'znmd2010/katrina.php';

$username = $_SESSION['username'];

?>

<form>

    <input type="textbox" name="username" id="username" value='<?php echo$username; ?>' hidden/>

    <input type="textbox" name="amt" id="amt" value="10" hidden/>

<div>please click below button to Pay for 20 Blog credits cost $ 10 </div>

    <input type="button" name="btn" id="btn" value="Pay Now" onclick="add_blog_credits()"/>
<br/><hr/>

    <input type="textbox" name="amt1" id="amt1" value="5" hidden/>

<div>please click below button to Pay for 1 Question credit cost $ 5 </div>

    <input type="button" name="btn" id="btn" value="Pay Now" onclick="add_question_credits()"/>

</form>


