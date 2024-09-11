<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_penjualan");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Ambil data dari form tambah barang
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];

// Query untuk memasukkan data barang ke dalam tabel master_barang
$query_tambah_barang = "INSERT INTO master_barang (kode_barang, nama_barang, harga_jual, harga_beli, satuan, kategori) 
                        VALUES ('$kode_barang', '$nama_barang', $harga_jual, $harga_beli, '$satuan', '$kategori')";

// Eksekusi query
$hasil = mysqli_query($koneksi, $query_tambah_barang);

// Menutup koneksi database
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Proses Tambah Barang</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <?php if ($hasil): ?>
        <div class="alert alert-success" role="alert">
            Data barang berhasil ditambahkan.
        </div>
        <?php else: ?>
        <div class="alert alert-danger" role="alert">
            Error:
            <?php echo mysqli_error($koneksi); ?>
        </div>
        <?php endif; ?>
        <a href="master_barang.php" class="btn btn-primary">Kembali ke Pengelolaan Barang</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>