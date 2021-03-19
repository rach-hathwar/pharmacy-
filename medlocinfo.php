
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
  width: 70%;
  margin-top: 2%;
  margin-left:15%;
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
	<p><b>View Medicine Location </b></p>
<table>
<thead>
<tr>
<th><strong>SL.No</strong></th>
<th><strong>Medicine ID</strong></th>
<th><strong>Medicine name</strong></th>
<th><strong>Compartment Info</strong></th>
<th><strong>Rack Info</strong></th>
<th><strong>Shelf Info</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sql="SELECT * FROM MEDICINELOC";
$result=mysqli_query($conn,$sql);
$result_check_rows=mysqli_num_rows($result);

if($result_check_rows > 0){
	while($row = mysqli_fetch_assoc($result)){

$id=$row['med_id'];	
echo "
<tr>
<td align='center'>". $count."</td>
<td align='center'>".$row['med_id']."</td>
<td align='center'>".$row["Medicine"]."</td>
<td align='center'>".$row["Compartment"]."</td>
<td align='center'>".$row["Rack"]."</td>
<td align='center'>".$row["Shelf"]."</td>
</tr>";
 $count++; 
}
} ?>
</tbody>
</table>
<button id="myButton10" class="button1" >Add New </button>

<script type="text/javascript">
    document.getElementById("myButton10").onclick = function () {
        location.href = "medicinelocation.php";
    };
</script>
	


<?php
include("templates/footer.php");
?>