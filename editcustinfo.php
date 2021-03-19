<?php
include("templates/header.php");

$custid=$_GET['cust_id'];

require_once "includes/dbconn.inc.php";
require_once "includes/functions.inc.php";


//$sql = "SELECT * FROM `Customer` WHERE cust_id=$cust_id";
$sql="CALL SELECTCUSTOMER('$custid')";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$customer_id=$row["cust_id"];
$meddetails=$row["Medicine_details"];
$pharmacist=$row["pharmacist"];

$errors= array('emptyInputs' =>'','success'=>'','nosuccess'=>'');
 
 if(isset($_GET["error"])){

 if($_GET["error"] =='emptyinput'){
  $errors['emptyInputs'] = 'Fill in all fields.';
 }
 else if($_GET["error"] =='none') {
 	   $errors['success'] = 'You have successfully updated customer info!';
 	    
}else if($_GET["error"] =='nosuccess') {
 	   $errors['nosuccess'] = 'Error';
}
}
 
?>
<div class="form-box" style="height:400px;font-family: system-ui;">
	<h1>UPDATE CUSTOMER PURCHASE DETAILS</h1>
	<form action="includes/editcustoinfo.inc.php"  method="POST">
		<input name="custid" type="hidden" value="<?php echo $customer_id;?>" />
		<div class="error-text"><?php echo $errors['emptyInputs']; ?></div>
		<p>Customer ID</p>
		<input type="text" name="custid" value="<?php echo $customer_id;?>"/>
		<p>Medicine Details</p>
		<input type="text" name="meddetails" value="<?php echo $meddetails;?>"/>
		<p>Pharmacist</p>
		<input type="text" name="pharmacist" value="<?php echo $pharmacist;?>"/>
		<input type="submit" name="submit" value="ADD"/>

	</form>
	<h2 style="font-weight: normal;"><?php echo $errors['success'];?></h2>
	<h2 style="font-weight: normal;"><?php echo $errors['nosuccess'];?></h2>
</div>
<button id="butn12" class="button1" style="margin: 700px 600px 60px; 
position:fixed;font-family:system-ui;" >Go Back</button>

<script type="text/javascript">
    document.getElementById("butn12").onclick = function () {
        location.href = "custinfo.php";
    };
</script>
<?php
include("templates/footer.php");
?>