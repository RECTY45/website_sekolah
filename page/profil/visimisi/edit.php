<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php");
	}

	$id = $_GET['id'];

	$result = mysqli_query($conn, "select * from visimisi where id='$id' ");

	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubahvisimisi($_POST) > 0) {
			echo "<script>
							alert ('Berhasil Diubah');
							window.location.href='index.php?page=profil';
					  </script>
					  ";
		}else{
			echo "<script>
						alert ('Gagal Diubah');
					  </script>
					  ";
		}
	}

?>

	
<div class="container mt-5" style="max-width: 700px;">
  <div class="card shadow-sm rounded-4 border-0">
    <div class="card-body p-4">
      <h4 class="mb-4 text-success fw-semibold">
        <i class="bi bi-eye-fill me-2"></i>Edit Visi & Misi
      </h4>

      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <div class="mb-3">
          <label for="visimisi" class="form-label fw-medium">Judul Visi & Misi</label>
          <input type="text" id="visimisi" name="visimisi" class="form-control form-control-lg rounded-3" 
                 value="<?= htmlspecialchars($data['visimisi']) ?>" placeholder="Masukkan Judul Visi & Misi" required>
        </div>

        <div class="mb-4">
          <label for="isi" class="form-label fw-medium">Isi Deskripsi</label>
          <textarea id="isi" name="isi" rows="5" class="form-control form-control-lg rounded-3" 
                    placeholder="Masukkan isi Visi dan Misi..." required><?= htmlspecialchars($data['isi']) ?></textarea>
        </div>

        <div class="d-flex justify-content-between">
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
