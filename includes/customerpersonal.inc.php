<?php
require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])){


	$customer_id=$_POST["custid"];
	$customer_name=$_POST["custname"];
	$contact=$_POST["contact"];
 

     
    if(emptyInputcustpersonaldetails($customer_id,$customer_name) !== false){
    header("location:../customerpersonal.php?error=emptyinput");
    exit();
    }
     
     //sql query to insert into database
     $sql="INSERT INTO Cust_personal( cust_id,customer_name,Contact) VALUES ('$customer_id','$customer_name','$contact')";
     $data=mysqli_query($conn,$sql);

 if($data){

  header("location:../customerpersonal.php?error=none");
    exit();
}
  
  else{
    header("location:../customerpersonal.php?error=nosuccess");
    exit();
  }
}


?>