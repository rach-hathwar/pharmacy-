<?php
$errors= array('emptyInputs' =>'','invalidusername' =>'','pwddntmatch'=>'','usernameexists'=>'','success'=>'','statement' =>'');
 
 if(isset($_GET["error"])){

 if($_GET["error"] =='emptyinput'){
  $errors['emptyInputs'] = 'Fill in all fields.';
 }
  else if($_GET["error"] =='invaliduid'){
  $errors['invalidusername']= 'Choose a proper username.Characters involved are a-z,A-Z,0-9.';
 }
 else if($_GET["error"] == 'passwordsdontmatch'){
  $errors['pwddntmatch'] = "Passwords don't match";
 }
else if($_GET["error"] == 'usernamealreadyexists'){
  $errors['usernameexists'] = 'Username already taken,choose another one.';
 }
 else if($_GET["error"] == 'stmtfailed'){
  $errors['statement'] = 'Something went wrong. Please try again!';
}
else if($_GET["error"] == 'none'){
  $errors['success'] = 'You have successfully added a user!';
}
 }
 

 ?>

<!DOCTYPE html>
<html>
  
<?php include('templates/header.php');?>
  <div class="form-box" style="height:570px;">
    <h2>Add Users Here</h2>
    <form action="includes/addusers.inc.php" method="POST">
       <div class="error-text"><?php echo $errors['emptyInputs']; ?></div>
      <p>User added by</p>
        <input type="text" name="addbyuname" placeholder="Enter your admin username here" value="<?php echo $_SESSION['user_name'];?>"/>
       <p>Name</p>
        <input type="text" name="name" placeholder="Enter the fullname here" value="">
      <p>Username</p>
        <input type="text" name="username" placeholder="Enter the username here" value="">
         <div class="error-text"><?php echo $errors['invalidusername']; ?></div>
          <div class="error-text"><?php echo $errors['usernameexists']; ?></div>
          <p>Password</p>
        <input type="password" name="password" placeholder="Enter the password here" value="">
      <p>Confirm password</p>
      <input type="password" name="confirmpassword" placeholder="Confirm the password here" value=""> 
       <div class="error-text"><?php echo $errors['pwddntmatch']; ?></div>
      <select name="category" id="category-list">
    <option value="Admin">Admin</option>
    <option value="Pharmacist">Pharmacist</option>    
  </select>
  <br><br> 
      <input type="submit" name="submit" value="SUBMIT">      
    </form>
    <h2 style="font-weight: normal;"><?php echo $errors['success'];?></h2>
    <h2 style="font-weight: normal;"><?php echo $errors['statement'];?></h2>
    </div>
    <button id="butn13" class="button1" style="margin: 700px 600px 60px; 
position:fixed; font-family:system-ui;" >Go Back</button>

<script type="text/javascript">
    document.getElementById("butn13").onclick = function () {
        location.href = "users.php";
    };
</script>
<?php
include('templates/footer.php');?>
</html>
