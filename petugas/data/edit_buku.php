<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

     <div  class="container">
        <div class="card" style="margin-top: 2rem;">
            <div class="row m-4">
                     <div class="col-sm-7">
                        <h3>From Edit Buku</h3>
                        <?php
                        include '../../koneksi/koneksi.php';
                        $id = $_GET['id_buku'];
                        $data = mysqli_query($koneksi,"SELECT * from buku where id_buku='$id'");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <a href="../buku.php" class="btn btn-danger my-2">Kembali</a>
                        <form action="e_buku.php" method="POST" enctype="multipart/form-data">
                       <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                          <input type="text" name="judul"value="<?php echo $d['judul'];?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                          <input type="text" name="penulis"value="<?php echo $d['penulis'];?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="row">
                          <div class="col">
                              <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                              <input type="text" name="penerbit"value="<?php echo $d['penerbit'];?>" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                         </div>
                      </div>
                      <div class="col">
                             <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                             <input type="text" name="tahun_terbit"value="<?php echo $d['tahun_terbit'];?>"class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                           </div>
                         </div>
                         <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Upload Sampul </label>
                                <input class="form-control" name="foto" type="file" id="formFileMultiple" multiple>
                         </div>
                         <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Upload Buku <span class="text-danger">*pdf</span></label> <br>
                                <input class="form-control" name="buku" type="file" id="formFileMultiple" multiple>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Perbarui</button>
                </form>
                <?php }?>
            </div>
        </div>
     </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>