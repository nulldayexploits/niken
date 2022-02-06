<?php include "template/top.php"; ?>
    
    <!-- Content -->
    <main>
      <div class="container mt-4">
        <div class="head-dt pb-2">
          <h5>Proses Laporan</h5>
        </div>
        <div class="datatable">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Peristiwa</th>
                <th>Tanggal Dan Waktu</th>
                <th>Pelapor</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
              <?php
                $no = 1;
                $result = mysqli_query($mysqli, "SELECT * FROM tb_laporan WHERE status = 'BELUM DIPROSES'");
                while($data = mysqli_fetch_array($result)) { 
              ?>
              <tr>
                <td><center><?php echo $no; ?>.</td>
                <td><?php echo $data['peristiwa']; ?></td>
                <td><?php echo $data['hari_tgl']; ?> Jam <?php echo $data['waktu']; ?></td>
                <td><?php echo $data['nama']; ?><br>No Identitas: <?php echo $data['nomor_identitas']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td>
                  <a href="proses_laporan.php?id=<?php echo $data['id']; ?>" class="btn btn-danger mb-1" onclick="return confirm('Apakah Anda Yakin Memproses Laporan Ini?');">Diproses</a>
                </td>
              </tr>
              <?php $no++; } ?>

            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Peristiwa</th>
                <th>Tanggal Dan Waktu</th>
                <th>Pelapor</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

      
    </main>
  </div>

  

<?php include "template/bottom.php"; ?>