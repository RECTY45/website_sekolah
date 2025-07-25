<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SMP 25 MAKASSAR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
	<style>
		body {
			font-family: 'Segoe UI', sans-serif;
			background-color: #f8fff8;
		}

		.section-title {
			font-weight: 700;
			color: #2e7d32;
			margin-bottom: 1.5rem;
		}

		.hero-image {
			background: url('assets/img/3.jpg') center center/cover no-repeat;
			height: 400px;
			position: relative;
		}

		.card-img-top {
			object-fit: cover;
			height: 250px;
		}

		.eskul-card,
		.sarpras-card {
			background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
			border-radius: 10px;
			padding: 1.5rem;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}

		.custom-list {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.custom-list li {
			display: flex;
			align-items: center;
			padding: 0.5rem 0;
			font-weight: 500;
			color: #2e7d32;
		}

		.custom-list li i {
			color: #43a047;
			margin-right: 10px;
		}
	</style>
</head>

<body>

	<?php
	$query = mysqli_query($conn, "SELECT * FROM sejarah");
	$data = mysqli_fetch_assoc($query);
	?>

	<!-- Section: Sejarah -->
	<section class="py-5">
		<div class="container">
			<div class="card shadow-sm border-0">
				<div class="container py-5">
					<div class="card shadow-sm border-0 overflow-hidden">
						<!-- Gambar Header -->
						<img src="assets/img/sejarah/<?php echo $data['gambar'] ?>"
							class="img-fluid rounded-top w-100"
							alt="Sejarah Sekolah"
							style="height: 350px; object-fit: cover;">

						<!-- Konten Sejarah -->
						<div class="card-body px-4 py-4">
							<h4 class="text-center fw-bold text-success mb-4">
								<?= $data['judul_sejarah'] ?>
							</h4>
							<p class="text-muted" style="text-align: justify; line-height: 1.8;">
								<?= $data['isi_sejarah'] ?>
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		</div>
	</section>

	<!-- Section: Visi & Misi -->
	<section class="py-5 bg-light">
		<div class="container">
			<div class="text-center mb-5">
				<h3 class="section-title">Visi dan Misi</h3>
			</div>
			<div class="row g-4">
				<?php
				$query = mysqli_query($conn, "SELECT * FROM visimisi");
				while ($data = mysqli_fetch_assoc($query)) {
				?>
					<div class="col-md-6">
						<div class="card border-success h-100">
							<div class="card-body">
								<h5 class="card-title text-success"><i class="bi bi-check-circle-fill me-2"></i><?= $data['visimisi'] ?></h5>
								<p class="card-text"><?= $data['isi'] ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<!-- Section: Background Image -->
	<div class="hero-image"></div>

	<!-- Section: Sarana dan Prasarana -->
	<section class="py-5">
		<div class="container">
			<div class="sarpras-card mb-4">
				<h4 class="section-title">Sarana dan Prasarana</h4>
				<ul class="custom-list">
					<li><i class="bi bi-building"></i> 34 ruang belajar berbasis ICT dan berAC.</li>
					<li><i class="bi bi-flask"></i> Laboratorium: Fisika, Kimia, Biologi, TIK, Bahasa, Seni, dan IPS.</li>
					<li><i class="bi bi-journal-code"></i> Perpustakaan digital</li>
					<li><i class="bi bi-dribbble"></i> Lapangan olahraga: voly, basket, footsal, tenis meja, dan badminton</li>
					<li><i class="bi bi-easel"></i> Ruang serbaguna dan multimedia</li>
					<li><i class="bi bi-moon-stars"></i> Masjid dan area parkir (motor dan mobil)</li>
					<li><i class="bi bi-wifi"></i> Wifi dan Hotspot seluruh area</li>
					<li><i class="bi bi-tree"></i> Greenhouse dan Taman Toga</li>
					<li><i class="bi bi-people"></i> Ruang kegiatan siswa (OSIS, UKS) dan kantin</li>
					<li><i class="bi bi-flower1"></i> Taman Luas Untuk Belajar</li>
				</ul>
			</div>

			<!-- Ekstrakurikuler -->
			<div class="eskul-card">
				<h4 class="section-title">Ekstrakurikuler</h4>
				<ul class="custom-list">
					<li><i class="bi bi-trophy"></i> Sepak Bola</li>
					<li><i class="bi bi-trophy"></i> Bola Volly</li>
					<li><i class="bi bi-trophy"></i> Takrow</li>
					<li><i class="bi bi-trophy"></i> Bola Basket</li>
					<li><i class="bi bi-trophy"></i> Silat</li>
					<li><i class="bi bi-trophy"></i> Karate</li>
					<li><i class="bi bi-trophy"></i> Pasus</li>
					<li><i class="bi bi-trophy"></i> Paskibra</li>
					<li><i class="bi bi-trophy"></i> Pramuka</li>
					<li><i class="bi bi-trophy"></i> Rohis & Islam</li>
				</ul>
			</div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>