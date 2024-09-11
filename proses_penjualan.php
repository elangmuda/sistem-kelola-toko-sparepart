<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_penjualan");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Ambil data dari form penjualan
$tgl_faktur = $_POST['tgl_faktur'];
$no_faktur = $_POST['no_faktur'];
$nama_konsumen = $_POST['nama_konsumen'];
$kode_barang = $_POST['kode_barang'];
$jumlah = $_POST['jumlah'];
$harga_satuan = $_POST['harga_satuan'];

// Query untuk mengambil data barang berdasarkan kode_barang
$query_barang = "SELECT * FROM master_barang WHERE kode_barang = '$kode_barang'";
$result_barang = mysqli_query($koneksi, $query_barang);

// Cek apakah barang ditemukan
if (mysqli_num_rows($result_barang) > 0) {
    // Hitung harga total
    $harga_total = $jumlah * $harga_satuan;

    // Masukkan data penjualan ke tabel penjualan
    $query_penjualan = "INSERT INTO penjualan (tgl_faktur, no_faktur, nama_konsumen, kode_barang, jumlah, harga_satuan, harga_total) 
                        VALUES ('$tgl_faktur', '$no_faktur', '$nama_konsumen', '$kode_barang', $jumlah, $harga_satuan, $harga_total)";
    $hasil = mysqli_query($koneksi, $query_penjualan);

    if ($hasil) {
        mysqli_close($koneksi);
        echo "Transaksi penjualan berhasil dicatat.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Barang dengan kode '$kode_barang' tidak ditemukan.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Proses Penjualan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <?php if (isset($hasil) && $hasil): ?>
        <div class="alert alert-success" role="alert">
            Transaksi penjualan berhasil dicatat.
        </div>
        <?php elseif (isset($hasil) && !$hasil): ?>
        <div class="alert alert-danger" role="alert">
            Error:
            <?php echo mysqli_error($koneksi); ?>
        </div>
        <?php endif; ?>
        <a href="penjualan.php" class="btn btn-primary">Input Penjualan Lagi</a>
        <a href="dashboard.php" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>