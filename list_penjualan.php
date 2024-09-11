<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_penjualan");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Query untuk mengambil semua data penjualan
$query_penjualan = "SELECT * FROM penjualan";
$result_penjualan = mysqli_query($koneksi, $query_penjualan);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>List Penjualan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>List Penjualan</h2>
        <a href="penjualan.php" class="btn btn-primary mb-3">Input Penjualan Baru</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Faktur</th>
                    <th>No Faktur</th>
                    <th>Nama Konsumen</th>
                    <th>Kode Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Harga Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_assoc($result_penjualan)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['tgl_faktur'] . "</td>";
                    echo "<td>" . $row['no_faktur'] . "</td>";
                    echo "<td>" . $row['nama_konsumen'] . "</td>";
                    echo "<td>" . $row['kode_barang'] . "</td>";
                    echo "<td>" . $row['jumlah'] . "</td>";
                    echo "<td>Rp " . number_format($row['harga_satuan'], 0, ',', '.') . "</td>";
                    echo "<td>Rp " . number_format($row['harga_total'], 0, ',', '.') . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="dashboard.php" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
// Menutup koneksi database
mysqli_close($koneksi);
?>