<?php
require_once("dbconn.inc.php");

function emptyInputAddUser($addbyuname, $name, $username, $password, $confirmpassword){
    $result;
    if(empty($addbyuname)|| empty($name) || empty($username) || empty($password) || empty($confirmpassword)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function pwdMatch($password, $confirmpassword){
    $result;
    if($password!= $confirmpassword){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function usernameExists($conn, $username){
    $sql = "SELECT * FROM all_users WHERE user_name = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt,$sql)) {
        header("location:../addusers.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData= mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;

    }else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}
function createUser($conn,$addbyuname,$name,$username,$password,$category){
    $sql= "INSERT INTO all_users (`added_by_admin`,`user_fname`,`user_name`,`user_password`,`category`) VALUES(?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        header("location:../addusers.php?error=stmtfailed");
        exit();
    }
    //$hashed_password=password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssss", $addbyuname,$name,$username,$password,$category);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../addusers.php?error=none");
    exit();
}
function emptyInputLogin($username, $password, $confirmpassword){
    $result;
    if(empty($username) || empty($password) || empty($confirmpassword)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function usernameExistsLogin($conn,$username,$category){
    $sql = "SELECT * FROM all_users WHERE user_name = ? AND category = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt,$sql)) {
        header("location:../login.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username,$category);
    mysqli_stmt_execute($stmt);

    $resultData= mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;

    }else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}
function loginUser($conn,$username,$password,$confirmpassword,$category){
$usernameExistsLogin=usernameExistsLogin($conn,$username,$category);

if($usernameExistsLogin === false)
{
    header("location:../login.php?error=wronglogin");
    exit();
}

$checkpwd=$usernameExistsLogin['user_password'];
//$checkpwd = password_verify($password, $pwdhashed);

if($checkpwd != $confirmpassword)
{
    header("location:../login.php?error=incorrect");
    exit();
}
else {
        session_start();
    $_SESSION['id']=$usernameExistsLogin['id'];
    $_SESSION['user_fname']=$usernameExistsLogin['user_fname'];
    $_SESSION['user_name']=$usernameExistsLogin['user_name'];
    $_SESSION['user_password']=$usernameExistsLogin['user_password'];
    $_SESSION['category']=$usernameExistsLogin['category'];
    $logquery="INSERT INTO `Login`(`log_id`,`log_user`,`Password`) VALUES('".$_SESSION['id']."','".$_SESSION['user_name']."','".$_SESSION['user_password']."')";
        $data=mysqli_query($conn,$logquery);
        echo mysqli_error();
    header("location:../home.php");
    exit();
}
}
function emptyInputcustdetails($customer_id,$meddetails){
    $result;
    if(empty($customer_id)|| empty($meddetails)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function emptyInputmeddetails($comname,$company,$supplier,$prodcat,$prodtype,$meduse){
    $result;
    if(empty($comname) || empty($company) || empty($supplier)|| empty($prodcat)|| empty($prodtype)|| empty($meduse)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function emptyInputmedlocation($medid,$medname,$cmpt,$rack,$shelf){
    $result;
    if(empty($medid)||empty($medname)|| empty($cmpt) || empty($rack) || empty($shelf)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}


function emptyInputsuplrdetails($supplier_name,$contact,$address){
     $result;
    if(empty($supplier_name)|| empty($contact) || empty($address)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function emptyInputcustpersonaldetails($customer_id,$customer_name){
     $result;
    if(empty($customer_id)|| empty($customer_name) ){
        $result=true;
    }else{
        $result=false;
    }
    return $result;

}






