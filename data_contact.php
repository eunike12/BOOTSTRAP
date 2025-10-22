<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "porto_web");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil semua data dari tabel contact, urutkan dari yang terbaru
$result = mysqli_query($conn, "SELECT * FROM contact ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kontak Pengunjung</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>
        body {
            background-color: #f2f7ff;
        }
        .container {
            margin-top: 60px;
        }
        h2 {
            color: #007bff;
            font-weight: 600;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .btn-primary {
            border-radius: 30px;
            padding: 8px 20px;
        }
    </style>
</head>

<body>
<div class="container">
    <h2 class="text-center mb-4"><i class="fas fa-envelope"></i> Data Pesan dari Form Kontak</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead class="text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th width="20%">Nama</th>
                        <th width="25%">Email</th>
                        <th>Pesan</th>
                        <th width="20%">Waktu Kirim</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td class='text-center'>{$no}</td>
                                <td>" . htmlspecialchars($row['nama']) . "</td>
                                <td>" . htmlspecialchars($row['email']) . "</td>
                                <td>" . htmlspecialchars($row['pesan']) . "</td>
                                <td class='text-center'>" . date('d-m-Y H:i:s', strtotime($row['created_at'])) . "</td>
                              </tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center text-muted'>Belum ada pesan masuk.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-primary">
            <i class="fas fa-arrow-left"></i> Kembali ke Halaman Utama
        </a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php mysqli_close($conn); ?>

