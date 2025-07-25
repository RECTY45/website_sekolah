<?php
$id_pengaturan = 1;

$query = mysqli_query($conn, "SELECT * FROM pengaturan WHERE id_pengaturan = '$id_pengaturan'");
$pengaturan = mysqli_fetch_assoc($query);

if (!$pengaturan) {
    $default_appname = mysqli_real_escape_string($conn, 'My Application');
    $default_copyright = mysqli_real_escape_string($conn, '&copy; ' . date('Y') . ' My Company');
    $default_description = mysqli_real_escape_string($conn, 'Default application description');
    $default_keywords = mysqli_real_escape_string($conn, 'app, default');
    $default_author = mysqli_real_escape_string($conn, 'Admin');
    $default_logo = 'default.png';

    $insert_query = "INSERT INTO pengaturan (id_pengaturan, appname, copyright, description, keywords, author, logo)
VALUES (1, '$default_appname', '$default_copyright', '$default_description', '$default_keywords', '$default_author', '$default_logo')";


    if (mysqli_query($conn, $insert_query)) {
        $query = mysqli_query($conn, "SELECT * FROM pengaturan WHERE id_pengaturan = '$id_pengaturan'");
        $pengaturan = mysqli_fetch_assoc($query);
    } else {
        echo "<script>alert('Gagal membuat data pengaturan default!');</script>";
        exit;
    }
}


$logoPath = 'assets/uploads/';
$logoFile = isset($pengaturan['logo']) && !empty($pengaturan['logo']) ? $pengaturan['logo'] : 'default.png';
$tampilLogo = (file_exists($logoPath . $logoFile)) ? $logoPath . $logoFile : $logoPath . 'default.png';

if (isset($_POST['simpan'])) {
    $id          = $_POST['id_pengaturan'];
    $appname     = mysqli_real_escape_string($conn, $_POST['appname']);
    $copyright   = mysqli_real_escape_string($conn, $_POST['copyright']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $keywords    = mysqli_real_escape_string($conn, $_POST['keywords']);
    $author      = mysqli_real_escape_string($conn, $_POST['author']);
    $logolama    = $_POST['logolama'];

    if (!empty($_FILES['logo']['name'])) {
        $namaFile = $_FILES['logo']['name'];
        $tmpName  = $_FILES['logo']['tmp_name'];
        $ekstensi = pathinfo($namaFile, PATHINFO_EXTENSION);
        $logoBaru = 'logo_' . time() . '.' . $ekstensi;
        $uploadPath = $logoPath . $logoBaru;

        if (move_uploaded_file($tmpName, $uploadPath)) {
            if ($logolama !== 'default.png' && file_exists($logoPath . $logolama)) {
                unlink($logoPath . $logolama);
            }
            $logo = $logoBaru;
        } else {
            $logo = $logolama;
        }
    } else {
        $logo = $logolama;
    }

    $update = mysqli_query($conn, "UPDATE pengaturan SET
        appname     = '$appname',
        copyright   = '$copyright',
        description = '$description',
        keywords    = '$keywords',
        author      = '$author',
        logo        = '$logo',
        updated_at  = NOW()
        WHERE id_pengaturan = '$id'");

    if ($update) {
        echo "<script>alert('Data berhasil diubah!');window.location.href='index.php?page=pengaturan';</script>";
        exit;
    } else {
        echo "<script>alert('Gagal mengubah data!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id_pengaturan">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>

    <div class="d-flex">
        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <div class="card shadow-sm p-4">
                <h4 class="bg-primary text-white py-2 px-3 rounded shadow-sm d-inline-block fw-semibold mb-4">Ubah Pengaturan</h4>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_pengaturan" value="<?= isset($pengaturan['id_pengaturan']) ? $pengaturan['id_pengaturan'] : '' ?>">
                    <input type="hidden" name="logolama" value="<?= $pengaturan['logo'] ?? 'default.png'; ?>">

                    <div class="row">
                        <!-- Kolom Logo -->
                        <div class="col-md-3 text-center mb-3">
                            <label class="form-label">
                            </i> Upload Logo
                            </label>
                            <?php if (!empty($pengaturan['logo']) && file_exists('assets/uploads/' . $pengaturan['logo'])): ?>
                                <img src="assets/uploads/<?= $pengaturan['logo']; ?>" width="200" class="rounded-4">
                            <?php else: ?>
                                <img src="assets/uploads/default.png" width="100">
                            <?php endif; ?>
                            <input class="form-control mt-2" type="file" name="logo" id="logo">
                        </div>

                        <!-- Kolom Form -->
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label class="form-label">Nama Aplikasi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="appname"
                                    value="<?= htmlspecialchars($pengaturan['appname'] ?? '') ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Copyright</label>
                                <input type="text" class="form-control" name="copyright"
                                    value="<?= htmlspecialchars($pengaturan['copyright'] ?? '') ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keyword</label>
                                <input type="text" class="form-control" name="keywords"
                                    value="<?= htmlspecialchars($pengaturan['keywords'] ?? '') ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Author</label>
                                <input type="text" class="form-control" name="author"
                                    value="<?= htmlspecialchars($pengaturan['author'] ?? '') ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="description" rows="3" required><?= htmlspecialchars($pengaturan['description'] ?? '') ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" name="simpan" class="btn btn-success px-4">
                            <i class="bi bi-save me-2"></i>Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>