<?php
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$id_user               = $_POST['id_user'];
$id_buku               = $_POST['id_buku'];
$nama_peminjam         = $_POST['nama_peminjam'];
$tanggal_peminjaman    = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian  = $_POST['tanggal_pengembalian'];
$status_peminjaman     = $_POST['status_peminjaman'];

$cek_username = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_buku = '$id_buku'");
if (mysqli_num_rows($cek_username) > 0) {
    echo "<script>alert('Buku sudah ada!'); window.location='../koleksi.php';</script>";
    exit;
}
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into peminjaman(id_user,id_buku,nama_peminjam,tanggal_peminjaman,tanggal_pengembalian,status_peminjaman)
                      values('$id_user','$id_buku','$nama_peminjam','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman')");
 
// mengalihkan halaman kembali ke index.php
header("location:../koleksi.php");
 
?>