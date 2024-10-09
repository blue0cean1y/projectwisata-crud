<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pemesanan";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

function registerUser($conn, $email, $password) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
    $stmt->bind_param("ss", $email, $hashed_password,);
    $stmt->execute();
    $stmt->close();
}
