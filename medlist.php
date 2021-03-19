<?php
include("templates/header.php");
require_once "includes/dbconn.inc.php";
require_once "includes/medlist.inc.php";
session_start();
?>
<style type="text/css">
table {
  border-collapse: collapse;
  border-spacing: 0;
  border: 1px solid #ddd;
  font-family: system-ui;
  width: 70%;
  margin-top:2%;
  margin-left: 15%;

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
	<p><b>Add medicines to the cart</b></p>
<table>
<thead>
<tr>
<th><strong>SL.No</strong></th>
<th><strong>Medicine ID</strong></th>
<th><strong>Medicine Name</strong></th>
<th><strong>Add</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Remove</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$qty=10;
$query="SELECT `MEDICINE_ID`,`COMMON_NAME` FROM `MEDICINEINFO`";
$result=mysqli_query($conn,$query)or die(mysqli_error());
$result_check_rows=mysqli_num_rows($result);

if($result_check_rows > 0){
	while($row = mysqli_fetch_assoc($result)){

//$id=$row['MEDICINE_ID'];
echo "<tr>
<td align='center'>". $count."</td>
<td align='center'>".$row["MEDICINE_ID"]."</td>
<td align='center'>".$row["COMMON_NAME"]."</td>
<td align='center'><button id='butn23' class='button1' style='background-color:#4CAF50'>ADD</button>
</td>
<td align='center'>
<select name='qty' id='qty' style='margin-left:3%;padding:3%; font-family:system-ui;'>
  <option value=''>Qty:</option>
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
  <option value='5'>5</option>
  <option value='6'>6</option>
  <option value='7'>7</option>
  <option value='8'>8</option>
  <option value='9'>9</option>
  <option value='10'>10</option>
</select></td>
<td align='center'><button id='butn24' class='button1'style='background-color:#cc0000'>REMOVE</button>
</td>
</tr>";

 $count++; 
}
} ?>
</tbody>
</table>
</div>

