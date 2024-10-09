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

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data pesanan berdasarkan ID
    $sql = "SELECT * FROM pesanan WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <title>Edit Pesanan</title>
</head>
<body>
    <h2 class="text text-center">Edit Pesanan Anda</h2>
    <form action="proses_edit_pesanan.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>

        <label for="no_telp">Nomor Telepon:</label>
        <input type="text" name="no_telp" value="<?php echo $row['no_telp']; ?>" required><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" rows="4" required><?php echo $row['alamat']; ?></textarea><br>

        <label for="pilihan_pemandu">Pemandu:</label>
        <select name="pilihan_pemandu" required>
            <option value="Sugeng Tinju" <?php echo ($row['pilihan_pemandu_id'] == 1) ? 'selected' : ''; ?>>Sugeng Tinju</option>
            <option value="Kak Gem" <?php echo ($row['pilihan_pemandu_id'] == 2) ? 'selected' : ''; ?>>Kak Gem</option>
            <option value="Kamso Matol" <?php echo ($row['pilihan_pemandu_id'] == 3) ? 'selected' : ''; ?>>Kamso Mantol</option>
        </select><br>

        <input type="submit" value="Simpan">
    </form>

</body>
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
</html>

<?php
    } else {
        echo "Pesanan tidak ditemukan";
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "Permintaan tidak valid";
}
?>
