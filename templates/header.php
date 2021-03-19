<?php

session_start();
$_SESSION;

?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Sanjeevini Pharmacy Store</title>
<link rel="stylesheet" type=text/css href="style.css">
</head>

<body>
<div class="box-area">
<header>
	<div class="wrapper">
	<div class="logo">
	<a href="#">Pharmacy Store</a>
	</div>
	<nav>
    <a href='home.php'>Home</a>
	<a href="about.php">About Us</a>
	
	<?php
    	if(isset($_SESSION['user_name'])){
    		echo "<a href='includes/logout.inc.php'>Log-Out</a>";
    		if($_SESSION['category']=="Admin"){

    			echo "<a href='functionad.php'>Dashboard</a>";

    		}else{

    			echo "<a href='functionph.php'>Dashboard</a>";

    		}
    	}
    	else{
    		echo "<a href='login.php'>Login</a>";
    	}

	?>
	
	</nav>
	</div>
	
</header>
    </div>

</html>


