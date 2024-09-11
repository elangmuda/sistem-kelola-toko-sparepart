<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Penjualan Sparepart</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Form Penjualan Sparepart</h2>
        <form action="proses_penjualan.php" method="post">
            <div class="form-group">
                <label for="tgl_faktur">Tanggal Faktur:</label>
                <input type="date" id="tgl_faktur" name="tgl_faktur" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="no_faktur">Nomor Faktur:</label>
                <input type="text" id="no_faktur" name="no_faktur" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_konsumen">Nama Konsumen:</label>
                <input type="text" id="nama_konsumen" name="nama_konsumen" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kode_barang">Kode Barang:</label>
                <input type="text" id="kode_barang" name="kode_barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" id="jumlah" name="jumlah" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga_satuan">Harga Satuan:</label>
                <input type="number" step="0.01" id="harga_satuan" name="harga_satuan" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Proses Penjualan</button>
        </form>

        <body>
            <br>
            <a href="list_penjualan.php" class="btn btn-primary">Lihat List Penjualan</a>
            <a href="index.php" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>