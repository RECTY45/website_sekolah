<!DOCTYPE html>
<html>

	<div class="container mt-5" style="max-width: 700px;">
  <div class="card shadow-sm rounded-4 border-0">
    <div class="card-body p-4">
      <h4 class="mb-4 text-primary fw-semibold">
        <i class="bi bi-plus-square me-2"></i>Tambah Sarana & Prasarana
      </h4>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="isi" class="form-label fw-medium">Deskripsi Sarana</label>
          <textarea class="form-control form-control-lg rounded-3" id="isi" name="isi" rows="5"
            placeholder="Tulis sarana dan prasarana di sini..." required></textarea>
        </div>

        <div class="d-flex justify-content-between mt-4">
          <button type="submit" name="tambah" class="btn btn-success btn-lg rounded-3 px-4">
            <i class="bi bi-send me-2"></i>Tambah
          </button>
          <a href="index.php?page=profil" class="btn btn-outline-secondary btn-lg rounded-3 px-4">
            <i class="bi bi-arrow-left me-2"></i>Kembali
          </a>
        </div>
      </form>
    </div>
  </div>
</div>

	<?php 

		if(isset($_POST['tambah']))	{
			if(tambahsarana($_POST) > 0) {
				echo "<script>
							alert ('Sarana & Prasarana Berhasil Ditambahkan');
							window.location.href='index.php?page=profil';
					  </script>
					  ";
			}
		}

	?>