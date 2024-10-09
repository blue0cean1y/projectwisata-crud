<?php
// Koneksi ke database (gantilah dengan informasi koneksi Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pemesanan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$pilihan_pemandu_id = $_POST['pilihan_pemandu']; // ID pemandu yang dipilih

// Perhatikan bahwa saya menggunakan parameterized query untuk mencegah SQL injection
$sql = "INSERT INTO pesanan (nama, no_telp, alamat, pilihan_pemandu_id) VALUES (?, ?, ?, ?)";


// Persiapkan pernyataan SQL menggunakan prepared statement
$stmt = $conn->prepare($sql);

// Periksa apakah persiapan berhasil
if ($stmt === FALSE) {
    die("Pembuatan pernyataan persiapan gagal: " . $conn->error);
}

// Bind parameter ke pernyataan SQL
$stmt->bind_param("sssi", $nama, $no_telp, $alamat, $pilihan_pemandu_id);

// Eksekusi pernyataan
if ($stmt->execute()) {
    echo "Data berhasil disimpan";
   
} else {
    echo "Error: " . $stmt->error;
}

// Tutup koneksi dan pernyataan
$stmt->close();

?>
