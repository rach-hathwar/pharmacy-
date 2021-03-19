<?php
$servername="localhost";
$dbUser="root";
$dbPassword="";
$dbName="pharmacy";

$conn= mysqli_connect($servername,$dbUser,$dbPassword,$dbName);
if(!$conn){
    die("Connection Failed! ".mysqli_connect_error());

}