<?php
	include('../functions.php');

	if (!isStaff()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Staff panel</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['Uczen'])) : ?>
					<strong><?php echo $_SESSION['Uczen']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['Uczen']['user_type']); ?>)</i>
						<br>
						<a href="home.php?logout='1'" style="color: red;">Wyloguj się</a>
						&nbsp; <a href="wstawpost.php"> Umieść post</a>
						&nbsp; <a href="zastepstwa.php"> wstaw zastepstwo</a>
					</small>

				<?php endif ?>
			</div>
		</div>



	</div>

</body>
</html>
