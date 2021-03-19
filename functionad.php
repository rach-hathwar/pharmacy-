<?php 
include('templates/header.php');
?>
<div class="main">
	<div class="divider">
<div class= "cards"  style="margin-right: 15%;">
 <div class="image">
 <img src="images/addusers.jpg"> 	
 </div>	
 <div class="title">
 	<p class= "main-title">VIEW USERS</p>	
 </div>
 <div class="des">
 	<p>Can add,view and edit details of the users of the software here</p>	
 	<button id="myButton6" class="button">VIEW</button>

<script type="text/javascript">
    document.getElementById("myButton6").onclick = function () {
        location.href = "users.php";
    };
</script>
 </div>
 </div>



  <div class= "cards">
 <div class="image">
 <img src="images/supplier.png">    
 </div> 
 <div class="title">
    <p class="main-title">SUPPLIER DETAILS</p>  
 </div>
 <div class="des">
    <p>Can view all the suppliers of the store</p>   
    <button id="myButton8" class="button">VIEW</button>

<script type="text/javascript">
    document.getElementById("myButton8").onclick = function () {
        location.href = "suppliers.php";
    };
</script>
 </div>
 </div>

<div style="margin-top: 5%;"></div>

<div>
 <div class= "cards"  style="margin-left: 0.5%;">
 <div class="image">
 <img src="images/pharmacists.jpg">     
 </div> 
 <div class="title">
    <p class="main-title">PHARMACISTS DETAILS</p>   
 </div>
 <div class="des">
    <p>Can view the list pharmacists working in the store</p>   
    <button id="myButton7"  class="button" >VIEW</button>

<script type="text/javascript">
    document.getElementById("myButton7").onclick = function () {
        location.href = "pharmacists.php";
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