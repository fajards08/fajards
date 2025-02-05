<?php
session_start();
$SQL =  (isset($_SESSION["id_user"]) && $_SESSION["id_user"]);
include 'layout/header.php';
?>
<div class="container">
  <div class="row" style="margin-top: 5rem;">
    <div class="col-sm-7" style="margin-top: 5rem;">
      <h3>SELAMAT DATANG</h3>
      <h5>di Halaman Perpustakaan SMK MW9</h5>
      <samp>"Buku Adalah Jembatan Ilmu."</samp>
    </div>
    <div class="col-sm-5">
      <img src="../assets/img/pngtree-opened-book-png-image_4769229-removebg-preview.png" width="250" alt="">
    </div>
  </div>
</div>


<?php
include 'layout/footer.php';
?>