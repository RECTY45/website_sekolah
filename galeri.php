<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Galeri Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Lightbox CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css" rel="stylesheet" />

    <style>
      /* Hover zoom effect on images */
      .gallery-card img {
        transition: transform 0.3s ease;
        cursor: pointer;
      }
      .gallery-card img:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgb(0 0 0 / 0.15);
      }

      /* Card shadow and border radius */
      .gallery-card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 12px rgb(0 0 0 / 0.1);
        transition: box-shadow 0.3s ease;
      }
      .gallery-card:hover {
        box-shadow: 0 8px 24px rgb(0 0 0 / 0.2);
      }

      /* Text styling */
      .gallery-caption {
        font-size: 0.9rem;
        color: #666;
        padding: 10px 15px;
        background-color: #f8f9fa;
        border-top: 1px solid #e9ecef;
        min-height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
      }

      /* Responsive padding for container */
      .gallery-container {
        padding-top: 20px;
        padding-bottom: 40px;
      }
    </style>
</head>
<body>

<div class="container gallery-container">

    <h4 class="header-title text-center mb-5 fw-semibold">Galeri Sekolah</h4>

    <div class="row g-4 justify-content-center">
      <?php 
        $query = mysqli_query($conn, "SELECT * FROM galeri");
        while ($data = mysqli_fetch_assoc($query)) {
      ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
          <a href="assets/img/galery/<?= $data['galeri'] ?>" data-lightbox="galeri" data-title="<?= htmlspecialchars($data['keterangan']) ?>" class="text-decoration-none">
            <div class="gallery-card h-100">
              <img src="assets/img/galery/<?= $data['galeri'] ?>" alt="Galeri" class="img-fluid w-100" style="height: 220px; object-fit: cover;" />
              <div class="gallery-caption">
                <?= htmlspecialchars($data['keterangan']) ?>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Lightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js"></script>

</body>
</html>
