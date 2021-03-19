<?php
include("templates/header.php");
require_once "includes/functions.inc.php";
$errors= array('emptyInputs' =>'','success'=>'','nosuccess'=>'');
 
 if(isset($_GET["error"])){

 if($_GET["error"] =='emptyinput'){
  $errors['emptyInputs'] = 'Fill in all fields.';
 }
 else if($_GET["error"] =='none'){ 
   $errors['success'] = 'You have successfully added medicine info!';
  	
}
else { 
   $errors['nosuccess'] = 'Could not add medicine info!';
}
}
?>



  <div class="form-box" style="height:600px;">
  <h2>ADD PRODUCT DETAILS</h2>  
  <form action="includes/medicineinfo.inc.php" method="POST">
     <div class="error-text"><?php echo $errors['emptyInputs']; ?></div>
    <p>Common name</p>
    <input type="text" name="commonname" value=""/>
    <p>Chemical name</p>
    <input type="text" name="cheminame" value=""/>
    <p>Company Name</p>
    <input type="text" name="compname" value=""/>
    <p>Supplier Name</p>
    <input type="text" name="supliname" value=""/>
    <p>Product category</p>
    <select name="medicat" id="medicat" size="1">
    <option value="Medicine">Medicine</option>
        <option value="Non-Medicine">Non-Medicine</option>
        </select>
        <br>
        <br>    
    <p>Product type</p>
    <select name="meditype" id="meditype" size="1">
    <option value="Tablet">Tablet</option>
        <option value="Capsule">Capsule</option>
        <option value="Liquid">Liquid</option>
        <option value="Spray">Spray</option>
        <option value="Syrup">Syrup</option>
        <option value="Powder">Powder</option>
        <option value="Cream/Gel">Cream/Gel</option>
      </select>
      <br>
      <br>  
    <p>Medicine for</p>
    <textarea name="medicineuse"></textarea>
    <input type="submit" name="submit" value="ADD"/>
</form>
<h2 style="font-weight:normal;"><?php echo $errors['success']; ?></h2>
<h2 style="font-weight:normal;"><?php echo $errors['nosuccess']; ?></h2>
</div>


<button id="butn14" class="button1" style="margin: 700px 600px 60px; 
position:fixed; font-family:system-ui;" >Go Back</button>

<script type="text/javascript">
    document.getElementById("butn14").onclick = function () {
        location.href = "medinfo.php";
    };
</script>
    
<?php
include("templates/footer.php");
?>