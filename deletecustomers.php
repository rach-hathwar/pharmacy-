<?php
$customer_id =$_GET['cust_id'];
require_once "includes/dbconn.inc.php";
//$query="DELETE FROM `Customer` WHERE cust_id=$cust_id";
$query="CALL DELETECUSTOMER('".$_GET['cust_id']."')";
$delete=mysqli_query($conn, $query);

if($delete){
	header("location:./custinfo.php?error=none");
	exit();
}else{
	echo "Error!";
}

?>