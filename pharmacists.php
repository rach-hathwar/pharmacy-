
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
<th><strong>Pharmacist Fullname</strong></th>
<th><strong>Username</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sql="CALL `Pharma`();";

if (mysqli_multi_query($conn,$sql)){ 
  do {
   if ($result=mysqli_store_result($conn)) { 
    while ($row=mysqli_fetch_array($result)) {
      
    echo "
        <tr>
        <td align='center'>". $count."</td>
        <td align='center'>".$row["V_ufname"]."</td>
        <td align='center'>".$row["V_uname"]."</td>

        </tr>";
      }
       mysqli_free_result($result); 
     }  $count++; 
   } while (mysqli_next_result($conn));
    } 
?>

</tbody>
</table>


<?php
include("templates/footer.php");
?>