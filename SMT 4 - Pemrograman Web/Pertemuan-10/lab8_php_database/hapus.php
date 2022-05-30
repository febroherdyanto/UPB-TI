<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);

echo "<script>alert('Data Berhasil Dihapus'); window.location.href = 'index.php'</script>";
?>