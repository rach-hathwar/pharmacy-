<?php
require_once 'dbconn.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["submit"])){

    $medid=$_POST["medid"];
	$medname=$_POST["medname"];
	$cmpt=$_POST["cmptinfo"];
	$rack=$_POST["rackinfo"];
	$shelf=$_POST["shelfnfo"];

    if(emptyInputmedlocation($medid,$medname,$cmpt,$rack,$shelf) !== false){
    header("location:../medicinelocation.php?error=emptyinput");
    exit();
}
$sql="INSERT INTO `MEDICINELOC` (`med_id`,`Medicine`,`Compartment`,`Rack`,`Shelf`) VALUES ('$medid','$medname','$cmpt','$rack','$shelf')";
$data=mysqli_query($conn,$sql)or die(mysqli_error($conn));


if($data){
	header("location:../medlocinfo.php?error=none");
	exit();
}else{
	header("location:../medicinelocation.php?error=nosuccess");
	exit();
}
}

?>
