<?php
include 'koneksi.php';
$conn = $koneksi;

// Validasi input
if (empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['pesan'])) {
    header("Location: index.php?status=error&message=Semua field harus diisi");
    exit();
}

// Sanitize dan ambil data dari form
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pesan = mysqli_real_escape_string($conn, $_POST['pesan']);

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?status=error&message=Format email tidak valid");
    exit();
}

// Query simpan data menggunakan prepared statement (LEBIH AMAN)
$sql = "INSERT INTO contact (nama, email, pesan) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sss", $nama, $email, $pesan);
    
    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php?status=success");
        exit();
    } else {
        header("Location: index.php?status=error&message=Gagal menyimpan data");
        exit();
    }
    
    mysqli_stmt_close($stmt);
} else {
    header("Location: index.php?status=error&message=Gagal mempersiapkan query");
    exit();
}

// Tutup koneksi
mysqli_close($conn);
?>

