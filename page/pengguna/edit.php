<?php
// Ambil ID pengguna yang akan diedit
$id = $_GET['id'] ?? 0;
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
$user = mysqli_fetch_assoc($result);

// Cek jika data tidak ditemukan
if (!$user) {
  echo "<script>alert('Pengguna tidak ditemukan!'); window.location.href = 'index.php?page=pengguna';</script>";
  exit;
}

// Proses update jika form disubmit
if (isset($_POST['update'])) {
  $username = htmlspecialchars($_POST['username']);
  $role = $_POST['role'];
  $upload_dir = __DIR__ . '/../assets/uploads/';
  $fotoBaru = $user['foto']; // default pakai foto lama

  if (!empty($_FILES['foto']['name'])) {
    $tmp = $_FILES['foto']['tmp_name'];
    $namaFile = basename($_FILES['foto']['name']);
    $ext = pathinfo($namaFile, PATHINFO_EXTENSION);
    $fotoBaru = uniqid() . '.' . $ext;
    if (!is_dir($upload_dir)) {
      mkdir($upload_dir, 0755, true);
    }

    // Hapus foto lama jika ada
    if (!empty($user['foto']) && file_exists($upload_dir . $user['foto'])) {
      unlink($upload_dir . $user['foto']);
    }

    move_uploaded_file($tmp, $upload_dir . $fotoBaru);
  }

  // Update query
  if (!empty($_POST['password'])) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = "UPDATE users SET username='$username', password='$password', role='$role', foto='$fotoBaru' WHERE id=$id";
  } else {
    $query = "UPDATE users SET username='$username', role='$role', foto='$fotoBaru' WHERE id=$id";
  }

  if (mysqli_query($conn, $query)) {
    echo "<script>alert('Pengguna berhasil diperbarui!'); window.location.href = 'index.php?page=pengguna';</script>";
    exit;
  } else {
    echo "<script>alert('Gagal memperbarui pengguna!'); window.location.href = 'index.php?page=pengguna';</script>";
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Pengguna</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #f0f2f5;
    }
    .main-card {
      max-width: 800px;
      margin: auto;
      margin-top: 60px;
    }
    .card-header-custom {
      background-color: #0d6efd;
      color: white;
      border-top-left-radius: .5rem;
      border-top-right-radius: .5rem;
    }
    .card-header-custom h5 {
      margin: 0;
    }
    .foto-preview {
      max-width: 150px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<div class="d-flex">
  <!-- Main Content -->
  <div class="flex-grow-1 p-4">
    <div class="card shadow-sm p-4">
      <h4 class="bg-primary text-white py-2 px-3 rounded shadow-sm d-inline-block fw-semibold mb-4">
        <i class="bi bi-pencil-square me-2"></i>Edit Pengguna
      </h4>

      <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="foto_lama" value="<?= $user['foto'] ?? 'default.png'; ?>">

        <div class="row">
          <!-- Kolom Foto -->
          <div class="col-md-4 text-center mb-3">
            <label class="form-label">Foto Profil</label><br>
            <?php if (!empty($user['foto']) && file_exists("assets/uploads/" . $user['foto'])): ?>
              <img src="assets/uploads/<?= $user['foto']; ?>" class="img-thumbnail rounded mb-2" width="200">
            <?php else: ?>
              <img src="assets/uploads/default.png" class="img-thumbnail rounded mb-2" width="200">
            <?php endif; ?>
            <input type="file" name="foto" class="form-control mt-2">
          </div>

          <!-- Kolom Form -->
          <div class="col-md-8">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password (Kosongkan jika tidak diubah)</label>
              <input type="password" name="password" class="form-control" placeholder="Biarkan kosong jika tidak diubah">
            </div>
            <div class="mb-3">
              <label class="form-label">Role</label>
              <select name="role" class="form-select" required>
                <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="guru" <?= $user['role'] == 'guru' ? 'selected' : '' ?>>Guru</option>
                <option value="siswa" <?= $user['role'] == 'siswa' ? 'selected' : '' ?>>Siswa</option>
              </select>
            </div>
          </div>
        </div>

        <div class="text-end mt-4">
          <a href="index.php?page=pengguna" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
          </a>
          <button type="submit" name="update" class="btn btn-success ms-2">
            <i class="bi bi-save"></i> Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
