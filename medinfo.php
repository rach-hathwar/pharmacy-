
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
  width: 95%;
  margin-top:2%;
  margin-left: 3%;

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
<div>
	<p><b>View Medicine Information</b></p>
<table>
<thead>
<tr>
<th><strong>SL.No</strong></th>
<th><strong>Medicine ID</strong></th>
<th><strong>Common Name</strong></th>
<th><strong>Chemical Name</strong></th>
<th><strong>Company Name</strong></th>
<th><strong>Supplier Name</strong></th>
<th><strong>Product category</strong></th>
<th><strong>Product type</strong></th>
<th><strong>Medicine for</strong></th>
<th><strong>Stock</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sql="SELECT * FROM MEDICINEINFO";
$result=mysqli_query($conn,$sql);
$result_check_rows=mysqli_num_rows($result);

if($result_check_rows > 0){
	while($row = mysqli_fetch_assoc($result)){

$id=$row['MEDICINE_ID'];	
echo "<tr>
<td align='center'>". $count."</td>
<td align='center'>".$row['MEDICINE_ID']."</td>
<td align='center'>".$row["COMMON_NAME"]."</td>
<td align='center'>".$row["CHEMICAL_NAME"]."</td>
<td align='center'>".$row["COMPANY_NAME"]."</td>
<td align='center'>".$row["SUPPLIER_NAME"]."</td>
<td align='center'>".$row["PRODUCT_CAT"]."</td>
<td align='center'>".$row["PRODUCT_TYPE"]."</td>
<td align='center'>".$row["MED_USE"]."</td>
<td align='center'>10</td>

</tr>";
 $count++; 
}
} ?>
</tbody>
</table>
</div>
<button id="butn19" class="button1" >Add New </button>

<script type="text/javascript">
  
    document.getElementById("butn19").onclick = function () {
        location.href = "medicineinfo.php";
    };
</script>
	


<?php
include("templates/footer.php");
?>