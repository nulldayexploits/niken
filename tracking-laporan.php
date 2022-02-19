<?php include "template/top.php"; ?>


<form action="" method="POST" enctype="multipart/form-data">
   <!-- Content -->
    <main>
      <div class="container mt-4">
        <div class="form">
          <h5 id="lap-kec" class="mt-4 mb-3">Tracking Laporan</h5>
          
          <div class="mb-3">
            <input type="text" class="form-control" name="nomor_identitas" placeholder="Nomor Identitas">
          </div>
          <button type="submit" name="Submit" class="btn btn-danger login">CEK</button>
          <!-- <button type="button" class="btn btn-danger" id="btn-clear-cache">clear chace</button> -->
        </div>
      </div>

</form>




<?php 

include 'admin/config/connect-db.php';
include 'admin/config/base-url.php';

// Keadeaan Ketika Di Submit atau mengirim data
if(isset($_POST['Submit'])) {

  // Memasukkan Data Inputan ke Varibael
  $nomor_identitas  = $_POST['nomor_identitas'];


?>

    <div class="datatable">
      <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Peristiwa</th>
                <th>Tanggal Dan Waktu</th>
                <th>Pelapor</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              
              <?php
                $no = 1;
                $result = mysqli_query($mysqli, "SELECT * FROM tb_laporan WHERE nomor_identitas = '$nomor_identitas'");
                while($data = mysqli_fetch_array($result)) { 
              ?>
              <tr>
                <td><center><?php echo $no; ?>.</td>
                <td><?php echo $data['peristiwa']; ?></td>
                <td><?php echo $data['hari_tgl']; ?> Jam <?php echo $data['waktu']; ?></td>
                <td><?php echo $data['nama']; ?><br>No Identitas: <b><?php echo $data['nomor_identitas']; ?></b><br>Asal Laporan: <?php echo $data['asal_laporan']; ?></td>
                <td><?php echo $data['status']; ?></td>
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
              </tr>
            </tfoot>
          </table>
        </div>

    </main>
  </div>
<?php } ?>


<?php include "template/bottom.php"; ?>


