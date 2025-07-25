<?php 
	if(!isset($_GET['id'])) {
		header("location: index.php");
	}

	$id = $_GET['id'];

	$result = mysqli_query($conn, "SELECT * FROM eskul WHERE id='$id'");
	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubaheskul($_POST) > 0) {
			echo "<script>
					alert('Eskul Berhasil Diubah');
					window.location.href='index.php?page=profil';
				  </script>";
		} else {
			echo "<script>alert('Eskul Gagal Diubah');</script>";
		}
	}
?>

<div class="container mt-5" style="max-width: 600px;">
	<div class="card shadow-sm rounded-4 border-0">
		<div class="card-body p-4">
			<h4 class="mb-4 text-primary fw-semibold"><i class="bi bi-pencil-square me-2"></i>Edit Ekstrakurikuler</h4>
			<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $data['id'] ?>">
				
				<div class="mb-3">
					<label for="eskul" class="form-label fw-medium">Nama Ekstrakurikuler</label>
					<input type="text" class="form-control form-control-lg rounded-3" id="eskul" name="eskul"
						value="<?= htmlspecialchars($data['eskul']) ?>" placeholder="Masukkan nama eskul" required>
				</div>

				<div class="d-flex justify-content-between mt-4">
					<button type="submit" name="ubah" class="btn btn-primary btn-lg rounded-3 px-4">
						<i class="bi bi-send me-2"></i>Edit
					</button>
					<a href="index.php?page=profil" class="btn btn-outline-secondary btn-lg rounded-3 px-4">
						<i class="bi bi-arrow-left me-2"></i>Kembali
					</a>
				</div>
			</form>
		</div>
	</div>
</div>

