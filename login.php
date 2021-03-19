<?php
$errors= array('emptyInputs' =>'','wronglogin' =>'','pwddntmatch'=>'','incorrectpwd'=>'','success'=>'','statement' =>'');
 
 if(isset($_GET["error"])){

 if($_GET["error"] =='emptyinput'){
  $errors['emptyInputs'] = 'Fill in all fields.';
 }
 else if($_GET["error"] =='wronglogin'){
  $errors['wronglogin']= 'Login unsucccessfull!,Try Again.';
}
 else if($_GET["error"] == 'passwordsdontmatch'){
  $errors['pwddntmatch'] = "Passwords don't match";
 }
else if($_GET["error"] == 'incorrect'){
  $errors['incorrectpwd'] = 'Incorrect password!.';
 }
 else if($_GET["error"] == 'stmtfailed'){
  $errors['statement'] = 'Something went wrong. Please try again!';
 }
else 
   $errors['success'] = 'You have successfully logged in!';
 

 }
 

?>
<!DOCTYPE html>
<html>
<?php 
include('templates/header.php');?>

 
  <div class="form-box">
     <h2>Login Here</h2>
    <form action="includes/login.inc.php" method="POST">
      <div class="error-text"><?php echo $errors['emptyInputs']; ?></div>
      <p>Username</p>
        <input type="text" name="username" placeholder="Enter the username here" value="">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter the password here" value="">
        <p>Confirm password</p>
      <input type="password" name="confirmpassword" placeholder="Confirm the password here" value="">
      <div class="error-text"><?php echo $errors['pwddntmatch']; ?></div>
      <div class="error-text"><?php echo $errors['incorrectpwd']; ?></div>
      <p for="category">Choose the category you belong:</p>
  <select name="category" id="category-list">
    <option value="Admin">Admin</option>
    <option value="Pharmacist">Pharmacist</option>    
  </select>
  <br><br>      
      <input type="submit" name="submit" value="SUBMIT">
      <h2><?php echo $errors['success'];?></h2>
     <h2><?php echo $errors['statement'];?></h2>
     <h2><?php echo $errors['wronglogin'];?></h2>

     
    </form>
    </div>
 
<?php
include('templates/footer.php');?>
</html>
