<?php
include("Includes/var.php");
?>

<!DOCTYPE html>
<html>
<head>
<title><?=$app_name?></title>
<?php
include("Includes/head.php");
?>
</head>

<body >
	<div class="con1">
		<div class="con2">
			<div id="header1"><?=$app_name?></div>
	
			<div class="con3">
				<a class="my-btn" href="auth/FarmerLogin.php">FARMER</a>
				<a class="my-btn" href="auth/BuyerLogin.php">BUYER</a>
			</div>
		</div>
	</div>

<?php
include("Includes/footer.php");
?>	
</body>
</html>