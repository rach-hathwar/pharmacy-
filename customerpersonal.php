<?php
include("templates/header.php");
require_once "includes/functions.inc.php";
$errors= array('emptyInputs' =>'','success'=>'','nosuccess'=>'');
 
 if(isset($_GET["error"])){

 if($_GET["error"] =='emptyinput'){
  $errors['emptyInputs'] = 'Fill in all fields.';
 }
 else if($_GET["error"] =='none'){ 
   $errors['success'] = 'You have successfully added customers info!';
  	
}
else { 
   $errors['nosuccess'] = 'Could not add customers info!';
}
}
?>

  <div class="form-box" style="height:350px;">
  <h2>ADD CUSTOMER DETAILS</h2>  
  <form action="includes/customerpersonal.inc.php" method="POST">
     <div class="error-text"><?php echo $errors['emptyInputs']; ?></div>
     <p>Customer ID</p>
    <input type="text" name="custid" value=""/>
    <p>Customer name</p>
    <input type="text" name="custname" value=""/>
    <p>Contact</p>
    <input type="text" name="contact" value=""/>
    <input type="submit" name="submit" value="ADD"/>
</form>
<h2 style="font-weight:normal;"><?php echo $errors['success']; ?></h2>
<h2 style="font-weight:normal;"><?php echo $errors['nosuccess']; ?></h2>
</div>


<button id="butn22" class="button1" style="margin: 700px 600px 60px; 
position:fixed; font-family:system-ui;" >Go Back</button>

<script type="text/javascript">
    document.getElementById("butn22").onclick = function () {
        location.href = "custpersonaldetls.php";
    };
</script>
    
<?php
include("templates/footer.php");
?>