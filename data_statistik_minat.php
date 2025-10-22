<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Panggil koneksi.php
include 'koneksi.php';

// Pastikan variabel koneksi dari koneksi.php bernama $koneksi
if (!$koneksi) {
    echo json_encode([
        'success' => false,
        'labels' => ['Otomasi', 'IoT', 'Robotika', 'AI', 'Embedded System'],
        'data' => [90, 85, 88, 75, 80],
        'message' => 'Koneksi database gagal, menggunakan data default'
    ]);
    exit();
}

// Query untuk mengambil data dari tabel statistik_minat
$sql = "SELECT bidang, presentase FROM statistik_minat ORDER BY id ASC";
$result = mysqli_query($koneksi, $sql);

$labels = [];
$data = [];

if ($result && mysqli_num_rows($result) > 0) {
    // Ambil data dari database
    while ($row = mysqli_fetch_assoc($result)) {
        $labels[] = $row['bidang'];
        $data[] = (float)$row['presentase'];
    }

    echo json_encode([
        'success' => true,
        'labels' => $labels,
        'data' => $data,
        'message' => 'Data berhasil diambil dari database'
    ]);
} else {
    // Jika tidak ada data di database
    echo json_encode([
        'success' => false,
        'labels' => ['Otomasi', 'IoT', 'Robotika', 'AI', 'Embedded System'],
        'data' => [90, 85, 88, 75, 80],
        'message' => 'Tidak ada data di database, menggunakan data default'
    ]);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
