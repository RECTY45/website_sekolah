<?php
if (isset($_POST['simpan'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $folder = "page/assets/uploads/"; // URL relatif
    $upload_path = __DIR__ . "/../assets/uploads/"; // Path absolut

    if (!is_dir($upload_path)) {
        mkdir($upload_path, 0755, true); // Buat folder jika belum ada
    }

    if ($foto) {
        $ekstensi = pathinfo($foto, PATHINFO_EXTENSION);
        $namaBaru = uniqid() . '.' . $ekstensi;
        move_uploaded_file($tmp, $upload_path . $namaBaru);
    } else {
        $namaBaru = null;
    }

    $query = "INSERT INTO users (username, password, role, foto) VALUES ('$username', '$password', '$role', '$namaBaru')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='?page=pengguna';</script>";
        exit;
    } else {
        echo "<div class='alert alert-danger'>Gagal menambahkan data!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Pengguna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
        }

        .card {
            border-radius: 1rem;
        }
    </style>
</head>

<body>

 <div class="container py-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white rounded-top">
            <h4 class="mb-0">
                <i class="bi bi-person-plus-fill me-2"></i>Tambah Pengguna Baru
            </h4>
        </div>
        <div class="card-body p-4 bg-white">
            <div class="card p-4 shadow-sm border-0">
                <form method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" name="username" class="form-control rounded-pill" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control rounded-pill" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Role <span class="text-danger">*</span></label>
                            <select name="role" class="form-select rounded-pill" required>
                                <option value="">-- Pilih Role --</option>
                                <option value="admin">Admin</option>
                                <option value="guru">Guru</option>
                                <option value="siswa">Siswa</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Foto Profil</label>
                            <input type="file" name="foto" class="form-control rounded-pill">
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="?page=pengguna" class="btn btn-secondary rounded-pill">
                            <i class="bi bi-arrow-left-circle me-1"></i> Kembali
                        </a>
                        <button type="submit" name="simpan" class="btn btn-primary rounded-pill px-4">
                            <i class="bi bi-save-fill me-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>