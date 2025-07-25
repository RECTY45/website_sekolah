<?php
if (!isset($_GET['id'])) {
	header("location: index.php");
	exit;
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM sejarah WHERE id='$id'");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['ubah'])) {
	if (ubahsejarah($_POST) > 0) {
		echo "<script>
				alert('Sejarah Berhasil Diubah');
				window.location.href='index.php?page=profil';
			</script>";
	} else {
		echo "<script>
				alert('Sejarah Gagal Diubah');
			</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Sejarah - SMP NEGERI 25 MAKASSAR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

	<div class="container my-5">
		<div class="card shadow rounded-4">
			<div class="card-body p-5">
				<h3 class="mb-4 text-center">Edit Sejarah</h3>

				<form action="" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $data['id'] ?>">
					<input type="hidden" name="gambarlama" value="<?= $data['gambar'] ?>">

					<div class="mb-3">
						<label for="judul_sejarah" class="form-label">Judul Sejarah</label>
						<input type="text" class="form-control" id="judul_sejarah" name="judul_sejarah" value="<?= htmlspecialchars($data['judul_sejarah']) ?>" required>
					</div>

					<div class="mb-3">
						<label for="isi_sejarah" class="form-label">Isi Sejarah</label>
						<textarea class="form-control" id="isi_sejarah" name="isi_sejarah" rows="6" required><?= htmlspecialchars($data['isi_sejarah']) ?></textarea>
					</div>

					<div class="mb-4">
						<label for="gambar" class="form-label">Update Gambar</label>
						<input class="form-control" type="file" name="gambar" id="gambar">
						<div class="mt-3">
							<img src="../assets/img/sejarah/<?= $data['gambar'] ?>" alt="Gambar Lama" width="150" class="img-thumbnail">
						</div>
					</div>

					<div class="d-flex justify-content-between">
						<a href="index.php?page=profil" class="btn btn-secondary">
							<i class="bi bi-arrow-left"></i> Kembali
						</a>
						<button type="submit" name="ubah" class="btn btn-primary">
							<i class="bi bi-send"></i> Simpan Perubahan
						</button>
					</div>
				</form>

			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>	