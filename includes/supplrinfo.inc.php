<?php
require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])){


	$supplier_name=$_POST["supname"];
	$contact=$_POST["contact"];
	$address=$_POST["supladd"];
 

     
    if(emptyInputsuplrdetails($supplier_name,$contact,$address) !== false){
    header("location:../suplrinfo.php?error=emptyinput");
    exit();
    }
     
     //sql query to insert into database
     $sql="INSERT INTO SUPPLIER(suplr_name,Phone,Address) VALUES ('
  $supplier_name','$contact','$address')";
     $data=mysqli_query($conn,$sql);

 if($data){

  header("location:../suplrinfo.php?error=none");
    exit();
}
  
  else{
    header("location:../suplrinfo.php?error=nosuccess");
    exit();
  }
}


?>