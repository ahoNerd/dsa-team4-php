<?php
include("../Includes/db.php");
//session_start();
include("../Functions/functions.php");
?>


<!DOCTYPE html>
<html>

<head>
<?php
include("../Includes/head.php");
include("../Includes/head2.php");
?>

	<title>Farmer Login portal</title>
</head>

<body>
	<div class="con1">
		<main class="con2 my-form text-white">
			<div id="header1" class="text-center">Login</div>
			<form name="my-form" action="FarmerLogin.php" method="post" class="pt-4">
				<table class="w-100">
					<tr>
						<td>
							<label class="m-0" for="phone_number"><strong class="text-nowrap"><i class="fas fa-phone-alt mr-2"></i>Phone Number &nbsp;</strong></label>
						</td>
						<td>
							<input type="text" id="phone_number" class="form-control border border-dark" name="phonenumber" placeholder="Phone Number" required>
						</td>
					</tr>

					<tr><td>&nbsp;</td></tr>

					<tr>
						<td>
							<label class="m-0" for="p1"><strong><i class="fas fa-lock mr-2"></i>Password</strong></label>
						</td>
						<td>
							<input type="password" id="p1" class="form-control border border-dark" name="password" placeholder="Password" required>
						</td>
					</tr>

					<tr><td>&nbsp;</td></tr>

					<tr>
						<td></td>
						<td>
							<input type="submit" class="my-btn" name="login" value="Login">
						</td>
					</tr>
				</table>

				<div class="con3 flex-column text-center">
					<a href="FarmerForgotPassword.php"><strong> Forgot your password ?</strong></a>
					<a href="FarmerRegister.php"><strong>Create New Account</strong></a>
				</div>
			</form>
		</main>
	</div>
	
<?php
include("../Includes/footer.php");
?>
</body>

</html>

<?php
if (isset($_POST['login'])) {

	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$ciphering = "AES-128-CTR";
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
	$encryption_iv = '2345678910111211';
	$encryption_key = "DE";

	$encryption = openssl_encrypt(
		$password,
		$ciphering,
		$encryption_key,
		$options,
		$encryption_iv
	);
	// echo $encryption;

	$query = "select * from farmerregistration where farmer_phone = '$phonenumber' and farmer_password = '$encryption'";
	$run_query = mysqli_query($con, $query);
	$count_rows = mysqli_num_rows($run_query);
	if ($count_rows == 0) {
		echo "<script>alert('Please Enter Valid Details');</script>";
		echo "<script>window.open('FarmerLogin.php','_self')</script>";
	}
	while ($row = mysqli_fetch_array($run_query)) {
		$id = $row['farmer_id'];
	}

	$_SESSION['phonenumber'] = $phonenumber;
	echo "<script>window.open('../FarmerPortal/farmerHomepage.php','_self')</script>";
}

?>