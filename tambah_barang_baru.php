<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Barang Baru</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Barang Baru</h2>
        <form action="proses_tambah_barang.php" method="post">
            <div class="form-group">
                <label for="kode_barang">Kode Barang:</label>
                <input type="text" id="kode_barang" name="kode_barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang:</label>
                <input type="text" id="nama_barang" name="nama_barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga_jual">Harga Jual:</label>
                <input type="number" step="0.01" id="harga_jual" name="harga_jual" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga_beli">Harga Beli:</label>
                <input type="number" step="0.01" id="harga_beli" name="harga_beli" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="satuan">Satuan:</label>
                <input type="text" id="satuan" name="satuan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <input type="text" id="kategori" name="kategori" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Barang</button>
        </form>
        <br>
        <a href="master_barang.php" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>