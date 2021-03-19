<?php

$id=$_POST["id"]
$commonname=$_POST["commonname"];
$chemicalname=$_POST["cheminame"];
$compname=$_POST["compname"];
$supplier=$_POST["supliname"];
$prodcat=$_POST["medicat"];
$prodtype=$_POST["meditype"];
$meduse=$_POST["medicineuse"];

require_once "dbconn.inc.php";
require_once "functions.inc.php";

if (emptyInputmeddetails($commonname,$company,$supplier,$prodcat,$prodtype,$meduse) !== false){
    header("location:../editmedinfo.php?error=emptyinput");
    exit();
}


$query="UPDATE `MEDICINEINFO` SET `COMMON_NAME`='$commonname',
`CHEMICAL_NAME`='$chemicalname', `COMPANY_NAME`='$compname', `SUPPLIER_NAME`='$supplier',`PRODUCT_CAT`='$prodcat',`PRODUCT_TYPE`='$prodtype',`MED_USE`='$meduse' WHERE MEDICINE_ID=$id";
$update=mysqli_query($conn, $query);

if($update){
	echo "<script>alert('Record updated!')</script>";
	header("location:../medinfo.php?error=none");
        exit();
    }
	else{
		echo "<script>alert('Record not updated!')</script>";
	}




?>