	<?php

	$query = mysqli_query($conn, "select * from kepsek ");
	$data = mysqli_fetch_assoc($query);

	?>
	<!DOCTYPE html>
	<html lang="id">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SMP NEGERI 25 MAKASSAR</title>
		<!-- Bootstrap 5 -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
		<style>
			.hero-img {
				max-width: 100%;
				height: auto;
				border-radius: 10px;
			}

			.section-title {
				margin-bottom: 2rem;
			}
		</style>
	</head>

	<body>

		<div class="container py-5">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-8">
					<img src="assets/img/kepalasekolah/<?php echo $data['foto_kepsek'] ?>"
						alt="Kepala Sekolah"
						class="img-fluid rounded-circle shadow mb-3"
						style="width: 150px; height: 150px; object-fit: cover;">
					<h5 class="fw-bold"><?= $data['nama'] ?></h5>
					<h4 class="fw-semibold my-3">Sambutan Kepala Sekolah</h4>
					<p class="text-muted"><?= $data['sambutan'] ?></p>
				</div>
			</div>


			<!-- Berita -->
			<div class="row mb-5">
				<div class="col-md-8">
					<h4 class="section-title">Berita</h4>
					<?php
					$query = mysqli_query($conn, "select * from berita ");
					while ($data = mysqli_fetch_assoc($query)) { ?>
						<div class="card mb-3">
							<div class="row g-0">
								<div class="col-md-4 text">
									<img src="assets/img/berita/<?php echo $data['gambar'] ?>" class="img-fluid rounded-start" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<h5 class="card-title"><?= $data['judul_berita'] ?></h5>
										<p class="card-text"><?= $data['isi_berita'] ?></p>
										<a href="#" class="btn btn-outline-success btn-sm">Lihat Detail &rarr;</a>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>

				<!-- Social Media -->
				<div class="col-md-4">
					<h4 class="section-title">Social Media</h4>
					<?php
					$medsos = ['Facebook', 'Twitter', 'Instagram', 'Telegram'];
					foreach ($medsos as $media) {
					?>
						<div class="card mb-3">
							<div class="card-body">
								<h5 class="card-title"><?= $media ?></h5>
								<img src="assets/img/images.jfif" class="img-fluid mb-2" width="100">
								<p>SMP terbaik sedunia</p>
								<p>Kegiatan ini dilaksanakan tanggal 19 Agustus 2019 di lingkungan SMP 25 Makassar. Kegiatan menanam tanaman hias sudah menjadi budaya di kalangan pelajar.</p>
								<a href="#" class="btn btn-outline-success btn-sm">Lihat Detail</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>

			<!-- Jumlah Siswa -->
			<div class="row text-center mb-5">
				<?php
				$query = mysqli_query($conn, "select * from siswa ");
				$total = 0;
				while ($data = mysqli_fetch_assoc($query)) {
					$total += $data['jumlah'];
				?>
					<div class="col-6 col-md-3 mb-3">
						<i class="bi bi-people-fill fs-1"></i>
						<h3><?= $data['jumlah'] ?></h3>
						<p><?= $data['kelas'] ?></p>
					</div>
				<?php } ?>
				<div class="col-6 col-md-3 mb-3">
					<i class="bi bi-people fs-1"></i>
					<h3><?= $total ?></h3>
					<p>Jumlah Peserta Didik</p>
				</div>
			</div>

			<!-- Fiture Section -->
			<div class="row text-center">
				<h4 class="section-title">Fitur</h4>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<i class="bi bi-person-circle fs-1"></i>
							<h5>Profil</h5>
							<p>Kualitas layanan sekolah berkaitan dengan transparansi dan akuntabilitas.</p>
							<a href="?page=profil" class="btn btn-success">Lihat Detail</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<i class="bi bi-images fs-1"></i>
							<h5>Galeri</h5>
							<p>Kegiatan siswa dan momen penting lainnya di dokumentasikan dengan baik.</p>
							<a href="?page=galeri" class="btn btn-success">Lihat Detail</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="card h-100">
						<div class="card-body">
							<i class="bi bi-people fs-1"></i>
							<h5>SDM</h5>
							<p>Informasi tentang guru dan tenaga kependidikan SMPN 25 Makassar.</p>
							<a href="?page=sdm" class="btn btn-success">Lihat Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>

	</html>