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
	<div id="con1">
		<div id="con2">
			<div id="appName"><?=$app_name?></div>
	
			<div id="con3">
				<a class="home-btn" href="auth/FarmerLogin.php">FARMER</a>
				<a class="home-btn" href="auth/BuyerLogin.php">BUYER</a>
			</div>
		</div>
	</div>

	<div id="about">
		<strong>Kelompok 4</strong>
		<div>Aplikasi ini dibuat untuk memenuhi tugas mata kuliah Desain dan Analisis Algoritma <span class="whitespace-nowrap">(Strategi Algoritma)</span></div>
	</div>
	
</body>
</html>