<?php
include 'koneksi.php';

//Query untuk menampilkan data dari database

$sql = "select * from data_barang";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
<br>
<div class="container">
    <?php include 'header.php'; ?>
    <hr>
    <div class="row">
        <div class="col col-sm-12">
            <a href="tambah.php" style="text-decoration: none;"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button></a> <br><br>
            <table class="table table-responsive table-striped table-bordered">
                <thead class="text-center">
                    <th width="20%">Gambar</th>
                    <th width="20%">Nama Barang</th>
                    <th width="15%">Kategori</th>
                    <th width="10%">Harga Beli</th>
                    <th width="10%">Harga Jual</th>
                    <th width="10%">Stok</th>
                    <th width="20%">Aksi</th>
                </thead>
                <tbody>
                    <?php
                        if($result):
                            while($row = mysqli_fetch_array($result)):
                    ?>
                    <tr>
                        <td><img src="gambar/<?= $row['gambar']; ?>" class="rounded mx-auto d-block" width="100px" height="80px"></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['kategori']; ?></td>
                        <td class="text-center"><?= $row['harga_beli']; ?></td>
                        <td class="text-center"><?= $row['harga_jual']; ?></td>
                        <td class="text-center"><?= $row['stok']; ?></td>
                        <td class="text-center"><a href="ubah.php?id=<?= $row['id_barang']; ?>" style="text-decoration: none;"><i class="fa fa-edit"></i> Ubah</a> | 
                        <a href="hapus.php?id=<?= $row['id_barang']; ?>" style="text-decoration: none;"><i class="fa fa-trash"></i> Hapus</a></td>
                    </tr>
                    <?php endwhile; else: ?>
                    <tr>
                        <td colspan="7">Tidak ada data</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div> <!-- end of Container -->

</body>
</html>