
<?php
include("templates/header.php");
require_once "includes/dbconn.inc.php";
?>
<style type="text/css">
table {
  border-collapse: collapse;
  border-spacing: 0;
  border: 1px solid #ddd;
  font-family: system-ui;
  width: 90%;
  margin-top: 2%;
  margin-left:5%;
  
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
<p><b>Customer Purchase Details</b></p>
<table>
<thead>
<tr>
<th><strong>SL.No</strong></th>
<th><strong>Customer ID</strong></th>
<th><strong>Medicine details</strong></th>
<th><strong>Pharmacist</strong></th>
<th><strong>Purchase added at</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sql="SELECT * FROM Cust_purchase";
$result=mysqli_query($conn,$sql);
$result_check_rows=mysqli_num_rows($result);

if($result_check_rows > 0){
	while($row = mysqli_fetch_assoc($result)){

$custid=$row['cust_id'];	
echo "
<tr>
<td align='center'>". $count."</td>;
<td align='center'>".$row["cust_id"]."</td>
<td align='center'>".$row["Medicine_details"]."</td>
<td align='center'>".$row["pharmacist"]."</td>
<td align='center'>".$row["purchased_at"]."</td>
<td align='center'><a href='editcustinfo.php?cust_id=$custid'><button id='butn3' class='button1' style='background-color:#4CAF50'>Edit</button></a></td>
<td align='center'><a href='deletecustomers.php?cust_id=$custid'><button id='butn4' class='button1' style='background-color:#cc0000'>Delete</button></a>
</td>
</tr>";

 $count++; 
}
} ?>
</tbody>
</table>
<button id="myButton11" class="button1" >Add New </button>

<script type="text/javascript">
	document.getElementById("myButton11").
  onclick = function () {
        location.href = "customerdetails.php";
    };
</script>
	


<?php
include("templates/footer.php");
?>