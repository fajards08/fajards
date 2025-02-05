<?php 

// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$id_kategori      = $_POST['id_kategori'];
$judul      = $_POST['judul'];
$penulis    = $_POST['penulis'];
$foto       = $_FILES['foto']['name'];
$foto_tmp       = $_FILES['foto']['tmp_name'];
$buku       = $_FILES['buku']['name'];
$file_tmp   = $_FILES['buku']['tmp_name'];
$ekstensi_diperbolehkan = array('pdf');
$penerbit   = $_POST['penerbit'];
$tahun_terbit= $_POST['tahun_terbit'];
$deskripsi = $_POST['deskripsi'];
 
// menginput data ke database
move_uploaded_file($foto_tmp, '../../petugas/asset/sampul/' .$foto);
move_uploaded_file($file_tmp, '../../petugas/asset/buku/' .$buku);
$sql = "INSERT into buku values('', '$id_kategori', '$judul','$penulis','$foto','$buku', '$penerbit', '$tahun_terbit','$deskripsi')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("location:../buku.php");
}else{
    echo"
    <script> alert('Data Gagal Tambah');
    </script>";
    header("location:../buku.php");
}

?>