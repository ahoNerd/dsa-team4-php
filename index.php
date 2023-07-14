<?php
include("Includes/var.php");
?>

<!DOCTYPE html>
<html>
<head>
<?php
include("Includes/head.php");
?>
</head>

<body >
	
	<div id="WELCOME"><?=$app_name?></h1>
	<span id="linebreak"></span>
	<label id="Farmerbutton"><a id = "link" href="auth/FarmerLogin.php">FARMER</a></label>
	<label id="Buyerbutton"><a id = "link" href="auth/BuyerLogin.php">BUYER</a></label>
	
</body>
</html>