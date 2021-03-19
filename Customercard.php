<?php 
include('templates/header.php');
?>
<div class="main">
	<div class="divider">
<div class= "cards"  style="margin-right: 15%;">
 <div class="image">
 <img src="images/customerpurchase.jpg"> 	
 </div>	
 <div class="title">
 	<p class= "main-title">CUSTOMER PURCHASE DETAILS</p>	
 </div>
 <div class="des">
 	<p>Can add,view and edit details of the purchase made by the customer</p>	
 	<button id="myButton66" class="button">VIEW</button>

<script type="text/javascript">
    document.getElementById("myButton66").onclick = function () {
        location.href = "custinfo.php";
    };
</script>
 </div>
 </div>



  <div class= "cards">
 <div class="image">
 <img src="images/customerpersonal.jpg">    
 </div> 
 <div class="title">
    <p class="main-title">CUSTOMER PERSONAL DETAILS</p>  
 </div>
 <div class="des">
    <p>Can view,edit,delete all the information regarding the customers of the store</p>   
    <button id="myButton88" class="button">VIEW</button>

<script type="text/javascript">
    document.getElementById("myButton88").onclick = function () {
        location.href = "custpersonaldetls.php";
    };
</script>
 </div>
 </div>


    </div>
</div>
 <?php
include('templates/footer.php');
 ?>