<?php
require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])){


	$customer_id=$_POST["custid"];
	$pharmacist=$_POST["pharmacist"];
	$meddetails=$_POST["meddetails"];
     
    if(emptyInputcustdetails($customer_id,$meddetails) !== false){
    header("location:../customerdetails.php?error=emptyinput");
    exit();
    }
     
     //sql query to insert into database
     $sql="INSERT INTO Cust_purchase(cust_id,Medicine_details,pharmacist) VALUES ('$customer_id','$meddetails','$pharmacist')";
     $data=mysqli_query($conn,$sql)or die(mysqli_error($conn));

 if($data){

  header("location:../customerdetails.php?error=none");
    exit();
}
  
  else{
    header("location:../customerdetails.php?error=nosuccess");
    exit();
  }
}


?>