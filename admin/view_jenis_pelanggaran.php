<?php include "template/top.php"; ?>

    <!-- Content -->
    <main>
      <div class="container mt-4">
        <div class="head-dt pb-2">
          <h5>Jenis Pelanggaran</h5>
          <a href="tambah_jenis_pelanggaran.php" class="btn btn-warning df">Tambah Data</a>
        </div>
        <div class="datatable">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Jenis Pelanggaran</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
              <?php
                $no = 1;
                $result = mysqli_query($mysqli, "SELECT * FROM tb_jenis_pelanggaran");
                while($data = mysqli_fetch_array($result)) { 
              ?>
              <tr>
                <td><center><?php echo $no; ?>.</td>
                <td><?php echo $data['jenis_pelanggaran']; ?></td>
                <td>
                  <a href="hapus_jenis_pelanggaran.php?id=<?php echo $data['id']; ?>" class="btn btn-danger mb-1" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Ini?');">Hapus</a>
                </td>
              </tr>
              <?php $no++; } ?>

            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Jenis Pelanggaran</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </main>
  </div>


<?php include "template/bottom.php"; ?>