<?php
include("templates/header.php");
$errors= array('emptyInputs' =>'','success'=>'','nosuccess'=>'');
 
 if(isset($_GET["error"])){

 if($_GET["error"] =='emptyinput'){
  $errors['emptyInputs'] = 'Fill in all fields.';
 }
 else if($_GET["error"] =='none') {
 	   $errors['success'] = 'You have successfully added customer info!';
 	    
}
else if($_GET["error"] =='nosuccess') {
 	   $errors['nosuccess'] = 'Error!';
 	    
}
}

?>

	<div class="form-box" style="height: 400px;font-family:system-ui;">
	<h1>ADD CUSTOMER DETAILS</h1>
	<form action="includes/customerdetails.inc.php"  method="POST">
		<div class="error-text"><?php echo $errors['emptyInputs']; ?></div>
		<p>Customer ID</p>
		<input type="text" name="custid" value="">
		<p>Medicine Details</p>
		<input type="text" name="meddetails" value="">
		<p>Pharmacist</p>
		<input type="text" name="pharmacist" value="<?php echo $_SESSION['user_name'];?>">
		<input type="submit" name="submit" value="ADD">

	</form>
	<h1><?php echo $errors['success'];?></h1>
	<h1><?php echo $errors['nosuccess'];?></h1>

</div>
<button id="myButton13" class="button1" style="margin: 700px 600px 60px; 
position:fixed; font-family:system-ui;" >Records</button>

<script type="text/javascript">
    document.getElementById("myButton13").onclick = function () {
        location.href = "custinfo.php";
    };
</script>
<button id="butn17" class="button1" style="margin: 60px 600px 600px; 
position:fixed; font-family:system-ui;" >Medicine List</button>

<script type="text/javascript">
    document.getElementById("butn17").onclick = function () {
        location.href = "medlist.php";
    };
</script>



<?php
include("templates/footer.php");
?>