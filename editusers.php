<?php
include("templates/header.php");

$id=$_GET['id'];

require_once "includes/dbconn.inc.php";
require_once "includes/functions.inc.php";


$sql="SELECT * FROM `all_users` WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$addbyuname=$row['added_by_admin'];
$name=$row['user_fname'];
$username=$row['user_name'];
$category=$row['category'];


$errors= array('emptyInputs' =>'','pwddntmatch'=>'','success'=>'');
 
 if(isset($_GET["error"])){

 if($_GET["error"] =='emptyinput'){
  $errors['emptyInputs'] = 'Fill in all fields.';
 }
  
 else if($_GET["error"] == 'passwordsdontmatch'){
  $errors['pwddntmatch'] = "Passwords don't match";
 }
 else if($_GET["error"] == 'none'){
  $errors['success'] = 'You have successfully edited/updated a user info!';
}

 }
 
?>

<div class="form-box" style="height:570px;font-family:system-ui;" >
	<h1>UPDATE RECORD</h1>
<form method="POST" action="includes/editusers.inc.php"> 
<input name="id" type="hidden" value="<?php echo $id;?>" />
<div class="error-text"><?php echo $errors['emptyInputs']; ?></div>
<p>User added by<p>
<input type="text" name="addbyuname" placeholder="Enter your admin username here" 
required value="<?php echo $addbyuname;?>" />
<p>Name</p>      
<input type="text" name="name" placeholder="Enter the fullname here" 
required value="<?php echo $name;?>" />
<p>Username</p>
<input type="text" name="username" placeholder="Enter the username here" 
required value="<?php echo $username;?>" />
<p>Password</p>
<input type="password" name="password" placeholder="Enter the password here"/>
<p>Confirm password</p>
<input type="password" name="confirmpassword" placeholder="Confirm the password here" 
value=""> 
<div class="error-text"><?php echo $errors['pwddntmatch']; ?></div>
 <select name="category" id="category-list">
    <option value="Admin">Admin</option>
    <option value="Pharmacist">Pharmacist</option>        
  </select>
  <br><br> 
<input name="submit" type="submit" value="Update" />
</form>
</div>
<h2 style="font-weight: normal;"><?php echo $errors['success']; ?></h2>
<h2 style="font-weight: normal;"><?php echo $errors['emptyInputs']; ?></h2>
<button id="myButton13" class="button1" style="margin: 700px 600px 60px; 
position:fixed;font-family:system-ui;" >Go Back</button>

<script type="text/javascript">
    document.getElementById("myButton13").onclick = function () {
        location.href = "users.php";
    };
</script>


<?php
include("templates/footer.php");
?>