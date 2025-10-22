<?php
// === KONEKSI KE MYSQL ===
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "porto_web";

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
