<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pemesanan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $pilihan_pemandu_id = $_POST['pilihan_pemandu'];

    // Perbarui data pesanan berdasarkan ID
    $sql = "UPDATE pesanan SET nama=?, no_telp=?, alamat=?, pilihan_pemandu_id=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $nama, $no_telp, $alamat, $pilihan_pemandu_id, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Data berhasil diupdate";
        echo "Data berhasil diupdate. <a href='pesananku.php'>Kembali ke Data Pesanan</a>";
    } else {
        echo "Tidak ada perubahan atau terjadi kesalahan";
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "Permintaan tidak valid";
}
?>
