<?php
$id =$_GET['id'];
require_once "includes/dbconn.inc.php";
require_once "includes/functions.inc.php";
$query="DELETE FROM `all_users` WHERE id=$id";
$delete=mysqli_query($conn, $query);

if($delete){
	header("location:./users.php");
}

?>