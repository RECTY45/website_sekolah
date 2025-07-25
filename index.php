<?php
require "function/functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>SMP NEGERI 25 MAKASSAR</title>
	<meta name="description" content="Situs Resmi SMP Negeri 25 Makassar">
	<meta name="keywords" content="SMP, Sekolah, Makassar, Pendidikan">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

	<header id="header" class="header d-flex align-items-center sticky-top">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="index.php" class="logo d-flex align-items-center">
				<h1 class="sitename"><span>SMP</span> NEGERI 25 MAKASSAR</h1>
			</a>

			<nav id="navmenu" class="navmenu">
				<ul>
					<li><a href="index.php" class="<?php echo (@$_GET['page'] == '' ? 'active' : ''); ?>">HOME</a></li>
					<li><a href="?page=profil" class="<?php echo (@$_GET['page'] == 'profil' ? 'active' : ''); ?>">PROFIL</a></li>
					<li><a href="?page=galeri" class="<?php echo (@$_GET['page'] == 'galeri' ? 'active' : ''); ?>">GALERI</a></li>
					<li><a href="?page=blog" class="<?php echo (@$_GET['page'] == 'blog' ? 'active' : ''); ?>">BLOG</a></li>
					<li><a href="?page=sdm" class="<?php echo (@$_GET['page'] == 'sdm' ? 'active' : ''); ?>">SDM</a></li>
					<li><a href="login.php">LOGIN</a></li>
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

		</div>
	</header>

	<main class="main">
		<?php
		@$page = $_GET['page'];
		@$aksi = $_GET['aksi'];

		if ($page == "profil") {
			if ($aksi == "") {
				include "profil.php";
			}
		} else if ($page == "") {
			// Home page content - Bootstrap version of your slider and home content
		?>
			<!-- Hero Section with Dynamic Slider -->
			<section id="hero" class="hero section light-background">
				<div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

					<!-- Dynamic Slider Section -->
					<div id="heroCarousel" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="3000">
						<div class="carousel-inner">
							<?php
							$query = mysqli_query($conn, "select * from home");
							$first = true;
							while ($data = mysqli_fetch_assoc($query)) {
							?>
								<div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
									<div class="row gy-5 align-items-center">
										<div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
											<h2 class="display-4 fw-bold"><?php echo $data['judul_slogan']; ?></h2>
											<p class="lead text-muted"><?php echo $data['isi_slogan']; ?></p>
											<div class="d-flex gap-3 mt-4">
												<a href="#about" class="btn-get-started">Pelajari Lebih Lanjut</a>
												<a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center">
													<i class="bi bi-play-circle me-2"></i><span>Tonton Video</span>
												</a>
											</div>
										</div>
										<div class="col-lg-6 order-1 order-lg-2">
											<img src="assets/img/slogan/<?php echo $data['gambar_slogan']; ?>" class="img-fluid rounded shadow" alt="<?php echo $data['judul_slogan']; ?>">
										</div>
									</div>
								</div>
							<?php
								$first = false;
							}
							?>
						</div>

						<!-- Carousel controls -->
						<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>

				</div>

				<!-- Icon Boxes Section -->
				<div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
					<div class="container position-relative">
						<div class="row gy-4 mt-5">
							<div class="col-xl-3 col-md-6">
								<div class="icon-box">
									<div class="icon"><i class="bi bi-mortarboard"></i></div>
									<h4 class="title"><a href="?page=profil" class="stretched-link">Pendidikan Berkualitas</a></h4>
								</div>
							</div>

							<div class="col-xl-3 col-md-6">
								<div class="icon-box">
									<div class="icon"><i class="bi bi-people"></i></div>
									<h4 class="title"><a href="?page=sdm" class="stretched-link">Tenaga Pendidik Profesional</a></h4>
								</div>
							</div>

							<div class="col-xl-3 col-md-6">
								<div class="icon-box">
									<div class="icon"><i class="bi bi-building"></i></div>
									<h4 class="title"><a href="?page=galeri" class="stretched-link">Fasilitas Lengkap</a></h4>
								</div>
							</div>

							<div class="col-xl-3 col-md-6">
								<div class="icon-box">
									<div class="icon"><i class="bi bi-trophy"></i></div>
									<h4 class="title"><a href="?page=blog" class="stretched-link">Prestasi Membanggakan</a></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- About Section -->
			<section id="about" class="about section">
				<div class="container">
					<div class="row gy-4">
						<div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
							<p class="who-we-are">Tentang Kami</p>
							<h3>Membentuk Karakter dan Prestasi Unggul</h3>
							<p class="fst-italic">
								SMP Negeri 25 Makassar berkomitmen untuk memberikan pendidikan terbaik dengan mengintegrasikan
								pembelajaran akademik dan pembentukan karakter yang kuat.
							</p>
							<ul>
								<li><i class="bi bi-check-circle"></i> <span>Program pembelajaran yang inovatif dan sesuai kurikulum nasional</span></li>
								<li><i class="bi bi-check-circle"></i> <span>Pengembangan bakat dan minat siswa melalui berbagai ekstrakurikuler</span></li>
								<li><i class="bi bi-check-circle"></i> <span>Lingkungan belajar yang kondusif dengan fasilitas modern dan tenaga pendidik yang kompeten</span></li>
							</ul>
							<a href="?page=profil" class="read-more"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
						</div>

						<div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
							<div class="row gy-4">
								<div class="col-lg-6">
									<img src="assets/img/juara-lomba.jpeg" class="img-fluid" alt="">
								</div>
								<div class="col-lg-6">
									<div class="row gy-4">
										<div class="col-lg-12">
											<img src="assets/img/juara1-sekolah sehat.webp" class="img-fluid" alt="">
										</div>
										<div class="col-lg-12">
											<img src="assets/img/pelantikan-osis.jpeg" class="img-fluid" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Features Section -->
			<section id="features" class="features section light-background text-center">
				<div class="container section-title" data-aos="fade-up">
					<h2>Keunggulan</h2>
					<div>
						<span>Mengapa Memilih</span>
						<span class="description-title">SMP Negeri 25 Makassar</span>
					</div>
				</div>	
				<div class="container d-flex flex-column align-items-center justify-content-center text-center">
					<div class="row justify-content-center align-items-center">

						<!-- Gambar -->
						<div class="col-12 col-md-8 col-xl-6 mb-4" data-aos="zoom-out" data-aos-delay="100">
							<img src="assets/img/features.svg" class="img-fluid mx-auto d-block" alt="">
						</div>

						<!-- Fitur Keunggulan -->
						<div class="col-12 col-md-10 col-xl-8">
							<div class="row justify-content-center gy-4">

								<div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
									<div class="feature-box d-flex align-items-center justify-content-center">
										<i class="bi bi-check me-2"></i>
										<h3 class="mb-0">Akreditasi A</h3>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
									<div class="feature-box d-flex align-items-center justify-content-center">
										<i class="bi bi-check me-2"></i>
										<h3 class="mb-0">Guru Bersertifikat</h3>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
									<div class="feature-box d-flex align-items-center justify-content-center">
										<i class="bi bi-check me-2"></i>
										<h3 class="mb-0">Fasilitas Lengkap</h3>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
									<div class="feature-box d-flex align-items-center justify-content-center">
										<i class="bi bi-check me-2"></i>
										<h3 class="mb-0">Lingkungan Kondusif</h3>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
									<div class="feature-box d-flex align-items-center justify-content-center">
										<i class="bi bi-check me-2"></i>
										<h3 class="mb-0">Program Unggulan</h3>
									</div>
								</div>

								<div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
									<div class="feature-box d-flex align-items-center justify-content-center">
										<i class="bi bi-check me-2"></i>
										<h3 class="mb-0">Prestasi Terpercaya</h3>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

			</section>


		<?php
			include "home.php";
		} else if ($page == "galeri") {
			if ($aksi == "") {
				include "galeri.php";
			}
		} else if ($page == "blog") {
			if ($aksi == "") {
				include "blog.php";
			}
		} else if ($page == "sdm") {
			if ($aksi == "") {
				include "sdm.php";
			}
		}
		?>
	</main>
	<!-- Contact Section -->
	
	<footer id="footer" class="footer light-background">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h5>SMP NEGERI 25 MAKASSAR</h5>
					<p class="text-muted">Terima kasih telah berkunjung ke situs resmi SMP Negeri 25 Makassar. Kami berkomitmen memberikan pendidikan terbaik untuk generasi penerus bangsa.</p>
					<p><strong>LOKASI:</strong> Jl. Bhakti IV/1 Komplek Pajak Kebun Jeruk, Kemanggisan Jakarta Barat 11480</p>
				</div>
				<div class="col-lg-3">
					<h5>Menu Utama</h5>
					<ul class="list-unstyled">
						<li><a href="index.php" class="text-decoration-none">Home</a></li>
						<li><a href="?page=profil" class="text-decoration-none">Profile</a></li>
						<li><a href="?page=galeri" class="text-decoration-none">Gallery</a></li>
						<li><a href="?page=blog" class="text-decoration-none">Blog</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<h5>Informasi</h5>
					<ul class="list-unstyled">
						<li><a href="?page=sdm" class="text-decoration-none">SDM</a></li>
						<li><a href="login.php" class="text-decoration-none">Login</a></li>
					</ul>
				</div>
			</div>

			<div class="copyright text-center mt-4">
				<p>© <span>Copyright</span> <strong class="px-1 sitename">SMP Negeri 25 Makassar</strong> <span>All Rights Reserved</span></p>
			</div>

			<div class="social-links d-flex justify-content-center mt-3">
				<a href=""><i class="bi bi-twitter-x"></i></a>
				<a href=""><i class="bi bi-facebook"></i></a>
				<a href=""><i class="bi bi-instagram"></i></a>
				<a href=""><i class="bi bi-linkedin"></i></a>
			</div>

			<div class="credits text-center mt-2">
				<small>arisafriyanto @copyright <?php echo date("Y"); ?></small>
			</div>
		</div>
	</footer>

	<!-- Scroll Top -->
	<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

	<!-- Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>