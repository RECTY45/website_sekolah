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
  </style>
</head>

<body class="index-page">
  <main class="main">
    <!-- Guru Section -->
    <section id="guru" class="section light-background">
      <div class="container">
        <div class="section-title-custom" data-aos="fade-up">
          <h2 class="text-primary">Tim Guru Kami</h2>
          <p>Guru-guru berkualitas dan berpengalaman yang siap membimbing siswa menuju kesuksesan</p>
        </div>

        <div class="row gy-4">
          <?php
          // Make sure to include your database connection
          $query = mysqli_query($conn, "SELECT * FROM guru ORDER BY id ASC");
          $jumlah_guru = mysqli_num_rows($query);
          
          while ($data = mysqli_fetch_assoc($query)) {
          ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card teacher-card h-100">
              <div class="card-body text-center p-4">
                <img src="assets/img/guru/<?php echo htmlspecialchars($data['foto']); ?>" 
                     alt="<?php echo htmlspecialchars($data['guru']); ?>" 
                     class="teacher-photo mb-3">
                <h5 class="card-title mb-2"><?php echo htmlspecialchars($data['guru']); ?></h5>
                <?php if(isset($data['mata_pelajaran'])): ?>
                <p class="text-muted"><?php echo htmlspecialchars($data['mata_pelajaran']); ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- /Guru Section -->

    <!-- Staf Section -->
    <section id="staf" class="section">
      <div class="container">
        <div class="section-title-custom" data-aos="fade-up">
          <h2 class="text-danger">Staf & Karyawan</h2>
          <p>Tim pendukung yang profesional dalam memberikan pelayanan terbaik</p>
        </div>

        <div class="row gy-4">
          <?php
          $query_staf = mysqli_query($conn, "SELECT * FROM staf ORDER BY id ASC");
          $jumlah_staf = mysqli_num_rows($query_staf);
          
          while ($data_staf = mysqli_fetch_assoc($query_staf)) {
          ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card teacher-card h-100">
              <div class="card-body text-center p-4">
                <img src="assets/img/staf/<?php echo htmlspecialchars($data_staf['foto']); ?>" 
                     alt="<?php echo htmlspecialchars($data_staf['staf']); ?>" 
                     class="teacher-photo mb-3">
                <h5 class="card-title mb-2"><?php echo htmlspecialchars($data_staf['staf']); ?></h5>
                <?php if(isset($data_staf['jabatan'])): ?>
                <p class="text-muted"><?php echo htmlspecialchars($data_staf['jabatan']); ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- /Staf Section -->

    <!-- Stats Section -->
    <section class="stats-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-people stat-icon" style="font-size: 3rem; margin-bottom: 20px;"></i>
              <div class="stat-number"><?php echo $jumlah_guru; ?></div>
              <div class="stat-label">Jumlah Guru</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-person-badge stat-icon" style="font-size: 3rem; margin-bottom: 20px;"></i>
              <div class="stat-number"><?php echo $jumlah_staf; ?></div>
              <div class="stat-label">Staf & Karyawan</div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Stats Section -->

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