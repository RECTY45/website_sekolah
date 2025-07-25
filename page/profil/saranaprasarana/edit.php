<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php");
	}

	$id = $_GET['id'];

	$result = mysqli_query($conn, "select * from saranaprasarana where id='$id' ");

	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubahsarana($_POST) > 0) {
			echo "<script>
							alert ('Sarana & Prasarana Berhasil Diubah');
							window.location.href='index.php?page=profil';
					  </script>
					  ";
		}else{
			echo "<script>
						alert ('Sarana & Prasarana Gagal Diubah');
					  </script>
					  ";
		}
	}

?>
	<div class="container mt-5" style="max-width: 700px;">
	<div class="card shadow-sm border-0 rounded-4">
		<div class="card-body p-4">
			<h4 class="mb-4 text-success fw-semibold">
				<i class="bi bi-building-check me-2"></i>Edit Sarana dan Prasarana
			</h4>

			<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $data['id'] ?>">

				<div class="mb-3">
					<label for="isi" class="form-label fw-medium">Isi Konten</label>
					<input type="text" class="form-control form-control-lg rounded-3" id="isi" name="isi"
						value="<?= htmlspecialchars($data['isi']) ?>" placeholder="Masukkan isi konten..." required>
				</div>

				<div class="d-flex justify-content-between mt-4">
					<button type="submit" name="ubah" class="btn btn-success btn-lg rounded-3 px-4">
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

