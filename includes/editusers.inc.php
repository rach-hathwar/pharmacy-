<?php

//print_r($_POST);
$id =$_POST['id'];
$addbyuname =$_POST['addbyuname'];
$name =$_POST['name'];
$username =$_POST['username'];
$password =$_POST['password'];
$confirmpassword =$_POST['confirmpassword'];
$category =$_POST['category'];

require_once "dbconn.inc.php";
require_once "functions.inc.php";

if(emptyInputAddUser($addbyuname,$name,$username,$password,$confirmpassword !== false)){
    header("location:../editusers.php?error=emptyinput");
    exit();
}

if(pwdMatch($password, $confirmpassword) !== false){
    header("location:../editusers.php?error=passwordsdontmatch");
    exit();
}



$query="UPDATE `all_users` SET `added_by_admin`='$addbyuname',
`user_fname`='$name', `user_name`='$username', `user_password`='$password',`category`='$category' WHERE id=$id";
$update=mysqli_query($conn, $query);

if($update){
	echo "<script>alert('Record updated!')</script>";
	header("location:../users.php?error=none");
        exit();
    }
	else{
		echo "<script>alert('Record not updated!')</script>";
	}





?>


