<div class="container mt-4 text-primary">
    <h4 class="mb-3 fw-bold">Blog</h4>
    <a href="?page=blog&aksi=tambahblog" class="btn btn-primary mb-4">
        <i class="bi bi-plus-lg"></i> Tambah Blog
    </a>

    <?php 
        $query = mysqli_query($conn, "SELECT * FROM blog ORDER BY id DESC"); // Urut terbaru di atas
        while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <div class="card mb-4 shadow-sm border-0 rounded-3">
            <div class="card-body">
                <div class="d-flex align-items-start gap-3">
                    <img 
                        src="../assets/img/blog/<?= htmlspecialchars($data['gambar']) ?>" 
                        width="150" 
                        class="rounded img-thumbnail flex-shrink-0" 
                        alt="Gambar Blog: <?= htmlspecialchars($data['judul_blog']) ?>"
                    >
                    <div class="flex-grow-1">
                        <h5 class="card-title fw-semibold mb-2 text-truncate" title="<?= htmlspecialchars($data['judul_blog']) ?>">
                            <?= htmlspecialchars($data['judul_blog']) ?>
                        </h5>
                        <p class="card-text text-muted" style="white-space: pre-line; max-height: 120px; overflow: hidden;">
                            <?= htmlspecialchars($data['isi_blog']) ?>
                        </p>
                        <div class="mt-3 d-flex gap-2">
                            <a href="?page=blog&aksi=editblog&id=<?= $data['id'] ?>" class="btn btn-warning btn-sm d-flex align-items-center gap-1">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                           <a href="?page=blog&aksi=hapusblog&id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus blog ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
