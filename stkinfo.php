<?php
include('templates/header.php');
require_once "includes/dbconn.inc.php";
?>
<style type="text/css">
table {
  border-collapse: collapse;
  border-spacing: 0;
  border: 1px solid #ddd;
  font-family: system-ui;
  width: 35%;
  margin-top: 2%;
  margin-left:32%;
}
p
  {
    padding-top: 10%;
    font-size:1.9rem;
    font-family: system-ui;
    padding-bottom: 1%;

  }

th{
   padding: 16px;
  text-align:center;  
  font-size:1.3rem;
  font-family: system-ui;
  border-bottom: 1px solid #ddd;
  background-color: #62a0d0;
  color: white;


}
td{
  padding: 16px;
  font-size:1.1rem;
  font-family: system-ui;
  border-bottom: 1px solid #ddd;

}
tr:hover 
{background-color: #f5f5f5;}
</style>
	<p><b>View Pharmacists</b></p>

<table>
<thead>
<tr>
<th><strong>SL.No</strong></th>
<th><strong>Medicine name</strong></th>
<th><strong>Stock left</strong></th>
<th><strong>Expiry date</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
//$sql="CALL Pharma()";
$sql="SELECT `user_fname`,`user_name` FROM `all_users` WHERE category='Pharmacist'";
$result=mysqli_query($conn,$sql)or die( mysqli_error($conn));
$result_check_rows=mysqli_num_rows($result);
if($result_check_rows > 0){
	while($row = mysqli_fetch_assoc($result)){

//s$id=$row["Id"];	
echo "
<tr>
<td align='center'>". $count."</td>
<td align='center'>".$row["user_fname"]."</td>
<td align='center'>".$row["user_name"]."</td>

</tr>";

 $count++; 
}
}
?>
</tbody>
</table>
<?php
include("templates/footer.php");
?>
