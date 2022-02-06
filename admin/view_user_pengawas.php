<?php include "template/top.php"; ?>
    
    <!-- Content -->
    <main>
      <div class="container mt-4">
        <div class="head-dt pb-2">
          <h5>Kelola User Pengawas</h5>
          <a href="tambah_user_pengawas.php" class="btn btn-warning df">Tambah Data</a>
        </div>
        <div class="datatable">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>

              <?php
                $no = 1;
                $result = mysqli_query($mysqli, "SELECT * FROM tb_user WHERE hak_akses = 'PENGAWAS'");
                while($data = mysqli_fetch_array($result)) { 
              ?>

              <tr>
                <td><center><?php echo $no; ?>.</td>
                <td><?php echo $data['nama_lengkap']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td>
                  <a href="hapus_user_pengawas.php?id=<?php echo $data['id']; ?>" class="btn btn-danger mb-1" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Ini?');">Hapus</a>
                  <a href="edit_user_pengawas.php?id=<?php echo $data['id']; ?>" class="btn btn-warning mb-1 text-white">Edit</a>
                </td>
              </tr>


              <?php $no++; } ?>


            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>


    </main>
  </div>



<?php include "template/bottom.php"; ?>