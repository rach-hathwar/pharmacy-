<?php 
include('templates/header.php');
?>
<div class="main">
	<div class="divider">
<div class= "cards" style="margin-right: 15%;">
 <div class="image"  >
 <img src="images/addmedicines.jpg" > 	
 </div>	
 <div class="title">
 	<p class= "main-title">MEDICINE DETAILS</p>	
 </div>
 <div class="des">
 	<p>Can add,edit and view all information on all the products available in the store</p>	
 	<button id="myButton2" class="button">VIEW</button>

<script type="text/javascript">
    document.getElementById("myButton2").onclick = function () {
        location.href = "medinfo.php";
    };
</script>
 </div>
 </div>
 <div class= "cards" style="margin-right: 5%;">
 <div class="image">
 <img src="images/medicinelocation.jpg">    
 </div> 
 <div class="title">
    <p class="main-title">MEDICINE LOCATION DETAILS</p> 
 </div>
 <div class="des">
    <p>Can view the Locations of the various products inside the store</p>  
    <button id="myButton5" class="button">VIEW</button>

<script type="text/javascript">
    document.getElementById("myButton5").onclick = function () {
        location.href = "medlocinfo.php";
    };
</script>
 </div>
 </div>




<div style="margin-top: 5%;"></div>

<div>
<div class= "cards" style="margin-right: 5%;">
 <div class="image">
 <img src="images/customerinfo.png">    
 </div> 
 <div class="title">
    <p class="main-title">CUSTOMER DETAILS</p>  
 </div>
 <div class="des">
    <p>Can add,view and edit details about the customers of the store</p>   
    <button id="myButton3"  class="button" >VIEW</button>

<script type="text/javascript">
    document.getElementById("myButton3").onclick = function () {
        location.href = "Customercard.php";
    };
</script>
 </div>
 </div>
    </div>

</div>
 </div>
 <?php
include('templates/footer.php');
 ?>