<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DolanDalan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
  body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
  }
  
  h2 {
      color: #333;
  }
  
  form {
      width: 370px;
      margin: 0px 5px;
      background: #fff;
      padding: 10px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
  }
  
  input[type="text"],
  select,
  textarea {
      width: 350px;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
  }
  
  select {
      height: 34px;
  }
  
  input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 150px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
  }
  
  input[type="submit"]:hover {
      background-color: #45a049;
  }
  
  /* Optional: Style for error messages */
  .error-message {
      color: #ff0000;
      margin-bottom: 10px;
  }
  
  </style>
  

<body>

  <!-- ======= Header ======= -->


  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>DolanDalan</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="pesananku.php">Pesanan saya</a></li>
          <li><a class="nav-link scrollto" href="Galery.html">Kembali</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
  </header>
  <body>
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Pemesanan Pemandu</h2>
              <ol>
                <li><a href="Home.html">Pemandu</a></li>
                <li><a href="Galery.html">Selengkapnya</a></li>
                <li>Detail Pemandu</li>
              </ol>
            </div>
    
          </div>
        </section>

          <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
  
                  <div class="swiper-slide">
                    <img src="assets/img/team/mantol2.jpg" alt="">
                  </div>
  
                  <div class="swiper-slide">
                    <img src="assets/img/team/mantol.jpg" alt="">
                  </div>
  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
  
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>Bio Pemandu</h3>
                <ul>
                <ul>
                  <li><strong>Nama</strong>: Kamso Mantol</li>
                  <li><strong>umur</strong>: 40 tahun</li>
                  <li><strong>Kelas Pemandu</strong>: Pemula</li>
                </ul>
                </ul>
              </div>
              <div class="portfolio-description">
              <h2>Form Pesan Pemandu</h2>
    <form action="proses_input.php" method="post">
      
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="no_telp">Nomor Telepon:</label>
        <input type="text" name="no_telp" required><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" rows="4" required></textarea><br>

        <label for="pilihan_pemandu">Pemandu:</label>
        <select name="pilihan_pemandu" required>
   <option value="1">Sugeng Tinju</option>
   <option value="2">Kak Gem</option>
   <option value="3">Kamso Matol</option>
</select><br>


        <input type="submit" value="Submit">
    </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Details Section -->
  
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6" id="contact">
            <div class="footer-info">
              <h3>DolanDalan</h3>
              <p class="pb-3"><em></em></p>
              <p>
                Wonosobo <br>
                Jawa Tengah,Indonesia<br><br>
                <strong>Email:</strong> DolanDalan@gmail.com<br>
              </p>
              <div class="social-links mt-3">
              
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Map.html">Map Objek Wisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Galery.html">Pemandu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hotel</a></li>
            </ul>
          </div>

          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2022160041</span></strong>
      </div>
      <div class="credits">
        Dibuat <a> Aditya Rizky Aryasena Pratama</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

 </body>
</html>


  

