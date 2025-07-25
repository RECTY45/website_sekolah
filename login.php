<?php

session_start();

require "function/functions.php";

?>
<!doctype html>
<html lang="en">

<head>


	<meta charset="utf-8" />
	<title>Login page | SMP 25 MAKASSAR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesdesign" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Bootstrap Css -->
	<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="bg-light d-flex align-items-center min-vh-100">

	<div class="container">
		<div class="row justify-content-center pt-4">
			<div class="col-md-6 col-lg-5">
				<div class="card shadow-lg border-0 rounded-4">
					<div class="card-body p-4">

						<div class="text-center mb-4 pt-4">
							<img src="assets/img/25.JPEG" alt="Logo Sekolah" height="90" class="mb-2 rounded-circle">
							<h4 class="text-primary fw-bold">Selamat Datang</h4>
							<p class="text-muted mb-0">Silakan login untuk melanjutkan</p>
						</div>

						<form action="" method="POST">

							<div class="form-floating mb-3">
								<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
								<label for="username"><i class="fas fa-user me-2 text-primary"></i> Username</label>
							</div>

							<div class="form-floating mb-3">
								<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
								<label for="password"><i class="fas fa-lock me-2 text-primary"></i> Password</label>
							</div>

							<div class="form-check mb-3">
								<input type="checkbox" class="form-check-input" id="rememberMe">
								<label class="form-check-label" for="rememberMe">Ingat saya</label>
							</div>

							<button type="submit" name="login" class="btn btn-primary w-100 py-2">
								<i class="fas fa-sign-in-alt me-2"></i> Login
							</button>

							<div class="text-center mt-3">
								<a href="auth-recoverpw.html" class="text-muted small">
									<i class="fas fa-key me-1"></i> Lupa Password?
								</a>
							</div>

						</form>
						<?php
						if (isset($_POST['login'])) {
									$username = $_POST['username'];
							$password = $_POST['password'];

							$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' LIMIT 1");

							if (mysqli_num_rows($query) === 1) {
								$data = mysqli_fetch_assoc($query);
								if (password_verify($password, $data['password'])) {
									// Simpan data user ke session
									$_SESSION['login'] = true;
									$_SESSION['user_id'] = $data['id'];
									$_SESSION['username'] = $data['username'];
									$_SESSION['foto'] = $data['foto']; 
									$_SESSION['role'] = $data['role']; 

									header("Location: page/index.php?page=beranda ");
									exit;
								} else {
									echo "<div class='alert alert-danger mt-3'>Password salah!</div>";
								}
							} else {
								echo "<div class='alert alert-danger mt-3'>Akun tidak ditemukan!</div>";
							}
						}
						?>
						<hr class="my-4">


					</div>
				</div>

				<div class="text-center text-muted small mt-4">
					&copy; <script>
						document.write(new Date().getFullYear())
					</script> SMPN 25 Makassar. Dibuat dengan ❤️ oleh Meisya
				</div>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
	<script src="assets/libs/jquery/jquery.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="assets/libs/simplebar/simplebar.min.js"></script>
	<script src="assets/libs/node-waves/waves.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.min.js"></script>
	<script src="assets/js/app.js"></script>
</body>


</html>