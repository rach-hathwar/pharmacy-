<?php
include ("templates/header.php");
require_once "includes/dbconn.inc.php";
?>

<style type="text/css">
table {
  border-collapse: collapse;
  border-spacing: 0;
  border: 1px solid #ddd;
  font-family: system-ui;
  width: 50%;
  margin-top: 2%;
  margin-left:25%;
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

<p><b>Customer Personal Details</b></p>
<table>
  <thead>
     <tr>
      <th><strong>SL No</strong></th>
    <th><strong>Customer_ID</strong></th>
    <th><strong>Customer Name</strong></th>
    <th><strong>Contact</strong></th>
    </tr>
  </thead>
<tbody>
<?php
$count=1;
$sql="SELECT * FROM `Cust_personal`";
$result=mysqli_query($conn,$sql);
$result_check_rows=mysqli_num_rows($result);

if($result_check_rows > 0){
  while($row = mysqli_fetch_assoc($result)){
 
echo '<tr>';
echo "<td align='center'>". $count.'</td>';
echo "<td align='center'>".$row["cust_id"].'</td>';
echo "<td align='center'>".$row["customer_name"].'</td>';
echo "<td align='center'>".$row["Contact"].'</td>';
echo '</tr>';
$count++; 
}
} ?>
</tbody>
</table>
<button id="butn21" class="button1" >Add New </button>

<script type="text/javascript">
  
    document.getElementById("butn21").onclick = function () {
        location.href = "customerpersonal.php";
    };
</script>

<?php
include ("templates/footer.php");
?>
    

 
