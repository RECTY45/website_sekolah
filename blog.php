<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SMP 25 MAKASSAR</title>
  <meta name="description" content="Website Resmi SMP 25 Makassar - Sekolah Menengah Pertama Berkualitas">
  <meta name="keywords" content="SMP 25 Makassar, sekolah, pendidikan, guru, siswa">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Custom CSS for school -->
  <style>
    .teacher-card {
      transition: transform 0.3s ease;
      border: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .teacher-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    
    .teacher-photo {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
    }
    
    .stats-section {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 80px 0;
    }
    
    .stat-item {
      text-align: center;
      padding: 20px;
    }
    
    .stat-number {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 10px;
    }
    
    .stat-label {
      font-size: 1.1rem;
      opacity: 0.9;
    }
    
    .section-title-custom {
      position: relative;
      text-align: center;
      margin-bottom: 50px;
    }
    
    .section-title-custom h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 15px;
    }
    
    .section-title-custom::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 4px;
      background: #007bff;
      border-radius: 2px;
    }
    
    .school-hero {
      background: linear-gradient(rgba(0, 123, 255, 0.8), rgba(0, 123, 255, 0.8)), url('assets/img/school-bg.jpg');
      background-size: cover;
      background-position: center;
    }
    
    .blog-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      overflow: hidden;
    }
    
    .blog-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }
    
    .blog-image-wrapper {
      position: relative;
      overflow: hidden;
      height: 200px;
    }
    
    .blog-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    
    .blog-card:hover .blog-image {
      transform: scale(1.05);
    }
    
    .blog-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.7);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .blog-card:hover .blog-overlay {
      opacity: 1;
    }
    
    .blog-overlay .btn {
      transform: translateY(20px);
      transition: transform 0.3s ease;
    }
    
    .blog-card:hover .blog-overlay .btn {
      transform: translateY(0);
    }
  </style>
</head>

<body class="index-page">

  <main class="main">

    <!-- Blog/News Section -->
    <section id="blog" class="section light-background">
      <div class="container">
        <div class="section-title-custom" data-aos="fade-up">
          <h2 class="text-success">Berita & Artikel</h2>
          <p>Informasi terkini seputar kegiatan dan perkembangan SMP 25 Makassar</p>
        </div>

        <div class="row gy-4">
          <?php
          $query_blog = mysqli_query($conn, "SELECT * FROM blog ORDER BY id DESC");
          
          while ($data_blog = mysqli_fetch_assoc($query_blog)) {
          ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card blog-card h-100 shadow-sm">
              <div class="blog-image-wrapper">
                <img src="assets/img/blog/<?php echo htmlspecialchars($data_blog['gambar']); ?>" 
                     class="card-img-top blog-image" 
                     alt="<?php echo htmlspecialchars($data_blog['judul_blog']); ?>">
                <div class="blog-overlay">
                  <a href="#" class="btn btn-light btn-sm">Baca Selengkapnya</a>
                </div>
              </div>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-3"><?php echo htmlspecialchars($data_blog['judul_blog']); ?></h5>
                <p class="card-text flex-grow-1">
                  <?php 
                    $excerpt = strip_tags($data_blog['isi_blog']);
                    echo strlen($excerpt) > 150 ? substr($excerpt, 0, 150) . '...' : $excerpt;
                  ?>
                </p>
                <div class="mt-auto">
                  <?php if(isset($data_blog['tanggal'])): ?>
                  <small class="text-muted">
                    <i class="bi bi-calendar-event"></i> 
                    <?php echo date('d M Y', strtotime($data_blog['tanggal'])); ?>
                  </small>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
          <a href="blog.php" class="btn btn-primary btn-lg">
            <i class="bi bi-newspaper"></i> Lihat Semua Berita
          </a>
        </div>
      </div>
    </section><!-- /Blog Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <div><span>Hubungi</span> <span class="description-title">Kami</span></div>
      </div>

      <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl. Pendidikan No. 25, Makassar, Sulawesi Selatan</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telepon</h3>
                <p>+62 411 xxxxxxx</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>info@smp25makassar.sch.id</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
                  <button type="submit">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <div class="copyright text-center">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">SMP 25 Makassar</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        Website by <a href="https://bootstrapmade.com/">SMP 25 Makassar</a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>