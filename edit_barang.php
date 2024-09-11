<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_penjualan");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Ambil data barang berdasarkan kode_barang
$kode_barang = $_GET['kode_barang'];
$query = "SELECT * FROM master_barang WHERE kode_barang = '$kode_barang'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Barang</h2>
        <form action="proses_edit_barang.php" method="post">
            <div class="form-group">
                <label for="kode_barang">Kode Barang:</label>
                <input type="text" id="kode_barang" name="kode_barang" class="form-control"
                    value="<?php echo $row['kode_barang']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" id="nama_barang" name="nama_barang" class="form-control"
                    value="<?php echo $row['nama_barang']; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga_jual">Harga Jual:</label>
                <input type="number" step="0.01" id="harga_jual" name="harga_jual" class="form-control"
                    value="<?php echo $row['harga_jual']; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga_beli">Harga Beli:</label>
                <input type="number" step="0.01" id="harga_beli" name="harga_beli" class="form-control"
                    value="<?php echo $row['harga_beli']; ?>" required>
            </div>
            <div class="form-group">
                <label for="satuan">Satuan:</label>
                <input type="text" id="satuan" name="satuan" class="form-control" value="<?php echo $row['satuan']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <input type="text" id="kategori" name="kategori" class="form-control"
                    value="<?php echo $row['kategori']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Barang</button>
        </form>
        <br>
        <a href="master_barang.php" class="btn btn-secondary">Kembali ke Pengelolaan Barang</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php
mysqli_close($koneksi);
?>