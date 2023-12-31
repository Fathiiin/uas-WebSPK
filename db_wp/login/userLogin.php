<?php

session_start();

include '../tools/connection.php';

if (isset($_SESSION["login_user"])) {
	header("location: ../home/home.php");
	exit();
}

if (isset($_POST['login_user'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = $conn->query("SELECT * FROM ta_user WHERE user_nama = '$username'");

	//cek username
	if (mysqli_num_rows($query) === 1) {

		//cek password
		$row = mysqli_fetch_assoc($query);
		if ($password === $row["user_password"]) {

			// set session
			$_SESSION["login_user"] = true;

			header("location: ../home/home.php");
			exit();
		}
	}
	$error = true;
}

?>

<?php include '../blade/header.php' ?>

<div class="container">
	<div class="card">
		<div class="card-header bg-info">
			<h3 class="text-center">SISTEM PENDUKUNG KEPUTUSAN UKM AWARDS<br>UNIVERSITAS PERNAH ADA</h3>
		</div>

		<div class="card-body">
			<div class="row">
				<div class="col-lg-4"></div>
				<div class="col-lg-4 shadow py-3">

					<p class="text-center fw-bold">User Login</p>
					<hr>

					<form action="" method="post">
						<?php if (isset($error)) : ?>
							<p style="color: red; font-style: italic;">Username atau Password salah !</p>
						<?php endif; ?>
						<div class="row mb-3">
							<label for="username" class="col-sm-4 col-form-label">Username</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="username" autocomplete="off" autofocus required>
							</div>
						</div>
						<div class="row mb-3">
							<label for="password" class="col-sm-4 col-form-label">Password</label>
							<div class="col-sm-8">
								<input type="password" class="form-control" name="password" required>
							</div>
						</div>
						<div class="d-grid gap-3 d-md-flex justify-content-md-end">
							<button type="submit" class="btn btn-outline-primary" name="login_user">Login</button>
						</div>
					</form>

				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</div>
</div>