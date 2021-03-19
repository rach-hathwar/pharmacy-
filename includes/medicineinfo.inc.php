<?php
require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if (isset($_POST['submit'])){


	$comname=$_POST["commonname"];
	$chemicalname=$_POST["cheminame"];
	$company=$_POST["compname"];
	$supplier=$_POST["supliname"];
	$prodcat=$_POST["medicat"];
	$prodtype=$_POST["meditype"];
	$meduse=$_POST["medicineuse"]; 


if (emptyInputmeddetails($comname,$company,$supplier,$prodcat,$prodtype,$meduse) !== false){
    header("location:../medicineinfo.php?error=emptyinput");
    exit();
}
$query = "INSERT INTO MEDICINEINFO (COMMON_NAME,CHEMICAL_NAME,COMPANY_NAME,SUPPLIER_NAME,PRODUCT_CAT,PRODUCT_TYPE,MED_USE) VALUES ('$comname','$chemicalname','$company','$supplier','$prodcat','$prodtype','$meduse')";
$data=mysqli_query($conn, $query);

if($data){
	header("location:../medinfo.php?error=none");
    exit();
}
else{
	header("location:../medicineinfo.php?error=couldnotaddinfo");
    exit();

}
}



?>
