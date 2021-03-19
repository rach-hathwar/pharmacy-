<?php
include("templates/header.php");


$id=$_GET['id'];

require_once "includes/functions.inc.php";
require_once "includes/dbconn.inc.php";

$sql="SELECT * FROM `MEDICINEINFO`";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$commonname=$row["COMMON_NAME"];
$chemicalname=$row["CHEMICAL_NAME"];
$compname=$row["COMPANY_NAME"];
$supplier=$row["SUPPLIER_NAME"];
$prodcat=$row["PRODUCT_CAT"];
$prodtype=$row["PRODUCT_TYPE"];
$meduse=$row["MED_USE"];

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
<style type="text/css">
  .bg-image{
     background-image: url("images/customerbg.jpg");

  }
</style>


<div class="bg-image">
  <div class="form-box">
  <h2>UPDATE PRODUCT DETAILS</h2>  
  <form action="includes/editmedinfo.inc.php" method="POST">
    <input name="id" type="hidden" value="<?php echo $id;?>" />
     <div class="error-text"><?php echo $errors['emptyInputs']; ?></div>
    <p>Common name</p>
    <input type="text" name="commonname" value="<?php echo $commonname;?>"/>
    <p>Chemical name</p>
    <input type="text" name="cheminame" value="<?php echo $chemicalname;?>"/>
    <p>Company Name</p>
    <input type="text" name="compname" value="<?php echo $compname;?>"/>
    <p>Supplier Name</p>
    <input type="text" name="supliname" value="<?php echo $supplier;?>"/>
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
    <textarea name="medicineuse" value="<?php echo $meduse;?>"></textarea>
    <input type="submit" name="submit" value="ADD"/>
</form>
<h2><?php echo $errors['success']; ?></h2>
<h2><?php echo $errors['nosuccess']; ?></h2>
</div>
</div>   
<?php
include("templates/footer.php");
?>