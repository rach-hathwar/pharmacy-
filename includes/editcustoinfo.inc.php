<?php

//print_r($_POST);
$customer_id=$_POST["custid"];
$pharmacist=$_POST["pharmacist"];
$meddetails=$_POST["meddetails"];



require_once "dbconn.inc.php";
require_once "functions.inc.php";

if(emptyInputcustdetails($customer_id,$meddetails) !== false){
    header("location:../editcustinfo.php?error=emptyinput");
    exit();
    }


$updatequery="CALL UPDATECUSTOMER('".$_POST["custid"]."','$meddetails','$pharmacist')";
/*$updatequery="UPDATE `Customer` SET `Customer_name`='$customer',
`Contact`='$contact', `Medicine_details`='$meddetails' WHERE cust_id=$cust_id";*/
$update=mysqli_query($conn, $updatequery);

if($update){
	header("location:../custinfo.php?error=none");
        exit();
    }
	else{
		header("location:../editcustinfo.php?error=nosuccess");
        exit();
	}





?>


