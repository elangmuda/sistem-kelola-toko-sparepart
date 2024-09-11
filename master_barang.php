<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pengelolaan Master Barang</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-4">Data Master Barang</h2>
        <a href="tambah_barang_baru.php" class="btn btn-primary mb-3">Tambah Barang Baru</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Satuan</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $koneksi = mysqli_connect("localhost", "root", "", "db_penjualan");
                $query = "SELECT * FROM master_barang";
                $result = mysqli_query($koneksi, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['kode_barang'] . "</td>";
                    echo "<td>" . $row['nama_barang'] . "</td>";
                    echo "<td>" . $row['harga_jual'] . "</td>";
                    echo "<td>" . $row['harga_beli'] . "</td>";
                    echo "<td>" . $row['satuan'] . "</td>";
                    echo "<td>" . $row['kategori'] . "</td>";
                    echo "<td>
                            <a href='edit_barang.php?kode_barang=" . $row['kode_barang'] . "' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='delete_barang.php?kode_barang=" . $row['kode_barang'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus barang ini?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
                mysqli_close($koneksi);
                ?>
            </tbody>
        </table>
        <a href="dashboard.php" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>