<?php
   include 'layout/header.php';
?>

    <div class="container">
        <div class="row" style="margin-top: 1rem;">
            <h2>Data Peminjaman</h2>
            <div class="col">
                <table class="table my-3">
                    <thead class="table table-warning">
                        <tr>
                            <th scope="col">ID user</th>
                            <th scope="col">Nis</th>
                            <th scope="col">Nama user</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                include '../koneksi/koneksi.php';

                $data = mysqli_query($koneksi, "SELECT * FROM user");
                while ($d = mysqli_fetch_array($data)) {

               ?>
               <tbody>
                    <tr>
                        <th scope="row"><?= $d['id_user']; ?></th>
                        <td><?= $d['nis']; ?></td>
                        <td><?= $d['nama_lengkap']; ?></td>
                        <td>
                           <a href="data/detail_anggota.php?id_user=<?php echo $d['id_user'];?>" class="btn btn-warning text-white">Detail</a>

                        </td>
                    </tr>
               </tbody>
               <?php
                }
               ?>
                </table>
            </div>
        </div>
    </div>