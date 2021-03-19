<?php


if (isset($_POST["submit"])){

$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$category = $_POST['category'];


require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if(emptyInputLogin($username,$password,$confirmpassword) !== false){
    header("location:../login.php?error=emptyinput");
    exit();
}
if(pwdMatch($password, $confirmpassword) !== false){
    header("location:../login.php?error=passwordsdontmatch");
    exit();
}

loginUser($conn,$username,$password,$confirmpassword,$category);
}
else {
    header("location:../login.php");
    exit();

}



?>
