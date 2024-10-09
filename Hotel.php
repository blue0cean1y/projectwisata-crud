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
       <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: flex-end;
        }

       

        .card-container {
            display: flex;
            justify-content: space-between;
        }

        .card {
            flex: 0 0 30%; /* 30% width for each card */
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .map-container {
            height: 100px; 
            margin-top: 20px;
        }

        .booking-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
        }

        form {
    max-width: 400px;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 20px auto;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

    </style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>DolanDalan</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#Home.html">Home</a></li>
          <li><a class="nav-link scrollto" href="Map.html">Map Wisata</a></li>
          <li><a class="nav-link scrollto" href="Galery.html">Pemandu</a></li>
          <li><a class="nav-link scrollto" href="Hotel.php">Hotel</a></li>
            <ul>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>


  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Ingin liburan dengan nyaman?</h1>
      <h2>Cari dan pesan hotelmu sekarang Yuk!!</h2>
      <!-- di bawah di ganti about -->
      <!-- <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div> --> 
  </section>

  
<section class="about">
    <div class="container align-center">
      <h1>Hotel Kresna Wonosobo</h1>
        <div class="card-container">
            <div class="card">
                <img src="assets/img/kamar/kamar.jpg" alt="Hotel Image">
                <div class="card-content">
                    <h2>Kamar 1</h2>
                    <p>Des: </p>
                    <div class="map-container" id="map1"></div>
                    <button class="booking-button" onclick="openBookingForm()">Pesan Sekarang</button>
                </div>
            </div>

            <div class="card">
                <img src="assets/img/kamar/kamar.jpg" alt="Hotel Image">
                <div class="card-content">
                    <h2>Kamar 2</h2>
                    <p>Des: </p>
                    <div class="map-container" id="map2"></div>
                    <button class="booking-button" onclick="openBookingForm()">Pesan Sekarang</button>
                </div>
            </div>

            <div class="card">
                <img src="assets/img/kamar/kamar.jpg" alt="Hotel Image">
                <div class="card-content">
                    <h2> kamar 3</h2>
                    <p>Des:</p>
                    <div class="map-container" id="map3"></div>
                    <button class="booking-button" onclick="openBookingForm()">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="bookingForm" style="display: none;">
    <h2>Form Booking</h2>
    
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pemesanan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guest_name = $_POST['guest_name'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $room_id = $_POST['room_id'];

    $sql = "INSERT INTO bookings (guest_name, check_in_date, check_out_date, room_id) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $guest_name, $check_in_date, $check_out_date, $room_id);
    $stmt->execute();
    $stmt->close();
    echo "Booking successful!";
}
?>

<form method="post" action="">
    <h2>Booking Kamar Hotel</h2>

    <label for="guest_name">Nama:</label>
    <input type="text" name="guest_name" required>

    <label for="check_in_date">Tanggal Chek-in:</label>
    <input type="date" name="check_in_date" required>

    <label for="check_out_date">Tanggal Chek-out:</label>
    <input type="date" name="check_out_date" required>

    <label for="room_id">Pilih Ruangan:</label>
    <!-- Replace this with your dynamic room options -->
    <select name="room_id" required>
        <option value="1">kamar 1</option>
        <option value="2">Kamar 2</option>
        <option value="3">Kamar 3</option>
        <!-- Add more room options as needed -->
    </select>

    <button type="submit">Pesan</button>
</form>

<?php
$conn->close();
?>

<main id="main">


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