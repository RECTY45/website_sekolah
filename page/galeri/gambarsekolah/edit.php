<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php");
	}

	$id = $_GET['id'];

	$result = mysqli_query($conn, "select * from galeri where id='$id' ");

	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubahgaleri($_POST) > 0) {
			echo "<script>
							alert ('Gambar Berhasil Diubah');
							window.location.href='index.php?page=galeri';
					  </script>
					  ";
		}else{
			echo "<script>
						alert ('Gambar Berhasil Ditambahkan');
					  </script>
					  ";
		}
	}

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Gambar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Material Icons CDN -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body>

  <div class="container py-5" style="max-width: 600px;">
      <h4 class="mb-4 text-center">Edit Gambar</h4>
      <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
          <input type="hidden" name="id" value="<?= htmlspecialchars($data['id']) ?>">
          <input type="hidden" name="gambarlama" value="<?= htmlspecialchars($data['galeri']) ?>">

          <div class="mb-4">
              <label for="gambar" class="form-label fw-semibold">Update Gambar</label>
              <input class="form-control" type="file" id="gambar" name="gambar" accept="image/*" />
              <div class="form-text">Biarkan kosong jika tidak ingin mengganti gambar.</div>
          </div>

          <div class="mb-4 text-center">
              <img src="../assets/img/galery/<?= htmlspecialchars($data['galeri']) ?>" alt="Preview Gambar Lama" class="img-thumbnail" style="max-width: 250px;">
          </div>

          <div class="mb-4">
              <label for="keterangan" class="form-label fw-semibold">Keterangan</label>
              <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= htmlspecialchars($data['keterangan']) ?>" required>
              <div class="invalid-feedback">
                  Keterangan wajib diisi.
              </div>
          </div>

          <div class="d-flex justify-content-center gap-3">
              <button type="submit" name="ubah" class="btn btn-primary px-4">
                  Submit <i class="material-icons align-middle ms-1">send</i>
              </button>
              <a href="index.php?page=galeri" class="btn btn-secondary px-4">
                  <i class="material-icons align-middle me-1">fast_rewind</i> Kembali
              </a>
          </div>
      </form>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  (() => {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  })()
  </script>

</body>
</html>
