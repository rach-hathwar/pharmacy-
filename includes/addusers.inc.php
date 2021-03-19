<?php 

if(isset($_POST['submit'])){
    
$addbyuname =$_POST['addbyuname'];  
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword =$_POST['confirmpassword'];
$category =$_POST['category'];

require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if(emptyInputAddUser($addbyuname,$name,$username,$password,$confirmpassword) !== false){
    header("location:../addusers.php?error=emptyinput");
    exit();
}
if(invalidUid($username) !== false){
    header("location:../addusers.php?error=invaliduid");
    exit();
}
if(pwdMatch($password, $confirmpassword) !== false){
    header("location:../addusers.php?error=passwordsdontmatch");
    exit();
}
if(usernameExists($conn, $username) !== false){
    header("location:../addusers.php?error=usernamealreadyexists");
    exit();
}
createUser($conn,$addbyuname,$name,$username,$password,$category);
}
else{
    header("location:../addusers.php");
    exit();

}
