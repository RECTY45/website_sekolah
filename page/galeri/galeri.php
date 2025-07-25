
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Google Material Icons (optional, untuk icon) -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <style>
      body {
        background-color: #f8f9fa;
      }
      .card-img-top {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 0.375rem;
        border-top-right-radius: 0.375rem;
      }
      .btn-icon {
        display: flex;
        align-items: center;
        gap: 4px;
      }
      .btn-icon i.material-icons {
        font-size: 18px;
      }
    </style>
</head>
<body>

<div class="container py-4">

    <!-- Header + Add Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-danger fw-bold">Gallery</h3>
        <a href="?page=galeri&aksi=tambahgaleri" class="btn btn-danger btn-sm">
            <i class="material-icons">add</i> Tambah Gallery
        </a>
    </div>

    <div class="row g-4">
        <?php 
        $query = mysqli_query($conn, "SELECT * FROM galeri");
        while ($data = mysqli_fetch_assoc($query)) {
        ?>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="card shadow-sm h-100">
                <img src="../assets/img/galery/<?= htmlspecialchars($data['galeri']) ?>" alt="Gallery Image" class="card-img-top" />
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-truncate" title="<?= htmlspecialchars($data['keterangan']) ?>"><?= htmlspecialchars($data['keterangan']) ?></h5>
                    <div class="mt-auto d-flex gap-2">
                        <a href="?page=galeri&aksi=editgaleri&id=<?= $data['id'] ?>" class="btn btn-outline-primary btn-sm btn-icon flex-grow-1">
                            <i class="material-icons">border_color</i> Edit
                        </a>
                        <a href="?page=galeri&aksi=hapusgaleri&id=<?= $data['id'] ?>" class="btn btn-outline-danger btn-sm btn-icon flex-grow-1" onclick="return confirm('Yakin ingin menghapus galeri ini?');">
                            <i class="material-icons">delete</i> Hapus
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
