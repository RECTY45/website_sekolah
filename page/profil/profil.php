<div class="card">
    <div class="card-body">
        <h4 class="header-title mb-4">Profil Sekolah</h4>

        <ul class="nav nav-tabs nav-tabs-custom mb-3" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#sejarah" role="tab">
                    <i class="bi bi-journal-text me-1"></i> Sejarah
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#visimisi" role="tab">
                    <i class="bi bi-bullseye me-1"></i> Visi & Misi
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#sarana" role="tab">
                    <i class="bi bi-building me-1"></i> Sarana & Prasarana
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#eskul" role="tab">
                    <i class="bi bi-people me-1"></i> Ekstrakurikuler
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <!-- Sejarah -->
            <div class="tab-pane fade show active" id="sejarah" role="tabpanel">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM sejarah");
                while ($data = mysqli_fetch_assoc($query)) { ?>
                    <div class="card border shadow mb-4">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-3 text-center p-3">
                                <img src="../assets/img/sejarah/<?= $data['gambar'] ?>" class="img-fluid rounded" style="max-height: 150px; object-fit: cover;">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $data['judul_sejarah'] ?></h5>
                                    <p class="card-text"><?= $data['isi_sejarah'] ?></p>
                                    <a href="?page=profil&aksi=editsejarah&id=<?= $data['id'] ?>" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square me-1"></i>Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Visi Misi -->
            <div class="tab-pane fade" id="visimisi" role="tabpanel">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM visimisi");
                while ($data = mysqli_fetch_assoc($query)) { ?>
                    <div class="card border shadow mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['visimisi'] ?></h5>
                            <p class="card-text"><?= $data['isi'] ?></p>
                            <a href="?page=profil&aksi=editvisimisi&id=<?= $data['id'] ?>" class="btn btn-success btn-sm">
                                <i class="bi bi-pencil-square me-1"></i>Edit
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Sarana & Prasarana -->
            <div class="tab-pane fade" id="sarana" role="tabpanel">
                <div class="d-flex justify-content-end mb-3">
                    <a href="?page=profil&aksi=tambahsarana" class="btn btn-warning btn-sm">
                        <i class="bi bi-plus-circle me-1"></i>Tambah Sarana
                    </a>
                </div>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM saranaprasarana");
                while ($data = mysqli_fetch_assoc($query)) { ?>
                    <div class="card border shadow mb-3">
                        <div class="card-body">
                            <p class="card-text"><?= $data['isi'] ?></p>
                            <a href="?page=profil&aksi=editsarana&id=<?= $data['id'] ?>" class="btn btn-outline-warning btn-sm">
                                <i class="bi bi-pencil-square me-1"></i>Edit
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- Ekstrakurikuler -->
            <div class="tab-pane fade" id="eskul" role="tabpanel">
                <div class="d-flex justify-content-end mb-3">
                    <a href="?page=profil&aksi=tambaheskul" class="btn btn-danger btn-sm">
                        <i class="bi bi-plus-circle me-1"></i>Tambah Eskul
                    </a>
                </div>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM eskul");
                while ($data = mysqli_fetch_assoc($query)) { ?>
                    <div class="card border shadow mb-3">
                        <div class="card-body">
                            <p class="card-text"><?= $data['eskul'] ?></p>
                            <a href="?page=profil&aksi=editeskul&id=<?= $data['id'] ?>" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-pencil-square me-1"></i>Edit
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
