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

// Fungsi hapus data pesanan
if (isset($_GET['action']) && $_GET['action'] == 'hapus' && isset($_GET['id'])) {
    $id_pesanan_hapus = $_GET['id'];

    // Query hapus data pesanan
    $sql_hapus = "DELETE FROM pesanan WHERE id = ?";
    $stmt_hapus = $conn->prepare($sql_hapus);
    $stmt_hapus->bind_param("i", $id_pesanan_hapus);

    if ($stmt_hapus->execute()) {
        echo "Data pesanan berhasil dihapus.";
    } else {
        echo "Error: " . $stmt_hapus->error;
    }

    $stmt_hapus->close();
}




// Query untuk menampilkan data pesanan dan nama pemandu
$sql = "SELECT pesanan.id, pesanan.nama, pesanan.no_telp, pesanan.alamat, pemandu.nama_pemandu AS nama_pemandu
        FROM pesanan
        JOIN pemandu ON pesanan.pilihan_pemandu_id = pemandu.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
 ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Pesanan</title>
        <style>
           <style>
    body {
        font-family: Arial, sans-serif;
    }

    h2 {
        color: #333;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    a {
        color: #007BFF;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    
</style>

        </style>
    </head>
    <body>

        <h2>Data Pesanan Anda</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Pemandu</th>
                <th>Aksi</th>
            </tr>

            <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['no_telp'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['nama_pemandu'] . "</td>";
                    echo '<td><a href="?action=hapus&id=' . $row['id'] . '">Hapus</a> | <a href="edit_pesanan.php?id=' . $row['id'] . '">Edit</a></td>';
                    echo "</tr>";
                }
            ?>

        </table>

    </body>
    </html>

    <?php
} else {
    echo "Tidak ada data pesanan";
}

// Tutup koneksi
$conn->close();
?>
