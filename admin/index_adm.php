<?php
   include 'layout/header.php';
?>

 <div class="container">

 <?php

    include '../koneksi/koneksi.php';

    $buku = mysqli_query($koneksi, "SELECT * FROM buku");
    $kategoribuku = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
    $user = mysqli_query($koneksi, "SELECT * FROM user");
    $pinjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");

    $b = mysqli_num_rows($buku);
    $k = mysqli_num_rows($kategoribuku);
    $u = mysqli_num_rows($user);
    $u = mysqli_num_rows($pinjaman);
   ?>
    <div class="row  my-3">
    <div class="col-sm-3">
       <div class="card">
           <div class="card-body text-black bg-secondary-subtle text-center">
            <h2>Data Buku</h2>
            <h1><b><?php echo $b;?></b></h1>
            </div>
            <a href="buku.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
         </div>
       </div>
    <div class="col-sm-3">
       <div class="card">
           <div class="card-body text-black bg-secondary-subtle text-center">
            <h2>Kategori Buku</h2>
            <h1><b><?php echo $k;?></b></h1>
            </div>
            <a href="kategori.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
         </div>
       </div>
       <div class="col-sm-3">
       <div class="card">
           <div class="card-body text-black bg-secondary-subtle text-center ">
            <h2>Data Anggota</h2>
            <h1><b><?php echo $u;?></b></h1>
           </div>
           <a href="anggota.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
         </div>
       </div>
       <div class="col-sm-3">
       <div class="card">
           <div class="card-body text-black bg-secondary-subtle text-center">
            <h2>Laporan</h2>
            <h1><b><?php echo $u;?></b></h1>
          </div>
          <a href="pinjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
         </div>
   </div>
   </div>
   <div class="row">
    <div class="col-sm-6" style="margin-top: 5rem">
      <h2>SELAMAT DATANG</h2>
      <h3>Di Halaman Admin</h3>
      <samp>"Buku Adalah Jembatan Ilmu."</samp>
    </div>
    <div class="col-sm-1">
      <img src="../assets/img/lgn-removebg-preview.png" width="185" alt="">
    </div>
  </div>
</div>


<?php
  include 'layout/footer.php';
?>