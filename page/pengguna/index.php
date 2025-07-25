<?php
$query = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Pengguna - SMP Negeri 25 Makassar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .card {
      border-radius: 1rem;
    }
    .table thead {
      background-color: #007bff;
      color: #fff;
    }
    .table td, .table th {
      vertical-align: middle;
    }
    .avatar {
      width: 40px;
      height: 40px;
      object-fit: cover;
      border-radius: 50%;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h2 class="fw-bold text-primary mb-0">
        <i class="bi bi-people-fill me-2"></i>Daftar Pengguna
      </h2>
      <small class="text-muted">Manajemen akun pengguna sistem</small>
    </div>
    <a href="?page=pengguna&aksi=tambahpengguna" class="btn btn-lg btn-primary rounded-pill shadow-sm">
      <i class="bi bi-person-plus-fill me-1"></i> Tambah
    </a>
  </div>

  <div class="card shadow-sm border-0">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead>
            <tr>
              <th>No</th>
              <th>Foto</th>
              <th>Username</th>
              <th>Role</th>
              <th style="width: 20%;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            if (mysqli_num_rows($query) > 0):
              while ($row = mysqli_fetch_assoc($query)):
            ?>
            <tr>
              <td><?= $no++; ?></td>
              <td>
                <?php if ($row['foto']): ?>
                  <img src="assets/uploads/<?= $row['foto']; ?>" width="50" height="50" class="rounded-circle" alt="<?= htmlspecialchars($row['username']); ?>">
                <?php else: ?>
                  <img src="../../assets/img/default-user.png" class="avatar" alt="Default">
                <?php endif; ?>
              </td>
              <td class="fw-semibold"><?= htmlspecialchars($row['username']); ?></td>
              <td>
                <?php
                  $role = $row['role'];
                  $badgeColor = match($role) {
                    'admin' => 'danger',
                    'guru'  => 'success',
                    default => 'secondary'
                  };
                ?>
                <span class="badge rounded-pill bg-<?= $badgeColor ?> text-uppercase px-3 py-2">
                  <i class="bi bi-person-circle me-1"></i><?= $role ?>
                </span>
              </td>
              <td>
                <div class="d-flex gap-2">
                  <a href="?page=pengguna&aksi=editpengguna&id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-warning rounded-pill" title="Edit">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <a href="?page=pengguna&aksi=hapuspengguna&id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger rounded-pill"
                     onclick="return confirm('Yakin ingin menghapus pengguna ini?')" title="Hapus">
                    <i class="bi bi-trash-fill"></i>
                  </a>
                </div>
              </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
              <td colspan="5" class="text-center text-muted py-4">Belum ada data pengguna</td>
            </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
