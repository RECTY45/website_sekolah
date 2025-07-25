<?php 

	if(!isset($_GET['id'])) {
		header("location: index.php");
	}

	$id = $_GET['id'];

	$result = mysqli_query($conn, "select * from blog where id='$id' ");

	$data = mysqli_fetch_assoc($result);

	if(isset($_POST['ubah'])) {
		if(ubahblog($_POST) > 0) {
			echo "<script>
							alert ('Blog Berhasil Diubah');
							window.location.href='index.php?page=blog';
					  </script>
					  ";
		}else{
			echo "<script>
						alert ('Blog Gagal Diubah');
					  </script>
					  ";
		}
	}

?>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<div class="container py-4">
  <div class="card shadow rounded">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Edit Blog</h4>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="hidden" name="gambarlama" value="<?= $data['gambar'] ?>">

        <div class="mb-3">
          <label for="judul_blog" class="form-label">Judul Blog</label>
          <input type="text" id="judul_blog" name="judul_blog" class="form-control" value="<?= $data['judul_blog'] ?>" required>
        </div>

        <div class="mb-3">
          <label for="isi_blog" class="form-label">Isi Blog</label>
          <textarea id="isi_blog" name="isi_blog" class="form-control" rows="6" required><?= $data['isi_blog'] ?></textarea>
        </div>

        <div class="mb-3">
          <label for="gambar" class="form-label">Update Gambar</label>
          <input type="file" name="gambar" id="gambar" class="form-control">
          <div class="mt-2">
            <img src="../assets/img/blog/<?= $data['gambar'] ?>" alt="Gambar Saat Ini" width="150" class="img-thumbnail">
          </div>
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" name="ubah" class="btn btn-success">
            <i class="bi bi-send-fill me-1"></i> Edit
          </button>
          <a href="index.php?page=blog" class="btn btn-secondary">
            <i class="bi bi-arrow-left-circle me-1"></i> Kembali
          </a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle JS (dengan Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


